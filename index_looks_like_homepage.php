<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<TITLE>Premier Placement, Inc. - Search and Recruiting Services</TITLE>
<META name="keywords" content="engineering jobs, Philadelphia area, placement services, job, jobs, job postings, job bank, job listings, job database, job search, vacancy, job vacancies, consulting, contract, Engineering, Manufacturing, Materials Management, Finance, MIS, HR, human resources, placement, temporary, permanent, career search, career, employment agency, employment, recruiting, recruitment, opportunity, opportunities, recruiter, headhunter, head hunter, work, staffing, help wanted, personnel, human resources, outsourcing, employer, employers, Allentown, Pennsylvania, Philadelphia, Eastern Pennsylvania, Western New Jersey">
<META name="description" content="Premier Placement, Inc. provides search and recruiting services.  Specializing in the placement of Engineering, Manufacturing, Materials Management, and Finance candidates, as well as Sales, MIS, and HR personnel, we concentrate primarily in Eastern Pennsylvania and Western New Jersey">
<!--<link rel="STYLESHEET" type="text/css" href="home_old.css">-->
<link rel="STYLESHEET" type="text/css" href="css/style.css">
<!--[if lte IE 8]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]--> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="scripts/jquery.cookie.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
</head>

<body>

	<div id="container">
		<div id="leftBk">
            <header>
				<img src="images/logo_no_text.png" />
            	<div id="bannerText">
	                <h2 style="display:none">PREMIER</h2>
    	            <h3 style="display:none">PLACEMENT, INC.</h3>
    	            
                </div>
            </header>

			<div id="rightBk">
				<nav>
					<ul>
						<li><a href="about-us">About Us</a></li>
						<li><a href="resume_guide.html">Resume Guide</a></li>
						<li><a href="career_links.html">Career Links</a></li>
						<li><a href="contact_us.html">Contact Us</a></li>
						<li><a href="interview_guide.html">Interview Guide</a></li>
					</ul>
				</nav>
				<article>
					<div id="slogan">
						<h1>Finding Premier people for Premier career opportunities since 1987</h1>
					</div>
					<div id="content">
						<div id="specialty">
							<h2>Specializing in Manufacturing</h2>
							<h3>Engineering, Manufacturing Operations, Human Resources, 
  Supply Chain, Information Technology, Sales and Marketing</h3>

						</div>
						<img src="images/workingman.png" />
						<div class="clearfix"></div>
						<div id="buttonBlock">
							<input type="button" onClick="parent.location='search_jobs.html'" value="search for jobs" class="myButton" />
							<input type="button" onClick="parent.location='post_resume.html'" value="submit your resume" class="myButton" />
						</div>

						<div id="bottom">

							<div id="jobsWidgetDiv">
								<div id="jobsWidget">

								</div>
								<div id="seealljobs"><a href="">see all jobs</a></div>
							</div>

							<div id="submit">
								<h3>Get started finding your new job by submitting your resume to Premier Placement, Inc.</h3>
								<h4>Step 1</h4>
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

										<input class="submitButton" type="submit" value="Continue" />
									</form>
								</div>
								<div id="raw"></div>
							</div>

							<div id="ad">
								<script type="text/javascript">
								<!--
								google_ad_client = "ca-pub-1095158468922540";
								/* 300x250 premierplacement */
								google_ad_slot = "5241994636";
								google_ad_width = 300;
								google_ad_height = 250;
								//-->
								</script>
								<!--<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>-->
							</div>
						</div>
					</div>					

				</article>

				<footer>
					<nav>
						<ul>
							<li><a href="about_ us.html">About Us</a></li>
							<li><a href="resume_guide.html">Resume Guide</a></li>
							<li><a href="career_links.html">Career Links</a></li>
							<li><a href="contact_us.html">Contact Us</a></li>
							<li><a href="interview_guide.html">Interview Guide</a></li>
						</ul>
					</nav>
				</footer>

			</div>
		</div>
	</div>

<script type="text/javascript">	
	$(document).ready(function() {
		$("#zip").blur(function() {
			if( !isValidEmailAddress( $("#zip").val() ) ) {
				$("#zipError").toggle();
			} else {
				var city = $("#city");
				var state = $("#state");
				if (!city.val()) {
					$.getJSON("http://www.geonames.org/postalCodeLookupJSON?&country=US&callback=?", {postalcode: this.value }, function(response) {
						if (!city.val() && response && response.postalcodes.length && response.postalcodes[0].placeName) {
							//city.val(response.postalcodes[0].placeName);
							alert(response.postalcodes[0].placeName);
						}
						if (!state.val() && response && response.postalcodes.length && response.postalcodes[0].adminName1) {
							//state.val(response.postalcodes[0].adminName1);
							alert(response.postalcodes[0].adminName1);
						}
					})
					//.success(function() { alert("second success"); })
					//.error(function() { alert("error"); })
					//.complete(function() { alert("complete"); })
				}
			}
		});

		$.ajax({
        url: "wordpress/job-listings-iframe",
        cache: false
        }).done(function( html ) {
        $("#jobsWidget").append(html);
        $(".learnmore").css("display", "inline");
        });
	});

	$(function () {
    $("#miniInput").submit(function () {
      var o = {};
      o.firstName = $('input[name=firstName]').val();
			o.lastName = $('input[name=lastName]').val();
			if(o.firstName || o.lastName) {
				o.realname = o.firstName + " " + o.lastName;
			}	
			if( $('input[name=email]').val() && !isValidEmailAddress( $("#email").val() ) ) {
				$("#emailError").toggle();
				return false;
			} else {
          o.email = $('input[name=email]').val();
      }
      o.zip = $('input[name=zip]').val();
      var value = $.param(o);
      if(o.realname != "" || $("#email").val() != "" || o.zip != "") {
        $.cookie('premier', value, { raw: true });
      }
          return true;
    });
  });

  jQuery.deparam = function (params) {
      var o = {};
      if (!params) return o;
      var a = params.split('&');
      for (var i = 0; i < a.length; i++) {
          var pair = a[i].split('=');
          o[decodeURIComponent(pair[0])] = decodeURIComponent(pair[1]);
      }
      return o;
  }

	
	var speed = 700;
	var pause = 3500;
	
	function newsticker()
	{
	    last = $('ul#listticker li:last').hide().remove();
	    $('ul#listticker').prepend(last);
        $('ul#listticker li:first').slideDown("slow");
	}

	interval = setInterval(newsticker, pause);

  function isValidEmailAddress(emailAddress) {
      var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
      return pattern.test(emailAddress);
  };
</script>


</body>
</html>
