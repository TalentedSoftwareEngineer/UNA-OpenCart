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

<?php if($isSelf && $isPremiumUser) : ?>
    <div class="d-flex justify-content-end">
        <button onclick="onClickAddAds(event)" class="btn btn-outline-primary btn-block" role="button">Click to add Ads</button>
    </div>
<?php endif; ?>

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
</script>
