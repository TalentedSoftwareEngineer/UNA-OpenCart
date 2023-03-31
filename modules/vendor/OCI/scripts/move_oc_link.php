<link rel="stylesheet" href="modules/vendor/OCI/template/css/style.css">
<link rel="stylesheet" href="modules/vendor/OCI/template/font-awesome/css/font-awesome.min.css">
<link rel ="stylesheet" href="modules/vendor/OCI/template/bootstrap/bootstrap.min.css">

<script src="modules/vendor/OCI/template/bootstrap/popper.min.js"></script>
<script src="modules/vendor/OCI/template/bootstrap/bootstrap.bundle.min.js"></script>

<?php
    require_once 'modules/vendor/OCI/api/opencart_api.php';
    function convertToArray($value) {return ( array ) $value;}

    $users = ( array ) OpenApiIntegration::getInstance()->getAllUsers();
    $arr_users = array_map('convertToArray', $users);
    
    $customers = ( array ) OpenApiIntegration::getInstance()->getAllCustomers();
    $arr_customers = array_map('convertToArray', $customers);

    $friendsCount = 0;
    
    $loggedProfileId = bx_get_logged_profile_id();

    if($loggedProfileId) {
        $loggedUser = (array) OpenApiIntegration::getInstance()->getSysUserByProfileId($loggedProfileId)[0];
        $in_user = in_array($loggedUser['email'], array_column($arr_users, 'email'));
        $in_customer = in_array($loggedUser['id'], array_column($arr_customers, 'customer_id'));

        if(!$in_user) {
            //regist user to opencart
            $post = array (
                'username' => $loggedUser['name'],
                'user_group_id' => 10,
                'password' => $loggedUser['password'],
                'firstname' => ucwords($loggedUser['name']),
                'lastname' => '',
                'email' => $loggedUser['email'],
                'image' => 'catalog/profile-pic.png',
                'status'=> true
            );
            $addedUserId = OpenApiIntegration::getInstance()->addOcUser($post);
            // var_dump($addedUserId);
        }

        if(!$in_customer) {
            //add customer to oc_customer table
            $post = array (
                'customer_id' => $loggedUser['id'],
                'customer_group_id' => 1,
                'password' => $loggedUser['password'],
                'firstname' => ucwords($loggedUser['name']),
                'lastname' => '',
                'email' => $loggedUser['email'],
                'telephone' => $loggedUser['phone'],
                'custom_field' => http_build_query(array()),
                'newsletter' => false,
                'status'=> true,
                'safe' => false,
                'affiliate' => false
            );
            $addedUserId = OpenApiIntegration::getInstance()->addOcCustomer($post);
        } else {
            //update customer from oc_customer table
            $post = array (
                'customer_id' => $loggedUser['id'],
                'customer_group_id' => 1,
                'password' => $loggedUser['password'],
                'firstname' => ucwords($loggedUser['name']),
                'lastname' => '',
                'email' => $loggedUser['email'],
                'telephone' => $loggedUser['phone'],
                'custom_field' => http_build_query(array()),
                'newsletter' => false,
                'status'=> true,
                'safe' => false,
                'affiliate' => false
            );
            $addedUserId = OpenApiIntegration::getInstance()->editOcCustomer($post);
        }

        $friendsCount = ((array) OpenApiIntegration::getInstance()->getFriendsCount($loggedProfileId))['friendsCount'];
    }
?>

<div class="d-flex align-items-center">
    <button onclick="openCartLogin(event)" class="btn btn-outline-primary btn-block" role="button">Business Management</button>
    <!-- <a href="http://localhost/UNA-v.13.0.0-RC2/my-store/" class="ml-3 btn btn-outline-primary" role="button">Business</a> -->
    <span id="linking" class="ml-2"></span><span id="linking_text" class="ml-2"></span>
</div>
<p id="business_access_valid_msg" class="text-success mt-2"></p>

