<?php echo $a['content'];?>
<script language="javascript">
    var <?php echo $a['js_object'];?> = new BxDolStudioNavigationItems({
        sActionUrl: 'http://localhost/UNA-v.13.0.0-RC2/grid.php',
        sPageUrl: '<?php echo $a['page_url'];?>',
        sObjNameGrid: '<?php echo $a['grid_object'];?>',
        sParamsDivider: '<?php echo $a['params_divider'];?>',
        sTextSearchInput: 'Search...'
    });
</script>