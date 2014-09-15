<?php
/**
 * The Header for our theme.
 *
 * @package WordPress
 * @subpackage Premier
 * @since Twenty Ten 1.0
 */

global $mypath;
//$mypath = "http://localhost/premierplacement/";
$mypath = "http://www.premierplacement.com";
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<TITLE>Laura Schmieder - Premier Placement, Inc., which specializes in the placement of Manufacturing, Supply Chain, Production Management, Engineering, HR, IT, Finance, Sales, and Marketing candidates.</TITLE>
<META name="keywords" content="Pennsylvania jobs, New Jersey jobs, manufacturing jobs, engineering jobs, jobs, premierplacement.com, career opportunities, resume, employment">
<META name="description" content="Finding Premier people for Premier career opportunities since 1987, Premier Placement, Inc. provides search and recruiting services.  Specializing in the placement of Engineering, Manufacturing, Materials Management, and Finance candidates, as well as Sales, MIS, and HR personnel, we concentrate primarily in Eastern Pennsylvania and Western New Jersey">
<link rel="stylesheet" type="text/css" media="all" href="/css/style.css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lte IE 8]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]--> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="/scripts/jquery.cookie.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="/fonts/calibri.cufonfonts.js"></script>
<script>
Cufon.replace('.calibri_italic', { fontFamily: 'Calibri Italic', hover: true });
Cufon.replace('.calibri', { fontFamily: 'Calibri', hover: true });
</script>

<script charset="utf-8" type="text/javascript">var switchTo5x=false;</script>
<script charset="utf-8" type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher:'wp.9dffd411-fad3-46eb-b9bc-fe914c5fda9f'});var st_type='wordpress3.1.3';</script>

</head>

<body>

	<div id="container">
		<div id="leftBk">
            <header>
		          <img src="<?php echo($mypath); ?>/images/logo_no_text.png" />
            	<div id="bannerText" onclick="document.location='http://premierplacement.com'">
	            <h2 style="display:none">PREMIER</h2>
    	            <h3 style="display:none">PLACEMENT, INC.</h3>
                </div>
            </header>

			<div id="rightBk">
			  <?php wp_nav_menu(); ?>
				<?php get_template_part( 'nav' );?>
				<article>