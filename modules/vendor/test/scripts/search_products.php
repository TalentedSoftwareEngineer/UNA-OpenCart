<link rel="stylesheet" href="modules/vendor/test/template/css/style.css">
<link rel="stylesheet" href="modules/vendor/test/template/font-awesome/css/font-awesome.min.css">
<link rel ="stylesheet" href="modules/vendor/test/template/bootstrap/bootstrap.min.css">

<style></style>
<?php  
    require_once 'modules/vendor/test/api/opencart_api.php';
    $products = ( array ) OpenApiIntegration::getInstance()->getAllProducts();
    $apiToken = OpenApiIntegration::getInstance()->getApiToken();
    function convertToArray($value) {return ( array ) $value;}
    $arr_products = array_map('convertToArray', $products['products']);
    $arr_empty = [];
    
    $loggedProfileId = bx_get_logged_profile_id();
    if($loggedProfileId) {
        $oProfile = BxDolProfile::getInstance($loggedProfileId);
        $loggedUsername = $oProfile->getDisplayName($loggedProfileId);
        $storeUsername = explode('/', $_SERVER['REQUEST_URI'])[3];
        $storeUsername = str_replace('-', ' ', $storeUsername);
        $isStoreAuth = strtoupper($loggedUsername) == strtoupper($storeUsername);
    }
?>

<?php if($isStoreAuth) : ?>
    <div class="d-flex justify-content-between">
        <div class="input-group w-auto">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-plus"></i></span>
            </div>
            <!-- <input id="product_id" type="text" class="form-control" placeholder="Search..."> -->
            <select class="form-control" id="product_id">
                <?php foreach($arr_products as $key=>$value): ?>
                    <option value="<?php echo implode(" *+* ", $value) ?>">
                        <?= $value['name']?>
                    </option>
                <?php endforeach; ?>
            </select>
            <div class="input-group-append">
                <button id="add_cart_id" class="btn btn-outline-primary" type="button"><i class="fa fa-shopping-cart mr-1"></i>Add to Cart</button>
            </div>
        </div>

        <a href="http://localhost/UNA-v.13.0.0-RC2/upload-product" class="btn btn-outline-primary"><i class="fa fa-plus mr-1"></i>Add Product</a>        
    </div>
    <!-- <div class="d-flex justify-content-center mt-2">
        <button id="add_cart_id" class="btn btn-success w-50" type="button"><i class="fa fa-shopping-cart mr-1"></i>Add to Cart</button>
    </div> -->
<?php endif; ?>

<?php if (true) { ?>
    <div id="cart_products_container" class="row mt-4">
        <?php foreach($arr_empty as $key=>$value): ?>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                <div class="card">
                    <img class="card-img-top w-75 mx-auto" src=<?php echo $value['thumb']; ?> alt="Card image">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <strong><?= $value['name'] ?></strong>
                            </div>
                            <h6><?= $value['price'] ?></h6>
                        </div>
                        <p><a href=<?= $value['href'] ?>><?= $value['description'] ?></a></p>
                        <button class="btn btn-outline-primary btn-block"><i class="fa fa-shopping-cart"></i>Add to Cart</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php } ?>

