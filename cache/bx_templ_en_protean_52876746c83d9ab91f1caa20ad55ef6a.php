<!DOCTYPE html>
<html lang="<?php echo $this->parseSystemKey('lang', $mixedKeyWrapperHtml);?>">
<head>
    <bx_injection:injection_head_begin />

    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->parseSystemKey('page_charset', $mixedKeyWrapperHtml);?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
    <title><?php echo $this->parseSystemKey('page_header', $mixedKeyWrapperHtml);?></title>
    <base<?php echo $this->parseSystemKey('base', $mixedKeyWrapperHtml);?> />

    <?php echo $this->parseSystemKey('meta_info', $mixedKeyWrapperHtml);?>
    <?php echo $this->parseSystemKey('page_robots', $mixedKeyWrapperHtml);?>

    <bx_include_css_styles />
    <bx_include_css_system />
    <bx_include_css />

    <?php echo $this->parseSystemKey('dol_images', $mixedKeyWrapperHtml);?>
    <?php echo $this->parseSystemKey('dol_lang', $mixedKeyWrapperHtml);?>
    <?php echo $this->parseSystemKey('dol_options', $mixedKeyWrapperHtml);?>

    <bx_include_js_system />
    <bx_include_js />
   
    <script language="javascript">
    var sUrlRoot = 'http://localhost/UNA-v.13.0.0-RC2/';
    var sLang = '<?php echo $this->parseSystemKey('lang_country', $mixedKeyWrapperHtml);?>';

    $(document).ready(function () {
        bx_time('<?php echo $this->parseSystemKey('lang_country', $mixedKeyWrapperHtml);?>');
    });

    (function(w) {
        var dpr = (w.devicePixelRatio === undefined ? 1 : Math.round(w.devicePixelRatio));
        if ($.cookie('devicePixelRatio') == dpr || dpr < 2 || (typeof(bIgnorePixelRatio) != "undefined" && bIgnorePixelRatio) || !navigator.cookieEnabled || '#dpr' === window.location.hash) 
            return;
        $.cookie('devicePixelRatio', dpr, {expires: 365, path: '/'});
        if (!window.location.hash.length)
            window.location.hash = 'dpr';
        window.location.reload();
    })(window);

    var oMediaPhone = window.matchMedia('<?php echo $this->parseSystemKey('css_media_phone', $mixedKeyWrapperHtml);?>');
    var oMediaPhone2 = window.matchMedia('<?php echo $this->parseSystemKey('css_media_phone2', $mixedKeyWrapperHtml);?>');
    var oMediaTablet = window.matchMedia('<?php echo $this->parseSystemKey('css_media_tablet', $mixedKeyWrapperHtml);?>');
    var oMediaTablet2 = window.matchMedia('<?php echo $this->parseSystemKey('css_media_tablet2', $mixedKeyWrapperHtml);?>');
    var oMediaDesktop = window.matchMedia('<?php echo $this->parseSystemKey('css_media_desktop', $mixedKeyWrapperHtml);?>');

    function fMediaCallback(e) {
        if (oMediaPhone.matches)
            $('html').addClass('bx-media-phone');
        else
            $('html').removeClass('bx-media-phone');
        
        if (oMediaPhone2.matches)
            $('html').addClass('bx-media-phone2');
        else
            $('html').removeClass('bx-media-phone2');
        
        if (oMediaTablet.matches)
            $('html').addClass('bx-media-tablet');
        else
            $('html').removeClass('bx-media-tablet');
        
        if (oMediaTablet2.matches)
            $('html').addClass('bx-media-tablet2');
        else
            $('html').removeClass('bx-media-tablet2');

        if (oMediaDesktop.matches)
            $('html').addClass('bx-media-desktop');
        else
            $('html').removeClass('bx-media-desktop');
    }

    oMediaPhone.addListener(fMediaCallback);
    oMediaPhone2.addListener(fMediaCallback);
    oMediaTablet.addListener(fMediaCallback);
    oMediaTablet2.addListener(fMediaCallback);
    oMediaDesktop.addListener(fMediaCallback);

    fMediaCallback(null);

    var aIncludedCss = <?php echo $this->parseSystemKey('included_css', $mixedKeyWrapperHtml);?>;
    var aIncludedJs = <?php echo $this->parseSystemKey('included_js', $mixedKeyWrapperHtml);?>;
