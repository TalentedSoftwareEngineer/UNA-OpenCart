<ul id="bx-menu-inter-<?php echo $this->parseSystemKey('id', $mixedKeyWrapperHtml);?>" class="bx-menu-inter-vert bx-menu-object-<?php echo $a['object'];?>">
    <?php if(is_array($a['bx_repeat:menu_items'])) for($i=0; $i<count($a['bx_repeat:menu_items']); $i++){ ?>
        <li id="<?php echo $a['bx_repeat:menu_items'][$i]['name'];?>-act" class="bx-menu-inter-act <?php echo $a['bx_repeat:menu_items'][$i]['class_wrp_act'];?> bx-menu-tab-active">
            <div class="<?php echo $a['bx_repeat:menu_items'][$i]['class'];?> bx-stl-mil group flex flex-auto items-center truncate" title="<?php echo $a['bx_repeat:menu_items'][$i]['title_attr'];?>">
                <span class="bx-menu-item-title bx-stl-mit"><?php echo $a['bx_repeat:menu_items'][$i]['title'];?></span>
            </div>
        </li>
        <li id="<?php echo $a['bx_repeat:menu_items'][$i]['name'];?>-pas" class="bx-menu-inter-pas <?php echo $a['bx_repeat:menu_items'][$i]['class_wrp_pas'];?>">
            <div class="bx-menu-item-cnt bx-stl-mil-wo-gaps">
                <a id="<?php echo $a['bx_repeat:menu_items'][$i]['name'];?>" class="<?php echo $a['bx_repeat:menu_items'][$i]['class'];?> bx-stl-mil-gaps group flex flex-auto items-center truncate" href="<?php echo $a['bx_repeat:menu_items'][$i]['link'];?>" onclick="<?php echo $a['bx_repeat:menu_items'][$i]['onclick'];?>" title="<?php echo $a['bx_repeat:menu_items'][$i]['title_attr'];?>"<?php echo $a['bx_repeat:menu_items'][$i]['attrs'];?>>
                    <span class="bx-menu-item-title bx-stl-mit"><?php echo $a['bx_repeat:menu_items'][$i]['title'];?></span>
                </a>
            </div>
        </li>
    <?php } else if(is_string($a['bx_repeat:menu_items'])) echo $a['bx_repeat:menu_items']; ?>
</ul>
<script language="javascript">
    $(document).ready(function() {
    	$('#bx-menu-inter-<?php echo $this->parseSystemKey('id', $mixedKeyWrapperHtml);?>').find('a').bind('click', function() {
            var sId = $(this).attr('id');
            var sClassHidden = 'bx-menu-inter-hidden';
            $(this).parents('li:first').siblings('.bx-menu-inter-act:not(.' + sClassHidden + ')').addClass(sClassHidden).siblings('.bx-menu-inter-pas.' + sClassHidden).removeClass(sClassHidden).siblings('#' + sId + '-pas:not(.' + sClassHidden + ')').addClass(sClassHidden).siblings('#' + sId + '-act.' + sClassHidden).removeClass(sClassHidden);
    	});
    });
</script>