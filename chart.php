<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Peace</title>

<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet"
	href="libraries/bootstrap/css/bootstrap.3.3.4.min.css">

<!-- Optional theme -->
<link rel="stylesheet"
	href="libraries/bootstrap/css/bootstrap-theme.3.3.4.min.css">

<!-- FONT AWESOME -->
<link rel="stylesheet"
	href="libraries/font-awesome-4.3.0/css/font-awesome.min.css">

<!--  PEACH THEME  -->
<link rel="stylesheet" href="css/moods.css">
<link rel="stylesheet" href="css/font.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<link rel="icon" type="image/png" sizes="72x72"  href="peace.png">
<link rel="apple-touch-icon" href="apple-icon.png">
<body>
	<div class="container mood_stats_view">
	
		<div class="jumbotron mood_stats_header">
			<a href="peace.php"><h1>Your Stats</h1></a>
		</div>
		
		<div class="row mood_stats_hugs">
			<h1>Best day:</h1>
		</div>
		
		<div class="row mood_stats_hugs">
			<h2>Tuesday</h2>
		</div>
		
		<div class="row mood_stats_hugs">
			<h1>Get hugs:</h1>
		</div>
		
		<div class="row mood_stats_hugs">
			<h2>Sunday</h2>
		</div>
		
		<div class="row mood_stats_hugs">
			<h1>Monthly:</h1>
		</div>
		<div class="row mood_stats_chart">
			<canvas id="myChartMonthly" width="250" height="290"></canvas>
		</div>
		
		<div class="row mood_stats_hugs">
			<h1>Weekly:</h1>
		</div>
		<div class="row mood_stats_chart">
			<canvas id="myChartWeekly" width="250" height="290"></canvas>
		</div>
		
		
		<!-- BOTTOM -->
		<div class="mood mood_view_bottom_option">
			<a href="peace.php"><h1>Home</h1></a>
		</div>
		<div class="mood mood_view_bottom_option">
			<a href="chart.php"><h1>Charts</h1></a>
		</div>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="libraries/jquery-1.11.3.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<!-- Latest compiled and minified JavaScript -->
	<script src="libraries/bootstrap/js/bootstrap.3.3.4.min.js"></script>

	<script src="libraries/Chart.min.js"></script>
	<script src="javascript/charts.js"></script>
</body>
</html>