</script>
    <script language="javascript">
    var bUseSvgLoading = false;
    var sUseSvgLoading = '';
    if(!bUseSvgLoading) {
        var aSpinnerOpts = {
            lines: 7, // The number of lines to draw
            length: 0, // The length of each line
            width: 8, // The line thickness
            radius: 7, // The radius of the inner circle
            corners: 1, // Corner roundness (0..1)
            rotate: 0, // The rotation offset
            direction: 1, // 1: clockwise, -1: counterclockwise
            color: '#283C50', // #rgb or #rrggbb or array of colors
            speed: 1, // Rounds per second
            trail: 60, // Afterglow percentage
            shadow: false, // Whether to render a shadow
            hwaccel: false, // Whether to use hardware acceleration
            className: 'bx-sys-spinner', // The CSS class to assign to the spinner
            zIndex: 2e9, // The z-index (defaults to 2000000000)
            top: '50%', // Top position relative to parent in px
            left: '50%' // Left position relative to parent in px
        };

        var aSpinnerSmallOpts = $.extend({}, aSpinnerOpts, {
            lines: 6,
            width: 6,
            radius: 4,
            color: '#333',
            top: '50%',
            left: 'calc(100% - 20px)'
        });
    }
</script>

    <script language="javascript">
    $(document).ready(function () {
		if (aDolOptions.sys_fixed_header !== undefined && aDolOptions.sys_fixed_header != 'on'){
			// hide toolbar on scrolldown, show - on scroll up
			var oToolbar = $('#bx-toolbar');
			if(oToolbar && oToolbar.length > 0)
				new Headroom(oToolbar.get(0), {
					tolerance: {
						down: 10,
						up: 20
					},
					offset: 200,
					classes: {
						initial: "bx-toolbar-anim",
						pinned: "bx-toolbar-reset",
						unpinned: "bx-toolbar-up"
					},
					onUnpin: function() {
						bx_menu_slide_close_all_opened();
					}
				}).init();
		}
    });
</script>

    <script language="javascript">
    $(document).ready(function () {
        bx_activate_anim_icons('#283C50');
    });
</script>

    <?php echo $this->parseSystemKey('extra_js', $mixedKeyWrapperHtml);?>

    <?php echo $this->parseSystemKey('system_injection_head', $mixedKeyWrapperHtml);?>
    <bx_injection:injection_head />
    <meta name="theme-color" content="#f5faff" />
</head>
<body class="<?php echo $this->parseSystemKey('class_name', $mixedKeyWrapperHtml);?> bx-def-font bx-def-color-bg-page bx-def-image-bg-page <bx_injection:injection_body_class />" dir="<?php echo $this->parseSystemKey('lang_direction', $mixedKeyWrapperHtml);?>" <bx_injection:injection_body /> >
    <?php echo $this->parseSystemKey('system_injection_header', $mixedKeyWrapperHtml);?>
    <bx_injection:injection_header />
    <noscript>
         <div class="p-4 rounded-sm text-center text-red-600 bg-yellow-500 bg-opacity-50">
            <?php echo $this->parseSystemKey('system_js_requred', $mixedKeyWrapperHtml);?>
       </div>
    </noscript>


