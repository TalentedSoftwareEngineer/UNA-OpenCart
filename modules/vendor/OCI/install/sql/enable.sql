
-- SETTINGS

SET @iTypeOrder = (SELECT IFNULL(MAX(`order`), 0) + 1 FROM `sys_options_types` WHERE `group` = 'modules');
INSERT INTO `sys_options_types` (`group`, `name`, `caption`, `icon`, `order`) VALUES 
('modules', 'vnd_test', '_vnd_test_adm_stg_cpt_type', 'vnd_test@modules/vendor/OCI/|std-mi.png', @iTypeOrder);
SET @iTypeId = LAST_INSERT_ID();

INSERT INTO `sys_options_categories` (`type_id`, `name`, `caption`, `order` )  
VALUES (@iTypeId, 'vnd_test_general', '_vnd_test_adm_stg_cpt_category_general', 1);
SET @iCategoryId = LAST_INSERT_ID();

INSERT INTO `sys_options`(`category_id`, `name`, `caption`, `value`, `type`, `extra`, `check`, `check_error`, `order`) VALUES
(@iCategoryId, 'vnd_test_repeat_times', '_vnd_test_option_repeat_times', '3', 'digit', '', '', '', 1);

-- Adding blocks to profile page
--
-- Dumping data for 'bx_persons_view_profile' page
--

INSERT INTO `sys_pages_blocks` (`object`, `cell_id`, `module`, `title_system`, `title`, `designbox_id`, `class`, `async`, `cache_lifetime`, `submenu`, `tabs`, `hidden_on`, `visible_for_levels`, `type`, `content`, `help`, `deletable`, `copyable`, `active`, `order`) VALUES
('View_OP_Detail', 1, 'vnd_test', '_vnd_test_view_detail_title', '_vnd_test_view_detail_title', 11, '', 0, 0, '', 0 , 0, 2147483647, 'service', 'a:3:{s:6:\"module\";s:8:\"vnd_test\";s:6:\"method\";s:12:\"ViewDetailOP\";s:6:\"params\";a:1:{i:0;s:8:\"extended\";}}', '', 1, 1, 1, 0);

INSERT INTO `sys_pages_blocks` (`object`, `cell_id`, `module`, `title_system`, `title`, `designbox_id`, `class`, `async`, `cache_lifetime`, `submenu`, `tabs`, `hidden_on`, `visible_for_levels`, `type`, `content`, `help`, `deletable`, `copyable`, `active`, `order`) VALUES
('Search-OP-Products', 1, 'vnd_test', '_vnd_test_block_search_products_title', '_vnd_test_block_search_products_title', 11, '', 0, 0, '', 0 , 0, 2147483647, 'service', 'a:3:{s:6:\"module\";s:8:\"vnd_test\";s:6:\"method\";s:14:\"SearchProducts\";s:6:\"params\";a:1:{i:0;s:8:\"extended\";}}', '', 1, 1, 1, 0);

INSERT INTO `sys_pages_blocks` (`object`, `cell_id`, `module`, `title_system`, `title`, `designbox_id`, `class`, `async`, `cache_lifetime`, `submenu`, `tabs`, `hidden_on`, `visible_for_levels`, `type`, `content`, `help`, `deletable`, `copyable`, `active`, `order`) VALUES
('Upload-New-Products', 1, 'vnd_test', '_vnd_test_upload_new_products_title', '_vnd_test_upload_new_products_title', 11, '', 0, 0, '', 0 , 0, 2147483647, 'service', 'a:3:{s:6:\"module\";s:8:\"vnd_test\";s:6:\"method\";s:16:\"UploadNewProduct\";s:6:\"params\";a:1:{i:0;s:8:\"extended\";}}', '', 1, 1, 1, 0);

INSERT INTO `sys_pages_blocks` (`object`, `cell_id`, `module`, `title_system`, `title`, `designbox_id`, `class`, `async`, `cache_lifetime`, `submenu`, `tabs`, `hidden_on`, `visible_for_levels`, `type`, `content`, `help`, `deletable`, `copyable`, `active`, `order`) VALUES
('Move-OC-Link', 1, 'vnd_test', '_vnd_test_move_oc_link_title', '_vnd_test_move_oc_link_title', 11, '', 0, 0, '', 0 , 0, 2147483647, 'service', 'a:3:{s:6:\"module\";s:8:\"vnd_test\";s:6:\"method\";s:10:\"MoveOcLink\";s:6:\"params\";a:1:{i:0;s:8:\"extended\";}}', '', 1, 1, 1, 0);

INSERT INTO `sys_pages_blocks` (`object`, `cell_id`, `module`, `title_system`, `title`, `designbox_id`, `class`, `async`, `cache_lifetime`, `submenu`, `tabs`, `hidden_on`, `visible_for_levels`, `type`, `content`, `help`, `deletable`, `copyable`, `active`, `order`) VALUES
('Business', 1, 'vnd_test', '_vnd_test_business_title', '_vnd_test_business_title', 11, '', 0, 0, '', 0 , 0, 2147483647, 'service', 'a:3:{s:6:\"module\";s:8:\"vnd_test\";s:6:\"method\";s:8:\"Business\";s:6:\"params\";a:1:{i:0;s:8:\"extended\";}}', '', 1, 1, 1, 0);

