<?php 
session_start();
?>
<!DOCTYPE HTML>
<!--
	Horizons by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Stressiveks</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="right-sidebar">

		<!-- Header -->
			<div id="header">
				<div class="container">
						
					<!-- Logo -->
						<h1><a href="index.php" id="logo">Stressiveks</a></h1>
					
					<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="index.php">Etusivu</a></li>
							<li><a href="HRV.php">HRV</a></li>
							<li><a href="stressindex.php">Stressi-indeksi</a></li>
							<li><a href="paivakirja.php" class="active" >Päiväkirja</a></li>
							<li><a href="profiili.php">Profiili</a></li>
							<?php  
								if (isset($_SESSION['sloggedIn'])) : ?>
								<li><a href="logOutUser.php">Kirjaudu ulos</a></li>
							<?php endif ?>
						</ul>
					</nav>

				</div>
			</div>

		<!-- Main -->
			<div id="main" class="wrapper style1">
				<div class="container">
					<div class="row">
					
						<!-- Content -->
						<div id="content" class="8u skel-cell-important">
							<section>
								<header class="major">
									<h2>Right Sidebar</h2>
									<span class="byline">Integer sit amet pede vel arcu aliquet pretium</span>
								</header>
								<p>Maecenas pede nisl, elementum eu, ornare ac, malesuada at, erat. Proin gravida orci porttitor enim accumsan lacinia. Donec condimentum, urna non molestie semper, ligula enim ornare nibh, quis laoreet eros quam eget ante. Aliquam libero. Vivamus nisl nibh, iaculis vitae, viverra sit amet, ullamcorper vitae, turpis. Aliquam erat volutpat. Vestibulum pulvinar sed, imperdiet nec, iaculis nec, leo. Fusce odio. Etiam arcu dui, faucibus eget, placerat vel, sodales eget, orci. Donec ornare neque ac sem. Mauris aliquet. Aliquam sem leo, vulputate sed, convallis at, ultricies quis, justo. Donec nonummy magna. Quisque eleifend. Aliquam lacinia metus ut elit. Donec ornare neque ac sem. Mauris aliquet.</p>
								<p>Donec nonummy magna quis risus. Quisque eleifend. Maecenas pede nisl, elementum eu, ornare ac, malesuada at, erat. Proin gravida orci porttitor enim accumsan lacinia. Donec condimentum, urna non molestie semper, ligula enim ornare nibh, quis laoreet eros quam eget ante. Aliquam libero. Vivamus nisl nibh, iaculis vitae, viverra sit amet, ullamcorper vitae, turpis. Aliquam erat volutpat. Vestibulum dui sem, pulvinar sed, imperdiet nec, iaculis nec, leo. Fusce odio. Etiam arcu dui, faucibus eget, placerat vel, sodales eget, orci. Donec ornare neque ac sem. Mauris aliquet. Aliquam sem leo, vulputate sed, convallis at, ultricies quis, justo. Phasellus tempor vehicula.</p>
								<p>Maecenas pede nisl, elementum eu, ornare ac, malesuada at, erat. Proin gravida orci porttitor enim accumsan lacinia. Donec condimentum, urna non molestie semper, ligula enim ornare nibh, quis laoreet eros quam eget ante. Aliquam libero. Vivamus nisl nibh, iaculis vitae, viverra sit amet, ullamcorper vitae, turpis. Aliquam erat volutpat. Vestibulum dui sem, pulvinar sed, imperdiet nec, iaculis nec, leo. Fusce odio. Etiam arcu dui, faucibus eget, placerat vel, sodales eget, orci. Donec ornare neque ac sem. Mauris aliquet. Aliquam sem leo, vulputate sed, convallis at, ultricies quis, justo. Phasellus tempor vehicula justo. Aliquam lacinia metus ut elit.</p>
							</section>
						</div>

						<!-- Sidebar -->
						<div id="sidebar" class="4u sidebar">
							<section>
								<header class="major">
									<h2>Etiam malesuada</h2>
								</header>
								<div class="row half">
									<section class="6u">
										<ul class="default">
											<li><a href="#">Donec facilisis tempor</a></li>
											<li><a href="#">Nulla convallis cursus</a></li>
											<li><a href="#">Integer congue euis</a></li>
											<li><a href="#">Venenatis vulputate</a></li>
											<li><a href="#">Morbi ligula volutpat</a></li>
										</ul>
									</section>
									<section class="6u">
										<ul class="default">
											<li><a href="#">Donec facilisis tempor</a></li>
											<li><a href="#">Nulla convallis cursus</a></li>
											<li><a href="#">Integer congue euis</a></li>
											<li><a href="#">Venenatis vulputate</a></li>
											<li><a href="#">Morbi ligula volutpat</a></li>
										</ul>
									</section>
								</div>
							</section>
							<section>
								<header class="major">
									<h2>Mauris vulputate</h2>
								</header>
								<ul class="default">
									<li><a href="#">Pellentesque lectus gravida blandit</a></li>
									<li><a href="#">Lorem ipsum consectetuer adipiscing</a></li>
									<li><a href="#">Phasellus nibh pellentesque congue</a></li>
									<li><a href="#">Cras vitae metus aliquam pharetra</a></li>
									<li><a href="#">Maecenas vitae orci feugiat eleifend</a></li>
									<li><a href="#">Phasellus nibh pellentesque congue</a></li>
									<li><a href="#">Cras vitae metus aliquam pharetra</a></li>
								</ul>
							</section>
						</div>
						
					</div>
				</div>
			</div>

		<footer>
			<?php
   				include("includes/footer.php")
			?>
		</footer>

	</body>
</html>