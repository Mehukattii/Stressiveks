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
							<li><a href="HRV.php" class="active" >Sykevälivaihtelu</a></li>
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
	
						<div id="tester" style="width:100%;"></div>
						<script>
							TESTER = document.getElementById('tester');
							Plotly.newPlot( TESTER, [{
							x: [1,
2,
3,
4,
5,
6,
7,
8,
9,
10,
11,
12,
13,
14,
15,
16,
17,
18,
19,
20,
21,
22,
23,
24,
25,
26,
27,
28,
29,
30,
31,
32,
33,
34,
35,
36,
37,
38,
39,
40,
41,
42,
43,
44,
45,
46,
47,
48,
49,
50,
51,
52,
53,
54,
55,
56,
57,
58,
59,
60,
61,
62,
63,
64,
65,
66,
67,
68,
69,
70,
71,
72,
73,
74,
75,
76,
77,
78,
79,
80,
81,
82,
83,
84,
85,
86,
87,
88,
89,
90,
91,
92,
93,
94,
95,
96,
97,
98,
99,
100,
101,
102,
103,
104,
105,
106,
107,
108,
109,
110,
111,
112,
113,
114,
115,
116,
117,
118,
119,
120,
121,
122,
123,
124,
125,
126,
127,
128,
129,
130,
131,
132,
133,
134,
135,
136,
137,
138,
139,
140,
141,
142,
143,
144,
145,
146,
147,
148,
149,
150,
151,
152,
153,
154,
155,
156,
157,
158,
159,
160,
161,
162,
163,
164,
165,
166,
167,
168,
169,
170,
171,
172,
173,
174,
175,
176,
177,
178,
179,
180,
181,
182,
183,
184,
185,
186,
187,
188,
189,
190,
191,
192,
193,
194,
195,
196,
197,
198,
199,
200,
201,
202,
203,
204,
205,
206,
207, 
208,
209,
210,
211,
212,
213,
214,
215,
216,
217,
218,
219,
220,
221,
222,
223,
224,
225,
226,
227,
228,
229,
230,
231,
232,
233,
234,
235,
236,
237,
238,
239,
240,
241,
242,
243,
244,
245,
246,
247,
248,
249,
250,
251,
252,
253,
254,
255,
256,
257,
258,
259,
260,
261,
262,
263,
264,
265,
266,
267,
268,
269,
270,
271,
272,
273,
274,
275,
276,
277,
278,
279,
280

],
							y: [991,
915,
1414,
1331,
1160,
1254,
1347,
1266,
1290,
1322,
1252,
1282,
1246,
1187,
1229,
1229,
1184,
1304,
1297,
1242,
1279,
1244,
1286,
1326,
1291,
1276,
1242,
1208,
1269,
1213,
1148,
1208,
1217,
1169,
1243,
1264,
1219,
1130,
1215,
1232,
1278,
1218,
1116,
1226,
1272,
1158,
1297,
1264,
1318,
1307,
1290,
1208,
1306,
1286,
1214,
1274,
1277,
1264,
1307,
1268,
1330,
1346,
1315,
1316,
1292,
1335,
1298,
1296,
1318,
1264,
1291,
1296,
1255,
1323,
1325,
1293,
1363,
1292,
1344,
1278,
1286,
1289,
1261,
1309,
1308,
1293,
1325,
1230,
1286,
1208,
1190,
1242,
1162,
1160,
1171,
1116,
1189,
1075,
1053,
1153,
1224,
1192,
1197,
1230,
1202,
1237,
1167,
1193,
1244,
1154,
1201,
1246,
1198,
1253,
1255,
1242,
1275,
1171,
1225,
1247,
1209,
1258,
1196,
1206,
1247,
1198,
1254,
1237,
1175,
1251,
1224,
1189,
1212,
1133,
1140,
1240,
1144,
1131,
1221,
1198,
1166,
1246,
1254,
1206,
1332,
1237,
1282,
1266,
1194,
1293,
1268,
1139,
1035,
1177,
1096,
1088,
1171,
1158,
1186,
1259,
1226,
1172,
1235,
1179,
1211,
1255,
1196,
1261,
1232,
1188,
1251,
1209,
1152,
1238,
1188,
1194,
1272,
1254,
1227,
1292,
1251,
1184,
1222,
1152,
1139,
1223,
1186,
1214,
1236,
1155,
1202,
1216,
1175,
1227,
1223,
1179,
1240,
1197,
1188,
1141,
1141,
1132,
1046,
1090,
1223,
1165,
1278,
1272,
1199,
1298,
1312,
1283,
1341,
1297,
1267,
1310,
1248,
1247,
1185,
1054,
1229,
1251,
1190,
1225,
1176,
1109,
1240,
1190,
1194,
1246,
1215,
1144,
1213,
1175,
1130,
1081,
1173,
1143,
1122,
1028,
1154,
1134,
1188,
1165,
1219,
1292,
1227,
1272,
1259,
1189,
1251,
1224,
1244,
1266,
1197,
1280,
1094,
1086,
1187,
1204,
1167,
1298,
1239,
1313,
1288,
1202,
1245,
1183,
1185,
1220,
1174,
1194,
1206,
1165,
1211,
1238,
1166,
1194,
1150,
1132
] }], {
		margin: { t: 0 } } );
	</script>

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
 
  });
 
</script>
<br>
<div id="hrvmarking">
	<form method="post" class="form-container">
	<h2>Lisää stressi-index merkintä</h2>

	<p><b>Stressitaso</b>
	<input type="number" placeholder="Stressitasosi" name="givenStress" required>
	</p>
	<button type="submit" name = "submitStress" class="btn">Lisää merkintä</button>
	</form>

</div>	

<?php
if (isset($_POST['submitStress'])){
	if(strlen($_POST['givenStress']) < 0){
		$_SESSION['swarningInput']="Stressitaso on liian alhainen";
	}elseif(strlen($_POST['givenStress']) > 20){
		$_SESSION['swarningInput']="Stressitaso on liian korkea";
	}else{
		unset($_SESSION['swarningInput']);
	}

	$data6['stressi'] = $_POST['givenStress'];
	$data6['email'] = $_SESSION['semail'];

	try {
	$kysely5 = $DBH->prepare("SELECT userID FROM stressiveks_user where userMail = :email");
	$kysely5->execute($data6);
	$tulos1 = $kysely5->fetch();
	$currentUserID = $tulos1[0];

	$data6['id'] = $currentUserID;
	$data6['date'] = date("d.m.Y");

	

	$STH = $DBH->prepare("INSERT INTO stressiveks_stressi (userID, stressValue, date,) 
      VALUES (:id, :stressi, :date);");
      $STH->execute($data6);
	  header("Location: index.php");

	} catch(PDOException $e) {
		file_put_contents('log/DBErrors.txt', 'hrv.php: '.$e->getMessage()."\n", FILE_APPEND);
		$_SESSION['swarningInput'] = 'Database problem';
	}
}
?>



<?php
  //***Näytetäänkö lomakesyötteen aiheuttama varoitus?
if(isset($_SESSION['swarningInput'])){
  echo("<p class=\"warning\">Varoitus: ". $_SESSION['swarningInput']."</p>");
}
?>
		<!-- Footer -->
		
					<!-- Copyright -->
					
			
	</body>
</html>