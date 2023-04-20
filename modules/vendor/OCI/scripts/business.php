<link rel="stylesheet" href="modules/vendor/OCI/template/css/style.css">
<link rel="stylesheet" href="modules/vendor/OCI/template/font-awesome/css/font-awesome.min.css">
<link rel ="stylesheet" href="modules/vendor/OCI/template/bootstrap/bootstrap.min.css">

<script src="modules/vendor/OCI/template/bootstrap/popper.min.js"></script>
<script src="modules/vendor/OCI/template/bootstrap/bootstrap.bundle.min.js"></script>

<?php
    require_once 'modules/vendor/OCI/api/opencart_api.php';
    require_once 'modules/vendor/OCI/api/revive_api.php';

    $loggedProfileId = bx_get_logged_profile_id();
    $isSelf = true;
    $arr_my_products = array();
    if($loggedProfileId) {
        $oProfile = BxDolProfile::getInstance($loggedProfileId);
        $loggedId = $oProfile->getAccountId();
        $loggedUser = (array) OpenApiIntegration::getInstance()->getSysUserByProfileId($loggedProfileId)[0];
        $visitedUser = array('email'=>'');
        
        $my_products = (array) OpenApiIntegration::getInstance()->getSelfProduct($loggedUser['email'], '');
        $arr_my_products = array_map(function($value){return (array) $value;}, $my_products);
        
        $explodedUri = explode('/', strtok($_SERVER['REQUEST_URI'], '?'));
        if(count($explodedUri)>2)
        {
            $visitedUser_id_proId = (array) OpenApiIntegration::getInstance()->getSysAccountsIdProfileIdByUri($explodedUri[count($explodedUri)-2], $explodedUri[count($explodedUri)-1]);
            
            if(count($visitedUser_id_proId)>0) {
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
            }
            
        } else {
            $isSelf = true;
        }

        $rv_ids = (array) ReviveApiIntegration::getInstance()->getRvIds($loggedId);
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

<?php if($isSelf) : ?>
    <div id="products_container" class="row mt-4 justify-content-center"></div>
<?php endif; ?>

<?php if(!$isSelf) : ?>
    <div id="show_products_container" class="row mt-4 justify-content-center"></div>
<?php endif; ?>

<script type="text/javascript">
    var BASIC_OPEN_CART_ADMIN_SERVER_API = '<?= BASIC_OPEN_CART_ADMIN_SERVER_API ?>';
    var BASIC_OPEN_CART_SERVER_API = '<?= BASIC_OPEN_CART_SERVER_API ?>';
    var BASIC_REVIVE_URL = '<?= BASIC_REVIVE_URL ?>';

    function onClickProductImage(event, productInfo) {
        $.fn.uploadImageFile(productInfo);
    }

    function addBanner(productInfo, file) {
        let data = {
            filename: file.filename,
            filewidth: file.filewidth,
            fileheight: file.fileheight,
            url: productInfo.href.replace('account/vendor/lts_visit_product', 'product/product').replace('&amp;', '&'), 
            comments: productInfo.description,
            campaign_id: '<?= $rv_ids['campaign_id'] ?>',
            user_id: '<?= $rv_ids['user_id'] ?>',
            account_id: '<?= $rv_ids['rv_acc_id'] ?>',
            advertiser_account_id: '<?= $rv_ids['advertiser_account_id'] ?>',
            username: '<?= $loggedUser['name'] ?>',
            product_id: productInfo.product_id,
            product_name: productInfo.name
        }

        $.ajax({
            type: 'post',
            url: BASIC_OPEN_CART_SERVER_API + 'route=api/revive/addBanner',
            data: data,
            success: function(response) {
                console.log('tag', response);
                window.open(BASIC_REVIVE_URL + 'www/admin/banner-edit.php?clientid=<?= $rv_ids['client_id'] ?>&campaignid=<?= $rv_ids['campaign_id'] ?>&bannerid=' + response.bannerId, '_blank');
            },
            fail: function(fail){
                console.log('addBanner_fail', fail);
            },
            error: function(error, ajaxOptions, thrownError) {
                console.log('addBanner_error', error);
            }
        });
    }

    $.fn.uploadImageFile = function(productInfo) {
        var filePath = '<?= ROOTDIR ?>/store/image/cache' + productInfo.thumb.split('store/image/cache')[1];
        var fileName = filePath.split('/')[filePath.split('/').length - 1];
        var fileExt = fileName.split('.')[fileName.split('.').length - 1];

        $.ajax({
            url: BASIC_OPEN_CART_SERVER_API + 'route=api/revive/uploadBannerImage',
            method:"POST",
            data: {
                imagePath: filePath,
                imageName: fileName,
                imageExt: fileExt,
            },
            success: function(data)
            {
                addBanner(productInfo, data);
            },
            error: function(error, ajaxOptions, thrownError) {
                console.log('uploadImageFile', error);
            }
        });
    }

    function onProductSearch(event)
    {
        if('<?= !$isSelf ?>') {
            $.fn.getVisitedProducts('<?= $visitedUser['email'] ?>', $('#product_search').val());
        } else {
            $.fn.getSelfProduct('<?= $loggedUser['email'] ?>', $('#product_search').val());
        }
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
                    // alert('Added product!');
                    $('#btnShow_'+productInfo.product_id).css('display', 'none');
                    $('#btnHide_'+productInfo.product_id).css('display', 'block');
                }
            },
            error: function(error, ajaxOptions, thrownError) {
                
            }
        });
    }

    function onClickRemove(event, productInfo)
    {
        if (confirm("Are you sure to hide this product?") == true) {
            $.fn.remove_from_besiness(productInfo.product_id);
        }
    }

    function onClickAddToCart(event, productInfo)
    {
        var data = {
            product_id: productInfo.product_id,
            option: {208: JSON.stringify(productInfo), 209: '<?= $loggedUser['email'] ?>'.toUpperCase(), 217: 'null', 218: 'null', 219: 'null', 220: 'null', 221: 'null', 222: 'null', 223: 'null', 224: 'null', 225: 'null', 226: 'null'}
        }
        $.ajax({
            type: 'post',
            url: BASIC_OPEN_CART_SERVER_API + 'route=api/c_cart/add',
            data,
            success: function(response) {
                if(response.success) {
                    alert('Product added to cart successfully');
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

    function onClickBuyNow(event, productInfo)
    {
        var data = {
            product_id: productInfo.product_id,
            option: {208: JSON.stringify(productInfo), 209: '<?= $loggedUser['email'] ?>'.toUpperCase(), 217: 'null', 218: 'null', 219: 'null', 220: 'null', 221: 'null', 222: 'null', 223: 'null', 224: 'null', 225: 'null', 226: 'null'}
        }
        $.ajax({
            type: 'post',
            url: BASIC_OPEN_CART_SERVER_API + 'route=api/c_cart/add',
            data,
            success: function(response) {
                if(response.success) {
                    window.open(BASIC_OPEN_CART_SERVER_API + 'route=checkout/checkout', '_blank');
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
    
    $.fn.createSelfProductCard = function(productInfo) {
        let productId = $("<h5></h5>");
        productId.html('ID: ' + productInfo.product_id);

        let name = $("<strong></strong>");
        name.text(productInfo.name);
        let price = $("<h6></h6>");
        price.text(productInfo.price);
        let namePriceContainer = $("<div></div>");
        namePriceContainer.addClass('d-flex justify-content-between');
        namePriceContainer.append(productId);
        namePriceContainer.append(name);
        namePriceContainer.append(price);
        
        let descP = $("<p></p>");
        descP.css({"height": "70px", "overflow": "hidden"});
        descP.text(productInfo.description.substr(0, 100)+'..');

        let linkBtn = $("<button><i class='fa fa-plus'></i>Show</button>");
        linkBtn.addClass('btn btn-outline-primary btn-block');
        linkBtn.on('click', function() {
            onClickAdd(event, productInfo);
        });
        let linkCell = $("<div></div>");
        linkCell.attr('id', 'btnShow_' + productInfo.product_id);
        linkCell.addClass('col pl-1 pr-1');
        linkCell.css('display', 'block');
        linkCell.append(linkBtn);

        let deleteBtn = $("<button><i class='fa fa-trash'></i>Hide</button>");
        deleteBtn.addClass('btn btn-outline-primary btn-block');
        deleteBtn.on('click', function() {
            onClickRemove(event, productInfo);
        });
        let deleteCell = $("<div></div>");
        deleteCell.attr('id', 'btnHide_' + productInfo.product_id);
        deleteCell.addClass('col pl-1 pr-1');
        deleteCell.css('display', 'none');
        deleteCell.append(deleteBtn);

        let adsBtn = $("<button><i class='fa fa-link'></i>Ads</button>");
        adsBtn.addClass('btn btn-outline-primary btn-block');
        adsBtn.on('click', function() {
            onClickProductImage(event, productInfo);
        });
        let adsCell = $("<div></div>");
        adsCell.attr('id', 'btnAds_' + productInfo.product_id);
        adsCell.addClass('col pl-1 pr-1');
        adsCell.append(adsBtn);

        let actionContainer = $("<div></div>");
        actionContainer.addClass('row');
        actionContainer.append(linkCell);
        actionContainer.append(deleteCell);
        actionContainer.append(adsCell);

        let cardBody = $("<div></div>");
        cardBody.addClass('card-body');
        cardBody.append(namePriceContainer);
        cardBody.append(descP);
        cardBody.append(actionContainer);

        var cardImg = $('<img>');
        cardImg.addClass('card-img-top w-75 mx-auto');
        cardImg.attr({'src': productInfo.thumb, 'alt': "Card image"});
        // cardImg.css('cursor', 'pointer');
        // cardImg.on('click', function() {
        //     onClickProductImage(event, productInfo);
        // });

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

    $.fn.createShowProductCard = function(productInfo) {
        let name = $("<strong></strong>");
        name.text(productInfo.name);
        let price = $("<h6></h6>");
        price.text(productInfo.price);
        let namePriceContainer = $("<div></div>");
        namePriceContainer.addClass('d-flex justify-content-between');
        namePriceContainer.append(name);
        namePriceContainer.append(price);
        
        let descP = $("<p></p>");
        descP.css({"height": "70px", "overflow": "hidden"});
        descP.text(productInfo.description.substr(0, 100)+'..');

        let linkBtn = $("<button><i class='fa fa-shopping-cart mr-2'></i>Add to Cart</button>");
        linkBtn.addClass('btn btn-outline-primary btn-block');
        linkBtn.on('click', function() {onClickAddToCart(event, productInfo);});
        let linkCell = $("<div></div>");
        linkCell.addClass('col pl-1 pr-1');
        linkCell.append(linkBtn);

        let deleteBtn = $("<button><i class='fa fa-shopping-basket mr-2'></i>Buy Now</button>");
        deleteBtn.addClass('btn btn-outline-primary btn-block');
        deleteBtn.on('click', function() {onClickBuyNow(event, productInfo);});
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

        $('#show_products_container').append(cell);
    }

    $.fn.displaySelfProductCards = function(products) {
        $('#products_container').empty();
        let tmp = [];
        $.each(products, function(index, item) {tmp.push(item)});

        if(tmp.length > 0) {
            $.each(products, function(index, item) {$.fn.createSelfProductCard(item);});
        } else {
            let html = '<h1>No Products Found</h1>';
            $('#products_container').append(html);
        }
    }

    $.fn.displayShowProductCards = function(products) {
        $('#show_products_container').empty();
        let tmp = [];
        $.each(products, function(index, item) {tmp.push(item)});

        if(tmp.length > 0) {
            $.each(products, function(index, item) {$.fn.createShowProductCard(item);});
        } else {
            let html = '<h1>No Products Found</h1>';
            $('#show_products_container').append(html);
        }
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

    $.fn.getVisitedProducts = function(email, filter_product_name) {
        $.ajax({
            type: 'post',
            url: BASIC_OPEN_CART_SERVER_API + "route=api/product/getShowProduct",
            data: {
                email: email,
                product_name: filter_product_name
            },
            success: function(response){
                $.fn.displayShowProductCards(response);
            },
            error: function(error, ajaxOptions, thrownError) {
                $.fn.displayShowProductCards([]);
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
                    // alert('Remove Product!');
                    $('#btnShow_'+product_id).css('display', 'block');
                    $('#btnHide_'+product_id).css('display', 'none');
                }
            }
        });
    }

    if('<?= $isSelf ?>') {
        $.fn.getSelfProduct('<?= $loggedUser['email'] ?>', '');
    } else {
        $.fn.getVisitedProducts('<?= $visitedUser['email'] ?>', '');
    }
</script>