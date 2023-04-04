
-- SETTINGS

SET @iTypeOrder = (SELECT IFNULL(MAX(`order`), 0) + 1 FROM `sys_options_types` WHERE `group` = 'modules');
INSERT INTO `sys_options_types` (`group`, `name`, `caption`, `icon`, `order`) VALUES 
('modules', 'vnd_oci', '_vnd_oci_adm_stg_cpt_type', 'vnd_oci@modules/vendor/OCI/|std-mi.png', @iTypeOrder);
SET @iTypeId = LAST_INSERT_ID();

INSERT INTO `sys_options_categories` (`type_id`, `name`, `caption`, `order` )  
VALUES (@iTypeId, 'vnd_oci_general', '_vnd_oci_adm_stg_cpt_category_general', 1);
SET @iCategoryId = LAST_INSERT_ID();

INSERT INTO `sys_options`(`category_id`, `name`, `caption`, `value`, `type`, `extra`, `check`, `check_error`, `order`) VALUES
(@iCategoryId, 'vnd_oci_repeat_times', '_vnd_oci_option_repeat_times', '3', 'digit', '', '', '', 1);

-- Adding blocks to profile page
--
-- Dumping data for 'bx_persons_view_profile' page
--

INSERT INTO `sys_pages_blocks` (`object`, `cell_id`, `module`, `title_system`, `title`, `designbox_id`, `class`, `async`, `cache_lifetime`, `submenu`, `tabs`, `hidden_on`, `visible_for_levels`, `type`, `content`, `help`, `deletable`, `copyable`, `active`, `order`) VALUES
('Search-OP-Products', 1, 'vnd_oci', '_vnd_oci_block_search_products_title', '_vnd_oci_block_search_products_title', 11, '', 0, 0, '', 0 , 0, 2147483647, 'service', 'a:3:{s:6:\"module\";s:7:\"vnd_oci\";s:6:\"method\";s:14:\"SearchProducts\";s:6:\"params\";a:1:{i:0;s:8:\"extended\";}}', '', 1, 1, 1, 0);

INSERT INTO `sys_pages_blocks` (`object`, `cell_id`, `module`, `title_system`, `title`, `designbox_id`, `class`, `async`, `cache_lifetime`, `submenu`, `tabs`, `hidden_on`, `visible_for_levels`, `type`, `content`, `help`, `deletable`, `copyable`, `active`, `order`) VALUES
('Upload-New-Products', 1, 'vnd_oci', '_vnd_oci_upload_new_products_title', '_vnd_oci_upload_new_products_title', 11, '', 0, 0, '', 0 , 0, 2147483647, 'service', 'a:3:{s:6:\"module\";s:7:\"vnd_oci\";s:6:\"method\";s:16:\"UploadNewProduct\";s:6:\"params\";a:1:{i:0;s:8:\"extended\";}}', '', 1, 1, 1, 0);

INSERT INTO `sys_pages_blocks` (`object`, `cell_id`, `module`, `title_system`, `title`, `designbox_id`, `class`, `async`, `cache_lifetime`, `submenu`, `tabs`, `hidden_on`, `visible_for_levels`, `type`, `content`, `help`, `deletable`, `copyable`, `active`, `order`) VALUES
('Move-OC-Link', 1, 'vnd_oci', '_vnd_oci_move_oc_link_title', '_vnd_oci_move_oc_link_title', 11, '', 0, 0, '', 0 , 0, 2147483647, 'service', 'a:3:{s:6:\"module\";s:7:\"vnd_oci\";s:6:\"method\";s:10:\"MoveOcLink\";s:6:\"params\";a:1:{i:0;s:8:\"extended\";}}', '', 1, 1, 1, 0);

INSERT INTO `sys_pages_blocks` (`object`, `cell_id`, `module`, `title_system`, `title`, `designbox_id`, `class`, `async`, `cache_lifetime`, `submenu`, `tabs`, `hidden_on`, `visible_for_levels`, `type`, `content`, `help`, `deletable`, `copyable`, `active`, `order`) VALUES
('Business', 1, 'vnd_oci', '_vnd_oci_business_title', '_vnd_oci_business_title', 11, '', 0, 0, '', 0 , 0, 2147483647, 'service', 'a:3:{s:6:\"module\";s:7:\"vnd_oci\";s:6:\"method\";s:8:\"Business\";s:6:\"params\";a:1:{i:0;s:8:\"extended\";}}', '', 1, 1, 1, 0);

