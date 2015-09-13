<?php
/*
Template Name: Homepage
*/
get_header();
?>
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
        $.ajax({
            url: "/job-listings-iframe",
            cache: false
        }).done(function( html ) {
            $("#jobsWidget").append(html);
            $(".learnmore").css("display", "inline");
        });
    });
</script>
