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
    <title>Mikä on Stressiveks?</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
		<link rel="stylesheet" href="css/css.css" >
		<noscript>
			<link rel="stylesheet" href="../css/skel.css" />
			<link rel="stylesheet" href="../css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="no-sidebar">

		<!-- Header -->
			<div id="header">
				<div class="container">
						
					<!-- Logo -->
						<h1><a href="index.php" id="logo">Stressiveks</a></h1>
					
					<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="index.php">Etusivu</a></li>
							<li><a href="HRV.php">Sykevälivaihtelu</a></li>
							<li><a href="paivakirja.php">Päiväkirja</a></li>
							<li><a href="profiili.php">Profiili</a></li>
							<?php  
								if (isset($_SESSION['sloggedIn'])) : ?>
								<li><a href="logOutUser.php">Kirjaudu ulos</a></li>
							<?php endif ?>
						</ul>
					</nav>

				</div>
			</div>

		<!-- Sisältö -->
			<div id="main" class="wrapper style1">
				<div class="container">
					<section>
						<header class="major">
						</header>
                         <section>
								<header class="major">
									<h3>Mikä on Stressiveks?</h3>
								</header>
                                <p>
                                Stressiveks on sykevälivaihtelun (HRV) analysoinnin avuksi luotu sovellus. <br><br>
                                Stressiveksin tavoitteena on parantaa työperäisen stressin tunnistettavuutta ja ennakoivasti parantaa työntekijän työssä jaksamista. Kohderyhmämme ovat 18–64-vuotiaat toimistotyöntekijät. Työperäistä stressiä pyritään tunnistamaan mittaamalla työntekijän sykevälivaihtelua kahden viikon ajan, jonka lisäksi kirjataan tuntemuksia ja tapahtumia päiväkirjaan. Päivän tapahtumat voidaan näin yhdistää sykevälivaihtelun muutoksiin. Stressiveksistä löytyy ohjeita, joilla muistutetaan muista hyvinvointia ja terveyttä edistävistä toimista. <br><br>
                                Tarkoituksenamme olla yhdessä työterveyshuollon kanssa mahdollistamassa parempaa työhyvinvointia ja vähentämässä työperäistä stressiä. 
                                </p><br>
						</section>
						<section>
								<header class="major">
									<h3>Sykevälivaihtelun analysointi</h3>
								</header>
								<p>
								Sykevälivaihtelua tarkastellaan sydämensykkeiden välisistä aikaeroista eli RR-intervalleista. Eri mittauksista saatuja tuloksia voidaan vertailla keskenään vain silloin, kun mittaukset ovat olleet keskenään saman pituiset ja data on kerätty samalla menetelmällä. 
								Tämän vuoksi mittausrutiinin kehittäminen on tärkeää. </p>
								<h4>Sykevälivaihtelussa hyödynnettäviä arvoja:</h4>
								<p><b>SDNN</b> (Standard Deviation of NN intervals) tarkoittaa sykevälien eli NN-intervallien keskihajontaa tietyllä ajanjaksolla. SDNN ilmaisee kokonaissykevälivaihtelua. Se kuvaa autonomisen hermoston aktiivisuutta ja kertoo sykevälivaihtelun määrästä.</p>
								<p><b>RMSSD</b>	(Root Mean Square of Successive NN -Interval Differences) kertoo peräkkäisten sykevälien (RR-intervallien) keskimääräisestä vaihtelusta millisekunteina. RMSSD on ensisijainen aikatason parametri, jolla määritetään miten parasympaattinen hermosto on vaikuttanut sykevälivaihtelun muutoksiin välillisesti.</p>
								<p><b>Stressi-indeksi</b> kuvaa parasympaattisen hermoston vaikutuksen vähenemistä ja sympaattisen hermoston aktivoitumista stressaavan tilanteen (fyysinen tai psyykkinen) vaikutuksesta. Stressi-indeksi lasketaan kaavalla, jossa huomioidaan useimmin esiintyvä RR-intervallin arvo, RR-intervallien vaihteluväli sekä useimmin esiintyvien RR-intervallien määrä suhteutettuna RR-intervallien kokonaismäärään</p>
						</section>
				</div>
			</div>


		<footer>
			<?php
   				include("includes/footer.php")
			?>
		</footer>

	</body>
</html>
