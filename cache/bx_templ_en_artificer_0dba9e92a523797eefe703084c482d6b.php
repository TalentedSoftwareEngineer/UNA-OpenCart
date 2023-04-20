<div class="sys-cf-manage">
    <div class="sys-cf-manage-cnt bx-def-padding">
        <?php echo $a['form'];?>
        <script language="javascript">
            $(document).ready(function () {
                $("#<?php echo $a['form_id'];?>").ajaxForm({ 
                    dataType: "json",
                    beforeSubmit: function (formData, jqForm, options) {
                        bx_loading($("#<?php echo $a['form_id'];?>"), true);
                    },
                    success: function (oData) {
                        $("#<?php echo $a['form_id'];?>").parents(".bx-popup-applied:visible:first").dolPopupHide();

                        processJsonData(oData);
                    }
                });
            });
        </script>
    </div>
</div>