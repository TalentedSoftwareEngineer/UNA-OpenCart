<div class="bx-form-input-location-auto-cont bx-clearfix">
    <div><?php echo $a['input'];?></div>
    <div id="<?php echo $a['id_status'];?>" class="bx-def-padding-sec-left">
        <span><?php echo $a['location_string'];?></span>
        <div id="<?php echo $a['id_status'];?>copyright" class="bx-def-margin-thd-top bx-def-font-small bx-def-font-grayed"></div>
    </div>    
</div>

<input type="hidden" name="<?php echo $a['name'];?>_lat" value="<?php echo $a['lat'];?>" />
<input type="hidden" name="<?php echo $a['name'];?>_lng" value="<?php echo $a['lng'];?>" />
<input type="hidden" name="<?php echo $a['name'];?>_country" value="<?php echo $a['country'];?>" />
<input type="hidden" name="<?php echo $a['name'];?>_state" value="<?php echo $a['state'];?>" />
<input type="hidden" name="<?php echo $a['name'];?>_city" value="<?php echo $a['city'];?>" />
<input type="hidden" name="<?php echo $a['name'];?>_zip" value="<?php echo $a['zip'];?>" />
<input type="hidden" name="<?php echo $a['name'];?>_street" value="<?php echo $a['street'];?>" />
<input type="hidden" name="<?php echo $a['name'];?>_street_number" value="<?php echo $a['street_number'];?>" />

<script>
    $('input[name=<?php echo $a['name'];?>][type=checkbox]').on('change', function () {
        var _self = this;
        var callbackOnLocationReset = function (error) {
            $('[name="<?php echo $a['name'];?>_lat"]').val('');
            $('[name="<?php echo $a['name'];?>_lng"]').val('');
            $('#<?php echo $a['id_status'];?> span').html("Show location");
            $(_self).prop("checked", false);
            $(_self).parents('.bx-switcher-cont').removeClass('on').addClass('off');
        }

        var callbackOnLocationSucess = function (position) {

            var iTimeout = 200;
            if ('undefined' !== typeof(glBxLocationFieldPlainAutoGeocodingRequest) && glBxLocationFieldPlainAutoGeocodingRequest) { // cancel previous request
                clearTimeout(glBxLocationFieldPlainAutoGeocodingRequest);
                glBxLocationFieldPlainAutoGeocodingRequest = null;
                iTimeout = 1000;
            }

            glBxLocationFieldPlainAutoGeocodingRequest = setTimeout(function () {
                $.getJSON('<?php echo $a['nominatim_server'];?>/reverse?lat=' + encodeURIComponent(position.coords.latitude) + '&lon=' + encodeURIComponent(position.coords.longitude) + '&format=json&addressdetails=1&email=<?php echo $a['nominatim_email'];?>', function (oResult) {

                    glBxLocationFieldPlainAutoGeocodingRequest = false;

                    if (('object' === typeof oResult) && ('undefined' !== typeof oResult.display_name) && ('undefined' !== typeof oResult.address) && ('undefined' !== typeof oResult.address.country_code)) {
                        $('[name="<?php echo $a['name'];?>_lat"]').val(position.coords.latitude);
                        $('[name="<?php echo $a['name'];?>_lng"]').val(position.coords.longitude);

                        $('[name="<?php echo $a['name'];?>_country"]').val(oResult.address.country_code.toUpperCase());

                        if ('undefined' !== typeof oResult.address.suburb)
                            $('[name="<?php echo $a['name'];?>_city"]').val(oResult.address.suburb);
                        else if ('undefined' !== typeof oResult.address.town)
                            $('[name="<?php echo $a['name'];?>_city"]').val(oResult.address.town);
                        else if ('undefined' !== typeof oResult.address.city)
                            $('[name="<?php echo $a['name'];?>_city"]').val(oResult.address.city);

                        var oMap = {
                            'postcode': '<?php echo $a['name'];?>_zip',
                            'state': '<?php echo $a['name'];?>_state',
                            'road': '<?php echo $a['name'];?>_street',
                            'house_number': '<?php echo $a['name'];?>_street_number',
                        }
                        $.each(oMap, function (i) {
                            if ('undefined' !== typeof oResult.address[i])
                                $('[name="' + this + '"]').val(oResult.address[i]);
                        });

                        $('#<?php echo $a['id_status'];?> span').html(oResult.display_name);
                        if  ('undefined' !== typeof oResult.licence)
                            $('#<?php echo $a['id_status'];?>copyright').html(oResult.licence);

                    } 
                    else {
                        $('#<?php echo $a['id_status'];?> span').html(position.coords.latitude + ', ' + position.coords.longitude);
                    }
                });
            }, iTimeout);


        }

        if ($(this).is(':checked')) {
            $('#<?php echo $a['id_status'];?> span').html('Determining location...');
            if (navigator.geolocation)
                navigator.geolocation.getCurrentPosition(callbackOnLocationSucess, callbackOnLocationReset);
            else
                $('#<?php echo $a['id_status'];?> span').html('Geolocation is not supported by this browser');
        }
        else {
            callbackOnLocationReset();
        }
    });
</script>