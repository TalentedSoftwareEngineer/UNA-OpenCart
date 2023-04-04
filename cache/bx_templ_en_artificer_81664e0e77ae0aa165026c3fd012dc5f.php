<span class="<?php echo $a['style_prefix'];?>-counter-label flex items-center">
    <?php if($a['bx_if:show_icon']['condition']){ ?>
        <span class="sys-action-counter-icon <?php echo $a['bx_if:show_icon']['content']['style_prefix'];?>-counter-icon relative flex items-center justify-center ring-1  h-6 w-6 rounded-full ring-white dark:ring-gray-800 h-6 w-6 bg-gray-200 dark:bg-gray-800">
            <?php echo $a['bx_if:show_icon']['content']['name'];?>
        </span>
    <?php } ?>
    <?php if($a['bx_if:show_profiles']['condition']){ ?>
        <span class="sys-action-counter-profiles <?php echo $a['bx_if:show_profiles']['content']['style_prefix'];?>-counter-profiles flex">
            <?php if(is_array($a['bx_if:show_profiles']['content']['bx_repeat:profiles'])) for($i=0; $i<count($a['bx_if:show_profiles']['content']['bx_repeat:profiles']); $i++){ ?>
                <span class="sys-action-counter-profile <?php echo $a['bx_if:show_profiles']['content']['bx_repeat:profiles'][$i]['style_prefix'];?>-counter-profile block -ml-2 first:ml-0"><?php echo $a['bx_if:show_profiles']['content']['bx_repeat:profiles'][$i]['unit'];?></span>
            <?php } else if(is_string($a['bx_if:show_profiles']['content']['bx_repeat:profiles'])) echo $a['bx_if:show_profiles']['content']['bx_repeat:profiles']; ?>
        </span>
    <?php } ?>
    <?php if($a['bx_if:show_text']['condition']){ ?>
        <span class="sys-action-counter-text <?php echo $a['bx_if:show_text']['content']['style_prefix'];?>-counter-text ml-1"><?php echo $a['bx_if:show_text']['content']['text'];?></span>
    <?php } ?>
</span>