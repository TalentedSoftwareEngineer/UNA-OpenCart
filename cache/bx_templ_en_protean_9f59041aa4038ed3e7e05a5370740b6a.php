<div id="<?php echo $a['form_container_id'];?>" class="bx-uploader-form-cont bx-popup-width">
    <?php echo $a['file_field'];?>
    <div class="bx-uploader-loading"></div>
    <div class="bx-croppie-msg pb-2"></div>
    <div class="bx-croppie-err pb-2" id="<?php echo $a['errors_container_id'];?>"></div>
    <div class="bx-croppie-element my-4"></div>
    <div class="flex pt-4 bx-clearfix">
        <button class="bx-crop-action bx-crop-upload bx-btn bx-btn-disabled bx-btn-primary mt-2 mr-2">Upload</button>
        <button class="bx-crop-action bx-crop-rotate bx-btn bx-btn-disabled mt-2 mr-2" data-deg="-90">Rotate Left</button>
        <button class="bx-crop-action bx-crop-rotate bx-btn bx-btn-disabled mt-2 mr-2" data-deg="90">Rotate Right</button>
        <div class="bx-btn mt-2" onclick="<?php echo $a['uploader_instance_name'];?>.onClickCancel()">Close</div>
    </div>
</div>
<script>
setTimeout(function () {    
    <?php echo $a['uploader_instance_name'];?>.initUploader({
        bx_form: {
            uo: "<?php echo $a['engine'];?>",
            so: "<?php echo $a['storage_object'];?>",
            uid: "<?php echo $a['uniq_id'];?>",
            m: "<?php echo $a['multiple'];?>",
            c: "<?php echo $a['content_id'];?>",
            p: "<?php echo $a['storage_private'];?>",
            a: "upload"
        },
        viewport: {
            width: 240,
            height: 240,
            // type: 'circle'
        },
        boundary: {
            width: 280,
            height: 280
        },
        enableOrientation: true
    });
}, 100);
</script>