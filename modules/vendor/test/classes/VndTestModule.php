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
require_once(BX_DIRECTORY_PATH_ROOT . "modules/vendor/test/utils/globalVal.php");
require_once("VndTestHelper.php");

class VndTestModule extends BxDolModule 
{
    private $helper;
    function __construct(&$aModule) 
    {
        parent::__construct($aModule);
        $this->helper = VndTestHelper::getInstance();
    }

    function serviceViewDetailOP ()
    {
        $file = VNDTEST_ROOTDIR . "scripts/view_detail_op.php";
        $output = $this->helper->get_include_output($file);
        return $output;
    }

    function serviceSearchProducts ()
    {
        $file = VNDTEST_ROOTDIR . "scripts/search_products.php";
        $output = $this->helper->get_include_output($file);
        return $output;
    }

    function serviceUploadNewProduct ()
    {
        $file = VNDTEST_ROOTDIR . "scripts/upload_new_product.php";
        $output = $this->helper->get_include_output($file);
        return $output;
    }
}

/** @} */
