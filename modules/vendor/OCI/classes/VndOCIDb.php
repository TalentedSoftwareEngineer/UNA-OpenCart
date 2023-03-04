<?php defined('BX_DOL') or die('hack attempt');
/**
 * Copyright (c) Vendor
 * 
 * @defgroup    Test Test module
 * @ingroup     VendorModules
 *
 * @{
 */

bx_import('BxDolModuleDb');

class VndOCIDb extends BxDolModuleDb
{
	function __construct(&$oConfig) 
    {
		parent::__construct($oConfig);	
    }
}

/** @} */
