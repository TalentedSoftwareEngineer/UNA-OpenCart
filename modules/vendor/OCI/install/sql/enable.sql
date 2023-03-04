
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

