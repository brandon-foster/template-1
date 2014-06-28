<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include"includes/links-include.php"?>
    <link rel="stylesheet" type="text/css" href="css/photos.css" />
<title>Photos &middot; Portfolio</title>
</head>
<body>

	<div id="container">
        <?php include"includes/top-bar-include.php"?>
        
        <?php include"includes/nav-include.php"?>
        
        <div id="jssor-container">
            <?php include"includes/jssor-slider-include.php"?>
        </div>
	</div>

	<!-- scripts here -->
	<script src="foundation/js/vendor/jquery.js"></script>
	<script src="foundation/js/vendor/fastclick.js"></script>
	<script src="foundation/js/foundation.min.js"></script>
	<script> $(document).foundation(); </script>

	<script type="text/javascript" src="js/jssor.core.js"></script>
	<script type="text/javascript" src="js/jssor.utils.js"></script>
	<script type="text/javascript" src="js/jssor.slider.js"></script>
	<script type="text/javascript" src="js/jssor-slider-activate.js"></script>

</body>
</html>

