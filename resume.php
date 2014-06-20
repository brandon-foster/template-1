<html>
<head>
<meta charset="utf-8">
    <?php include"includes/links-include.php"?>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-cherry-pick.css" />
    <title>Resume &middot; Portfolio</title>
</head>
<body>
	<div id="container">
        <?php include"includes/top-bar-include.php"?>
        
        <?php include"includes/nav-include.php"?>
        
        <div id="main">
        	<div>
        		<button class="btn"> Download PDF Resume </button>
        	</div>
        	<div class="content-left">
				<?php include 'includes/content/main-resume.txt'; ?>
        	</div>
        	<div class="content-right">
        		<?php include 'includes/links.php'; ?>
        	</div>
        </div>
	</div>

	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</body>
</html>
