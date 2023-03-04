<?php echo $a['uploader_instance_name'];?> = new BxDolUploaderRecordVideo('<?php echo $a['engine'];?>', '<?php echo $a['storage_object'];?>', '<?php echo $a['uniq_id'];?>', {
    'multiple': <?php echo $a['multiple'];?>,
    'content_id': '<?php echo $a['content_id'];?>',
    'images_transcoder' : '<?php echo $a['images_transcoder'];?>',
    'storage_private' : '<?php echo $a['storage_private'];?>',
    'template_error_msg': '<div class="bx-uploader-msg-err">{error}</div>',
    'template_ghost': <?php echo $a['template_ghost'];?>,
    'reordering': <?php echo $a['is_init_reordering'];?>,
    'audio_bitrate': <?php echo $a['audio_bitrate'];?>,
    'video_bitrate': <?php echo $a['video_bitrate'];?>
});
<?php if($a['bx_if:restore_ghosts']['condition']){ ?><?php echo $a['bx_if:restore_ghosts']['content']['uploader_instance_name'];?>.restoreGhosts(<?php echo $a['bx_if:restore_ghosts']['content']['is_init_reordering'];?>);<?php } ?>