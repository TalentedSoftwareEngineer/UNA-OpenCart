<ul class="bx-menu-floating-blocks-wide bx-menu-object-<?php echo $a['object'];?>">
    <?php if(is_array($a['bx_repeat:menu_items'])) for($i=0; $i<count($a['bx_repeat:menu_items']); $i++){ ?>
        <li class="bx-menu-item bx-menu-item-<?php echo $a['bx_repeat:menu_items'][$i]['name'];?> <?php echo $a['bx_repeat:menu_items'][$i]['class_add'];?> bx-stl-mil-hover group relative flex justify-between items-center px-4 text-gray-600 dark:text-gray-300 text-sm font-medium">
            <a class="flex flex-1 items-center py-2" href="<?php echo $a['bx_repeat:menu_items'][$i]['link'];?>" onclick="<?php echo $a['bx_repeat:menu_items'][$i]['onclick'];?>"<?php echo $a['bx_repeat:menu_items'][$i]['attrs'];?>>
                <div class="bx-menu-floating-blocks-icon flex items-center justify-center h-5 w-5 mr-2">
                    <?php if($a['bx_repeat:menu_items'][$i]['bx_if:icon']['condition']){ ?><i class="sys-icon <?php echo $a['bx_repeat:menu_items'][$i]['bx_if:icon']['content']['icon'];?>"></i><?php } ?>
                    <?php if($a['bx_repeat:menu_items'][$i]['bx_if:image']['condition']){ ?><img class="h-5 w-5" style="background-image:url(<?php echo $a['bx_repeat:menu_items'][$i]['bx_if:image']['content']['icon_url'];?>)" src="https://salescouch.com/template/images/icons/spacer.gif" /><?php } ?>
                    <?php if($a['bx_repeat:menu_items'][$i]['bx_if:icon-html']['condition']){ ?><?php echo $a['bx_repeat:menu_items'][$i]['bx_if:icon-html']['content']['icon'];?><?php } ?>
                </div>
                <div class="bx-menu-floating-blocks-title"><?php echo $a['bx_repeat:menu_items'][$i]['title'];?></div>
            </a>
            <?php if($a['bx_repeat:menu_items'][$i]['bx_if:addon']['condition']){ ?><?php echo $a['bx_repeat:menu_items'][$i]['bx_if:addon']['content']['addonf'];?><?php } ?>
        </li>
    <?php } else if(is_string($a['bx_repeat:menu_items'])) echo $a['bx_repeat:menu_items']; ?>
</ul>
<script language="javascript">
    $(document).ready(function () {
        // add default class to active menu items
        $('.bx-menu-floating-blocks-wide > li.bx-menu-tab-active').not('.bx-def-color-bg-active').addClass('bx-def-color-bg-active');
    });
</script>