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
		<title>Stressi-indeksi</title>
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
                            <li><a href="stressindex.php" class="active">Stressi-indeksi</a></li>
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

            <style>
            #chartdiv {
            width: 100%;
            height: 500px;
            }

            </style>

            <!-- Resources -->
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
 
<div id="chartdiv"></div>
 
<table>
 
<tr>
<td>
Stressi-indeksi
</td>
</tr>
 
<tr>
<td id="s1">
</td>
</tr>
 
<tr>
<td id="s2">
</td>
</tr>
 
<tr>
<td id="s3">
</td>
</tr>
 
<tr>
<td id="s4">
</td>
</tr>
 
<tr>
<td id="s5">
</td>
</tr>
 
<tr>
<td id="s6">
</td>
</tr>
 
<tr>
<td id="s7">
</td>
</tr>
 
</table>
<script>
fetch('https://users.metropolia.fi/~niinis/Stressiveks/api/api.php')
  .then((response) => {
	return response.json();
  })
  .then((data) => {   
	console.log(data);
 
    am4core.useTheme(am4themes_animated);
// Themes end
 
// Create chart
var chart = am4core.create("chartdiv", am4charts.XYChart);
chart.paddingRight = 20;
 
chart.data = data;
chart.dateFormatter.inputDateFormat = "yyyy";
 
var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "category";
 
 
var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
valueAxis.min = 1; //muokkaa nämä valuet
valueAxis.max = 20;
valueAxis.tooltip.disabled = true;
valueAxis.maxPrecision = 0;
 
var series = chart.series.push(new am4charts.StepLineSeries());
series.dataFields.categoryX = "category";
series.dataFields.valueY = "value";
series.tooltipText = "{valueY.value}";
series.strokeWidth = 3;
 
chart.cursor = new am4charts.XYCursor();
chart.cursor.xAxis = categoryAxis;
chart.cursor.fullWidthLineX = true;
chart.cursor.lineX.strokeWidth = 0;
chart.cursor.lineX.fill = chart.colors.getIndex(2);
chart.cursor.lineX.fillOpacity = 0.1;
 
chart.scrollbarX = new am4core.Scrollbar();
 
 
	document.getElementById("s1").innerHTML=data[0].value;
    document.getElementById("s2").innerHTML=data[1].value;
    document.getElementById("s3").innerHTML=data[2].value;
    document.getElementById("s4").innerHTML=data[3].value;
    document.getElementById("s5").innerHTML=data[4].value;
    document.getElementById("s6").innerHTML=data[5].value;
    document.getElementById("s7").innerHTML=data[6].value;
  });
 
</script>



	</body>
</html>