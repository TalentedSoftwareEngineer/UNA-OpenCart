<div id="bx-sliding-menu-search" class="bx-sliding-menu-main bx-sliding-menu-fullheight bx-def-z-index-nav bg-white bx-search-site" style="display:none; opacity:1;">
    <div class="mx-auto">
        <a class="bx-sliding-menu-close mt-2 mr-4 text-3xl" href="javascript:void(0);" onclick="bx_menu_slide_inline('#bx-sliding-menu-search')"><i class="sys-icon times"></i></a>
        <div class="p-4">
            <div class="bx-def-font-h2 bx-menu-search-popup-title">Search</div>
            <?php echo $a['search_form'];?>
            <?php echo $a['results'];?>
        </div>
    </div>
</div>