INSERT INTO `sys_pages_blocks` (`object`, `cell_id`, `module`, `title_system`, `title`, `designbox_id`, `class`, `async`, `cache_lifetime`, `submenu`, `tabs`, `hidden_on`, `visible_for_levels`, `type`, `content`, `help`, `deletable`, `copyable`, `active`, `order`) VALUES
('Mads-Management', 1, 'vnd_oci', '_vnd_oci_mads_management_title', '_vnd_oci_mads_management_title', 11, '', 0, 0, '', 0 , 0, 2147483647, 'service', 'a:3:{s:6:\"module\";s:7:\"vnd_oci\";s:6:\"method\";s:14:\"MadsManagement\";s:6:\"params\";a:1:{i:0;s:8:\"extended\";}}', '', 1, 1, 1, 0);

INSERT INTO `sys_pages_blocks` (`object`, `cell_id`, `module`, `title_system`, `title`, `designbox_id`, `class`, `async`, `cache_lifetime`, `submenu`, `tabs`, `hidden_on`, `visible_for_levels`, `type`, `content`, `help`, `deletable`, `copyable`, `active`, `order`) VALUES
('Advertisement', 1, 'vnd_oci', '_vnd_oci_advertisement_title', '_vnd_oci_advertisement_title', 11, '', 0, 0, '', 0 , 0, 2147483647, 'service', 'a:3:{s:6:\"module\";s:7:\"vnd_oci\";s:6:\"method\";s:13:\"Advertisement\";s:6:\"params\";a:1:{i:0;s:8:\"extended\";}}', '', 1, 1, 1, 0);

INSERT INTO `sys_pages_blocks` (`object`, `cell_id`, `module`, `title_system`, `title`, `designbox_id`, `class`, `async`, `cache_lifetime`, `submenu`, `tabs`, `hidden_on`, `visible_for_levels`, `type`, `content`, `help`, `deletable`, `copyable`, `active`, `order`) VALUES
('Business-Analytics', 1, 'vnd_oci', '_vnd_oci_business_analytics_title', '_vnd_oci_business_analytics_title', 11, '', 0, 0, '', 0 , 0, 2147483647, 'service', 'a:3:{s:6:\"module\";s:7:\"vnd_oci\";s:6:\"method\";s:17:\"BusinessAnalytics\";s:6:\"params\";a:1:{i:0;s:8:\"extended\";}}', '', 1, 1, 1, 0);


CREATE TABLE IF NOT EXISTS `oc_lts_geo_zone` (
    `geo_zone_id` INT(10) NOT NULL AUTO_INCREMENT,
    `customer_id` int(11) NOT NULL,
    `vendor_id` int(11) NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `description` VARCHAR(255) NOT NULL,
    `date_added` datetime NOT NULL,
    `date_modified` datetime NOT NULL,
    PRIMARY KEY (`geo_zone_id`)
) ENGINE=MYISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `oc_lts_zone` (
    `zone_id` INT(10) NOT NULL AUTO_INCREMENT,
    `customer_id` int(11) NOT NULL,
    `vendor_id` int(11) NOT NULL,
    `country_id` INT(11) NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `code` VARCHAR(255) NOT NULL,
    `status` tinyint(1) NOT NULL DEFAULT 1,
    PRIMARY KEY (`zone_id`)
) ENGINE=MYISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `oc_lts_mads` (
    `mads_id` INT(10) NOT NULL AUTO_INCREMENT,
    `product_id` INT(11) NOT NULL,
    `customer_id` int(11) NOT NULL,
    `vendor_id` int(11) NOT NULL,
    `category_id` int(11) NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `commission` VARCHAR(255) NOT NULL,
    `description` text NOT NULL,
    `message` text NOT NULL,
    `image` varchar(255) DEFAULT NULL,
    `sub_products` text NOT NULL,
    `sub_products_quantity` text NOT NULL,
    `total_sellers_accepted` INT(22) NOT NULL DEFAULT 0,
    `sold_quantity` INT(22) NOT NULL DEFAULT 0,
    `earnings` decimal(15,4) NOT NULL DEFAULT 0.0000,
    PRIMARY KEY (`mads_id`)
) ENGINE=MYISAM DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `oc_lts_accepted_mads` (
    `id` INT(10) NOT NULL AUTO_INCREMENT,
    `product_id` INT(11) NOT NULL,
    `customer_id` int(11) NOT NULL,
    `accepted` tinyint(1) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=MYISAM DEFAULT CHARSET=utf8;