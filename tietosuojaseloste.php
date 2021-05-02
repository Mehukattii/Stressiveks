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
    <title>Tietosuojaseloste</title>
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
									<h3>Tietosuojaseloste</h3>
								</header>
								<p> Tämä on Stressiveks Oy:n EU:n yleisen tietosuoja-asetuksen (GDPR) mukainen rekisteri- ja tietosuojaseloste. Laadittu 14.4.2021. Viimeisin muutos 2.5.2021.</p><br>

								<h4>1. Rekisterinpitäjä</h4> 
								<p>Stressiveks Oy<br>
								Y-tunnus: 123456-1<br>
								Stressitönkatu 5, 00150, Helsinki<br>
								+358 40 123 4567<br>
								info@stressiveks.fi tai pekko@stressiveks.fi</p>

								<h4>2. Rekisteristä vastaava henkilö</h4> 
								<p>Niini Saarenmaa<br>
								+358 40 987 6543<br>
								niini@stressiveks.fi<br>
								Stressitönkatu 5, 00150, Helsinki</p>

								<h4>3. Tietosuojavastaava</h4> 
								Casper Dikert<br>
								+358 40 765 4321<br>
								casper@stressiveks.fi<br>
								<p>Stressitönkatu 5, 00150, Helsinki</p>

								<h4>4. Rekisterin käyttötarkoitus</h4> 
								<p>Kerättäviä henkilötietoja käytetään asiakkaan tunnistautumiseen ja käyttöoikeuksien hallintaan.<br>
								Asiakkaan tietoja kerätään ja käsitellään asiakkaan suostumuksella.</p>

								<h4>5. Rekisterin tietosisältö</h4> 
								<p>Etunimi, sukunimi, sähköpostiosoite ja salasana sekä<br>
								sukupuoli, ikä, pituus ja paino.</p>

								<h4>6. Tietojen säilytysaika</h4> 
								<p>Henkilötietoja säilytetään niin kauan, kun asiakas on aktiivinen sovelluksessa + 6 kuukautta.</p>
								
								<h4>7. Säännönmukaiset tietolähteet</h4> 
								<p>Rekisteriin kerätään tietoja henkilöltä itseltään rekisteröitymisen yhteydessä. Lisäksi viranomaisen pitämistä rekistereistä lain sallimissa rajoissa (esim. ytj.fi).</p>

								<h4>8. Säännönmukaiset tietojen luovutukset ja tietojen siirto EU:n tai Euroopan talousalueen ulkopuolelle </h4> 
								<p>Stressiveks Oy:n henkilörekisterinsisältämiä henkilötietoja ei siirretä EU:n tai ETA:n ulkopuolelle tai kansainvälisiin järjestöihin.</p>

								<h4>9. Rekisterin suojaus</h4> 
								<p>Tiedot siirretään SSL-suojatun yhteyden ylitse. Sähköiset tiedot on suojattu palomuurilla, käyttäjätunnuksin ja salasanoin. Käyttöoikeus rekisterin tietoihin on vain niillä rekisterinpitäjän palveluksessa olevilla henkilöillä, jotka tarvitsevat tietoja tehtävissään.</p>

								<h4>10. Automaattinen päätöksenteko</h4> 
								<p>Automatisoituja yksittäispäätöksiä (EU:n tietosuoja-asetuksen artikla 22) ei tehdä.</p>

								<h4>11. Rekisteröidyn oikeudet</h4> 
								<p>Rekisteröidyllä on oikeus tarkastaa, mitä häntä koskevia tietoja henkilötietorekisteriin on talletettu. Kirjallinen tarkastuspyyntö tulee lähettää allekirjoitettuna rekisteriasioista vastaavalle henkilölle.<br><br>
								Tarkastusoikeus on maksuton enintään puoli vuosittain toteutettuna.<br><br>
								Rekisteröidyllä on oikeus vaatia virheellisten tai vanhentuneiden tietojen oikaisua tai poistamista tai tietojen siirtoa järjestelmästä toiseen ilman aiheetonta viivytystä. Lisäksi rekisteröidyllä on oikeus peruuttaa aiemmin antamansa suostumus tietojen käsittelylle tai tehdä henkilötietojensa käsittelyyn liittyvistä seikoista valitus valvontaviranomaiselle. Rekisteröidyllä on oikeus rajoittaa tai vastustaa tietojensa käsittelyä EU:n tietosuoja-asetuksen artiklojen 18 ja 21 mukaisesti.<br>
								<br>
								Rekisteröidyllä on oikeus kieltää tietojensa käyttö suoramarkkinointitarkoituksiin.</p>
								
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
