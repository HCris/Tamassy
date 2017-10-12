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
		<div class="row" style="padding:0px">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active img">
							<img class="d-block img-fluid" src="img/ahmed-hasan-331353.jpg" alt="First slide">
						</div>
						<div class="carousel-item img">
							<img class="d-block img-fluid" src="img/ahmed-rizkhaan-306766.jpg" alt="Second slide">
						</div>
						<div class="carousel-item img">
							<img class="d-block img-fluid" src="img/alexander-popov-367071.jpg" alt="Third slide">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row section_2_home_page">
				<div class="col-md-6 col-md-offset-2">
					<h1 class="underline" style="margin-top:0">Tamassy Creative</h1>
					<h1 class="sub">London Digital Design Studio</h1>

				</div>
				<div class="col-md-6">
					<p>Tamassy Creative is a digital media design studio based in London founded by a 	digital designer Taiyo Nagano.
					</p>
					<p>We offer design, branding, art direction and development across variety of digital platforms including web, mobile, print and motion graphics.
					</p>
					<p>Tamassy is an international network of talented designers and developers. We turn our passion for design and technology into commercial success for clients in business and public sector.
					</p>
					<p>
						<a href="/about" class="btn btn-opposite">ABOUT US</a>
						<a href="/services" class="btn btn-opposite">SERVICES</a>
						<a href="/portfolios/all" class="btn btn-opposite">WORKS</a>
					</p>

				</div>
			</div>
		</div>

		<div class="row">
			<div class="col full-width-title dark-bg">
				<h1>Featured Works</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 section_4_home_page">
				<div class="hovereffect">
					<img class="img-responsive" src="img/alberto-restifo-95349.jpg" alt="">
					<div class="overlay">
						<h2>Effect 13</h2>
						<p>
							<a href="#">LINK HERE</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 section_4_home_page">
				<div class="hovereffect">
					<img class="img-responsive" src="img/alex-jodoin-246078.jpg" alt="">
					<div class="overlay">
						<h2>Effect 13</h2>
						<p>
							<a href="#">LINK HERE</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 section_4_home_page">
				<div class="hovereffect">
					<img class="img-responsive" src="img/ahmed-hasan-331353.jpg" alt="">
					<div class="overlay">
						<h2>Effect 13</h2>
						<p>
							<a href="#">LINK HERE</a>
						</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row" style="margin-top:-100px;">
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 section_4_home_page">
				<div class="hovereffect">
					<img class="img-responsive" src="img/alberto-restifo-95349.jpg" alt="">
					<div class="overlay">
						<h2>Effect 13</h2>
						<p>
							<a href="#">LINK HERE</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 section_4_home_page">
				<div class="hovereffect">
					<img class="img-responsive" src="img/alex-jodoin-246078.jpg" alt="">
					<div class="overlay">
						<h2>Effect 13</h2>
						<p>
							<a href="#">LINK HERE</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 section_4_home_page">
				<div class="hovereffect">
					<img class="img-responsive" src="img/ahmed-hasan-331353.jpg" alt="">
					<div class="overlay">
						<h2>Effect 13</h2>
						<p>
							<a href="#">LINK HERE</a>
						</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row" style="margin-top: -100px;">
			<div class="col full-width-title dark-bg">
				<h1>Get in touch!</h1>
			</div>
		</div>
		<?php
		include 'component/script.php';
		?>
	</body>
</html>