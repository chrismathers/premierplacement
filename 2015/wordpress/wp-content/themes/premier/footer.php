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
            scalejobList();
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