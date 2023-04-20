<div <?php echo $a['tr_attrs'];?>>
    <?php if($a['bx_if:show_caption']['condition']){ ?>
        <div class="bx-form-caption<?php echo $a['bx_if:show_caption']['content']['class_caption'];?>"><?php echo $a['bx_if:show_caption']['content']['caption'];?><?php echo $a['bx_if:show_caption']['content']['required'];?><?php echo $a['bx_if:show_caption']['content']['help'];?></div>
    <?php } ?>
    <div class="bx-form-value<?php echo $a['class_value'];?>">
        <div class="bx-clear"></div>
        <?php echo $a['value'];?>
        <div class="bx-clear"></div>
    </div>
</div>