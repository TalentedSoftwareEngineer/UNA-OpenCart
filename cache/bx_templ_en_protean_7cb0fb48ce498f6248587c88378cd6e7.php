<div class="flex items-center p-4">
    <div class="flex-0 h-10 w-10 bg-gray-200 dark:bg-gray-700 rounded-full">&nbsp;</div>
    <div class="flex-1 ml-4 space-y-2 animate-pulse">
        <div class="h-8 w-full bg-gray-300 dark:bg-gray-600 rounded-md">&nbsp;</div>
    </div>
</div>
<script>
    var iBlockID = '<?php echo $a['id'];?>';
    $(document).ready(function () {
        getHtmlData($('#bx-page-block-' + iBlockID), bx_append_url_params(document.location.href, 'dynamic=tab&pageBlock=' + iBlockID), undefined, 'post', false, {includedCss: JSON.stringify(aIncludedCss), includedJs: JSON.stringify(aIncludedJs)}, false);
    });
</script>