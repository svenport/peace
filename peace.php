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
<link rel="stylesheet" href="css/font.css">
<link rel="stylesheet" href="css/moods.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
<link rel="icon" type="image/png" sizes="72x72"  href="peace.png">
<link rel="apple-touch-icon" href="apple-icon.png">
</head>
<body>
	<div class="container peace_header peace_logo">
		<div class="jumbotron">
			<img class="peace_logo" src="peace-logo.png">
		</div>
	</div>

	<div class="container peace_header peace_home">
		
		
		<div class="jumbotron">
			<h1>I'm feeling</h1>
		</div>
	
		<div class="row mood mood_1">
			<a href="mind.php?mood=1"><h1>Excellent</h1></a>
		</div>
		<div class="row mood mood_2">
			<a href="mind.php?mood=2"><h1>Good</h1></a>
		</div>
		<div class="row mood mood_3">
			<a href="mind.php?mood=3"><h1>Ok, I guess</h1></a>
		</div>
		<div class="row mood mood_4">
			<a href="mind.php?mood=4"><h1>Bad</h1></a>
		</div>
		<div class="row mood mood_5">
			<a href="mind.php?mood=5"><h1>Really bad</h1></a>
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
	
	<script src="javascript/peace.js"></script>
</body>
</html>