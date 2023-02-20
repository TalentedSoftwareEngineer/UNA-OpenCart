<div class="<?php echo $a['style_prefix'];?>-reply<?php echo $a['class'];?> mb-4">
    <div class="<?php echo $a['style_prefix'];?>-cont <?php echo $a['style_prefix'];?>-post-reply">
        <div class="<?php echo $a['style_prefix'];?>-cont-cnt">
            <?php if($a['bx_if:show_form_min']['condition']){ ?>
                <div class="<?php echo $a['bx_if:show_form_min']['content']['style_prefix'];?>-body-min<?php echo $a['bx_if:show_form_min']['content']['class_body_min'];?> flex items-center">
                    <div class="<?php echo $a['bx_if:show_form_min']['content']['style_prefix'];?>-bm-user"><?php echo $a['bx_if:show_form_min']['content']['author_unit'];?></div>
                    <div class="<?php echo $a['bx_if:show_form_min']['content']['style_prefix'];?>-bm-content w-full pl-2 lg:pl-4 text-sm text-gray-500 dark:text-gray-400 box-border"><?php echo $a['bx_if:show_form_min']['content']['placeholder'];?></div>
                </div>
            <?php } ?>
            <div class="<?php echo $a['style_prefix'];?>-body<?php echo $a['class_body'];?>"><?php echo $a['form'];?></div>
        </div>
    </div>
</div>