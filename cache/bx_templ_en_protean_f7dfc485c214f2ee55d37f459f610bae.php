<div id="bx-uploader-file-{storage_object}-{file_id}" class="bx-uploader-ghost cmts-uploader-file flex items-start mt-2">
    <div class="bx-uploader-ghost-cnt">
        <input type="hidden" name="<?php echo $a['name'];?>[]" value="{file_id}" />
        <div class="cmts-uploader-file-preview rounded mr-2">
            <img src="{file_icon}" class="bx-base-general-icon bx-base-general-icon-{file_id} rounded" />
        </div>
        <span class="bx-base-general-uploader-ghost">
            <a class="bx-btn bx-btn-small mr-2" href="javascript:void(0);" title="Delete" onclick="{js_instance_name}.deleteGhost('{file_id}');"><i class="sys-icon times"></i></a>
            <a class="bx-btn bx-btn-small mr-2" href="javascript:void(0);" title="Copy URL" onclick="bx_copy_to_clipboard('{file_url}');"><i class="sys-icon copy"></i></a>
        </span>
    </div>
</div>