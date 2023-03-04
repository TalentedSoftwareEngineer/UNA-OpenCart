<div id="sys-create-post-form" class="sys-create-post-form relative">
    <div class="sys-cpf-cnt">
        <div id="sys-cpf-form">
            <div class="sys-cpf-form sys-cpf-loading bx-def-bc-margin" style="display:none">
                <div class="flex items-center p-4">
                    <div class="flex-0 h-10 w-10 bg-gray-200 dark:bg-gray-700 rounded-full">&nbsp;</div>
                    <div class="flex-1 ml-4 space-y-2 animate-pulse">
                        <div class="h-8 w-full bg-gray-300 dark:bg-gray-600 rounded-md">&nbsp;</div>
                    </div>
                </div>
            </div>
            <div class="sys-cpf-form sys-cpf-default flex items-center p-4 bg-gray-50 hover:bg-white dark:bg-gray-900/50 dark:hover:bg-gray-900 shadow hover:shadow-md ring-1 ring-gray-300 dark:ring-gray-700 rounded-md cursor-pointer" onclick="<?php echo $a['js_object'];?>.getForm('<?php echo $a['default'];?>')">
                <div class="sys-cpf-user"><?php echo $a['user_thumb'];?></div>
                <div class="sys-cpf-content flex text-base ml-4 text-gray-500 dark:text-gray-400">
                    <div><?php echo $a['placeholder'];?></div>
                </div>
            </div>
            <div class="sys-cpf-form sys-cpf-<?php echo $a['default'];?>" style="display:none"><?php echo $a['form'];?></div>
            <div class="sys-cpf-close absolute hidden right-0 bottom-0"><a class="bx-btn" href="javascript:void(0)" onclick="<?php echo $a['js_object'];?>.hideForm(this)"><i class="sys-icon times"></i></a></div>
        </div>
    </div>
</div>
<?php echo $a['js_content'];?>