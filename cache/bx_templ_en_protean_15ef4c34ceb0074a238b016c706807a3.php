<!-- layout top area bar right [ start ] -->
<div id="<?php echo $a['page_id'];?>" class="bx-layout-wrapper bx-layout-top-area-bar-right">
        <div class="bx-layout-row">
        <div class="bx-layout-col bx-layout-1-column-column1 bx-layout-column-fullwidth">
            <div class="bx-layout-cell" id="bx-layout-cell-1">
                <?php echo $a['cell_1'];?>
            </div>
        </div>
    </div>

    <div class="bx-layout-row">
        <main class="bx-layout-col bx-layout-bar-right-content bx-layout-column-wide md:w-2/3" aria-label="Main">
            <div class="bx-layout-cell" id="bx-layout-cell-2">
                <?php echo $a['cell_2'];?>
            </div>
        </main>
        <aside class="bx-layout-col bx-layout-bar-right-bar bx-layout-column-thin md:w-1/3" aria-label="Aside">
            <div class="bx-layout-cell" id="bx-layout-cell-3">
                <?php echo $a['cell_3'];?>
            </div>
        </aside>
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
<!-- layout top area bar right [  end  ] -->