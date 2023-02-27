<div class="bx-image-edit-buttons <?php echo $a['image_exists'];?> bx-image-edit-buttons-<?php echo $a['unique_id'];?> hidden">
    <a href="javascript:" class="bx-btn bx-btn-small bx-image-edit-buttons-edit hidden" title="Change position" onclick="oBxDolImageTweak<?php echo $a['unique_id'];?>.changePosition()"><i class="sys-icon arrows-alt"></i></a>
    <a href="javascript:" class="bx-btn bx-btn-small bx-image-edit-buttons-save hidden" title="Save" onclick="oBxDolImageTweak<?php echo $a['unique_id'];?>.savePosition()"><i class="sys-icon check"></i></a>
    <a href="javascript:" class="bx-btn bx-btn-small bx-image-edit-buttons-cancel hidden" title="Cancel" onclick="oBxDolImageTweak<?php echo $a['unique_id'];?>.cancelPosition()"><i class="sys-icon times"></i></a>
    <a href="javascript:" class="bx-btn bx-btn-small bx-image-edit-buttons-upload" title="Upload new" onclick="oBxDolImageTweak<?php echo $a['unique_id'];?>.showUploaderForm()"><i class="sys-icon upload"></i></a>
    <?php echo $a['uploader'];?>
</div>
<div class="hidden">
    <div id="bx-form-input-files-<?php echo $a['unique_id'];?>-upload-result"></div>
</div>
<?php echo $a['uploader_js'];?>
<script> 
    oBxDolImageTweak<?php echo $a['unique_id'];?> = new BxDolImageTweak('<?php echo $a['unique_id'];?>', '<?php echo $a['action_url'];?>', '<?php echo $a['id'];?>', '<?php echo $a['field'];?>', '<?php echo $a['js_object'];?>', <?php echo $a['allow_tweak'];?>);
</script>