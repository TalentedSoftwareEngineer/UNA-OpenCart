<div id="<?php echo $a['html_id'];?>" class="<?php echo $a['class'];?>" <?php echo $a['attrs'];?>><?php echo $a['content'];?></div>
<?php if($a['bx_if:do_center']['condition']){ ?>
    <script>
        $(document).ready(function() {
            bx_center_content('#<?php echo $a['bx_if:do_center']['content']['html_id'];?>', '<?php echo $a['bx_if:do_center']['content']['selector_content'];?>', true);
        });
    </script>
<?php } ?>