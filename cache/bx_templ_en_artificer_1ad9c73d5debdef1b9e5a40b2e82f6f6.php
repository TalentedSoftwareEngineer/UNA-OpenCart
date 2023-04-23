<!-- layout top & bottom areas bar right [ start ] -->
<div id="<?php echo $a['page_id'];?>" class="bx-layout-wrapper bx-layout-topbottom-area-bar-right">
    <div class="bx-layout-row">
        <div class="bx-layout-col bx-layout-1-column-column1 bx-layout-column-fullwidth w-full">
            <div class="bx-layout-cell" id="bx-layout-cell-1">
                <?php echo $a['cell_1'];?>
            </div>
        </div>
    </div>
    <div class="bx-layout-row">
        <main class="bx-layout-col bx-layout-bar-right-content bx-layout-column-wide md:w-2/3 md:pr-4 lg:pr-6" aria-label="Main">
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
    <div class="bx-layout-row">
        <div class="bx-layout-col bx-layout-1-column-column1 bx-layout-column-fullwidth">
            <div class="bx-layout-cell" id="bx-layout-cell-4">
                <?php echo $a['cell_4'];?>
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
<script>
    $(document).ready(function () {
        resizeLayoutBlocks();

        $(window).on('resize', function() {
            resizeLayoutBlocks();
        })
    });

    function resizeLayoutBlocks()
    {
        if ($(window).width() <= 720)
            return;

        var iTimeout = 500;
        var oLevelCells = function(iCellSmall, iCellLarge) {
            $('#bx-layout-cell-' + iCellSmall + ' .bx-db-container').css('min-height', $('#bx-layout-cell-' + iCellLarge + ' .bx-db-container').height());
        }

        if (1 == $('#bx-layout-cell-3 > div').length && 1 == $('#bx-layout-cell-2 > div').length) {
            var oCell2 = $('#bx-layout-cell-2 .bx-db-container');
            var oCell3 = $('#bx-layout-cell-3 .bx-db-container');

            if (oCell2.height() > oCell3.height()) {
                if(oCell2.find('form .bx-form-input-files-uploaders').length > 0)
                        setTimeout(function() {
                                oLevelCells(3, 2);
                        }, iTimeout);
                else
                        oLevelCells(3, 2);
            }
            else {
                if(oCell3.find('form .bx-form-input-files-uploaders').length > 0)
                        setTimeout(function() {
                                oLevelCells(2, 3);
                    }, iTimeout);
                else
                    oLevelCells(2, 3);
            }
        }
    }
</script>
<!-- layout top area 2 columns [  end  ] -->