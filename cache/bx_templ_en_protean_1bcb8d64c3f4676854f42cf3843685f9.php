<div id="bx-uploader-file-{storage_object}-{file_id}" class="bx-uploader-ghost bx-uploader-ghost-single mt-2 bx-clearfix">
    <div class="bx-uploader-ghost-cnt">
        <div class="bx-base-general-icon-wrapper">
            <input type="hidden" name="<?php echo $a['name'];?>[]" value="{file_id}" />
            <img src="{file_icon}" class="bx-def-round-corners bx-base-general-icon bx-base-general-icon-{file_id}" />
        </div>
        <span class="bx-base-general-uploader-ghost bx-base-general-uploader-ghost-single">
            <a class="bx-btn bx-btn-small mt-2 mr-2" href="javascript:void(0);" title="Delete" onclick="bx_base_general_delete_ghost('{file_id}', '{file_url}', '{file_icon}', ['<?php echo $this->parseSystemKey('editor_id', $mixedKeyWrapperHtml);?>'], {js_instance_name});"><i class="sys-icon times"></i></a>
        </span>
    </div>
</div>