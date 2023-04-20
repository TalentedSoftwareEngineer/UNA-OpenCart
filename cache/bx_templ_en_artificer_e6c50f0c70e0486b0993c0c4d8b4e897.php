<!-- layout 1 column thin [ start ] -->
<div id="<?php echo $a['page_id'];?>" class="bx-layout-wrapper bx-layout-1-column-thin">
    <div class="bx-layout-row">
    <div class="bx-layout-col bx-layout-1-column-thin-column1 bx-layout-column-thin max-w-full md:w-1/3 mx-auto">
        <div class="bx-layout-cell" id="bx-layout-cell-1">
            <?php echo $a['cell_1'];?>
        </div>
    </div>
</div>
    <?php if($a['bx_if:show_layout_row_dump']['condition']){ ?>
    <div class="bx-layout-row bx-lr-dump bx-clearfix">
        <div class="bx-layout-col bx-layout-1-column-column1 bx-layout-column-fullwidth">
            <div class="bx-layout-cell bx-def-margin-topbottom" id="bx-layout-cell-0">
                <div class="bx-layout-cell-title bx-def-margin-thd-bottom">Inactive Blocks</div>
                <?php echo $a['bx_if:show_layout_row_dump']['content']['cell_0'];?>
            </div>
        </div>
    </div>
<?php } ?>
</div>
<!-- layout 1 column thin [  end  ] -->