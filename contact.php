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
<body>
	<div id="container">
        <?php include"includes/top-bar-include.php"?>
        
        <?php include"includes/nav-include.php"?>
        
        <div id="submission-alert"></div>

		<div id="main">
			<div id="form-main">
				<div id="form-div">
					<form class="form" id="form1">

						<p class="name">
							<input type="text"
								class="validate[required,custom[onlyLetter],length[0,100]] feedback-input"
								placeholder="Name" id="name" />
						</p>

						<p class="emailFrom">
							<input type="text"
								class="validate[required,custom[email-from]] feedback-input"
								id="emailFrom" placeholder="Email" />
						</p>

						<p class="text">
							<textarea class="validate[required,length[6,300]] feedback-input"
								id="message" placeholder="Comment"></textarea>
						</p>


						<div class="submit">
							<input type="submit" value="SEND" id="button-blue" />
							<div class="ease"></div>
						</div>
					</form>
				</div>
			</div>

		</div>

	</div>


	<!-- scripts here -->
	<script src="foundation/js/vendor/jquery.js"></script>
	<script src="foundation/js/vendor/fastclick.js"></script>
	<script src="foundation/js/foundation.min.js"></script>
	<script> $(document).foundation(); </script>

	<script type="text/javascript" src="js/contact.js""></script>

</body>
</html>

