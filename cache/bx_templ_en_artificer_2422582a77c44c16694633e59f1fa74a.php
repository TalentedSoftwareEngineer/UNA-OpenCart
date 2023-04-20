<ul class="bx-menu-floating-blocks-big bx-menu-object-<?php echo $a['object'];?> flex flex-wrap justify-center">
    <?php if(is_array($a['bx_repeat:menu_items'])) for($i=0; $i<count($a['bx_repeat:menu_items']); $i++){ ?><li class="bx-def-round-corners w-32 rounded-md <?php echo $a['bx_repeat:menu_items'][$i]['class_add'];?>">
        <a href="<?php echo $a['bx_repeat:menu_items'][$i]['link'];?>" onclick="<?php echo $a['bx_repeat:menu_items'][$i]['onclick'];?>" class="flex flex-col items-center text-gray-600 dark:text-gray-300 dark:hover:bg-gray-700 hover:bg-gray-200 hover:text-gray-700 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium"<?php echo $a['bx_repeat:menu_items'][$i]['attrs'];?>>
            <div class="bx-menu-floating-blocks-icon m-2">
                <?php if($a['bx_repeat:menu_items'][$i]['bx_if:icon']['condition']){ ?><i class="sys-icon <?php echo $a['bx_repeat:menu_items'][$i]['bx_if:icon']['content']['icon'];?> block w-16 h-16 leading-16 text-6xl text-center"></i><?php } ?>
                <?php if($a['bx_repeat:menu_items'][$i]['bx_if:image']['condition']){ ?><img class="block w-16 h-16" style="background-image:url(<?php echo $a['bx_repeat:menu_items'][$i]['bx_if:image']['content']['icon_url'];?>)" src="http://localhost/UNA/template/images/icons/spacer.gif" /><?php } ?>
            </div>
            <div class="bx-menu-floating-blocks-title"><?php echo $a['bx_repeat:menu_items'][$i]['title'];?></div>
        </a>                
    </li><?php } else if(is_string($a['bx_repeat:menu_items'])) echo $a['bx_repeat:menu_items']; ?>
</ul>
<script language="javascript">
    $(document).ready(function () {
        // add default class to active menu items
        $('.bx-menu-floating-blocks-big > li.bx-menu-tab-active').not('.bx-def-color-bg-active').addClass('bx-def-color-bg-active');
    });
</script>