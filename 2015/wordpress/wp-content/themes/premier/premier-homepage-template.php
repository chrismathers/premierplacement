<?php
/*
Template Name: Homepage
*/
get_header();
?>

        <img id="pp-logo" src="images/pp-logo-499x142.png"/>

        <h2>Finding Premier people for Premier career opportunities since 1987</h2>

        <h1>Laura Schmieder is President of Premier Placement, Inc., which specializes in the placement of Manufacturing, Supply Chain, Production Management, Engineering, HR, IT, Finance, Sales, and Marketing candidates throughout the United States with additional global opportunities.</h1>

        <div id="job-listings">
            <h2>JOB LISTINGS</h2>
            <div id="jobsWidget" class="jobs-list">

            </div>

            <div id="seealljobs"><a href="/job-listings-page" class="btn-c">see all jobs</a></div>
        </div>
    </div>

    <?php get_sidebar(); ?>


<?php
get_footer();
?>

<script type="text/javascript">
    $(document).ready(function() {
        $("#zip").blur(function() {
            if( !isValidEmailAddress( $("#zip").val() ) ) {
                $("#zipError").toggle();
            } else {
                var city = $("#city");
                var state = $("#state");
                if (!city.val()) {
                    $.getJSON("http://www.geonames.org/postalCodeLookupJSON?&country=US&callback=?", {postalcode: this.value }, function(response) {
                        if (!city.val() && response && response.postalcodes.length && response.postalcodes[0].placeName) {
                            //city.val(response.postalcodes[0].placeName);
                            alert(response.postalcodes[0].placeName);
                        }
                        if (!state.val() && response && response.postalcodes.length && response.postalcodes[0].adminName1) {
                            //state.val(response.postalcodes[0].adminName1);
                            alert(response.postalcodes[0].adminName1);
                        }
                    })
                    //.success(function() { alert("second success"); })
                    //.error(function() { alert("error"); })
                    //.complete(function() { alert("complete"); })
                }
            }
        });

        $.ajax({
            url: "/job-listings-iframe",
            cache: false
        }).done(function( html ) {
                    $("#jobsWidget").append(html);
                    $(".learnmore").css("display", "inline");
                });
    });

    $(function () {
        $("#miniInput").submit(function () {
            var o = {};
            o.firstName = $('input[name=firstName]').val();
            o.lastName = $('input[name=lastName]').val();
            if(o.firstName || o.lastName) {
                o.realname = o.firstName + " " + o.lastName;
            }
            if( $('input[name=email]').val() && !isValidEmailAddress( $("#email").val() ) ) {
                $("#emailError").toggle();
                return false;
            } else {
                o.email = $('input[name=email]').val();
            }
            o.zip = $('input[name=zip]').val();
            var value = $.param(o);
            if(o.realname != "" || $("#email").val() != "" || o.zip != "") {
                $.cookie('premier', value, { raw: true });
            }
            return true;
        });
    });

    jQuery.deparam = function (params) {
        var o = {};
        if (!params) return o;
        var a = params.split('&');
        for (var i = 0; i < a.length; i++) {
            var pair = a[i].split('=');
            o[decodeURIComponent(pair[0])] = decodeURIComponent(pair[1]);
        }
        return o;
    }


    var speed = 700;
    var pause = 3500;
    /*
    function newsticker()
    {
        last = $('ul#listticker li:last').hide().remove();
        $('ul#listticker').prepend(last);
        $('ul#listticker li:first').slideDown("slow");
    }

    interval = setInterval(newsticker, pause);
*/
    function isValidEmailAddress(emailAddress) {
        var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
        return pattern.test(emailAddress);
    };
</script>


