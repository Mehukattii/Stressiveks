<?php
include("config/cconfig.php");
include("config/chttps.php");
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
								<li><a href="HRV.php">Sykevälivaihtelu</a></li>
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
											<span class="fa fa-heart"></span>
											<h3>Sykevälivaihtelu eli HRV</h3>
											<span>Sykevälivaihtelu (Heart Rate Variability) on sydämen sykkeiden välisen eron vaihtelevuutta. Se kuvastaa sydämen kyvykkyyttä reagoida muuttuviin olosuhteisiin ja odottamattomaan ärsykkeeseen. Yleensä stressaavissa tilanteissa sydämen peräkkäisten lyöntien välisen ajan vaihtelu pienenee. Stressaava tilanne voi olla sekä psyykkistä että fyysistä. Levollisen ja stressittömän ihmisen sykevälivaihtelu kasvaa, jolloin parasympaattisen hermoston aktiivisuus on lisääntynyt ja sympaattisen hermoston aktiivisuus vähentynyt.<br><br></span>
										</li>
										<li>
											<span class="fa fa-gear"></span>
											<h3>Sykevälivaihtelun mittaaminen</h3>
											<span>Mittaamiseen tarvitaan sensori, esimerkiksi sykevyö, jolla sydämen toimintaa voidaan mitata. Jotta mittaaminen olisi luotettavaa, on tärkeää kehittää mittausrutiini. Rutiinin avulla mittaustapahtuman aikana ei pääse syntymään epäsäännöllisyyksiä, jolloin datan analysoiminen on helpompaa. Mittaus kannattaa siis tehdä aina mahdollisimman samalla tavalla, esimerkiksi aamulla ennen puhelimen ilmoituksien selaamista (tunnereaktioiden välttäminen). </span>
										</li>
									</ul>
								</section>
							</div>
							<div class="6u">
								<section>
									<ul class="style">
										<li>
											<span class="fa fa-refresh"></span>
											<h3>Autonominen hermosto</h3>
											<span>Käsittää kaksi haaraa, sympaattisen ja parasympaattisen hermoston. Autonomista hermostoa tarvitaan elintoimintojen säätelyyn. Toiminta on jatkuvaa hermostojen toiminnan tasapainottelua – toisen hermoston aktiivisuuden lisääntyessä toisen hermoston aktiivisuus vähenee. Hermoston toiminta on nopeastikin muuttuvaa ympäröivien olosuhteiden seurauksena. Kun kohdataan ärsyke, sympaattisen hermoston aktiivisuus lisääntyy ja parasympaattisen hermoston aktiivisuus vähenee. Tästä syystä sympaattista hermostoa kutsutaan ”Taistele tai pakene” -hermostoksi.</span>
										</li>
										<li>
											<span class="fa fa-check-square"></span>
											<h3>Mittaamisen hyödyt</h3>
											<span>Sykevälivaihtelun mittaamisen avulla voidaan seurata, kuinka hyvin henkinen ja fyysinen stressi ja palautuminen ovat tasapainossa. Sykevälivaihtelu on objektiivinen merkki elimistön reagoimisesta sisäisiin ja ulkoisiin ärsykkeisiin. Näin ollen mittaustuloksia keräämällä ja niiden pitkän ja lyhyen aikavälin muutoksia tarkastelemalla voidaan esimerkiksi optimoida työtapoja ja saada uniikkia tietoa kehon reagoimisesta erilaisiin fyysisiin ja psyykkisiin ärsykkeisiin.</span>
										</li>
									</ul>
								</section>
							</div>

					</div>
				</section>
			</div>

		<footer>
			<?php
   				include("includes/footer.php")
			?>
		</footer>


	</body>
</html>