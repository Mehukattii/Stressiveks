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
		<title>Ota yhteyttä</title>
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

            <!-- Ota yhtyettä sivu -->
			<div id="main" class="wrapper style1">
				<div class="container">
                         <section>
								<header class="major">
									<h3>Ota yhteyttä</h3>
								</header>
                                <?php
                                    include("forms/fcontact.php");
                                ?>

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





