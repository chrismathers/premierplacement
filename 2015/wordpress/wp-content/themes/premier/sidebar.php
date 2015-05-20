<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

    <div id="col-right">

        <div id="buttonBlock">
            <a href="/job-listings-page" class="btn">SEARCH JOBS</a>
            <a href="post_resume.html" class="btn-a">SUBMIT RESUME</a>
        </div>

        <div id="submit">
            <h2>START HERE</h2>

            <div id="formDiv">
                <form id="miniInput" action="post_resume.html" method="post">
                    <label for="firstName">First Name:</label>
                    <input id="firstName" name="firstName" type="text" value=""></input>

                    <label for="lastName">Last Name:</label>
                    <input id="lastName" name="lastName" type="text" value=""></input>

                    <label for="email">Email:</label>
                    <input id="email" name="email" type="text" value=""></input>

                    <div id="emailError" class="help-inline">Please provide a valid email address</div>

                    <label for="zip">Zip:</label>
                    <input id="zip" name="zip" type="text" value=""></input>

                    <button class="submitButton btn-b" type="submit" value="Next Step">Next Step</button>
                </form>
            </div>
        </div>

        <div class="blog full-page">
                <h2>PREMIER PERSPECTIVES</h2>
            <span>by Laura Schmieder</span>

            <h3 class="entry-title">
                <a href="http://www.premierplacement.com/cover-letter-no-nos-every-job-seeker-shouldwellknow/"
                   title="Permalink to Cover Letter No-Nos Every Job Seeker Should …Well…Know." rel="bookmark">Cover
                    Letter No-Nos Every Job Seeker Should …<em>Well…</em>Know.</a>
            </h3>

            <p>One thing people who are applying for jobs dread most is writing a cover letter. Even if you are a good
                writer, it can be a chore and a pretty stressful process. Plus, if you aren’t one to frequently write …
                <a href="http://www.premierplacement.com/cover-letter-no-nos-every-job-seeker-shouldwellknow/">continue reading</a>
            </p>
            <p>One thing people who are applying for jobs dread most is writing a cover letter. Even if you are a good
                writer, it can be a chore and a pretty stressful process. Plus, if you aren’t one to frequently write …
                <a href="http://www.premierplacement.com/cover-letter-no-nos-every-job-seeker-shouldwellknow/">continue reading</a>
            </p>

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
