<div class="bx-profile-membership-stats">
    <div class="bx-pms-membership"><?php echo $a['membership'];?></div>
    <div class="bx-pms-stats bx-def-box bx-def-box-round-corners bx-def-color-bg-box mt-4 p-4">
        <?php if(is_array($a['bx_repeat:stat_items'])) for($i=0; $i<count($a['bx_repeat:stat_items']); $i++){ ?>
            <div class="bx-pms-stat-item mt-4 first:mt-0">
                <div class="bx-pms-si-title"><?php echo $a['bx_repeat:stat_items'][$i]['title'];?></div>
                <div class="bx-pms-si-graph mt-1">
                    <div class="bx-pms-sig-bar rounded-md" style="width:<?php echo $a['bx_repeat:stat_items'][$i]['width'];?>">&nbsp;</div>
                    <div class="bx-pms-sig-text pl-4 text-sm text-gray-500 dark:text-gray-400"><?php echo $a['bx_repeat:stat_items'][$i]['value'];?> (<?php echo $a['bx_repeat:stat_items'][$i]['percent'];?>)</div>
                </div>
            </div>
        <?php } else if(is_string($a['bx_repeat:stat_items'])) echo $a['bx_repeat:stat_items']; ?>
    </div>
</div>