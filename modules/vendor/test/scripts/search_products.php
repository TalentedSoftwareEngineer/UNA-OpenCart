<link rel="stylesheet" href="modules/vendor/test/template/css/style.css">
<link rel="stylesheet" href="modules/vendor/test/template/font-awesome/css/font-awesome.min.css">
<link rel ="stylesheet" href="modules/vendor/test/template/bootstrap/bootstrap.min.css">

<style></style>
<?php  
    require_once 'modules/vendor/test/api/opencart_api.php';    

    $basename = basename(BX_DIRECTORY_PATH_MODULES . '/test');

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
                $visitedUser = (array) OpenApiIntegration::getInstance()->getSysUserByProfileId($visitedUser_id_proId['param_value'])[0];
            } elseif($visitedUser_id_proId['param_name'] == 'id') {
                $isSelf = $loggedId == $visitedUser_id_proId['param_value'];
                $visitedUser = (array) OpenApiIntegration::getInstance()->getSysUserById($visitedUser_id_proId['param_value'])[0];
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
            <input type="text" class="input_search_product form-control" placeholder="Search...">
            <div class="input-group-append">
                <button onclick="onClickAddToBlock(event)" class="btn btn-outline-primary" type="button">Add</button>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="products_in_block row mt-4 justify-content-center"></div>

<script type="text/javascript">
    var BASIC_OPEN_CART_SERVER_API = 'http://localhost/UNA-v.13.0.0-RC2/store/index.php?';
    var blockProducts = Array(0).fill(Array(0));

    function onClickAddToBlock(event) {
        var elmnt_block = $(event.target).parents('.bx-page-block-container')[0];
        var block_id = $(elmnt_block).attr('id').replace('bx-page-block-', '');
        var filterId = $($(elmnt_block).find('.input_search_product')[0]).val();

        if(filterId == '') {
            alert('Please Enter Keyword...');
        } else if(!/^\d+$/.test(filterId)) {
            alert('Please Enter Valid Keyword...');
        } else {
            $.fn.getFilteredBlockProductById(filterId, block_id);
        }
    }

    $.fn.createProductCard = function(productInfo, elmnt_pdt_in_block) {
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

        $(elmnt_pdt_in_block).append(cell);
    }

    $.fn.displayBlockProduct = function(products, elmnt_pdt_in_block) {
        $(elmnt_pdt_in_block).empty();
        products.forEach(function(item) {
            $.fn.createProductCard(item, elmnt_pdt_in_block);
        });
    }

    $.fn.getFilteredBlockProductById = function(filterId, block_id) {
        $.ajax({
            type: 'post',
            url: BASIC_OPEN_CART_SERVER_API + 'route=api/product/getFilteredBlockProductById',
            data: {
                email: '<?= $loggedUser['email'] ?>',
                product_id: Number(filterId)
            },
            success: function(response) {
                if(response) {
                    $.fn.saveProductToBlock(response.product_id, block_id);
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

    $.fn.saveProductToBlock = function(product_id, block_id) {
        $.ajax({
            type: 'post',
            url: BASIC_OPEN_CART_SERVER_API + 'route=api/product/saveProductToBlock',
            data: {
                product: {product_id: product_id, owner: '<?= $loggedUser['email'] ?>'},
                block_id: block_id
            },
            success: function(response) {
                if(response) {
                    $.fn.draw();
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

    $.fn.draw = function() {
        $('.bx-page-block-container').each(function(index, item){
            if($(item).find('.products_in_block').length!==0) {
                block_id = $(item).attr('id').replace('bx-page-block-', '');
                $.ajax({
                    type: 'post',
                    url: BASIC_OPEN_CART_SERVER_API + 'route=api/product/getProductsInBlock',
                    data: {
                        owner: '<?= $visitedUser['email'] ?>',
                        block_id: block_id
                    },
                    success: function(response) {
                        var elmnt_pdt_in_block = $(item).find('.products_in_block')[0];
                        $.fn.displayBlockProduct(response, elmnt_pdt_in_block);
                    },
                    fail: function(fail){
                        console.log(fail);
                    },
                    error: function(error, ajaxOptions, thrownError) {
                        console.log(error);
                    }
                });
            }
        });
    }

    $.fn.draw();

</script>
