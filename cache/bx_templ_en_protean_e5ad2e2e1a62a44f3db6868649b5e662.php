<?php if($a['bx_if:show_auth']['condition']){ ?><?php echo $a['bx_if:show_auth']['content']['content'];?><?php } ?>
<?php if($a['bx_if:show_form']['condition']){ ?><?php echo $a['bx_if:show_form']['content']['content'];?><?php } ?>
<?php if($a['bx_if:show_login']['condition']){ ?>
    <hr class="bx-def-hr bx-def-margin-sec-topbottom" />
    <div class="sys-jf-login">
        <a class="bx-btn bx-def-font-align-center" href="<?php echo $a['bx_if:show_login']['content']['url'];?>">Log in</a>
    </div>
<?php } ?>
<div class="sys-jf-agreement bx-def-margin-leftright-neg">
    <hr class="bx-def-hr bx-def-margin-top" />
    <div class="sys-jf-agreement-cnt bx-def-padding-top bx-def-padding-leftright bx-def-font-small bx-def-font-grayed"><?php echo $a['agreement'];?></div>
</div>