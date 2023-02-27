<?php 
/**
 * Copyright (c) Vendor
 * 
 * @defgroup    Test Test module
 * @ingroup     VendorModules
 *
 * @{
 */

$aConfig = array(
	/**
	 * Main Section.
	 */
	'type' => BX_DOL_MODULE_TYPE_MODULE,
    'name' => 'vnd_test',
	'title' => 'OCI',
    'note' => 'OCI modules',
	'version' => '1.0.0',
	'vendor' => 'Vendor',
    'product_url' => 'http://www.boonex.com/products/{uri}',
	'update_url' => '',
	
	'compatible_with' => array(
        '8.0.x'
    ),

    /**
	 * 'home_dir' and 'home_uri' - should be unique. Don't use spaces in 'home_uri' and the other special chars.
	 */
	'home_dir' => 'vendor/OCI/',
	'home_uri' => 'OCI',
	
	'db_prefix' => 'vnd_test',
	'class_prefix' => 'VndTest',

	/**
	 * Category for language keys.
	 */
	'language_category' => 'Vendor Test',

	/**
	 * Installation/Uninstallation Section.
	 */
	'install' => array(
		'execute_sql' => 1,
		'update_languages' => 1,
	),
	'uninstall' => array (
		'execute_sql' => 1,
		'update_languages' => 1,
    ),
    'enable' => array(
        'execute_sql' => 1,
        'recompile_global_paramaters' => 1,
        'clear_db_cache' => 1,
    ),
    'disable' => array(
        'execute_sql' => 1,
        'recompile_global_paramaters' => 1,
        'clear_db_cache' => 1,
    ),

    /**
	 * Dependencies Section
	 */
	'dependencies' => array(
    ),
);

ini_set('session.use_cookies', 'On');
ini_set('session.use_trans_sid', 'Off');

session_set_cookie_params(0, '/');
session_start();

/** @} */

