<?php echo $a['uploader_instance_name'];?> = new BxDolUploaderHTML5('<?php echo $a['engine'];?>', '<?php echo $a['storage_object'];?>', '<?php echo $a['uniq_id'];?>', {
    'multiple': <?php echo $a['multiple'];?>,
    'content_id': '<?php echo $a['content_id'];?>',
    'images_transcoder' : '<?php echo $a['images_transcoder'];?>',
    'storage_private' : '<?php echo $a['storage_private'];?>',
    'template_error_msg': '<div class="bx-uploader-msg-err">{error}</div>',
    'template_ghost': <?php echo $a['template_ghost'];?>,
    'reordering': <?php echo $a['is_init_reordering'];?>,
    'maxFilesize': <?php echo $a['max_file_size'];?>/1024.0/1024.0,
    'acceptedFiles': <?php echo $a['accepted_files'];?>,
    'resizeWidth': <?php echo $a['resize_width'];?>,
    'resizeHeight': <?php echo $a['resize_height'];?>,
    'resizeMethod': <?php echo $a['resize_method'];?>,
    'dictDefaultMessage': 'Drop files here to upload or click here to select files',
    'dictFileTooBig': 'File is too big - {{filesize}} MB, max filesize is {{maxFilesize}} MB.',
    'dictMaxFilesExceeded': 'You can not upload any more files.',
    'dictInvalidFileType': 'You can&apos;t upload files of this type.',
});
<?php if($a['bx_if:restore_ghosts']['condition']){ ?><?php echo $a['bx_if:restore_ghosts']['content']['uploader_instance_name'];?>.restoreGhosts(<?php echo $a['bx_if:restore_ghosts']['content']['is_init_reordering'];?>);<?php } ?>