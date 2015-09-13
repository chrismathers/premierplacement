  </div>
</body>

<script>
    var nav = responsiveNav(".nav-collapse", { // Selector
        insert: "after", // String: Insert the toggle before or after the navigation
        label: ""
    });

    $(function() {
        $('.dropdown-toggle').click(function(){
            $(this).next('.dropdown').toggleClass('open');
        });
    });

    var jobListUL = $("#job-listings ul");
    $(document).ready(function() {
        if( $(window).width() > 600 ) {
            //scalejobList();
        }
    });

    $(window).resize(function() {
        if( $(window).width() > 600 ) {
            //scalejobList();
        } else {
            jobListUL.height(242+"px");
        }
    });

    function scalejobList() {
        jobListUL.height($(window).height() - jobListUL.offset().top - 64);
    }
</script>

<script>

$(document).ready(function() {

    $(function () {
        $("#miniInput").submit(function () {
            var o = {};
            var firstName = $('input[name=firstName]').val();
            localStorage.setItem("firstName", firstName);
            var lastName = $('input[name=lastName]').val();
            localStorage.setItem("lastName", lastName);
            if( !$('#email').val() || !isValidEmailAddress( $('#email').val() ) ) {
                $("#emailError").toggle();
                return false;
            } else {
                var email = $('#email').val();
                localStorage.setItem("email", email);
            }
            var zip = $('input[name=zip]').val();
            localStorage.setItem("zip", zip);
        });
    });

    function isValidEmailAddress(emailAddress) {
        var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
        return pattern.test(emailAddress);
    };

	$('.st_facebook_buttons').parent().addClass('digg_digg');

	$('html, body').css('overflow', 'initial');

	$(function() {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });

  $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
          $('.scrollup').fadeIn();
      } else {
          $('.scrollup').fadeOut();
      }
  });

  $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
});
</script>

</html>