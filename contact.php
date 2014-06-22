
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
        
        <div id="main">

			<div id="form-main">
				<div id="form-div">
					<form class="form" id="form1">

						<p class="name">
							<input name="name" type="text"
								class="validate[required,custom[onlyLetter],length[0,100]] feedback-input"
								placeholder="Name" id="name" />
						</p>

						<p class="email">
							<input name="email" type="text"
								class="validate[required,custom[email]] feedback-input"
								id="email" placeholder="Email" />
						</p>

						<p class="text">
							<textarea name="text"
								class="validate[required,length[6,300]] feedback-input"
								id="comment" placeholder="Comment"></textarea>
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
		<script
			src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</body>
</html>

