<link rel="stylesheet" href="modules/vendor/test/template/css/style.css">
<link rel="stylesheet" href="modules/vendor/test/template/font-awesome/css/font-awesome.min.css">
<link rel ="stylesheet" href="modules/vendor/test/template/bootstrap/bootstrap.min.css">

<style></style>
<?php  
    require_once 'modules/vendor/test/api/opencart_api.php';    
    $loggedProfileId = bx_get_logged_profile_id();
    $isSelf = false;
    if($loggedProfileId) {
        $oProfile = BxDolProfile::getInstance($loggedProfileId);
        $loggedId = $oProfile->getAccountId();
        $loggedUser = (array) OpenApiIntegration::getInstance()->getSysUserByProfileId($loggedProfileId)[0];
        $visitedUser = array('email'=>'');
        
        $explodedUri = explode('/', $_SERVER['REQUEST_URI']);
        if(count($explodedUri)>3)
        {
            $visitedUser_id_proId = (array) OpenApiIntegration::getInstance()->getSysAccountsIdProfileIdByUri($explodedUri[2], $explodedUri[3]);
            if($visitedUser_id_proId['param_name'] == 'profile_id') {
                $isSelf = $loggedProfileId == $visitedUser_id_proId['param_value'];
                if(!$isSelf) {
                    $visitedUser = (array) OpenApiIntegration::getInstance()->getSysUserByProfileId($visitedUser_id_proId['param_value'])[0];
                }
            } elseif($visitedUser_id_proId['param_name'] == 'id') {
                $isSelf = $loggedId == $visitedUser_id_proId['param_value'];
                if(!$isSelf) {
                    $visitedUser = (array) OpenApiIntegration::getInstance()->getSysUserById($visitedUser_id_proId['param_value'])[0];
                }
            }
        } else {
            $isSelf = false;
        }
    }
?>

<?php if($isSelf) : ?>
    <div class="d-flex justify-content-center">
        <div class="input-group w-75">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-plus"></i></span>
            </div>
            <input id="search_product_id" type="text" class="form-control" placeholder="Search...">
            <div class="input-group-append">
                <button onclick="onClickAddToBlock(event)" class="btn btn-outline-primary" type="button">Add</button>
            </div>
        </div>
    </div>
<?php endif; ?>

<div id="block_product_container" class="row mt-4 justify-content-center"></div>

<script type="text/javascript">
    var BASIC_OPEN_CART_SERVER_API = 'http://localhost/UNA-v.13.0.0-RC2/store/index.php?';
    var blockProducts = [];
    $.fn.createProductCard = function(productInfo) {
        let name = $("<strong></strong>");
        name.text(productInfo.name);
        let price = $("<h6></h6>");
        price.text(productInfo.price);
        let namePriceContainer = $("<div></div>");
        namePriceContainer.addClass('d-flex justify-content-between');
        namePriceContainer.append(name);
        namePriceContainer.append(price);
        
        let descP = $("<a></a>");
        descP.attr('href', productInfo.href.replace('&amp;', '&'));
        descP.text(productInfo.description.substr(0, 100)+'..');

        let cardBody = $("<div></div>");
        cardBody.addClass('card-body');
        cardBody.append(namePriceContainer);
        cardBody.append(descP);

        var cardImg = $('<img>');
        cardImg.addClass('card-img-top w-75 mx-auto');
        cardImg.attr({'src': productInfo.thumb, 'alt': "Card image"});

        var card = $("<div></div>");
        card.addClass('card');
        card.css("height", "330px");
        card.append(cardImg);
        card.append(cardBody);

        let cell = $("<div></div>");
        cell.addClass('col-lg-3 col-md-4 col-sm-6 mb-2');
        cell.append(card);

        $('#block_product_container').append(cell);
    }

    $.fn.displayBlockProduct = function(products) {
        $('#block_product_container').empty();
        products.forEach(item=> {
            $.fn.createProductCard(item);
        });
    }

    function onClickAddToBlock(event) {
        var filterId = $('#search_product_id').val();
        if(filterId == '') {
            alert('Please Enter Keyword...');
        } else if(!/^\d+$/.test(filterId)) {
            alert('Please Enter Valid Keyword...');
        } else {
            $.fn.getFilteredBlockProductById(filterId);
        }
    }

    $.fn.getFilteredBlockProductById = function(filterId) {
        $.ajax({
            type: 'post',
            url: BASIC_OPEN_CART_SERVER_API + 'route=api/product/getFilteredBlockProductById',
            data: {
                email: '<?= $loggedUser['email'] ?>',
                product_id: Number(filterId)
            },
            success: function(response) {
                if(response) {
                    blockProducts.push(response);
                    $.fn.displayBlockProduct(blockProducts);
                } else {
                    alert("There is not the product for this ID.");
                }
            },
            fail: function(fail){
                console.log(fail);
            },
            error: function(error, ajaxOptions, thrownError) {
                console.log(error);
            }
        });
    }

</script>
