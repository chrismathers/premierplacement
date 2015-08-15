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
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Laura Schmieder - Premier Placement, Inc., which specializes in the placement of Manufacturing, Supply Chain, Production Management, Engineering, HR, IT, Finance, Sales, and Marketing candidates.</title>
    <meta name="keywords" content="Pennsylvania jobs, New Jersey jobs, manufacturing jobs, engineering jobs, jobs, premierplacement.com, career opportunities, resume, employment">
    <meta name="description" content="Finding Premier people for Premier career opportunities since 1987, Premier Placement, Inc. provides search and recruiting services.  Specializing in the placement of Engineering, Manufacturing, Materials Management, and Finance candidates, as well as Sales, MIS, and HR personnel, we concentrate primarily in Eastern Pennsylvania and Western New Jersey">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <link rel="stylesheet" type="text/css" media="all" href="/css/main.css"/>
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="http://code.jquery.com/jquery-latest.min.js"
            type="text/javascript"></script>
    <script src="/scripts/hamburger.js"></script>
    <script src="/scripts/responsive-nav.js"></script>

    <?php if ($pagename == 'registration')  ?>
    <?php get_template_part( 'reg-scripts' );?>

    <?>
</head>
<body>

<div id="content">

	<?php get_template_part( 'nav' );?>