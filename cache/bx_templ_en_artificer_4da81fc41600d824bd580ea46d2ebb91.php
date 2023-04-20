<div id="<?php echo $a['id'];?>" class="bx-popup-wrapper bx-popup-box-wrapper box-border" style="<?php echo $a['wrapper_style'];?>" role="dialog" aria-describedby="<?php echo $a['id'];?>_title">
    <div class="bx-popup-gap mx-4 my-px">
        <div class="bx-popup bx-popup-box bx-popup-width bx-popup-border bx-popup-color-bg">
            <div class="bx-popup-header flex items-center justify-between p-3 md:p-4 lg:p-6">
                <div class="text-lg lg:text-xl leading-6 font-semibold text-gray-800 dark:text-gray-100" id="<?php echo $a['id'];?>_title"><?php echo $a['title'];?></div>
                <div class="bx-popup-close-wrapper relative">
                    <a href="javascript:void(0);" class="bx-popup-element-close flex items-center justify-center w-6 h-6 text-base"><i class="sys-icon times text-gray-800 dark:text-gray-100"></i></a>
                </div>
            </div>
            <div class="bx-popup-content px-4 pb-4"><?php echo $a['content'];?></div>
        </div>
    </div>
</div>