<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include"includes/links-include.php"?>
    <link rel="stylesheet" type="text/css" href="css/contact.css" />
<title>Contact &middot; Portfolio</title>
</head>
<body class="body-contact">
    <?php include"includes/top-bar-include.php"?>
        
    <?php include"includes/nav-include.php"?>

    <div class="row">
		<div class="small-12 large-8 columns large-offset-2">
			<div id="submission-alert">
				<p></p>
			</div>
		</div>
	</div>


	<div class="row">
		<div class="small-12 large-8 columns large-offset-2">
			<div class="signup-panel">
				<form>
					<div class="row collapse">
						<div class="small-12  columns">
							<input id="name" class="feedback-input" type="text"
								placeholder="name">
						</div>
					</div>
					<div class="row collapse">
						<div class="small-12  columns">
							<input id="emailFrom" class="feedback-input" type="text"
								placeholder="email address">
						</div>
					</div>
					<div class="row collapse">
						<div class="small-12 columns ">
							<textarea id="message" class="feedback-input" type="text"
								placeholder="message"></textarea>
						</div>
					</div>
				</form>
				<a id="send" href="#" class="button">SEND</a>
			</div>
		</div>
	</div>

	<div class="row">&nbsp;</div>
	<div class="row">&nbsp;</div>

	<!-- scripts here -->
	<?php include 'includes/scripts-include.php';?>

	<script type="text/javascript" src="js/contact.js""></script>

</body>
</html>

