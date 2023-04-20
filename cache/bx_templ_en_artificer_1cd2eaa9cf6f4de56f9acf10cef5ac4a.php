<div class="bx-form-input-location-<?php echo $a['name'];?> bx-form-input-location-cont bx-clearfix">
    <?php echo $a['inputs'];?>
    <div class="bx-form-input-location-status-cont bx-def-font-small bx-def-font-grayed bx-def-margin-thd-top bx-clearfix">
        <div class="bx-form-input-location-status ok"><i class="sys-icon sys-colored col-green1-dark check-circle"></i> Address found</div>
        <div class="bx-form-input-location-status fail"><i class="sys-icon sys-colored col-red1-dark times-circle"></i> Address not found</div>
        <div class="bx-form-input-location-status undef"><i class="sys-icon sys-colored question-circle"></i> Address is undefined</div>
        <div class="bx-form-input-location-status loading"><i class="sys-icon sys-colored sync-alt"></i> Loading...</div>
        <div class="bx-form-input-location-copyright"></div>
    </div>
</div>

<script>
(function () {

    var eForm = $('.bx-form-input-location-<?php echo $a['name'];?>').parents('form:first');
    eForm.on('submit', function (ev) {
        if (typeof(glBxLocationDisableFormSubmit) !== 'undefined' && glBxLocationDisableFormSubmit)
            ev.preventDefault();
    });

    var disableFormSubmit = function (b) {
        glBxLocationDisableFormSubmit = b;
        if (b)
            eForm.find('[type=submit]').addClass('bx-btn-disabled').attr('disabled', true);
        else
            eForm.find('[type=submit]').removeClass('bx-btn-disabled').attr('disabled', false);
    }

    var getLocationParams = function (sMode) {
        var sCountry = $('select[name="<?php echo $a['name'];?>_country"] :selected').text();
        var sCountryCode = $('select[name="<?php echo $a['name'];?>_country"]').val();
        var sZip = $('input[name="<?php echo $a['name'];?>_zip"]').val();
        var sState = $('input[name="<?php echo $a['name'];?>_state"]').val();
        var sCity = $('input[name="<?php echo $a['name'];?>_city"]').val();
        var sStreet = $('input[name="<?php echo $a['name'];?>_street"]').val();
        var sNum = $('input[name="<?php echo $a['name'];?>_street_number"]').val();

        if (!sCountryCode || !sCountryCode.length)
            return '';

        sRet = '&country=' + encodeURIComponent(sCountry);

        if (sZip.length && sMode !== 'no_street_no_zip')
            sRet += '&postalcode=' + encodeURIComponent(sZip);

        if ('zip_only' == sMode)
            return sZip.length ? sRet : '';

        if (sState.length)
            sRet += '&state=' + encodeURIComponent(sState);

        if (sCity.length)
            sRet += ('county_as_city' == sMode ? '&county=' : '&city=') + encodeURIComponent(sCity);
        
        if (sStreet.length && sMode !== 'no_street_no_zip')
            sRet += '&street=' + (sNum.length ? encodeURIComponent(sNum) + ' ' : '') + encodeURIComponent(sStreet);

        return sRet;
    }

    var geocode = function (a, i) {
        var s = a[i];
        $.getJSON('<?php echo $a['nominatim_server'];?>/search/?addressdetails=1' + s + '&format=json&limit=1&email=<?php echo $a['nominatim_email'];?>', function (oResult) {
            glBxLocationFieldPlainGeocodingRequest = false;
            if (('object' === typeof oResult) && oResult.length && ('undefined' !== typeof oResult[0].lat) && ('undefined' !== typeof oResult[0].lon)) {

                $('input[name="<?php echo $a['name'];?>_lat"]').val(oResult[0].lat);
                $('input[name="<?php echo $a['name'];?>_lng"]').val(oResult[0].lon);
                if ('undefined' !== typeof(oResult[0].address)) {
                    if ('undefined' !== typeof(oResult[0].address.state) && 0 == $('input[name="<?php echo $a['name'];?>_state"]').val().length)
                        $('input[name="<?php echo $a['name'];?>_state"]').val(oResult[0].address.state);
                    else if (<?php echo $a['normalize_names'];?> && $('input[name="<?php echo $a['name'];?>_state"]').val() != oResult[0].address.state)
                        $('input[name="<?php echo $a['name'];?>_state"]').val(oResult[0].address.state);

                    var sCity = '';
                    if ('undefined' !== typeof(oResult[0].address.city))
                        sCity = oResult[0].address.city;
                    else if ('undefined' !== typeof(oResult[0].address.town))
                        sCity = oResult[0].address.town;
                    else if ('undefined' !== typeof(oResult[0].address.village))
                        sCity = oResult[0].address.village;

                    if (sCity && 0 == $('input[name="<?php echo $a['name'];?>_city"]').val().length)
                        $('input[name="<?php echo $a['name'];?>_city"]').val(sCity);
                    else if (<?php echo $a['normalize_names'];?> && sCity && $('input[name="<?php echo $a['name'];?>_city"]').val() != sCity)
                        $('input[name="<?php echo $a['name'];?>_city"]').val(sCity);
                }
                if ('undefined' !== typeof(oResult[0].licence))
                    $('.bx-form-input-location-<?php echo $a['name'];?> .bx-form-input-location-copyright').html(oResult[0].licence);
                setLocationStatus('ok');
            } 
            else {
                i += 1;
                if ('undefined' !== typeof(a[i])) {
                    geocode(a, i);
                }
                else {
                    $('input[name="<?php echo $a['name'];?>_lat"]').val(0);
                    $('input[name="<?php echo $a['name'];?>_lng"]').val(0);
                    setLocationStatus('fail');
                }
            }
        });
    }

    var setLocationStatus = function (s) {
        $('.bx-form-input-location-<?php echo $a['name'];?> .bx-form-input-location-status').hide();
        $('.bx-form-input-location-<?php echo $a['name'];?> .bx-form-input-location-status.' + s).show();
        if ('loading' !== s)
            disableFormSubmit(false);
    }

    setLocationStatus('undef');

    $(document).ready(function () {
        $('input[name^="<?php echo $a['name'];?>"],select[name^="<?php echo $a['name'];?>"]').on('change', function () {
            if ('undefined' !== typeof(glBxLocationFieldPlainGeocodingRequest) && glBxLocationFieldPlainGeocodingRequest) { // cancel previous request
                clearTimeout(glBxLocationFieldPlainGeocodingRequest);
                glBxLocationFieldPlainGeocodingRequest = null;
            }

            if ('hidden' == this.type)
                return;
            
            var s = getLocationParams();
            if (!s) {
                setLocationStatus('undef');
                return;
            }
            var a = [s];

            if (s = getLocationParams('zip_only'))
                 a.push(s);

            if (s = getLocationParams('no_street_no_zip'))
                 a.push(s);
 
            disableFormSubmit(true);
            glBxLocationFieldPlainGeocodingRequest = setTimeout(function () {
                setLocationStatus('loading');
                geocode(a, 0);
            }, 1500);
        });

        if (getLocationParams()) {
            if (parseFloat($('input[name="<?php echo $a['name'];?>_lat"]').val()) && parseFloat($('input[name="<?php echo $a['name'];?>_lng"]').val()))
                setLocationStatus('ok');
            else
                setLocationStatus('fail');
        } 
        else {
            setLocationStatus('undef');
        }
    });
})();
</script>