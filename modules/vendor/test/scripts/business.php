<link rel="stylesheet" href="modules/vendor/test/template/css/style.css">
<link rel="stylesheet" href="modules/vendor/test/template/font-awesome/css/font-awesome.min.css">
<link rel ="stylesheet" href="modules/vendor/test/template/bootstrap/bootstrap.min.css">

<script src="modules/vendor/test/template/bootstrap/popper.min.js"></script>
<script src="modules/vendor/test/template/bootstrap/bootstrap.bundle.min.js"></script>

<?php
    require_once 'modules/vendor/test/api/opencart_api.php';
    $arr_my_products = array();
    $loggedProfileId = bx_get_logged_profile_id();
    if($loggedProfileId) {
        $loggedUser = (array) OpenApiIntegration::getInstance()->getSysUserByProfileId($loggedProfileId)[0];

        $my_products = (array) OpenApiIntegration::getInstance()->getSelfProduct($loggedUser['email'], '');
        $arr_my_products = array_map(function($value){return (array) $value;}, $my_products);
        // print_r($arr_my_products);
    }
?>

<div class="d-flex justify-content-end">
    <div class="input-group w-auto">
        <input id="product_search" type="text" class="form-control" placeholder="Search...">
        <div class="input-group-append">
            <button id="btn_search" class="btn btn-outline-primary" type="button" onclick="onProductSearch(event)"><i class="fa fa-search"></i></button>
        </div>
    </div>
</div>

<div id="products_container" class="row mt-4 justify-content-center"></div>

<script type="text/javascript">
    var BASIC_OPEN_CART_SERVER_API = 'http://localhost/UNA-v.13.0.0-RC2/store/index.php?';

    function onProductSearch(event)
    {
        $.fn.getSelfProduct('<?= $loggedUser['email'] ?>', $('#product_search').val());
    }

    function onClickAdd(event, productInfo)
    {
        $.ajax({
            type: 'post',
            url: BASIC_OPEN_CART_SERVER_API + "route=api/product/viewProduct",
            data: {
                product_id: productInfo.product_id
            },
            success: function(response){
                if(response)
                {
                    alert('Added product!');
                }
            },
            error: function(error, ajaxOptions, thrownError) {
                
            }
        });
    }

    function onClickRemove(event, productInfo)
    {
        if (confirm("Are you sure to delete this product?") == true) {
            $.fn.remove_from_besiness(productInfo.product_id);
        }
    }
    
    $.fn.createSelfProductCard = function(productInfo) {
        let name = $("<strong></strong>");
        name.text(productInfo.name);
        let price = $("<h6></h6>");
        price.text(productInfo.price);
        let namePriceContainer = $("<div></div>");
        namePriceContainer.addClass('d-flex justify-content-between');
        namePriceContainer.append(name);
        namePriceContainer.append(price);
        
        let descP = $("<p></p>");
        // descP.css("height", "0px");
        descP.text(productInfo.description.substr(0, 100)+'..');

        let linkBtn = $("<button><i class='fa fa-plus'></i>Add</button>");
        linkBtn.addClass('btn btn-outline-primary btn-block');
        linkBtn.on('click', function() {
            onClickAdd(event, productInfo);
        });
        let linkCell = $("<div></div>");
        linkCell.addClass('col pl-1 pr-1');
        linkCell.append(linkBtn);

        let deleteBtn = $("<button><i class='fa fa-trash'></i>Remove</button>");
        deleteBtn.addClass('btn btn-outline-primary btn-block');
        deleteBtn.on('click', function() {
            onClickRemove(event, productInfo);
        });
        let deleteCell = $("<div></div>");
        deleteCell.addClass('col pl-1 pr-1');
        deleteCell.append(deleteBtn);

        let actionContainer = $("<div></div>");
        actionContainer.addClass('row');
        actionContainer.append(linkCell);
        actionContainer.append(deleteCell);

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
        // card.css("height", "400px");
        card.append(cardImg);
        card.append(cardBody);

        let cell = $("<div></div>");
        cell.addClass('col-md-4 col-sm-6 mb-2');
        cell.append(card);

        $('#products_container').append(cell);
    }

    $.fn.displaySelfProductCards = function(products) {
        $('#products_container').empty();
        products.forEach(item=> {$.fn.createSelfProductCard(item);});
    }

    $.fn.getSelfProduct = function(email, product_name) {
        $.ajax({
            type: 'post',
            url: BASIC_OPEN_CART_SERVER_API + "route=api/product/getSelfProduct",
            data: {
                email: email,
                product_name: product_name
            },
            success: function(response){
                $.fn.displaySelfProductCards(response);
            },
            error: function(error, ajaxOptions, thrownError) {
                $.fn.displaySelfProductCards([]);
                console.log(error.responseText);
            }
        });
    }

    $.fn.lts_product_delete = function(product_id) {
        $.ajax({
            type: 'post',
            url: BASIC_OPEN_CART_SERVER_API + "route=api/product/lts_product_delete",
            data: {
                product_id: product_id
            },
            success: function(response){
                $.fn.getSelfProduct('<?= $loggedUser['email'] ?>', $('#product_search').val());
            }
        });
    }

    $.fn.remove_from_besiness = function(product_id) {
        $.ajax({
            type: 'POST',
            url: BASIC_OPEN_CART_SERVER_API + "route=api/product/remove_from_besiness",
            data: {product_id: product_id},
            success: function(response) {
                if(response) {
                    alert('Remove Product!');
                }
            }
        });
    }

    $.fn.getSelfProduct('<?= $loggedUser['email'] ?>', '');
</script>