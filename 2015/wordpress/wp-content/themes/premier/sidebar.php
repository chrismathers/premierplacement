<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package Premier
 */
?>
    <div id="col-right">
        <div id="buttonBlock">
            <a href="/job-listings-page" class="btn">SEARCH JOBS</a>
            <a href="/registration" class="btn-a">SUBMIT RESUME</a>
        </div>

        <?php if ($pagename != 'registration-page') { ?>
            <div id="submit">
                <h2>START HERE</h2>
                <div id="formDiv">
                    <form id="miniInput" action="/registration-page" method="post">
                        <label for="firstName">First Name:</label>
                        <input class="form-control" id="firstName" name="firstName" type="text" value=""></input>

                        <label for="lastName">Last Name:</label>
                        <input class="form-control" id="lastName" name="lastName" type="text" value=""></input>

                        <label for="email">Email:</label>
                        <input class="form-control" id="email" name="email" type="text" value=""></input>

                        <div id="emailError" class="help-inline">Please provide a valid email address</div>

                        <label for="zip">Zip:</label>
                        <input class="form-control" id="zip" name="zip" type="text" value=""></input>

                        <button class="submitButton btn-b" type="submit" value="Next Step">Next Step</button>
                    </form>
                </div>
            </div>
        <?php } ?>

	<?php if ($pagename != 'blog') { ?>
        <div class="blog full-page">
            <h2><a href="<?php the_permalink() ?>">PREMIER PERSPECTIVES</a></h2>
            <span>by Laura Schmieder</span>
            <ul>
		<?php $the_query = new WP_Query( 'posts_per_page=2' ); ?>
		<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
		<li><h3 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3></li>
		<li><p><a href="<?php the_permalink() ?>"><?php the_excerpt(__('(more…)')); ?></a></p></li>
		<?php 
		endwhile;
		wp_reset_postdata();
		?>
		</ul>

            <a class="more btn-a" href="/blog/">All Posts</a>
        </div>
	<?php } ?>


	<div class="widget-area">


<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>

			<li id="search" class="widget-container widget_search">
				<?php get_search_form(); ?>

				<script>
				$('[placeholder]').focus(function() {
				  var input = $(this);
				  if (input.val() == input.attr('placeholder')) {
					input.val('');
					input.removeClass('placeholder');
				  }
				}).blur(function() {
				  var input = $(this);
				  if (input.val() == '' || input.val() == input.attr('placeholder')) {
					input.addClass('placeholder');
					input.val(input.attr('placeholder'));
				  }
				}).blur();

				$('[placeholder]').parents('form').submit(function() {
				  $(this).find('[placeholder]').each(function() {
					var input = $(this);
					if (input.val() == input.attr('placeholder')) {
					  input.val('');
					}
				  })
				});

				</script>
			</li>

			<li id="archives" class="widget-container">
				<h3 class="widget-title"><?php _e( 'Archives', 'twentyten' ); ?></h3>
				<ul>
					<?php wp_get_archives( 'type=monthly' ); ?>
				</ul>
			</li>

			<li id="meta" class="widget-container">
				<h3 class="widget-title"><?php _e( 'Meta', 'twentyten' ); ?></h3>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</li>

		<?php endif; // end primary widget area ?>
			</ul>
		<!-- #primary .widget-area -->

	</div>

        <div class="affiliates">
  <a title="NPA the worldwide recruiting network" href="http://www.npaworldwide.com" target="_blank"><img src="/images/NPA.png"></a>
            <a title="Member: Greater Lehigh Valley Chamber of Commerce" href="http://web.lehighvalleychamber.org/EMPLOYMENT-SERVICES,-SCREENING-STAFFING/Premier-Placement,-Inc-398" target="_blank"><img src="/images/chamberLogo.jpg" /></a>
</div>
        <ul id="follow-list">
            <li>
                <a id="follow-lnkd" href="http://www.linkedin.com/company/premier-placement-inc" target="_blank">LinkedIn</a>
            </li>
            <li>
                <a id="follow-twtr" href="https://twitter.com/LauraSchmieder" target="_blank">Twitter</a>
            </li>
            <li>
                <a id="follow-fb" href="https://www.facebook.com/pages/Premier-Placement-Inc/10150132945420483?fref=ts" target="_blank">Facebook</a>
            </li>
        </ul>
	<div class="interesting-reads"><h3>Interesting Reads:</h3><p><a href="http://www.npaworldwide.com/resources/zen-and-the-art-of-split-placements/">Zen and the Art of Split Placements</a></p></div> 
        <span class="right">created by: <a itemprop="url" href="http://www.xemedia.com">XEmedia.com</a></span>
    </div>