
-- SETTINGS

DELETE FROM `top`, `toc`, `to` USING `sys_options_types` AS `top` LEFT JOIN `sys_options_categories` AS `toc` ON `top`.`id`=`toc`.`type_id` LEFT JOIN `sys_options` AS `to` ON `toc`.`id`=`to`.`category_id` WHERE `top`.`name` = 'vnd_oci';

-- Deleting profile blocks of vnd_oci
DELETE FROM `sys_pages_blocks` WHERE `module`='vnd_oci';
