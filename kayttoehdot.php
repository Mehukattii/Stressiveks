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
    <title>Käyttöehdot</title>
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
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
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

		<!-- Main -->
			<div id="main" class="wrapper style1">
				<div class="container">
					<section>
						<header class="major">
						</header>
                         <section>
								<header class="major">
									<h3>Verkkosivuston käyttöehdot</h3>
									<h4>Käyttämällä verkkosivustoa sitoudut noudattamaan näitä käyttöehtoja. Verkkosivuston sisältämiin palveluihin voi liittyä myös erillisiä palvelukohtaisia käyttöehtoja. Tällöin näitä verkkosivuston yleisiä käyttöehtoja sovelletaan toissijaisesti.</h4>
								</header>
								
                                <h4>1.	Tekijänoikeus, tavaramerkit ja muut immateriaalioikeudet</h4>
								<p>Verkkosivuston sisällön omistaa Stressiveks Oy. Sivujen ja niiden sisältämien tietojen käyttö henkilökohtaiseen, ei-kaupalliseen tarkoitukseen on sallittua. Muutoin sivujen sisällön tai niiden osan kopioiminen, siirtäminen, jakelu tai tallentaminen missä muodossa tahansa on kielletty ilman Stressiveks Oy:n etukäteistä kirjallista suostumusta.
								Lehdistötiedotteiden ja muiden julkiseksi tarkoitettujen asiakirjojen käyttö julkiseen tiedonvälitykseen hyvän tavan mukaisissa asiayhteyksissä on sallittu, kun tiedon lähde mainitaan.</p>

								<h4>2.	Oikeus muutoksiin</h4>
                                <p>Stressiveks Oy:lla on oikeus muuttaa sivuston käyttöehtoja, sisältöä tai palveluita ilman ennakkoilmoitusta.</p>
								
                                <h4>3.	Vastuut</h4>
								<p>Stressiveks Oy pyrkii verkkosivuston tietojen oikeellisuuteen ja ajantasaisuuteen, kuitenkaan sivujen toimivuutta keskeytyksettömästi ja virheettömästi ei voida taata. Stressiveks Oy ei vastaa välittömistä eikä välillisistä vahingoista, jotka aiheutuvat sivuston tai palveluiden saatavuudesta tai virheellisyydestä.</p>
								
                                <h4>4.	Henkilötietojen käsittely</h4>
								<p>Joissakin sivuston osissa voidaan pyytää antamaan henkilötietoja esim. rekisteröinnin yhteydessä. Stressiveks Oy käsittelee henkilötietoja huolellisesti lainsäädännön mukaisesti ja huolehtii yksityisyyden suojan toteutumisesta henkilötietojen käsittelyssä. Kerättyjä tietoja voidaan tallettaa Stressiveks Oy:n henkilörekistereihin, jolloin tietoja käytetään selosteissa määriteltyihin tarkoituksiin.
								Rekisteröity voi tarkastaa henkilötietonsa ottamalla yhteyttä rekisteristä vastaavaan henkilöön tai <a href="# ">info@stressiveks.fi</a>. Stressiveks Oy oikaisee tai poistaa puutteelliset, väärät tai vanhentuneet henkilötiedot pyynnöstä.
								Henkilötietojen käsittelyyn annettu suostumus voidaan milloin tahansa peruuttaa ilmoittamalla siitä Stressiveks Oy:lle. Henkilötietojen käsittely voi olla välttämätöntä palvelun tarjoamiseksi. Tällöin suostumuksen peruuttaminen voi johtaa tilanteeseen, ettei palvelua voida enää tarjota.</p>
								<p>

                                <h4>5.	Linkit ja kolmansien osapuolten sisältö</h4>
								<p>Sivustolla voi olla linkkejä ja yhteyksiä kolmannen osapuolen verkkosivustoihin. Kolmannen osapuolen sisällön käyttöön sovelletaan kolmannen osapuolen käyttö- ja muita ehtoja.</p>

								<h4>6.	Sovellettava laki</h4>
								<p>Näihin ehtoihin sovelletaan Suomen lakia lainvalintasääntöjä lukuun ottamatta. Mahdolliset riitaisuudet käsitellään Helsingin käräjäoikeudessa.</p>
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
