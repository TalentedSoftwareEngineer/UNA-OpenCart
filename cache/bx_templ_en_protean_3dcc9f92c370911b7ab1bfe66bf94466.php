<a <?php echo $a['attrs'];?> href="javascript:void(0);" class="bx-btn bx-def-margin-sec-top bx-def-margin-sec-left cmts-uploader-button <?php echo $a['btn_class'];?>">
    <i class="sys-icon <?php echo $a['button_title'];?>"></i>
</a>
<div class="bx-clear"></div>
<div>
    <div id="<?php echo $a['div_id'];?>" class="filepond bx-uploader-html5-drop-area border-2 border-gray-300 border-dashed rounded-lg hidden"></div>
    <input type="text" id="<?php echo $a['focus_div_id'];?>" class="bx-uploader-html5-paste-catcher" tabindex="1" style="display: none" />
    <div id="<?php echo $a['errors_container_id'];?>" class="bx-uploader-html5-errors-area bx-def-font-small"></div>
    <div class="bx-clear"></div>
    <div class="relative">
        <div id="<?php echo $a['progress_div_id'];?>" class="hidden mt-2 w-full">
            <div class="w-full bg-gray-200 rounded-full h-1 dark:bg-gray-700">
                <div class="bg-blue-600 h-1 rounded-full progress_line" style="width: 0%"></div>
            </div>
        </div>
    </div>
</div>