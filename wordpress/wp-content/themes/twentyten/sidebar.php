<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

	<div class="sidebar1">
        <div class="headshotDiv">
            <img src="http://vrenihommes.com/images/headshot.png" class="headshot" />
        </div>
        <div id="followDiv">
             <div class="followDiv">
                <a href="http://www.linkedin.com/in/vrenihommes" target="_blank" class="linkedin">LinkedIn</a>
            </div>
                <!--<script src="http://platform.linkedin.com/in.js" type="text/javascript"></script>
                <script type="IN/Share" data-url="http://www.LinkedIn.com/profile/view?id=11289331&authType=NAME_SEARCH&authToken=rq3_&locale=en_US&srchid=e89add5b-c5f7-4606-ae1b-2e054fb404f3-0&srchindex=1&srchtotal=1&goback=%2Efps_PBCK_vreni+hommes_*1_*1_*1_*1_*1_*1_*2_*1_Y_*1_*1_*1_false_1_R_true_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2&pvs=ps&trk=pp_profile_name_link"></script>
            </div>-->
            <div class="followDiv">
                <a href="https://twitter.com/vhommes" target="_blank" class="twitter-follow-button" show_screen_name="false" data-show-count="false"></a>
                <script src="//platform.twitter.com/widgets.js" type="text/javascript"></script>
            </div>
        
            <div class="followDiv">
                <a href="http://vrenihommes.blogspot.com" target="_blank" class="blog">Blogspot</a>
            </div>
            <div class="followDiv" style="display:block">
                <a href="http://www.facebook.com/VreniHommesSustainability" target="_blank" class="facebook">Facebook</a>
            </div>
            <div class="followDiv">
                <a href="https://profiles.google.com/vrenihommes" target="_blank" class="google">&nbsp;</a>
            </div>
            
        </div>
        <div class="clearfix"></div>
        <nav style="display:none">
          <ul>
            <!--<li><a href="#">Home</a></li>
            <li><a href="resume_page.html">Resume</a></li>
            <li><a href="resources.html">Resources</a></li>
            <li><a href="contact.html">Contact</a></li>-->
          </ul>
        </nav>
        <aside>
    
            <div id="primary" class="widget-area" role="complementary">
                <ul class="xoxo">
    
    <?php
        /* When we call the dynamic_sidebar() function, it'll spit out
         * the widgets for that widget area. If it instead returns false,
         * then the sidebar simply doesn't exist, so we'll hard-code in
         * some default sidebar stuff just in case.
         */
        if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
    
                <li id="search" class="widget-container widget_search">
                    <?php get_search_form(); ?>
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
            </div><!-- #primary .widget-area -->
        </aside>
  <!-- end .sidebar1 --></div>

<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

		<div id="secondary" class="widget-area" role="complementary">
			<ul class="xoxo">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>
		</div><!-- #secondary .widget-area -->

<?php endif; ?>
