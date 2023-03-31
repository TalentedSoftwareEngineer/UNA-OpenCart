<div class="bx-search-result-block-pagination">
    <?php if($a['bx_if:paginate_top']['condition']){ ?>
        <div class="bx-def-margin-bottom">
         <?php echo $a['bx_if:paginate_top']['content']['paginate'];?>
		</div>
    <?php } ?>
	<?php echo $a['content'];?>
	<?php if($a['bx_if:paginate_bottom']['condition']){ ?>
		<div class="bx-def-margin-top">
         <?php echo $a['bx_if:paginate_bottom']['content']['paginate'];?>
		</div>
    <?php } ?>
</div>