<html>
	<head>
		<?php
		include 'component/link.php';
		include'component/meta.php';
		?>
		<title>My portofolio</title>
	</head>
	<body>
		<?php
		 	include'component/navbar.php';
		?>
		<div class="row slaider">
			<div class="col col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<h2>Automatic Slideshow</h2>
				<p>Change image every 2 seconds:</p>

				<div class="slideshow-container">

					<div class="mySlides fade">
						<div class="numbertext">1 / 3</div>
						<img src="img/387130-bridges-architectural-wonders-around-the-world-jamsu-bridge-under-the-banpo-bridge-s-korea.jpg" style="width:100%">
						<div class="text">Caption Text</div>
					</div>

					<div class="mySlides fade">
						<div class="numbertext">2 / 3</div>
						<img src="img/ahmed-hasan-331353.jpg" style="width:100%">
						<div class="text">Caption Two</div>
					</div>

					<div class="mySlides fade">
						<div class="numbertext">3 / 3</div>
						<img src="img/ahmed-rizkhaan-306766.jpg" style="width:100%">
						<div class="text">Caption Three</div>
					</div>

				</div>
				<br>

				<div style="text-align:center">
					<span class="dot"></span>
					<span class="dot"></span>
					<span class="dot"></span>
				</div>
			</div>
		</div>
		<?php
		include 'component/script.php';
		?>
	</body>
</html>