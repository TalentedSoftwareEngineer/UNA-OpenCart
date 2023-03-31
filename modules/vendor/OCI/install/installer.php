<?php defined('BX_DOL') or die('hack attempt');
/**
 * Copyright (c) Vendor
 * 
 * @defgroup    OCI module
 * @ingroup     VendorModules
 *
 * @{
 */

bx_import('BxDolStudioInstaller');

class VndOCIInstaller extends BxDolStudioInstaller 
{
    function __construct($aConfig) 
    {
        parent::__construct($aConfig);
    }    
}

/** @} */ 
