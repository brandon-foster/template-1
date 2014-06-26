
<html>
<head>
<meta charset="utf-8">
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

		<!-- jQuery -->
		<script type="text/javascript"
			src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/contact.js""></script>

</body>
</html>

