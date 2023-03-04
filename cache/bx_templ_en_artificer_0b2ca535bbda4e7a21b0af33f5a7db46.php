<div id="bx-uploader-file-{storage_object}-{file_id}" class="bx-tl-uploader-file bx-def-margin-sec-top bx-def-margin-sec-left-auto">
    <div class="bx-uploader-ghost-cnt">
        <div class="bx-tl-uploader-file-preview bx-def-round-corners">
            <input type="hidden" name="<?php echo $a['name'];?>[]" value="{file_id}" />
            <img src="https://salescouch.com/template/images/spacer.gif" style="background-image:url({file_icon})" />
        </div>
        <span class="bx-base-general-uploader-ghost">
            <a class="bx-btn bx-btn-small" href="javascript:void(0);" title="Delete" onclick="{js_instance_name}.deleteGhost('{file_id}')"><i class="sys-icon times"></i></a>
        </span>
    </div>
</div>