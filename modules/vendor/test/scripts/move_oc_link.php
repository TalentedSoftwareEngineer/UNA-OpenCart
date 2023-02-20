<link rel="stylesheet" href="modules/vendor/test/template/css/style.css">
<link rel="stylesheet" href="modules/vendor/test/template/font-awesome/css/font-awesome.min.css">
<link rel ="stylesheet" href="modules/vendor/test/template/bootstrap/bootstrap.min.css">

<script src="modules/vendor/test/template/bootstrap/popper.min.js"></script>
<script src="modules/vendor/test/template/bootstrap/bootstrap.bundle.min.js"></script>

<?php
    $loggedProfileId = bx_get_logged_profile_id();
    $oProfile = BxDolProfile::getInstance($loggedProfileId);
?>

<a class="btn btn-outline-primary" href="http://localhost/UNA-v.13.0.0-RC2/store/admin" role="button">Acess OpenCart Store</a>

