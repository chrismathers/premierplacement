
			TEMPLATE BEING USED: <?php c2c_reveal_template(); ?>
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
});
</script>
</html>