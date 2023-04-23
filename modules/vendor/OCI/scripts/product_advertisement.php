<link rel="stylesheet" href="modules/vendor/OCI/template/css/style.css">
<link rel="stylesheet" href="modules/vendor/OCI/template/font-awesome/css/font-awesome.min.css">
<link rel ="stylesheet" href="modules/vendor/OCI/template/bootstrap/bootstrap.min.css">

<link rel="stylesheet" href="modules/vendor/OCI/template/slick/slick.css">
<link rel="stylesheet" href="modules/vendor/OCI/template/slick/slick-theme.css">

<script type="text/javascript" src="modules/vendor/OCI/template/slick/slick.js"  charset="utf-8"></script>

<style></style>
<?php  
    require_once 'modules/vendor/OCI/api/opencart_api.php';
    require_once 'modules/vendor/OCI/api/revive_api.php';

    $basename = basename(BX_DIRECTORY_PATH_MODULES . '/OCI');

    $loggedProfileId = bx_get_logged_profile_id();
    $isSelf = true;
    $isPremiumUser = false;

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

        $loggedUserLevel = (array) ReviveApiIntegration::getInstance()->getSysAccountLevelByProfileId($loggedUser['profile_id']);
        if(!$loggedUserLevel) {
            // When member level is Standard
            $isPremiumUser = false;
        } else {
            $isPremiumUser = $loggedUserLevel['level'] == 9;
        }
    }

    // set url of current page
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   

    $url.= $_SERVER['HTTP_HOST'];
    $url.= $_SERVER['REQUEST_URI'];
?>

<span id="ads_display_block" style="display: none;"></span>

<div class="zone_content">
    <div class="banner_container">
        <div class="w-75 mx-auto">
            <div id="banners_slider" class="banners slider"></div>
        </div>
    </div>
    
    <?php if($isSelf && $isPremiumUser) : ?>
        <div class="d-flex justify-content-end mt-5">
            <button onclick="onClickAddAds(event)" class="btn btn-outline-primary btn-block" role="button">Click to add Ads</button>
        </div>
    <?php endif; ?>
</div>

<script type="text/javascript">
    var BASIC_OPEN_CART_ADMIN_SERVER_API = '<?= BASIC_OPEN_CART_ADMIN_SERVER_API ?>';
    var BASIC_OPEN_CART_SERVER_API = '<?= BASIC_OPEN_CART_SERVER_API ?>';
    var BASIC_REVIVE_URL = '<?= BASIC_REVIVE_URL ?>';    

    var elmnt_block = $('#ads_display_block').parents('.bx-page-block-container')[0];
    var block_id = $(elmnt_block).attr('id').replace('bx-page-block-', '');

    function onClickAddAds(event) {
        // create Ads(Website, Zone, Delivery Rule Sets)
        $.ajax({
            type: 'post',
            url: BASIC_OPEN_CART_SERVER_API + 'route=api/revive/addAds',
            data: {
                block_id: block_id,
                sys_acc_id: '<?= $loggedUser['id'] ?>',
                user_name: '<?= $loggedUser['name'] ?>',
                email: '<?= $loggedUser['email'] ?>',
                agencyid: '<?= $rv_ids['agency_id'] ?>',
                user_id: '<?= $rv_ids['user_id'] ?>',
                rv_acc_id: '<?= $rv_ids['rv_acc_id'] ?>',
                website_url: '<?= $url ?>',
                website_name: 'Advertisement',
                zone_name: 'zone_' + block_id.toString(),
            },
            success: function(response) {
                window.open(BASIC_REVIVE_URL + 'www/admin/zone-edit.php?affiliateid=' + response.affiliateid + '&zoneid=' + response.zoneid, '_blank');
            },
            fail: function(fail){
                console.log(fail);
            },
            error: function(error, ajaxOptions, thrownError) {
                console.log(error);
            }
        });
    }

    function createBannerElmntDom(banner) {
        var container = $("<div></div>");

        var image_container = $("<div></div>");
        image_container.addClass('position-relative');

        var image = $('<img>');
        image.addClass('mx-auto');
        image.attr({
            'src': 'adserver/www/images/' + banner.filename,
            'alt': banner.alt,
            'title': banner.alt, 
            'width': banner.width, 
            'height': banner.height
        });
        var banner_desc = $("<h1></h1>");
        banner_desc.addClass('text-center');
        banner_desc.css({
            'position': 'absolute',
            'top': '50%',
            'left': '50%',
            'transform': 'translate(-50%, -50%)',
            'padding': '10px 20px',
            'background-color': 'rgba(255, 255, 255, 0.7)',
            'border-radius': '50%'
        });
        banner_desc.text(banner.description);

        image_container.append(image);
        image_container.append(banner_desc);

        var banner_text = $("<h3></h3>");
        banner_text.addClass('text-center');
        banner_text.text(banner.bannertext);

        var comments = $("<p></p>");
        comments.addClass('mt-5');
        comments.css({'font-size': '20px'});
        comments.text(banner.comments);

        container.append(image_container);
        container.append(banner_text);
        container.append(comments);

        $('#banners_slider').append(container);
    }

    function applySlickSlideToBanners() {
        $(".banners").slick({
            dots: true,
            infinite: true,
            speed: 300,
            lazyLoad: 'ondemand',
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            // centerMode: true,
            // centerPadding: '60px',
            fade: false,
            cssEase: 'linear',
            responsive: [
            {
                breakpoint: 768,
                settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                slidesToShow: 2,
                slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                slidesToShow: 1,
                slidesToScroll: 1
                }
            }
            ]
        });
    }

    function buildBannersSlider() {
        $.ajax({
            type: 'post',
            url: BASIC_OPEN_CART_SERVER_API + 'route=api/revive/getBannersBySysAccIdBlockId',
            data: {
                sys_acc_id: '<?= $loggedUser['id'] ?>',
                block_id: block_id
            },
            success: function(response) {
                if(response == 'No Zone') {
                    $('#banners_slider').empty();
                } else {
                    $('#banners_slider').empty();
                    $.each(response, function(index, item) {createBannerElmntDom(item);});
                    applySlickSlideToBanners();
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

    buildBannersSlider();
</script>
