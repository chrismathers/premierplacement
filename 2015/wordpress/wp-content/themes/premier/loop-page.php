<?php
/**
 * The loop that displays a page.
 *
 * The loop displays the posts and the post content. See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-page.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
 */
?>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<!--[if lte IE 8]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
<?php
/**
<style>
html {
	font-family:Arial,Helvetica,sans-serif;
}
body {
	-moz-background-clip:border;
	-moz-background-inline-policy:continuous;
	-moz-background-origin:padding;
	margin:0 auto;
	overflow: hidden;
	border: none;
}

ul {
margin: 0;
padding: 10px 2px; }
ul li {
border: 0;
margin: 0;
padding: 6px 6px 4px;
overflow: hidden;
list-style: none; }
  ul li h3 {
  font-size: 13px;
  clear: both;
  padding: 0;
  margin: 0; }
  ul li p {
  color: #555;
  font-size: 11.5px;
  padding: 0;
  margin: 4px 0 3px;
  line-height: 1.2em; }
  ul li .learnmore {
  font-size: 11px; }
    ul li .learnmore a {
    color: #0373E5;
    text-decoration: none;
    padding: 0 0 0 9px; }
    ul li .learnmore a:hover {
    text-decoration: underline; }

.learnmore { display:none; }
</style>
*/
?>

		<ul id="listticker">

			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<li>
					<a name="<?php echo(the_ID()); ?>"></a>
					<h3><?php echo(types_render_field("job-title", array("arg1"=>"val1","arg2"=>"val2"))); ?></h3>
					<p><?php echo(am_get_content(100, types_render_field("job-description", array())) );
					  ?>
					<span class="learnmore"><a href="#<?php echo(the_ID()); ?>" target="_parent">learn more</a></span>
					</p>
				</li>

			<?php endwhile; // end of the loop. ?>
		</ul>
