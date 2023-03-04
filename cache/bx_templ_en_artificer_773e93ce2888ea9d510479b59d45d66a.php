<ul id="bx-menu-footer" class="bx-menu-hor bx-menu-object-<?php echo $a['object'];?> flex flex-wrap items-center justify-center space-x-4">
    <?php if(is_array($a['bx_repeat:menu_items'])) for($i=0; $i<count($a['bx_repeat:menu_items']); $i++){ ?>
        <li class="bx-stl-mil-wo-bg-gaps <?php echo $a['bx_repeat:menu_items'][$i]['class_add'];?>">
            <a href="<?php echo $a['bx_repeat:menu_items'][$i]['link'];?>" onclick="<?php echo $a['bx_repeat:menu_items'][$i]['onclick'];?>" title="<?php echo $a['bx_repeat:menu_items'][$i]['title_attr'];?>"<?php echo $a['bx_repeat:menu_items'][$i]['attrs'];?>>
                <?php if($a['bx_repeat:menu_items'][$i]['bx_if:image']['condition']){ ?><img title="<?php echo $a['bx_repeat:menu_items'][$i]['bx_if:image']['content']['title_attr'];?>" src="<?php echo $a['bx_repeat:menu_items'][$i]['bx_if:image']['content']['icon_url'];?>" /><?php } ?>
                <?php if($a['bx_repeat:menu_items'][$i]['bx_if:icon']['condition']){ ?><i class="sys-icon <?php echo $a['bx_repeat:menu_items'][$i]['bx_if:icon']['content']['icon'];?>"></i><?php } ?>
                <?php if($a['bx_repeat:menu_items'][$i]['bx_if:title']['condition']){ ?><?php echo $a['bx_repeat:menu_items'][$i]['bx_if:title']['content']['title'];?><?php } ?>
            </a>
        </li>
    <?php } else if(is_string($a['bx_repeat:menu_items'])) echo $a['bx_repeat:menu_items']; ?>
</ul>