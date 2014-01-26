<nav>
	<ul>
		
		<?php
			
			if($pagename != null) {
				echo '<li id="homelink"><a href="/">Home</a></li>'; 
			}
			if($pagename != 'blog') { 
				echo '<li><a href="/blog">Blog</a></li>'; 
			}
			if($pagename != 'about-us') {
				echo '<li><a href="/about-us">About Us</a></li>'; 
			}
			if($pagename != 'resume-guide') { 
				echo '<li><a href="/resume-guide">Resume Guide</a></li>'; 
			}
			if($pagename != 'interview-guide') {
				echo '<li><a href="/interview-guide">Interview Guide</a></li>'; 
			}
			if($pagename != 'contact-us') { 
				echo '<li><a href="/contact-us">Contact Us</a></li>'; 
			}
		?>
	</ul>
</nav>