<div class="bx-main <bx_injection:injection_main_class />">
    <bx_injection:top />

    <div id="bx-toolbar" class="bx-header bx-def-image-bg-header bx-def-color-bg-header bx-def-border-header bx-shadow-header bx-def-z-index-nav">
        <div class="bx-def-centered bx-def-padding-sec-leftright bx-def-page-width bx-def-box-sizing">
            <div class="bx-toolbar-content-wrapper bx-content-padding-header">
                <div id="bx-toolbar-content" class="bx-toolbar-content bx-clearfix">
                    <div id="bx-menu-toolbar-1-container" class="bx-toolbar-item bx-ti-left">
                        <?php echo $this->getMenu('sys_toolbar_site'); ?>
                    </div>
                    <div id="bx-logo-container" class="bx-toolbar-item bx-ti-logo bx-ti-stretcher">
                        <bx_injection:injection_logo_before />
                            <?php echo $this->parseSystemKey('main_logo', $mixedKeyWrapperHtml);?>
                        <bx_injection:injection_logo_after />
                    </div>
                    <div id="bx-menu-toolbar-2-container" class="bx-toolbar-item bx-ti-right">
                        <?php echo $this->getMenu('sys_toolbar_member'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <bx_injection:injection_between_cover_logo />
    <?php echo $this->parseSystemKey('cover', $mixedKeyWrapperHtml);?>
    <bx_injection:injection_between_cover_top_menu />

    <div class="bx-menu-main-bar-gap bx-def-page-width bx-def-centered bx-def-padding-leftright bx-def-box-sizing <?php echo $this->parseSystemKey('site_submenu_hidden', $mixedKeyWrapperHtml);?>">
        <div id="bx-menu-main-bar-wrapper" class="bx-menu-main-bar-wrapper bx-def-round-corners bx-def-color-bg-sec">
            <div id="bx-menu-main-bar" class="bx-menu-main-bar <?php echo $this->parseSystemKey('site_submenu_class', $mixedKeyWrapperHtml);?>">
                <bx_injection:injection_top_menu_before />
                <?php echo $this->getMenu('sys_site_submenu'); ?>
                <bx_injection:injection_top_menu_after />
            </div>
        </div>
    </div>

    <bx_injection:injection_between_content_menu />

    <div id="bx-content-wrapper">
        <?php echo $this->parseSystemKey('informer', $mixedKeyWrapperHtml);?>
        <div class="bx-page-wrapper bx-def-centered bx-def-padding-sec-leftright bx-def-page-width bx-def-box-sizing">
            <div id="bx-content-container" class="bx-content-container bx-def-padding-sec-leftright">
                <bx_injection:injection_content_before />
                <div id="bx-content-main" class=" my-4 lg:my-6">

<?php echo $a['page_main_code'];?>
		
		                <bx_injection:injection_content_after />
		
		                <div class="bx-clear"></div>
		
		            <bx_injection:banner_bottom />
		
		        </div> <!-- #bx-content-main -->
		
		        <bx_injection:injection_between_content_footer />
		
		    </div> <!-- #bx-content-container -->
		
		</div>

	</div> <!-- #bx-content-wrapper -->

	<div id="bx-footer-wrapper" class="bx-def-image-bg-footer bx-def-color-bg-footer bx-def-border-footer bx-shadow-footer">	
            <div class="bx-def-centered bx-def-padding-sec-leftright bx-def-page-width bx-def-box-sizing">
                <div id="bx-footer" class="bx-footer bx-def-padding-sec-left bx-def-padding-sec-right bx-clearfix">
                    <div class="bx-footer-cnt bx-content-padding-footer">
                        <bx_injection:injection_footer_before />

                        <div id="bx-menu-bottom">
                            <?php echo $this->getMenu('sys_footer'); ?>
                        </div>

                        <bx_injection:injection_footer_after />
                    </div>
                </div>
            </div>
	</div>

	<?php echo $this->getMenu('sys_site_action'); ?>
</div>

        <?php echo $this->parseSystemKey('system_injection_footer', $mixedKeyWrapperHtml);?>
       <bx_injection:injection_footer />
    </body>
</html>