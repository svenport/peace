<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<body>

	<div class="container mood_options_view">
	
		<div class="jumbotron mood_options_header mood_<?= $_GET['mood'] ?>_dark">
			<h1>Hej Lovely!</h1>
		</div>
	
		<div class="container mood_options mood_<?= $_GET['mood'] ?>">
			<div class="row mood_options_lane">
				<h1>Track Mood</h1>
			</div>
			<div class="row mood_options_lane">
				<h1>Upload Pic</h1>
			</div>
			<div class="row mood_options_lane">
				<h1>Tweet</h1>
			</div>
			<div class="row mood_options_lane">
				<div class="mood-option-text-music"><h1>Play music</h1></div>
				<div class="mood-option-text-music-stop"><h1>Stop it</h1></div>
				
				<iframe id="mood-music" style="display: none;"
					src="https://w.soundcloud.com/player/?url=http://api.soundcloud.com/users/1539950/favorites&auto_play=false&buying=false&liking=false&download=false&sharing=false&show_artwork=false&show_comments=false&show_playcount=false&show_user=false" 
					width="60" height="60" scrolling="no" 
					frameborder="no"></iframe>
			</div>
			<div class="row mood_options_lane">
				<h1>Journal</h1>
			</div>
			<div class="row mood_options_lane">
				<a class="mood_option_call" href="tel:***REMOVED***"><h1>Call</h1></a>
			</div>
	
			
		</div>
		
		<!-- BOTTOM -->
		<div class="mood mood_view_bottom_option">
			<a href="settings.php"><h1>Settings</h1></a>
		</div>
		<div class="mood mood_view_bottom_option">
			<a href="peace.php"><h1>Start</h1></a>
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

	<script src="javascript/mind.js"></script>
    <script src="//connect.soundcloud.com/sdk.js"></script>
    <script src="libraries/soundcloud/api.js"></script>
</body>
</html>