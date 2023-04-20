<ul id="bx-menu-main-submenu" class="bx-menu-main-submenu bx-menu-object-<?php echo $a['object'];?> inline-flex items-stretch w-max">
    <?php if(is_array($a['bx_repeat:menu_items'])) for($i=0; $i<count($a['bx_repeat:menu_items']); $i++){ ?>
        <li class="bx-menu-item bx-menu-item-<?php echo $a['bx_repeat:menu_items'][$i]['name'];?> <?php echo $a['bx_repeat:menu_items'][$i]['class_add'];?> flex">
            <a class="group block relative py-4 px-4 text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-gray-700 dark:hover:text-gray-200 whitespace-nowrap text-sm font-medium text-center hover:bg-transparent focus:z-10 box-sizing" href="<?php echo $a['bx_repeat:menu_items'][$i]['link'];?>" onclick="<?php echo $a['bx_repeat:menu_items'][$i]['onclick'];?>"<?php echo $a['bx_repeat:menu_items'][$i]['attrs'];?>><?php echo $a['bx_repeat:menu_items'][$i]['title'];?><span class="bx-mi-underline absolute inset-x-0 bottom-0 h-0.5 group-hover:bg-gray-500 rounded-md"></span></a>
        </li>
    <?php } else if(is_string($a['bx_repeat:menu_items'])) echo $a['bx_repeat:menu_items']; ?>
</ul>