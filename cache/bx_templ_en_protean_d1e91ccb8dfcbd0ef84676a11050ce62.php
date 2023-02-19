<!DOCTYPE html>
<html lang="<?php echo $this->parseSystemKey('lang', $mixedKeyWrapperHtml);?>">
<head>
    <bx_injection:injection_head_begin />
    
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->parseSystemKey('page_charset', $mixedKeyWrapperHtml);?>" />
    <title><?php echo $this->parseSystemKey('page_header', $mixedKeyWrapperHtml);?></title>
    <base href="http://localhost/UNA-v.13.0.0-RC2/" />

    <bx_include_css_system />
    <bx_include_css />

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

    <?php echo $this->parseSystemKey('extra_js', $mixedKeyWrapperHtml);?>

    <?php echo $this->parseSystemKey('dol_images', $mixedKeyWrapperHtml);?>
	<?php echo $this->parseSystemKey('dol_lang', $mixedKeyWrapperHtml);?>
	<?php echo $this->parseSystemKey('dol_options', $mixedKeyWrapperHtml);?>

    <bx_injection:injection_head />
</head>
<body class="bx-def-font bx-def-color-bg-page" <bx_injection:injection_body /> >
    <div class="bx-std-page-bg"></div>
	<div class="bx-std-page-real">
        <div class="bx-std-page-wide">
            <div class="bx-std-page-wrp">
                <div class="bx-std-page bx-def-page-margin">
					<?php echo $a['page_main_code'];?>
				</div>
            </div>
            <div class="bx-std-cb"></div>
        </div>
    </div>
</body>
</html>