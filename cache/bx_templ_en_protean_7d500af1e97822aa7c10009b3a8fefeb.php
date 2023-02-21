<div id="bx-std-widget-<?php echo $a['id'];?>" class="bx-std-widget <?php echo $a['widget_disabled_class'];?> <?php echo $a['widget_featured_class'];?>" style="<?php echo $a['widget_styles'];?>">
    <div class="bx-std-widget-cont">
        <div class="bx-std-widget-icon bx-std-widget-icon-trans">
            <a class="bx-std-widget-link" href="<?php echo $a['url'];?>" <?php if($a['bx_if:show_click_icon']['condition']){ ?>onClick="<?php echo $a['bx_if:show_click_icon']['content']['content'];?>"<?php } ?>>
                <?php if($a['bx_if:icon']['condition']){ ?>
                    <img src="http://localhost/UNA-v.13.0.0-RC2/studio/template/images/icons/wi-empty.png" />
                    <i class="sys-icon <?php echo $a['bx_if:icon']['content']['icon'];?>"></i>
                <?php } ?>
                <?php if($a['bx_if:image']['condition']){ ?><img src="<?php echo $a['bx_if:image']['content']['icon_url'];?>" /><?php } ?>
            </a>
        </div>
        <?php if($a['bx_if:show_notice']['condition']){ ?>
           <div class="bx-std-widget-notices bx-def-box-sizing">
               <?php echo $a['bx_if:show_notice']['content']['content'];?>
           </div>
        <?php } ?>

        <?php if($a['bx_if:show_actions']['condition']){ ?>
            <div class="bx-std-widget-actions">
                <div class="bx-std-widget-actions-cnt">
                    <?php if(is_array($a['bx_if:show_actions']['content']['bx_repeat:actions'])) for($i=0; $i<count($a['bx_if:show_actions']['content']['bx_repeat:actions']); $i++){ ?>
                        <div class="bx-std-widget-action bx-def-box-sizing">
                            <a class="bx-std-widget-action bx-std-wa-<?php echo $a['bx_if:show_actions']['content']['bx_repeat:actions'][$i]['name'];?>" href="<?php echo $a['bx_if:show_actions']['content']['bx_repeat:actions'][$i]['url'];?>" <?php if($a['bx_if:show_actions']['content']['bx_repeat:actions'][$i]['bx_if:show_click']['condition']){ ?>onClick="<?php echo $a['bx_if:show_actions']['content']['bx_repeat:actions'][$i]['bx_if:show_click']['content']['content'];?>"<?php } ?> title="<?php echo $a['bx_if:show_actions']['content']['bx_repeat:actions'][$i]['caption'];?>">
                                <?php if($a['bx_if:show_actions']['content']['bx_repeat:actions'][$i]['bx_if:action_icon']['condition']){ ?><i class="sys-icon <?php echo $a['bx_if:show_actions']['content']['bx_repeat:actions'][$i]['bx_if:action_icon']['content']['icon'];?>" alt="<?php echo $a['bx_if:show_actions']['content']['bx_repeat:actions'][$i]['bx_if:action_icon']['content']['caption'];?>"></i><?php } ?>
                                <?php if($a['bx_if:show_actions']['content']['bx_repeat:actions'][$i]['bx_if:action_image']['condition']){ ?><img src="<?php echo $a['bx_if:show_actions']['content']['bx_repeat:actions'][$i]['bx_if:action_image']['content']['icon_url'];?>"  alt="<?php echo $a['bx_if:show_actions']['content']['bx_repeat:actions'][$i]['bx_if:action_image']['content']['caption'];?>" /><?php } ?>
                            </a>
                        </div>
                    <?php } else if(is_string($a['bx_if:show_actions']['content']['bx_repeat:actions'])) echo $a['bx_if:show_actions']['content']['bx_repeat:actions']; ?>
                </div>
            </div>
        <?php } ?>

        <div class="bx-std-widget-icon-jitter" style="display:none">
            <img class="bx-def-round-corners" src="http://localhost/UNA-v.13.0.0-RC2/studio/template/images/bx-std-spacer.gif" />
        </div>

        <div class="bx-std-widget-loading"></div>

        <div class="bx-std-widget-caption">
            <a class="bx-std-widget-link" href="<?php echo $a['url'];?>" <?php if($a['bx_if:show_click_link']['condition']){ ?>onClick="<?php echo $a['bx_if:show_click_link']['content']['content'];?>"<?php } ?> title="<?php echo $a['caption_attr'];?>"><?php echo $a['caption'];?></a>
            <div class="bx-std-widget-caption-jitter" style="display:none"></div>
        </div>
    </div>
</div>