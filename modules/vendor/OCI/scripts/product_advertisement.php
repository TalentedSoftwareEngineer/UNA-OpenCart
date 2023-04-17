<link rel="stylesheet" href="modules/vendor/OCI/template/css/style.css">
<link rel="stylesheet" href="modules/vendor/OCI/template/font-awesome/css/font-awesome.min.css">
<link rel ="stylesheet" href="modules/vendor/OCI/template/bootstrap/bootstrap.min.css">

<style></style>
<?php  
    require_once 'modules/vendor/OCI/api/opencart_api.php';
    require_once 'modules/vendor/OCI/api/revive_api.php';

    $basename = basename(BX_DIRECTORY_PATH_MODULES . '/OCI');

    $loggedProfileId = bx_get_logged_profile_id();
    $isSelf = true;
    if($loggedProfileId) {
        $oProfile = BxDolProfile::getInstance($loggedProfileId);
        $loggedId = $oProfile->getAccountId();
        $loggedUser = (array) OpenApiIntegration::getInstance()->getSysUserByProfileId($loggedProfileId)[0];
        $visitedUser = array('email'=>'');
        
        $explodedUri = explode('/', strtok($_SERVER['REQUEST_URI'], '?'));
        if(count($explodedUri)>2)
        {
            $visitedUser_id_proId = (array) OpenApiIntegration::getInstance()->getSysAccountsIdProfileIdByUri($explodedUri[count($explodedUri)-2], $explodedUri[count($explodedUri)-1]);
            if($visitedUser_id_proId['param_name'] == 'profile_id') {
                $isSelf = $loggedProfileId == $visitedUser_id_proId['param_value'];
                $visitedUser = (array) OpenApiIntegration::getInstance()->getSysUserByProfileId($visitedUser_id_proId['param_value'])[0];
            } elseif($visitedUser_id_proId['param_name'] == 'id') {
                $isSelf = $loggedId == $visitedUser_id_proId['param_value'];
                $visitedUser = (array) OpenApiIntegration::getInstance()->getSysUserById($visitedUser_id_proId['param_value'])[0];
            }

        } else {
            $isSelf = true;
        }

        $rv_ids = (array) ReviveApiIntegration::getInstance()->getRvIds($loggedId);
    }
?>

<?php if($isSelf) : ?>
    <div class="d-flex justify-content-end">
        <div class="input-group w-25">
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
    var BASIC_OPEN_CART_ADMIN_SERVER_API = '<?= BASIC_OPEN_CART_ADMIN_SERVER_API ?>';
    var BASIC_OPEN_CART_SERVER_API = '<?= BASIC_OPEN_CART_SERVER_API ?>';
    var BASIC_REVIVE_URL = '<?= BASIC_REVIVE_URL ?>';
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

    function onClickRemoveFromBlock(event, productInfo) {
        var elmnt_block = $(event.target).parents('.bx-page-block-container')[0];
        var block_id = $(elmnt_block).attr('id').replace('bx-page-block-', '');
        $.fn.removeProductFromBlock(productInfo.product_id, block_id);
    }

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
        descP.addClass('flex-grow-1');
        descP.attr('href', productInfo.href.replace('&amp;', '&'));
        descP.css({"height": "100px", "overflow": "hidden"});
        descP.text(productInfo.description.substr(0, 100)+'..');

        let deleteBtn = $("<button><i class='fa fa-trash'></i>Remove</button>");
        deleteBtn.addClass('btn btn-outline-primary btn-block mt-2');
        deleteBtn.on('click', function() {
            onClickRemoveFromBlock(event, productInfo);
        });

        let cardBody = $("<div></div>");
        cardBody.addClass('card-body d-flex flex-column');
        cardBody.append(namePriceContainer);
        cardBody.append(descP);
        if('<?= $isSelf ?>') {
            cardBody.append(deleteBtn);
        }

        var cardImg = $('<img>');
        cardImg.addClass('card-img-top w-75 mx-auto');
        cardImg.attr({'src': productInfo.thumb, 'alt': "Card image"});
        cardImg.css('cursor', 'pointer');
        cardImg.on('click', function() {
            onClickProductImage(event, productInfo);
        });

        var card = $("<div></div>");
        card.addClass('card');
        card.css("height", "390px");
        card.append(cardImg);
        card.append(cardBody);

        let cell = $("<div></div>");
        cell.addClass('col-lg-3 col-md-4 col-sm-6 mb-2');
        cell.append(card);

        $(elmnt_pdt_in_block).append(cell);
    }

    $.fn.displayBlockProduct = function(products, elmnt_pdt_in_block) {
        $(elmnt_pdt_in_block).empty();
        let tmp = [];
        $.each(products, function(index, item) {tmp.push(item)});

        if(tmp.length > 0) {
            $.each(products, function(index, item) {
                $.fn.createProductCard(item, elmnt_pdt_in_block);
            });
        } else {
            $(elmnt_pdt_in_block).append('<h1>No Products Found</h1>');
        }
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

    $.fn.removeProductFromBlock = function(product_id, block_id) {
        $.ajax({
            type: 'post',
            url: BASIC_OPEN_CART_SERVER_API + 'route=api/product/removeProductFromBlock',
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
                if('<?= $isSelf ?>') {
                    productOwner = '<?= $loggedUser['email'] ?>'
                } else {
                    productOwner = '<?= $visitedUser['email'] ?>'
                }
                $.ajax({
                    type: 'post',
                    url: BASIC_OPEN_CART_SERVER_API + 'route=api/product/getProductsInBlock',
                    data: {
                        owner: productOwner,
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