<script type="text/javascript">
    var BASIC_OPEN_CART_ADMIN_SERVER_API = '<?= BASIC_OPEN_CART_ADMIN_SERVER_API ?>';
    var BASIC_OPEN_CART_SERVER_API = '<?= BASIC_OPEN_CART_SERVER_API ?>';
    function openCartLogin(event) {
        if(Number('<?= $friendsCount ?>') < 5) {
            $('#business_access_valid_msg').text('To use Business Management feature, you need have minimum five friends. Please invite them and become friends to start using our business service. In case if you cannot see Business management opening, check your popup blocker and unblock for our site.');
            // alert('In case if you cannot see Business management opening, check your popup blocker and unblock for our site.');
        } else {
            $.fn.openCartCustomerLogin(event);
        }
    }
    
    $.fn.openCartCustomerLogin = function(event) {
        $.ajax({
            type: 'post',
            url: BASIC_OPEN_CART_SERVER_API + "route=account/logout",
            success: function(response){

                var formData = new FormData();
                formData.append( 'email', '<?= $loggedUser['email'] ?>' );
                formData.append( 'password', '<?= $loggedUser['password'] ?>' );

                $.ajax({
                    method: 'POST',
                    url: BASIC_OPEN_CART_SERVER_API + 'route=account/login',
                    data: formData,
                    processData: false,
                    contentType: false,
                    beforeSend:function(){
                        $('#linking').addClass("spinner-grow text-primary");
                        $('#linking_text').text('Accessing...');
                    },
                    success: function(response){
                        $('#linking').removeClass("spinner-grow text-primary");
                        $('#linking_text').text('');
                        $.fn.getStoreByCustomerId(event);
                    },
                    error: function(error, ajaxOptions, thrownError) {
                        console.log(error);
                    }
                });
            },
            error: function(error, ajaxOptions, thrownError) {console.log(error)}
        });
    }

    $.fn.getStoreByCustomerId = function(event) {
        $.ajax({
            url: BASIC_OPEN_CART_SERVER_API + 'route=api/store/getVendorStoreInfo',
            method:"POST",
            data: {customer_id: '<?= $loggedUser['id'] ?>'},
            success:function(res)
            {
                if(!Boolean(res.store_name))
                {
                    $.fn.createStore(event);
                } else {
                    window.open(BASIC_OPEN_CART_SERVER_API + 'route=account/vendor/lts_dashboard', '_blank');
                }
            }
        });
    }

    $.fn.createStore = function(event) {
        $.ajax({
            url: BASIC_OPEN_CART_SERVER_API + 'route=account/vendor/lts_store',
            method:"POST",
            data: {
                description: 'Description',
                meta_title: 'Meta Title',
                meta_description: 'Meta Tag Description',
                meta_keyword: 'Meta Tag Keyword',
                store_owner: 'Store Owner',
                store_name: 'Store Name',
                address: 'Address',
                email: '<?= $loggedUser['email'] ?>',
                telephone: '000-000-0000',
                fax: '',
                country_id: 80,
                zone_id: 0,
                city: 'City',
                logo: '',
                banner: '',
                profile_image: '',
                facebook: '',
                instagram: '',
                youtube: '',
                twitter: '',
                pinterest: ''
            },
            success:function(res)
            {
                window.open(BASIC_OPEN_CART_SERVER_API + 'route=account/vendor/lts_dashboard', '_blank');
            }
        });
    }

    $.fn.openCartAdminLogin = function() {
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
                $('#linking').removeClass("spinner-grow text-primary");
                $('#linking_text').text('');
            },
            error: function(error, ajaxOptions, thrownError) {
                console.log(error);
            }
        });
    }

    $.fn.addCustomerToOpenCart = function() {
        $.ajax({
            url: BASIC_OPEN_CART_ADMIN_SERVER_API + 'route=customer/customer/add',
            type:"POST",
            data: {
                customer_group_id: 1,
                password: '<?= $loggedUser['password'] ?>',
                firstname: '<?= ucwords($loggedUser['name']) ?>',
                lastname: '',
                email: '<?= $loggedUser['email'] ?>',
                telephone: '<?= $loggedUser['phone'] ?>',
                custom_field: {},
                newsletter: false,
                status: true,
                safe: false
            },
            success:function(res)
            {
                
            }
        });
    }

    $.ajax({
        type: 'post',
        url: BASIC_OPEN_CART_SERVER_API + 'route=api/store/createStoreTypeField',
        data: {},
        success: function(response){},
        error: function(error, ajaxOptions, thrownError) {}
    });
</script>