<script type="text/javascript">
    var BASIC_OPEN_CART_SERVER_API = 'http://localhost/UNA-v.13.0.0-RC2/store/index.php?';

    $.fn.createProductCard = function(productInfo) {
        let name = $("<strong></strong>");
        name.text(productInfo.name);
        let price = $("<h6></h6>");
        price.text(productInfo.price);
        let namePriceContainer = $("<div></div>");
        namePriceContainer.addClass('d-flex justify-content-between');
        namePriceContainer.append(name);
        namePriceContainer.append(price);
        
        let descP = $("<p></p>");
        descP.css("height", "72px");
        descP.text(productInfo.description.substr(0, 100)+'..');

        let linkBtn = $("<a><i class='fa fa-link'></i>Detail</a>");
        linkBtn.addClass('btn btn-outline-primary btn-block');
        linkBtn.attr("href", 'http://localhost/UNA-v.13.0.0-RC2/product-detail?productId='+productInfo.product_id);
        let linkCell = $("<div></div>");
        linkCell.addClass('col');
        linkCell.append(linkBtn);

        let deleteBtn = $("<button><i class='fa fa-trash'></i>Remove</button>");
        deleteBtn.addClass('btn btn-outline-primary btn-block');
        deleteBtn.on('click', function() {
            onClickRemoveProduct(event, productInfo);
        });
        let deleteCell = $("<div></div>");
        deleteCell.addClass('col');
        deleteCell.append(deleteBtn);

        let actionContainer = $("<div></div>");
        actionContainer.addClass('row');
        actionContainer.append(linkCell);
        if('<?= $isStoreAuth ?>') {
            actionContainer.append(deleteCell);
        }

        let cardBody = $("<div></div>");
        cardBody.addClass('card-body');
        cardBody.append(namePriceContainer);
        cardBody.append(descP);
        cardBody.append(actionContainer);

        var cardImg = $('<img>');
        cardImg.addClass('card-img-top w-75 mx-auto');
        cardImg.attr({
            'src': productInfo.thumb,
            'alt': "Card image"
        });

        var card = $("<div></div>");
        card.addClass('card');
        card.css("height", "400px");
        card.append(cardImg);
        card.append(cardBody);

        let cell = $("<div></div>");
        cell.addClass('col-lg-3 col-md-4 col-sm-6 mb-2');
        cell.append(card);

        $('#cart_products_container').append(cell);
    }

    onClickRemoveProduct = function(event, pro) {
        if (confirm("Are you sure to delete this product?") == true) {
            $.ajax({
                type: 'post',
                url: BASIC_OPEN_CART_SERVER_API + 'route=api/c_cart/remove',
                data: {
                    product_id: pro.product_id,
                    user: '<?= $loggedUsername ?>'.toUpperCase()
                },
                success: function(response){
                    $.fn.getCartProducts();
                },
                error: function(error, ajaxOptions, thrownError) {
                    debugger;
                }
            });
        }
    }

    $.fn.displayCart = function(products) {
        $('#cart_products_container').empty();
        var arr_tmp = [];
        products.forEach(item=> {
            var productInfo = JSON.parse(item.option)[208].split(' *+* ');
            var authName = JSON.parse(item.option)[209];
            if( authName == '<?= $storeUsername ?>'.toUpperCase() && !arr_tmp.includes(productInfo[0]) ) {
                $.fn.createProductCard({
                    product_id: productInfo[0],
                    thumb: productInfo[1],
                    name: productInfo[2],
                    description: productInfo[3],
                    price: productInfo[4],
                    special: productInfo[5],
                    tax: productInfo[6],
                    minimum: productInfo[7],
                    rating: productInfo[8],
                });
                arr_tmp.push(productInfo[0]);
            }
        });
    }

    $('#add_cart_id').on('click', function() {
        var product_properties = $('#product_id option:selected').val();
        var data = {
            product_id: product_properties.split(' *+* ')[0],
            quantuty:'1',
            option: {208: product_properties, 209: '<?= $loggedUsername ?>'.toUpperCase(), 217: 'null', 218: 'null', 219: 'null', 220: 'null', 221: 'null', 222: 'null', 223: 'null', 224: 'null', 225: 'null', 226: 'null'}
        }
        $.ajax({
            type: 'post',
            url: BASIC_OPEN_CART_SERVER_API + 'route=api/cart/add&api_token=<?php echo $apiToken ?>',
            data,
            success: function(response) {
                if(response.error?.store) alert(response.error.store);
                $.fn.getCartProducts();
            },
            fail: function(fail){
                console.log(fail);
            },
            error: function(error, ajaxOptions, thrownError) {
                console.log(error);
            }
        });
    });

    $.fn.getCartProducts = async function() {
        var url = BASIC_OPEN_CART_SERVER_API + 'route=api/c_cart';
        var params = {
            api_token: '<?php echo $apiToken ?>',
            customer_id: '0'
        };
        await $.get(url, params, function(response) {
            $.fn.displayCart(response);
        });
    }

    $.fn.getProductById = function(product_id) {
        $.ajax({
            type: 'post',
            url: BASIC_OPEN_CART_SERVER_API + 'route=api/product/getProductById&api_token=',
            data: {
                product_id: product_id
            },
            success: function(response){
                return response.products;
            },
            error: function(error, ajaxOptions, thrownError) {
                console.log(error.responseText);
            }
        });
    }

    $.fn.getCartProducts();
</script>
