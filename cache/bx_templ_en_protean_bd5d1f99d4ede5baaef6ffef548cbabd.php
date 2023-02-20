<div class="bx-acl-set">
    <div class="bx-acl-set-cnt">
        <?php echo $a['form'];?>
        <script language="javascript">
            $(document).ready(function () {
                var oForm = $("#<?php echo $a['form_id'];?>");
                if($('#sys-acl-profile-<?php echo $a['profile_id'];?>').length > 0)
                    oForm.find("[name = 'card']").val(1);

                oForm.ajaxForm({ 
                    dataType: "json",
                    beforeSubmit: function (oFormData, jqForm, options) {
                        bx_loading($("#<?php echo $a['form_id'];?>"), true);
                    },
                    success: function (oData) {
                        var oForm = $("#<?php echo $a['form_id'];?>");

                        oForm.parents(".bx-popup-applied:visible:first").dolPopupHide();

                        bx_on_set_acl_level(oData, oForm);
                    }
                });
            });
        </script>
    </div>
</div>