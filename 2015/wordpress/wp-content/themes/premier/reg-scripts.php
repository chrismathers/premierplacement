<?php
/**
 * Helper scripts for registration page
 *
 * @package WordPress
 * @subpackage Premier
 */
?>
    <script type="text/javascript">
        var city = "";
        var state = "";
        $(document).ready(function() {
            $("#regForm input").children().removeClass("error");
            $("#education-select, #career-select").children(':selected').removeProp('selected');

            $("#highschool, #undergrad, #grad").slideUp();
            $("#education-select").change(function() {
                $("#highschool, #undergrad, #grad").slideUp();
                if($("#education-select option:selected").val() == "undergrad") {
                    $("#undergrad").slideDown();
                } else if($("#education-select option:selected").val() == "grad") {
                    $("#undergrad, #grad").slideDown();
                } else {
                    $("#highschool").slideDown();
                }
            });

            var now = new Date();
            var m = now.getMonth()+1;
            var d = now.getDate();
            var y = now.getFullYear();
            var formatted = m + "/" + d + "/" + y;
            $('#dp3 input').val(formatted);
            $('#dp3').attr('data-date', formatted);
            $('#dp3').datepicker();


            readCookie('premier');
            if($("#firstName").val()) $("#address").focus();

            $("#zip").change(function() {
                var newZip = $("#zip").val();
                alert(newZip);
                $.ajax({
                    url: "http://production.shippingapis.com/ShippingAPI.dll?API=CityStateLookup&XML=<CityStateLookupRequest USERID='400XEMED2262'><ZipCode ID='0'><Zip5>" + newZip + "</Zip5></ZipCode></CityStateLookupRequest>",
                    cache: false,
                    dataType: "xml",
                    type: "GET",
                    data: "zip=" + newZip,
                    success: function(result, success) {
                        alert(result);
                        $("#city").val(result.City); /* Fill the data */
                        $("#state").val(result.State);
                    },
                    error: function(result, success) {
                        alert('error getting zipcode');
                    }
                });
            });
        });

        function readCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                keyVal = c.substring(nameEQ.length, c.length).split("&");
                for (var x=0; x<keyVal.length; x++) {
                    val = keyVal[x].split("=");
                    if(val[0] == "zip" ) {
                        $("#zip").val(val[1]);
                        alert($("#zip").val(val[1]))
                        readZip(val[1]);
                    } else {
                        $("#" + val[0]).val(unescape(val[1]));
                    }
                }
            }
            return null;
        }

        function readZip(zip) {
            if(zip) {
                var city = $("#city");
                var state = $("#state");
                if (!city.val()) {
                    alert(city)
                    $.ajax({
                        url:"http://production.shippingapis.com/ShippingAPI.dll?API=CityStateLookup&XML=<CityStateLookupRequest USERID='400XEMED2262'><ZipCode ID='0'><Zip5>" + newZip + "</Zip5></ZipCode></CityStateLookupRequest>",
                        cache: false,
                        dataType: "json",
                        type: "GET",
                        data: "zip=" + zip,
                        success: function(result, success) {
                            city.val(result.City); /* Fill the data */
                            state.val(result.State);
                        },
                        error: function(result, success) {
                            alert('error getting zipcode');
                        }
                    });
                }
            }
        }

        var phones = 1;
        function optionalPhone(remove) {
            removePhone = remove;
            if(!removePhone) {
                phones = phones+1;
                if($("#phone" + phones).css('display') == 'none') {
                    $("#phone" + phones).slideDown();
                    $("#phone" + phones).css('display', 'block');
                }
                if(phones > 3) {
                    $(".addPhone").toggle();
                    $(".removePhone").toggle();
                }
            } else {
                if($("#phone" + phones).css('display') == 'block') {
                    $("#phone" + phones).slideUp();
                    $("#phone" + phones).css('display', 'none');
                }
                if(phones > 3) {
                    $(".addPhone").toggle();
                    $(".removePhone").toggle();
                }
                phones = phones-1;
            }
        }

        function validate() {
            var fn = $("#firstName");
            var ln = $("#lastName");
            var em = $("#email");
            var ph = $("#primaryPhone");
            var le = $("#education-select");
            var realname;
            first = true;
            var focusThis = null;
            var validateSet = new Array(fn, ln, em, ph, le);

            fixdigits();
            for(var i=0; i<validateSet.length; i++) {
                elem = validateSet[i];
                if(!$.trim($(elem).val())) {
                    $(elem).closest(".control-group").addClass("error");
                    $(elem).scrollView();
                    if(first) focusThis = $(elem);
                    first = false;
                    return false;
                } else {
                    $(elem).closest(".control-group").removeClass("error");
                }
                if($(elem).attr('id')==$("#email").attr('id')) {
                    if( !isValidEmailAddress( $(elem).val() ) ) {
                        $(elem).closest(".control-group").addClass("error");
                        $("#emailError").toggle();
                        $(elem).scrollView();
                        return false;
                    }
                }
                if($(elem).attr('id')==$("#education-select").attr('id')) {
                    if($.trim($(elem).val())==0) {
                        $(elem).closest(".control-group").addClass("error");
                        $(elem).scrollView();
                        return false;
                    } else {
                        $(elem).closest(".control-group").removeClass("error");
                        return getLevelEducation();
                    }
                }
            }
            realname = fn + " " + ln;
            $("#realname").val(realname);
        }

        function fixdigits() {
            // format $$ vals
            $(".digits").each(function(i) {
                if($(this).val()) {
                    var cleanstring = $(this).val().replace(/[^\d\.]/g, '');
                    cleanstring = Math.round(cleanstring);
                    $(this).val(cleanstring);
                }
            });
            // remove debris from phone number
            $(".phone").each(function(i) {
                if($(this).val()) {
                    $(this).val(cleanstring = $(this).val().replace(/[^\d\.]/g, ''));
                }
            });
            // remove the optional phones
            $('.optionalPhone').find($("input[type=text]")).each(function(i) {
                if(!$(this).val()) {
                    $(this).next($('this option:selected')).remove();
                }
            });
        }

        $.fn.scrollView = function () {
            return this.each(function () {
                var theTop = $(this).offset().top - 40;
                $('html, body').animate({
                    scrollTop: theTop
                }, 1000);
            });
        }

        function getLevelEducation() {
            selected = $("#education-select option:selected").val();
            if(selected=="undergrad") {
                if(!$.trim($("#undergradDegreeEarned").val())) {
                    $("#undergradDegreeEarned").addClass("error");
                    $(elem).scrollView();
                    return false;
                } else {
                    $("#undergradDegreeEarned").removeClass("error");
                }
            }
            if(selected=="grad") {
                if(!$.trim($("#gradDegreeEarned").val())) {
                    $("#gradDegreeEarned").addClass("error");
                    $(elem).scrollView();
                    return false;
                } else {
                    $("#gradDegreeEarned").removeClass("error");
                }
            }
        }

        function isValidEmailAddress(emailAddress) {
            var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
            return pattern.test(emailAddress);
        };
    </script>