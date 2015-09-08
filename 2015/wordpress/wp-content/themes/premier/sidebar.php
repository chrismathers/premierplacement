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
            <a href="post_resume.html" class="btn-a">SUBMIT RESUME</a>
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

        <div class="blog full-page">
            <h2>PREMIER PERSPECTIVES</h2>
            <span>by Laura Schmieder</span>
            <ul>
		<?php $the_query = new WP_Query( 'posts_per_page=2' ); ?>
		<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
		<li><h3 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3></li>
		<li><p><?php the_excerpt(__('(more…)')); ?></p></li>
		<?php 
		endwhile;
		wp_reset_postdata();
		?>
		</ul>

            <a class="more btn-a" href="/blog/">All Posts</a>
        </div>

        <div class="affiliates">
            <img src="/images/NPA.png" />
            <img src="/images/chamberLogo.jpg" />
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

        <span class="right">created by: <a itemprop="url" href="http://www.xemedia.com">XEmedia.com</a></span>
    </div>
