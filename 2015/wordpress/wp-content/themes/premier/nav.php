    <nav class="nav-collapse">
        <ul>
            <li><a href="/">HOME</a></li>
	    <li><a href="/job-listings-page">JOBS</a></li>
	    <li><a href="/blog/">BLOG</a></li>
            <li><a href="/interview-guide">INTERVIEW GUIDE</a></li>
            <li><a href="/resume-guide">RESUME GUIDE</a></li>
            <li><a href="/about-us">ABOUT US</a></li>
            <li><a href="/contact-us">CONTACT US</a></li>
        </ul>
    </nav>

    <!--<div class="clearFix"></div>-->

    <div id="col-left">
        <div id="main-nav">
            <ul>
                <li<?php if ($pagename == 'home') echo ' class="selected"' ?>><a href="/">HOME</a></li>
                <li<?php if ($pagename =='job-listings-page') echo ' class="selected"' ?>><a href="/job-listings-page">JOBS</a></li>
                <li<?php if ($pagename == 'blog') echo ' class="selected"' ?>><a href="/blog">PREMIER PERSPECTIVES</a></li>
                <li class="dropdown-container<?php if ($pagename == 'interview-guide' || $pagename == 'resume-guide') echo ' selected' ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">CAREER ADVICE</a>
                    <div class="dropdown">
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/interview-guide">Interview Guide</a></li>
                            <li><a href="/resume-guide">Resume Guide</a></li>
                        </ul>
                    </div>
                <li<?php if ($pagename == 'about-us') echo ' class="selected"' ?>><a href="/about-us">ABOUT US</a></li>
                <li<?php if ($pagename == 'contact-us') echo ' class="selected"' ?>><a href="/contact-us">CONTACT US</a></li>
            </ul>
        </div>