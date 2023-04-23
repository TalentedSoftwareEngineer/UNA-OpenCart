<div class="adm-bp-cbf-left bx-def-border-color-layout">
    <div class="adm-bp-cbf-left-cnt bx-def-padding-sec-top">
        <?php echo $a['menu'];?>
    </div>
</div>
<div class="adm-bp-cbf-right bx-def-border-color-layout">
    <div class="adm-bp-cbf-right-cnt bx-def-padding">
        <div id="<?php echo $a['html_block_lists_id'];?>" class="adm-bp-cbf-right-cnt"><?php echo $a['blocks'];?></div>
    </div>
</div>
<div class="bx-std-cb"></div>
<div class="adm-bp-cbf-controls bx-def-padding-top bx-def-padding-leftright bx-def-border-color-layout">
    <button class="bx-btn bx-btn-primary" name="do_submit" value="Add to Page" type="submit">Add to Page</button>
    <button class="bx-btn bx-def-margin-sec-left" name="do_cancel" value="Cancel" type="button" onclick="$('.bx-popup-applied:visible').dolPopupHide()">Cancel</button>
    <div class="adm-bp-cbf-counter bx-def-font-h3"><span id="adm-bp-cbf-counter">0</span> blocks selected</div>
    <div class="bx-std-cb"></div>
</div>