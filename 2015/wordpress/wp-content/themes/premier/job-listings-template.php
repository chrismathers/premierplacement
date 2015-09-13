<?php
/*
Template Name: Job Listings Template
*/

global $mypath;
$mypath = "http://premierplacement/wordpress";
$iframe = false;
?>

<?php 
	if($page_id == 6) $iframe = 'true'; 
	if ( is_page('job-listings-iframe')) {
	  $iframe = true;
	} else {
 	  $iframe = false;	
	}
	if(!$iframe) {
		get_header(); 
		echo('
					<h1>Finding Premier people for Premier career opportunities since 1987</h1>
					<h2 class="job-page">Here are just some of our job listings</h2><div class="jobListingsPage">');
	}
?>

	<?php 
	$type = 'job-listing';
	$args=array(
	 'post_type' => $type,
	 'post_status' => 'publish',
	 'paged' => $paged,
	 'posts_per_page' => 20,
	 'ignore_sticky_posts'=> 1
	);
	$temp = $wp_query; // assign ordinal query to temp variable for later use  
	$wp_query = null;
	$wp_query = new WP_Query($args); 
	?>

		<ul class="jobs-list" id="listticker">

			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<li>
					<a name="<?php echo(the_ID()); ?>"></a>
					<h3><?php echo(types_render_field("job-title", array("arg1"=>"val1","arg2"=>"val2"))); ?></h3>
					<p>
					<?php if($iframe) { 
						echo(am_get_content(100, types_render_field("job-description", array())) );
					} else {
						echo(types_render_field("job-description", array())); 
					}
					if($iframe) { ?>
						<span class="learnmore"><a href="/job-listings-page/#<?php echo(the_ID()); ?>" target="_parent">learn more</a></span>
					<?php } ?>
					</p>
				</li>

			<?php endwhile; // end of the loop. ?>
		</ul>


<?php
if(!$iframe) {
	echo('</div></div><a href="#" class="scrollup">scrollup</a>');
	get_sidebar();
	get_footer(); 
}
?>