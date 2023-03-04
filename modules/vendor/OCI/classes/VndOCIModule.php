<?php defined('BX_DOL') or die('hack attempt');
/**
 * Copyright (c) Vendor
 * 
 * @defgroup    Test Test module
 * @ingroup     VendorModules
 *
 * @{
 */

bx_import('BxDolModule');
require_once(BX_DIRECTORY_PATH_ROOT . "modules/vendor/OCI/utils/globalVal.php");
require_once("VndOCIHelper.php");

class VndOCIModule extends BxDolModule 
{
    private $helper;
    function __construct(&$aModule) 
    {
        parent::__construct($aModule);
        $this->helper = VndOCIHelper::getInstance();
    }

    function serviceViewDetailOP ()
    {
        $file = VNDOCI_ROOTDIR . "scripts/view_detail_op.php";
        $output = $this->helper->get_include_output($file);
        return $output;
    }

    function serviceSearchProducts ()
    {
        $file = VNDOCI_ROOTDIR . "scripts/search_products.php";
        $output = $this->helper->get_include_output($file);
        return $output;
    }

    function serviceUploadNewProduct ()
    {
        $file = VNDOCI_ROOTDIR . "scripts/upload_new_product.php";
        $output = $this->helper->get_include_output($file);
        return $output;
    }

    function serviceMoveOcLink ()
    {
        $file = VNDOCI_ROOTDIR . "scripts/move_oc_link.php";
        $output = $this->helper->get_include_output($file);
        return $output;
    }
    
    function serviceBusiness()
    {
        $file = VNDOCI_ROOTDIR . "scripts/business.php";
        $output = $this->helper->get_include_output($file);
        return $output;
    }
}

/** @} */
