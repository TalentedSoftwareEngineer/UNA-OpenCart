<div class="bx-menu-floating-blocks-info bx-def-font-grayed bx-def-font-small">
    <?php if($a['bx_if:counter3']['condition']){ ?>
        <strong><?php echo $a['bx_if:counter3']['content']['total_value'];?> <?php echo $a['bx_if:counter3']['content']['total_caption'];?> </strong>
    <?php } ?>
    <?php if($a['bx_if:counter1']['condition']){ ?>
        <span class="divider">&bull; </span><span><?php echo $a['bx_if:counter1']['content']['value'];?> <?php echo $a['bx_if:counter1']['content']['caption'];?></span>
    <?php } ?>
    <?php if($a['bx_if:counter2']['condition']){ ?>
        <span class="divider">&bull; </span><span class="col-red1" onclick="location.href = '<?php echo $a['bx_if:counter2']['content']['link'];?>'; return false"><?php echo $a['bx_if:counter2']['content']['value'];?> <?php echo $a['bx_if:counter2']['content']['caption'];?></span>
    <?php } ?>
</div>