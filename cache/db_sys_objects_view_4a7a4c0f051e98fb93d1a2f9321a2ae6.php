<?php $mixedData=array (
  'bx_persons' => 
  array (
    'id' => '1',
    'name' => 'bx_persons',
    'module' => 'bx_persons',
    'table_track' => 'bx_persons_views_track',
    'period' => '86400',
    'pruning' => '31536000',
    'is_on' => '1',
    'trigger_table' => 'bx_persons_data',
    'trigger_field_id' => 'id',
    'trigger_field_author' => 'author',
    'trigger_field_count' => 'views',
    'class_name' => '',
    'class_file' => '',
  ),
  'bx_timeline' => 
  array (
    'id' => '2',
    'name' => 'bx_timeline',
    'module' => '',
    'table_track' => 'bx_timeline_views_track',
    'period' => '86400',
    'pruning' => '31536000',
    'is_on' => '1',
    'trigger_table' => 'bx_timeline_events',
    'trigger_field_id' => 'id',
    'trigger_field_author' => 'object_id',
    'trigger_field_count' => 'views',
    'class_name' => '',
    'class_file' => '',
  ),
); ?>