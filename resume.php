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
<body>
	<div id="container">
        <?php include"includes/top-bar-include.php"?>
        
        <?php include"includes/nav-include.php"?>
        
        <div id="main">


			<a href="pdfs/resume.pdf" class="btn full-width" target="_blank">Download
				Resume</a> <br />
			<!-- 			<br /> -->
			<div class="iframe-resume">
				<iframe src="pdfs/resume.pdf" frameborder="0" height="1150px"
					width="100%">Sorry, your browser does not support iframes </iframe>
			</div>
		</div>
	</div>

	<script src="foundation/js/vendor/jquery.js"></script>
	<script src="foundation/js/vendor/fastclick.js"></script>
	<script src="foundation/js/foundation.min.js"></script>
	<script> $(document).foundation(); </script>
</body>
</html>
