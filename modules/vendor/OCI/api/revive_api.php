<?php

class ReviveApiIntegration {
    private static $_instance;

    function __construct() {
        
    }

    public function addAgency($accountInfo)
    {
        //All users must have all the sub products of the mads product to see the mads product.
        $url = BASIC_OPEN_CART_SERVER_API . "route=api/revive/addAgency";
        $curl = curl_init($url);
         
        $post = $accountInfo;
        curl_setopt_array( $curl, array(
          CURLOPT_RETURNTRANSFER=> TRUE,
          CURLOPT_POSTFIELDS      => $post,
          CURLOPT_SSL_VERIFYHOST => 2,
          CURLOPT_SSL_VERIFYPEER => false
        ) );
         
        $raw_response = curl_exec( $curl );
        $response = json_decode($raw_response);
        curl_close($curl);
        
        return $response;
    }

    public function getRvIds($id)
    {
        $url = BASIC_OPEN_CART_SERVER_API . "route=api/revive/getRvIds";
        $curl = curl_init($url);
         
        $post = array (
            'id' => $id
        );

        curl_setopt_array( $curl, array(
          CURLOPT_RETURNTRANSFER=> TRUE,
          CURLOPT_POSTFIELDS      => $post,
          CURLOPT_SSL_VERIFYHOST => 2,
          CURLOPT_SSL_VERIFYPEER => false
        ) );
         
        $raw_response = curl_exec( $curl );
        $response = json_decode($raw_response);
        curl_close($curl);
        
        return $response;
    }

    public function getSysAccountLevelByProfileId($profile_id)
    {
        $url = BASIC_OPEN_CART_SERVER_API . "route=api/revive/getSysAccountLevelByProfileId";
        $curl = curl_init($url);
         
        $post = array (
            'profile_id' => $profile_id
        );

        curl_setopt_array( $curl, array(
          CURLOPT_RETURNTRANSFER=> TRUE,
          CURLOPT_POSTFIELDS      => $post,
          CURLOPT_SSL_VERIFYHOST => 2,
          CURLOPT_SSL_VERIFYPEER => false
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
} 
?>