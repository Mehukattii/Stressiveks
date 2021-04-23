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
							<li><a href="HRV.php" class="active" >HRV</a></li>
              <li><a href="stressindex.php">Stressi-indeksi</a></li>
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
							<h2>No Sidebar</h2>
							<span class="byline">Integer sit amet pede vel arcu aliquet pretium</span>
						</header>
						<div id="tester" style="width:600px;height:250px;"></div>
						<script>
							TESTER = document.getElementById('tester');
							Plotly.newPlot( TESTER, [{
							x: [918, 921, 918, 915, 918],
							y: [97, 96, 95, 96, 97] }], {
							margin: { t: 0 } } );
						</script>

<div class="container">
      <div class="calendar">
        <div class="front">
          <div class="current-date">
            <h1>Friday 15th</h1>
            <h1>January 2016</h1> 
          </div>

          <div class="current-month">
            <ul class="week-days">
              <li>MON</li>
              <li>TUE</li>
              <li>WED</li>
              <li>THU</li>
              <li>FRI</li>
              <li>SAT</li>
              <li>SUN</li>
            </ul>

            <div class="weeks">
              <div class="first">
                <span class="last-month">28</span>
                <span class="last-month">29</span>
                <span class="last-month">30</span>
                <span class="last-month">31</span>
                <span>01</span>
                <span>02</span>
                <span>03</span>
              </div>

              <div class="second">
                <span>04</span>
                <span>05</span>
                <span class="event">06</span>
                <span>07</span>
                <span>08</span>
                <span>09</span>
                <span>10</span>
              </div>

              <div class="third">
                <span>11</span>
                <span>12</span>
                <span>13</span>
                <span>14</span>
                <span class="active">15</span>
                <span>16</span>
                <span>17</span>
              </div>

              <div class="fourth">
                <span>18</span>
                <span>19</span>
                <span>20</span>
                <span>21</span>
                <span>22</span>
                <span>23</span>
                <span>24</span>
              </div>

              <div class="fifth">
                <span>25</span>
                <span>26</span>
                <span>27</span>
                <span>28</span>
                <span>29</span>
                <span>30</span>
                <span>31</span>
              </div>
            </div>
          </div>
        </div>

        <div class="back">
          <input placeholder="What's the event?">
          <div class="info">
            <div class="date">
              <p class="info-date">
              Date: <span>Jan 15th, 2016</span>
              </p>
              <p class="info-time">
                Time: <span>6:35 PM</span>
              </p>
            </div>
            <div class="address">
              <p>
                Address: <span>129 W 81st St, New York, NY</span>
              </p>
            </div>
            <div class="observations">
              <p>
                Observations: <span>Be there 15 minutes earlier</span>
              </p>
            </div>
          </div>

          <div class="actions">
            <button class="save">
              Save <i class="ion-checkmark"></i>
            </button>
            <button class="dismiss">
              Dismiss <i class="ion-android-close"></i>
            </button>
          </div>
        </div>

      </div>
    </div>
					</section>
				</div>
			</div>

			<script>
			var app = {
  settings: {
    container: $('.calendar'),
    calendar: $('.front'),
    days: $('.weeks span'),
    form: $('.back'),
    input: $('.back input'),
    buttons: $('.back button')
  },

  init: function() {
    instance = this;
    settings = this.settings;
    this.bindUIActions();
  },

  swap: function(currentSide, desiredSide) {
    settings.container.toggleClass('flip');

    currentSide.fadeOut(900);
    currentSide.hide();

    desiredSide.show();
  },

  bindUIActions: function() {
    settings.days.on('click', function(){
      instance.swap(settings.calendar, settings.form);
      settings.input.focus();
    });

    settings.buttons.on('click', function(){
      instance.swap(settings.form, settings.calendar);
    });
  }
}

app.init();

</script>

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