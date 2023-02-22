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

        $my_products = (array) OpenApiIntegration::getInstance()->getSelfProduct($loggedUser['email']);
        $arr_my_products = array_map(function($value){return (array) $value;}, $my_products);
    }
?>

<?php foreach($arr_my_products as $key=>$value): ?>
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