<div id="<?php echo $a['html_id'];?>" class="<?php echo $a['style_prefix'];?>-view <?php echo $a['style_prefix'];?>-view-<?php echo $a['view'];?> bx-def-bc-margin">
    <div class="<?php echo $a['style_prefix'];?>-cnt">
        <?php echo $a['content_before'];?>
        <div class="<?php echo $a['style_prefix'];?>-back-holder"><?php echo $a['back'];?></div>
        <div class="<?php echo $a['style_prefix'];?>-empty-holder"><?php echo $a['empty'];?></div>
        <div class="<?php echo $a['style_prefix'];?>-items-wrapper">
            <div class="<?php echo $a['style_prefix'];?>-items bx-def-margin-sec-leftright-neg"><?php echo $a['content'];?></div>
        </div>
        <div class="<?php echo $a['style_prefix'];?>-load-more-holder"><?php echo $a['load_more'];?></div>
        <?php echo $a['content_after'];?>
    </div>
    <?php echo $a['show_more'];?>
    <?php echo $a['view_image_popup'];?>
    <?php echo $a['live_update_code'];?>
    <?php echo $a['js_content'];?>
</div>