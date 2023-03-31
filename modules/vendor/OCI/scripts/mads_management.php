<link rel="stylesheet" href="modules/vendor/OCI/template/css/style.css">
<link rel="stylesheet" href="modules/vendor/OCI/template/font-awesome/css/font-awesome.min.css">
<link rel ="stylesheet" href="modules/vendor/OCI/template/bootstrap/bootstrap.min.css">

<script src="modules/vendor/OCI/template/bootstrap/popper.min.js"></script>
<script src="modules/vendor/OCI/template/bootstrap/bootstrap.bundle.min.js"></script>

<?php
    require_once 'modules/vendor/OCI/api/opencart_api.php';
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
    }

    if(isset($loggedUser['id'])) {
        $mads = (array) OpenApiIntegration::getInstance()->getShowedMadsToSeller($loggedUser['id']);
        $arr_mads = array_map(function ($val) {return (array) $val;}, $mads);   
    } else {
        $arr_mads = array();
    }
    // print_r($arr_mads);
?>

<?php if (count($arr_mads)) { ?>
    <div id="cart_products_container" class="row mt-4 justify-content-center">
        <?php foreach($arr_mads as $key=>$value): ?>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                <div class="card">
                    <img class="card-img-top w-75 mx-auto" src=<?php echo $value['image']; ?> alt="Card image">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h6>Name: </h6>
                            <div>
                                <strong><?= $value['name'] ?></strong>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6>Total Price:</h6>
                            <div>
                                <strong><?= $value['sub_products_total_price'] ?></strong>
                            </div>
                        </div>
                        <p><a href=<?= $value['href'] ?>><?= $value['description'] ?></a></p>
                        <div class="d-flex justify-content-between">
                            <button onclick="onClickAcceptReject(event, '<?= $value['product_id'] ?>', true)" class="btn btn-outline-primary btn-block mt-0"><i class="fa fa-check"></i>Accept</button>
                            <button onclick="onClickAcceptReject(event, '<?= $value['product_id'] ?>', false)" class="btn btn-outline-primary btn-block mt-0"><i class="fa fa-times"></i>Reject</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php } ?>

<?php if (!count($arr_mads)) { ?>
    <h1 class="text-center">No Mads Found</h1>
<?php } ?>

<script type="text/javascript">
    var BASIC_OPEN_CART_ADMIN_SERVER_API = '<?= BASIC_OPEN_CART_ADMIN_SERVER_API ?>';
    var BASIC_OPEN_CART_SERVER_API = '<?= BASIC_OPEN_CART_SERVER_API ?>';

    function onClickAcceptReject(event, product_id, accepted) {
        $.ajax({
            type: 'POST',
            url: BASIC_OPEN_CART_SERVER_API + "route=api/mads/acceptRejectMads",
            data: {
                product_id: product_id,
                customer_id: '<?= $loggedUser['id'] ?>',
                accepted: accepted
            },
            success: function(response) {
                if(accepted) {
                    alert('Accepted!');
                } else {
                    alert('Rejected!');
                    location.reload();
                }
            }
        });
    }
</script>