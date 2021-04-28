<?php
include("config/cconfig.php");
//include("config/chttps.php");
session_start();
  
if (!isset($_SESSION['sloggedIn'])){
header('Location: logInUser.php');
}
?>

<!DOCTYPE HTML>

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
		<script src="js/main.js"></script>
		<link rel="stylesheet" href="css/css.css" />
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="homepage">

		<!-- Header -->
			<div id="header">
				<div class="container">
						
					<!-- Logo -->
						<h1><a href="index.php" id="logo">Stressiveks</a></h1>
					
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.php" class="active">Etusivu</a></li>
								<li><a href="HRV.php">HRV</a></li>
								<li><a href="stressindex.php">Stressi-indeksi</a></li>
								<li><a href="paivakirja.php">Päiväkirja</a></li>
								<li><a href="profiili.php">Profiili</a></li>
								<?php  
									if (isset($_SESSION['sloggedIn'])) : ?>
									<li><a href="logOutUser.php">Kirjaudu ulos</a></li>
								<?php endif ?>
							</ul>
						</nav>


					<!-- Banner -->
						<div id="banner">
							<div class="container">
								<section>
									<header class="major">
									<?php  
										if (isset($_SESSION['sloggedIn'])) : ?>
										<h3>
											<?php echo "Hei, " . $_SESSION['sfirstname'] ."!"; ?> 
										</h3>
										<?php endif ?>
									</header>
									
									<p>  
										<strong> 
											
										</strong> 
									</p> 
								</section>			
							</div>
						</div>
				</div>
			</div>

		<!-- Featured -->
			<div class="wrapper style2">
				<section class="container">
					<header class="major">
						<h3>Omasta hyvinvoinnista kannattaa pitää huolta ja siihen voi vaikuttaa monin eri keinoin.</h3>
						<span class="byline">TOP 3 vinkit hyvinvoinnin vahvistamiseen</span>
					</header>
					<div class="row no-collapse-1">
						<section class="4u">
							<a href="#" class="image feature"><img src="images/food.jpg" alt="Hyvinvointiimme vaikuttaa se miten syömme"></a>
							<p>Se miten syömme, vaikuttaa olennaisesti hyvinvointiimme. Ruokailun säännöllisyys, ruoan laatu ja monipuolisuus vaikuttavat siihen, että kehomme saa ruoasta kaiken tarpeellisen, jolloin voimme fyysisesti ja psyykkisesti paremmin. Veden juontia ei kannata myöskään unohtaa.</p>
						</section>
						<section class="4u">
							<a href="#" class="image feature"><img src="images/sport.jpg" alt="Liikkumisesta apua hyvinvoinnin parantamiseen"></a>
							<p>Liikkuminen on helppo tapa huoltaa kehoa ja mieltä. Sen tuottama välitön mielihyvän tunne lievittää hetkellisesti huolia ja murheita. Pitkäaikaiset hyödyt mielen hyvinvointiin on kiistattomat. Säännöllinen liikkuminen torjuu ahdistusta ja masennusta sekä auttaa unensaannissa.</p>
						</section>
						<section class="4u">
							<a href="#" class="image feature"><img src="images/sleep.jpg" alt="Uni on välttämätöntä hyvinvoinnin kannalta"></a>
							<p>Riittävä ja palauttava uni on välttämätöntä hyvinvoinnin kannalta. Uni toimii usein mittarina sille, kuinka hyvin voimme ja palaudumme. Unen lisääminen on paras tapa panostaa omaan hyvinvointiin. Mikäli yön aikana ei ole saanut riittävästi unta ja lepoa, lyhytaikaisilla päiväunilla voi saada lisää virtaa päivään.</p>
						</section>
	
					</div>
				</section>
			</div>

		<!-- Main -->
			<div id="main" class="wrapper style1">
				<section class="container">
					<header class="major">
						<h2>Sykevälivaihtelun ABC</h2>
					</header>
					<div class="row">
					
						<!-- Content -->
							<div class="6u">
								<section>
									<ul class="style">
										<li>
											<span class="fa fa-heartbeat"></span>
											<h3>Sykevälivaihtelu</h3>
											<span>Sykevälivaihtelu on sydämen sykkeiden välisen eron vaihtelevuutta. Se kuvastaa sydämen kyvykkyyttä reagoida muuttuviin olosuhteisiin ja odottamattomaan ärsykkeeseen.</span>
										</li>
										<li>
											<span class="fa fa-cloud"></span>
											<h3>Aliquam luctus</h3>
											<span>Pellentesque viverra vulputate enim. Aliquam erat volutpat. Maecenas condimentum enim tincidunt risus accumsan.</span>
										</li>
									</ul>
								</section>
							</div>
							<div class="6u">
								<section>
									<ul class="style">
										<li>
											<span class="fa fa-cogs"></span>
											<h3>Integer ultrices</h3>
											<span>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim.</span>
										</li>
										<li>
											<span class="fa fa-leaf"></span>
											<h3>Aliquam luctus</h3>
											<span>Pellentesque viverra vulputate enim. Aliquam erat volutpat. Maecenas condimentum enim tincidunt risus accumsan.</span>
										</li>
									</ul>
								</section>
							</div>

					</div>
				</section>
			</div>

		<!-- Footer -->
			<div id="footer">
				<div class="container">

					<!-- Lists -->
						<div class="row">
							<div class="8u">
								<section>
									<header class="major">
										<h2>Donec dictum metus</h2>
										<span class="byline">Quisque semper augue mattis wisi maecenas ligula</span>
									</header>
									<div class="row">
										<section class="6u">
											<ul class="default">
												<li><a href="#">Pellentesque elit non gravida blandit.</a></li>
												<li><a href="#">Lorem ipsum dolor consectetuer elit.</a></li>
												<li><a href="#">Phasellus nibh pellentesque congue.</a></li>
												<li><a href="#">Cras vitae metus aliquam  pharetra.</a></li>
											</ul>
										</section>
										<section class="6u">
											<ul class="default">
												<li><a href="#">Pellentesque elit non gravida blandit.</a></li>
												<li><a href="#">Lorem ipsum dolor consectetuer elit.</a></li>
												<li><a href="#">Phasellus nibh pellentesque congue.</a></li>
												<li><a href="#">Cras vitae metus aliquam  pharetra.</a></li>
											</ul>
										</section>
									</div>
								</section>
							</div>
							<div class="4u">
								<section>
									<header class="major">
										<h2>Donec dictum metus</h2>
										<span class="byline">Mattis wisi maecenas ligula</span>
									</header>
									<ul class="contact">
										<li>
											<span class="address">Address</span>
											<span>1234 Somewhere Road #4285 <br />Nashville, TN 00000</span>
										</li>
										<li>
											<span class="mail">Mail</span>
											<span><a href="#">someone@untitled.tld</a></span>
										</li>
										<li>
											<span class="phone">Phone</span>
											<span>(000) 000-0000</span>
										</li>
									</ul>	
								</section>
							</div>
						</div>

					<!-- Copyright -->
						<div class="copyright">
							Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
						</div>

				</div>
			</div>

	</body>
</html>