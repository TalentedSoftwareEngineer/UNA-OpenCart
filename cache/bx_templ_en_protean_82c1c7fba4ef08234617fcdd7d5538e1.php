<div class="bx-std-login-form bx-def-padding-sec">
    <form class="bx-std-login-form" action="<?php echo $a['action_url'];?>" method="post" onsubmit="return validateLoginForm(this);">
        <input type="hidden" name="role" value="<?php echo $a['role'];?>" />
        <input type="hidden" name="csrf_token" value="<?php echo $a['csrf_token'];?>" />
        <input type="hidden" name="relocate" value="<?php echo $a['relocate_url'];?>" />
        <div class="bx-std-lf-input">
            <input class="bx-def-font-inputs bx-form-input-text bx-def-color-ft-grayed-i" id="admin_email" type="text" name="ID" value="" placeholder="email" tabindex="1" />
            <div class="bx-def-padding-sec-top">
                <input class="form_input_checkbox" type="checkbox" name="rememberMe" id="login_box_form_input_rememberMe" tabindex="3"  /> <label for="login_box_form_input_rememberMe">Remember me</label>
            </div>
        </div>
        <div class="bx-std-lf-input">
            <input class="bx-def-font-inputs bx-form-input-text bx-def-color-ft-grayed-i" id="admin_password" type="password" name="Password" value="" placeholder="password" tabindex="2" />
            <div class="bx-def-padding-sec-top">
                <a href="<?php echo $a['forgot_password_url'];?>">Forgot password?</a>
            </div>
        </div>
        <div class="bx-std-lf-submit">
            <input class="bx-btn bx-btn-primary" id="admin_login_form_submit" type="submit" value="Enter" tabindex="4"  />            
        </div>
        <div class="bx-std-cb"></div>
    </form>
</div>