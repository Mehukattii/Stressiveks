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
	<body class="left-sidebar">

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
							<li><a href="paivakirja.php">Päiväkirja</a></li>
							<li><a href="profiili.php" class="active"> Profiili </a></li>
							<?php  
								if (isset($_SESSION['sloggedIn'])) : ?>
								<li><a href="logOutUser.php">Kirjaudu ulos</a></li>
							<?php endif ?>
						</ul>
					</nav>

				</div>
			</div>

		<!-- Main -->
			<div id="main2" class="wrapper style1">
				<div class="container">
					<div class="row">
					
						<!-- Sidebar -->
						<div id="sidebar" class="4u sidebar">
							<section id="profileleft">
								<header class="major">
								<h2>
										
									
								</h2>
								</header>
								<div class="row half">
									<img src="images/profilepic.png" id="avatar" alt="avatar">
									<a href="updateUser.php" class="editbtn">Muokkaa tietoja</a>
								</div>
							</section>
						
						<!-- Content -->
						<div id="content" class="8u skel-cell-important">
							<section id="profileright">
								<h2>
									<?php echo $_SESSION['sfirstname'];?> 
									<?php echo $_SESSION['slastname'];?>	
									<br>
									<?php 
									echo $_SESSION['sage'] . " vuotta <br>" .
									$_SESSION['sheight'] . " cm <br>" .
									$_SESSION['sweight'] . " kg <br>" .
									$_SESSION['semail'];
								

									?>
								</h2>
								
							</section>
							
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