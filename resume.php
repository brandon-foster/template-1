<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include"includes/links-include.php"?>
    <link rel="stylesheet" type="text/css" href="css/resume.css" />
<title>Resume &middot; Portfolio</title>
</head>
<body class="body-resume">
    <?php include"includes/top-bar-include.php"?>
        
    <?php include"includes/nav-include.php"?>
        

	<div class="row">
        <div class="small-12 columns">
            <a href="pdfs/resume.pdf" class="button"
                style="width: 100%;" target="_blank">
                <span class="show-for-medium-up">Download Resume</span>
                <span class="show-for-small-only">View Resume</span>
            </a>
        </div>
    </div>

    <div class="row show-for-medium-up">
        <div class="large-12 columns">
            <div class="iframe-resume">
                <iframe src="pdfs/resume.pdf" frameborder="0"
                    height="1150px" width="100%">Sorry, your browser
                    does not support iframes </iframe>
            </div>
        </div>
    </div>

    <div class="row">&nbsp;</div>
    <div class="row">&nbsp;</div>

    <!-- scripts here -->
	<?php include 'includes/scripts-include.php';?>
		
</body>
</html>
