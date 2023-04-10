<link rel="stylesheet" href="modules/vendor/OCI/template/css/style.css">
<link rel="stylesheet" href="modules/vendor/OCI/template/font-awesome/css/font-awesome.min.css">
<link rel ="stylesheet" href="modules/vendor/OCI/template/bootstrap/bootstrap.min.css">

<script src="modules/vendor/OCI/template/bootstrap/popper.min.js"></script>
<script src="modules/vendor/OCI/template/bootstrap/bootstrap.bundle.min.js"></script>

<?php
    require_once 'modules/vendor/OCI/api/opencart_api.php';
    require_once 'modules/vendor/OCI/api/revive_api.php';

    $loggedProfileId = bx_get_logged_profile_id();
    if($loggedProfileId) {
        $loggedUser = (array) OpenApiIntegration::getInstance()->getSysUserByProfileId($loggedProfileId)[0];

        $addAgency = (array) ReviveApiIntegration::getInstance()->addAgency($loggedUser);
    }
?>

<div class="d-flex align-items-center">
    <button onclick="onMoveAdvertisementManagement(event)" class="btn btn-outline-primary btn-block" role="button">Advertisement management</button>
</div>

<script type="text/javascript">
    var BASIC_OPEN_CART_ADMIN_SERVER_API = '<?= BASIC_OPEN_CART_ADMIN_SERVER_API ?>';
    var BASIC_OPEN_CART_SERVER_API = '<?= BASIC_OPEN_CART_SERVER_API ?>';
    var BASIC_REVIVE_URL = '<?= BASIC_REVIVE_URL ?>';

    function onMoveAdvertisementManagement(event) {
        localStorage.setItem('USERNAME', '<?= $loggedUser['name'] ?>');
        localStorage.setItem('PASSWORD', 'poiPOI098)(*');
        window.open(BASIC_REVIVE_URL + 'www/admin/dashboard.php', '_blank');
    }
</script>

