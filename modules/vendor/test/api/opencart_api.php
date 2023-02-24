<?php
// require_once 'vendor/autoload.php';
// use League\OAuth2\Client\Provider\GenericProvider;

class OpenApiIntegration {
    private static $_instance;
    private string $api_token;
    function __construct() {
        
    }

    public function autoLogin() 
    {
        $apiKey = "l6UEEIvdtBbJU8VhqyDA6SAa6s05nzKUP0IHdnJxxCvHyR57TSEDe3P8Cf75reILFtGWIjUdmc04hoLlOuBTZLyUBMJGZnCRenp4LEDNDiNHrakrnSa5IVnbmJtqtM66M3BJB1P08LtPuK4t4IORMJndsNJKKyJ12u4c1CHXu8BlJvI3tNaZZy7YEhnkAFkoipaXRS2DROutparQ20iU1Ru1G5sqSoTFTEm08J10hEXXE7dGRKbyXTPnEQOqlCSI"; //Whatever you put in System -> Users -> API

        $url = BASIC_OPEN_CART_SERVER_API . "route=api/login&api_token=0";
        
        $curl = curl_init($url);
         
        $post = array (
          'username' => 'admin',
          'key' => $apiKey
        );
        
        curl_setopt_array( $curl, array(
          CURLOPT_RETURNTRANSFER=> TRUE,
          CURLOPT_POSTFIELDS      => $post
        ) );
         
        $raw_response = curl_exec( $curl );
        // print_r($raw_response);
        $response = json_decode($raw_response);
        curl_close($curl);
        
        $this->api_token = $response->api_token;

    }

    public function getAllProducts()
    {
        $this->autoLogin();
        $url = BASIC_OPEN_CART_SERVER_API . "route=api/product&api_token=" . $this->api_token;
        
        $post = array (
        );
        
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $raw_response = curl_exec( $curl );
        $response = json_decode($raw_response);
        $err = curl_error($curl);
        curl_close($curl);

        return $response;
    }

    public function getApiToken() 
    {
        return $this->api_token;
    }

    public function getAllUsers()
    {
        $url = BASIC_OPEN_CART_SERVER_API . "route=api/user/getAllUsers";
        
        $post = array (
        );
        
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $raw_response = curl_exec( $curl );
        $response = json_decode($raw_response);
        $err = curl_error($curl);
        curl_close($curl);

        return $response;
    }
    
    public function getSysUserByProfileId($profileId)
    {
        $url = BASIC_OPEN_CART_SERVER_API . "route=api/user/getSysUserByProfileId";        
        $curl = curl_init($url);
         
        $post = array (
            'profileId' => $profileId
        );        
        curl_setopt_array( $curl, array(
          CURLOPT_RETURNTRANSFER=> TRUE,
          CURLOPT_POSTFIELDS      => $post
        ) );
         
        $raw_response = curl_exec( $curl );
        $response = json_decode($raw_response);
        curl_close($curl);
        
        return $response;
    }

    public function getSysUserById($id)
    {
        $url = BASIC_OPEN_CART_SERVER_API . "route=api/user/getSysUserById";        
        $curl = curl_init($url);
         
        $post = array (
            'id' => $id
        );        
        curl_setopt_array( $curl, array(
          CURLOPT_RETURNTRANSFER=> TRUE,
          CURLOPT_POSTFIELDS      => $post
        ) );
         
        $raw_response = curl_exec( $curl );
        $response = json_decode($raw_response);
        curl_close($curl);
        
        return $response;
    }

    public function addOcUser($post)
    {
        $url = BASIC_OPEN_CART_SERVER_API . "route=api/user/add";        
        $curl = curl_init($url);
         
        curl_setopt_array( $curl, array(
          CURLOPT_RETURNTRANSFER=> TRUE,
          CURLOPT_POSTFIELDS      => $post
        ) );
         
        $raw_response = curl_exec( $curl );
        curl_close($curl);
        
        return $raw_response;
    }

    public function getAllCustomers()
    {
        $url = BASIC_OPEN_CART_SERVER_API . "route=api/user/getAllCustomers";
        
        $post = array (
        );
        
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $raw_response = curl_exec( $curl );
        $response = json_decode($raw_response);
        $err = curl_error($curl);
        curl_close($curl);

        return $response;
    }

    public function addOcCustomer($post)
    {
        $url = BASIC_OPEN_CART_SERVER_API . "route=api/unacustomer/add";
        $curl = curl_init($url);
         
        curl_setopt_array( $curl, array(
          CURLOPT_RETURNTRANSFER=> TRUE,
          CURLOPT_POSTFIELDS      => $post
        ));
         
        $raw_response = curl_exec( $curl );
        curl_close($curl);
        
        return $raw_response;
    }

    public function getSelfProduct($email, $product_name)
    {
        $url = BASIC_OPEN_CART_SERVER_API . "route=api/product/getSelfProduct";
        $curl = curl_init($url);
         
        $post = array (
            'email' => $email,
            'product_name' => $product_name
        );
        curl_setopt_array( $curl, array(
          CURLOPT_RETURNTRANSFER=> TRUE,
          CURLOPT_POSTFIELDS      => $post
        ) );
         
        $raw_response = curl_exec( $curl );
        $response = json_decode($raw_response);
        curl_close($curl);
        
        return $response;
    }

    public static function getInstance() 
    {
        if (null === self::$_instance) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    public function getSysAccountsIdProfileIdByUri($page_uri, $uri)
    {
        $url = BASIC_OPEN_CART_SERVER_API . "route=api/user/getSysAccountsIdProfileIdByUri";
        $curl = curl_init($url);
         
        $post = array (
            'page_uri' => $page_uri,
            'uri' => $uri
        );
        curl_setopt_array( $curl, array(
          CURLOPT_RETURNTRANSFER=> TRUE,
          CURLOPT_POSTFIELDS      => $post
        ) );
         
        $raw_response = curl_exec( $curl );
        $response = json_decode($raw_response);
        curl_close($curl);
        
        return $response;
    }
} 
?>