<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include"includes/links-include.php"?>
<!-- 	<link href="css/gallery.css" rel="stylesheet" type="text/css"> -->
<link href="masonry/masonry.css" rel="stylesheet" type="text/css">
<title>Photos &middot; Portfolio</title>
</head>
<body class="body-photos">

    <?php include"includes/top-bar-include.php"?>

    <?php include"includes/nav-include.php"?>

<div class="wrapper">
		<div class="row">
			<div class="small-12 columns">
				<div style="position: relative; margin-right: auto; margin-left: auto;">
					<div id="masonryContainer">


						<div class="masonry-brick">
							<a href="http://dsa-brandonfoster.rhcloud.com/filebst/index.html"
								target="_blank">
								<h3>File-based Binary Search Tree</h3> <img
								src="img/gallery/filebst-brandonfoster.rhcloud.com0663.png" />
								<p>A classic data structure that performs operations on disk for
									persistence</p>

							</a>
						</div>
						<div class="masonry-brick">
							<a href="http://course-notes.herokuapp.com/" target="_blank">
								<h3>Course Notes Blog</h3> <img
								src="img/gallery/course-notes300x210.png" />
								<p>A Python Django blog for publishing personal course notes
									with a built in admin site for adding content.</p>
							</a>
						</div>
						<div class="masonry-brick">
							<a href="http://pecktext.herokuapp.com/" target="_blank">
								<h3>
									PeckText <span class="small">(collaboration in progress)</span>
								</h3> <img src="img/gallery/pecktext300x210.png" />
								<p>A social engagement app that gamifies community service and
									streamlines volunteer recruitment</p>
							</a>
						</div>
						<div class="masonry-brick">
							<a href="https://github.com/ualerts-org/ualerts-chat"
								target="_blank">
								<h3>UAlerts Chat</h3> <img src="img/gallery/chat.png" />
								<p>An experimental web chat application for Virginia Tech's
									emergency notification system</p>
							</a>
						</div>
						<div class="masonry-brick">
							<a href="http://filebox.vt.edu/users/brandonf/" target="_blank">
								<h3>Vanilla CSS Portfolio Site <span class="small">(Spring
									Break 2013)</span></h3> <img
								src="img/gallery/hand-coded-site-240x197.png" />
								<p>My previous portfolio site built from scratch that served as
									a CSS refresher</p>
							</a>
						</div>

						<div class="masonry-brick">
							<a href="http://www.nis.vt.edu/uc/devices/pricing"><h3>Device
									Catalog</h3> <img src="img/gallery/device-catalog.png" />
								<p>A dynamic front end to Virginia Tech's unified communications
									device pricing catalog</p></a>
						</div>
						<div class="masonry-brick">
							<a href="http://www.westaj.org.vt.edu/" target="_blank"><h3>
									Residential College Site Navigation</h3> <img
								src="img/gallery/west-aj.png" />
								<p>A Bootstrap 2 navigation bar for the web site of the
									Residential College at West Ambler Johnston</p></a>
						</div>

					</div>
					<!-- /.large-12 columns -->
				</div>
				<!-- custom style div -->
			</div>
			<!--/.masonryContainer-->
		</div>
		<!--/.row -->
	</div>
	<!--/.wrapper-->

	<!-- scripts here -->
	<?php include 'includes/scripts-include.php';?>

	<script type="text/javascript" src="masonry/masonry.pkgd.min.js"></script>
	<script type="text/javascript" src="js/gallery.js"></script>
	<script type="text/javascript" src="masonry/masonry-activate.js"></script>
</body>
</html>

