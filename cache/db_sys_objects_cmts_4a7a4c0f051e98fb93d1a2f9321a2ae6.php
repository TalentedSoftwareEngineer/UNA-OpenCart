<?php $mixedData=array (
  'bx_persons' => 
  array (
    'system_id' => '1',
    'name' => 'bx_persons',
    'module' => 'bx_persons',
    'table' => 'bx_persons_cmts',
    'chars_post_min' => '1',
    'chars_post_max' => '5000',
    'chars_display_max' => '1000',
    'html' => '3',
    'per_view' => '5',
    'per_view_replies' => '3',
    'browse_type' => 'tail',
    'is_browse_switch' => '1',
    'post_form_position' => 'bottom',
    'number_of_levels' => '1',
    'is_display_switch' => '1',
    'is_ratable' => '1',
    'viewing_threshold' => '-3',
    'is_on' => '1',
    'root_style_prefix' => 'cmt',
    'base_url' => 'page.php?i=view-persons-profile&id={object_id}',
    'object_vote' => '',
    'object_reaction' => '',
    'object_score' => '',
    'object_report' => '',
    'trigger_table' => 'bx_persons_data',
    'trigger_field_id' => 'id',
    'trigger_field_author' => 'author',
    'trigger_field_title' => 'fullname',
    'trigger_field_comments' => 'comments',
    'class_name' => 'BxPersonsCmts',
    'class_file' => 'modules/boonex/persons/classes/BxPersonsCmts.php',
  ),
  'bx_persons_notes' => 
  array (
    'system_id' => '2',
    'name' => 'bx_persons_notes',
    'module' => 'bx_persons',
    'table' => 'bx_persons_cmts_notes',
    'chars_post_min' => '1',
    'chars_post_max' => '5000',
    'chars_display_max' => '1000',
    'html' => '0',
    'per_view' => '5',
    'per_view_replies' => '3',
    'browse_type' => 'tail',
    'is_browse_switch' => '1',
    'post_form_position' => 'bottom',
    'number_of_levels' => '1',
    'is_display_switch' => '1',
    'is_ratable' => '1',
    'viewing_threshold' => '-3',
    'is_on' => '1',
    'root_style_prefix' => 'cmt',
    'base_url' => 'page.php?i=view-post&id={object_id}',
    'object_vote' => '',
    'object_reaction' => '',
    'object_score' => '',
    'object_report' => '',
    'trigger_table' => 'bx_persons_data',
    'trigger_field_id' => 'id',
    'trigger_field_author' => 'author',
    'trigger_field_title' => 'fullname',
    'trigger_field_comments' => '',
    'class_name' => 'BxTemplCmtsNotes',
    'class_file' => '',
  ),
  'bx_timeline' => 
  array (
    'system_id' => '3',
    'name' => 'bx_timeline',
    'module' => 'bx_timeline',
    'table' => 'bx_timeline_comments',
    'chars_post_min' => '1',
    'chars_post_max' => '5000',
    'chars_display_max' => '1000',
    'html' => '3',
    'per_view' => '5',
    'per_view_replies' => '3',
    'browse_type' => 'tail',
    'is_browse_switch' => '1',
    'post_form_position' => 'bottom',
    'number_of_levels' => '1',
    'is_display_switch' => '1',
    'is_ratable' => '1',
    'viewing_threshold' => '-3',
    'is_on' => '1',
    'root_style_prefix' => 'cmt',
    'base_url' => 'page.php?i=item&id={object_id}',
    'object_vote' => '',
    'object_reaction' => '',
    'object_score' => '',
    'object_report' => '',
    'trigger_table' => 'bx_timeline_events',
    'trigger_field_id' => 'id',
    'trigger_field_author' => 'object_id',
    'trigger_field_title' => 'title',
    'trigger_field_comments' => 'comments',
    'class_name' => 'BxTimelineCmts',
    'class_file' => 'modules/boonex/timeline/classes/BxTimelineCmts.php',
  ),
  'bx_timeline_notes' => 
  array (
    'system_id' => '4',
    'name' => 'bx_timeline_notes',
    'module' => 'bx_timeline',
    'table' => 'bx_timeline_cmts_notes',
    'chars_post_min' => '1',
    'chars_post_max' => '5000',
    'chars_display_max' => '1000',
    'html' => '0',
    'per_view' => '5',
    'per_view_replies' => '3',
    'browse_type' => 'tail',
    'is_browse_switch' => '1',
    'post_form_position' => 'bottom',
    'number_of_levels' => '1',
    'is_display_switch' => '1',
    'is_ratable' => '1',
    'viewing_threshold' => '-3',
    'is_on' => '1',
    'root_style_prefix' => 'cmt',
    'base_url' => 'page.php?i=view-post&id={object_id}',
    'object_vote' => '',
    'object_reaction' => '',
    'object_score' => '',
    'object_report' => '',
    'trigger_table' => 'bx_timeline_events',
    'trigger_field_id' => 'id',
    'trigger_field_author' => 'object_owner_id',
    'trigger_field_title' => 'title',
    'trigger_field_comments' => '',
    'class_name' => 'BxTemplCmtsNotes',
    'class_file' => '',
  ),
); ?>