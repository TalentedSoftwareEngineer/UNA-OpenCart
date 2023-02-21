<link rel="stylesheet" href="modules/vendor/test/template/css/style.css">
<link rel="stylesheet" href="modules/vendor/test/template/font-awesome/css/font-awesome.min.css">
<link rel ="stylesheet" href="modules/vendor/test/template/bootstrap/bootstrap.min.css">

<script src="modules/vendor/test/template/bootstrap/popper.min.js"></script>
<script src="modules/vendor/test/template/bootstrap/bootstrap.bundle.min.js"></script>

<?php
    require_once 'modules/vendor/test/api/opencart_api.php';
    $users = ( array ) OpenApiIntegration::getInstance()->getAllUsers();
    function convertToArray($value) {return ( array ) $value;}
    $arr_users = array_map('convertToArray', $users);
    
    $loggedProfileId = bx_get_logged_profile_id();
    if($loggedProfileId) {
        $loggedUser = (array) OpenApiIntegration::getInstance()->getSysUserByProfileId($loggedProfileId)[0];
        $found_key = array_search($loggedUser['email'], array_column($arr_users, 'email'));

        if(!$found_key) {
            //regist user to opencart
            $post = array (
                'username' => $loggedUser['name'],
                'user_group_id' => 11,
                'password' => $loggedUser['password'],
                'firstname' => ucwords($loggedUser['name']),
                'lastname' => '',
                'email' => $loggedUser['email'],
                'image' => 'catalog/profile-pic.png',
                'status'=> true
            );
            $addedUserId = OpenApiIntegration::getInstance()->addOcUser($post);
            var_dump($addedUserId);
        }
    }
?>

<div class="d-flex align-items-center">
    <button onclick="openCartLogin(event)" class="btn btn-outline-primary" role="button">Acess OpenCart Store</button>
    <span id="linking" class="ml-2"></span><span id="linking_text" class="ml-2"></span>
</div>

<script type="text/javascript">
    var BASIC_OPEN_CART_ADMIN_SERVER_API = 'http://localhost/UNA-v.13.0.0-RC2/store/admin/index.php?';
    function openCartLogin(event) {
        var formData = new FormData();
        formData.append( 'username', '<?= $loggedUser['name'] ?>' );
        formData.append( 'password', '<?= $loggedUser['password'] ?>' );

        $.ajax({
            type: 'post',
            url: BASIC_OPEN_CART_ADMIN_SERVER_API + 'route=common/login',
            data: formData,
            processData: false,
            contentType: false,
            beforeSend:function(){
                $('#linking').addClass("spinner-grow text-primary");
                $('#linking_text').text('Accessing...');
            },
            success: function(response){
                var oc_dashboard_url = $(response).find('#header-logo').find('a.navbar-brand').attr('href');
                if (event.ctrlKey) {
                    window.open(oc_dashboard_url, '_blank');            
                } else {
                    location.href = oc_dashboard_url;
                }
                $('#linking').removeClass("spinner-grow text-primary");
                $('#linking_text').text('');
            },
            error: function(error, ajaxOptions, thrownError) {
                console.log(error);
            }
        });
    }
</script>

