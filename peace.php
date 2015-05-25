<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable = no">
<meta name="apple-mobile-web-app-capable" content="yes">
<!--<meta name="apple-mobile-web-app-status-bar-style" content="black">-->
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

<script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
</head>
<body>
	
	<div class="container peace_header peace_logo">
		<div class="jumbotron">
			<img class="peace_logo" src="peace-logo.png">
		</div>
	</div>

	<!-- HOME PAGE -->

	<div class="container peace_header peace_home">
		
		
		<div class="jumbotron">
			<h1>I'm feeling</h1>
		</div>
	
		<div class="row mood mood_1">
			<div id="mood-time-1" class="mood1 mood-time"><h1>Excellent</h1></div>
		</div>
		<div class="row mood mood_2">
			<div id="mood-time-2" class="mood2 mood-time"><h1>Good</h1></div>
		</div>
		<div class="row mood mood_3">
			<div id="mood-time-3" class="mood3 mood-time"><h1>Ok, I guess</h1></div>
		</div>
		<div class="row mood mood_4">
			<div id="mood-time-4" class="mood4 mood-time"><h1>Bad</h1></div>
		</div>
		<div class="row mood mood_5">
			<div id="mood-time-5" class="mood5 mood-time"><h1>Really bad</h1></div>
		</div>
		
	</div>

	<!-- OPTIONS PAGE -->

	<div class="container peace_header mood_options_view" style="display: none;">
	
		<div class="jumbotron mood_options_header">
			<div class="go-home"><h1>Hej Lovely!</h1></div>
		</div>
	
		<div class="container mood_options">
			<div class="row mood_options_lane">
				<h1 class="track-your-mood">Save Mood</h1>
				<h1 class="mood-tracked">Mood saved <i class="fa fa-thumbs-o-up"></i></h1>
			</div>
			<div class="row mood_options_lane">
				<h1 class="add-tweet">Tweet</h1>
				
				<form action="" method="post" id="tweet-form">
						<h2 class="addTweet"><input id="tweet" class="tweet-input" value="" placeholder="Tweet"/></h2>
						<span id="chars-left">140</span>
						<button type="submit" class="fa-twitter-add">
			                <i class="fa fa-twitter"></i> Tweet
			            </button>
					</form>
				<h1 class="tweet-added">Thanks <i class="fa fa-twitter fa-twitter-done"></i></h1>
			</div>
			<div class="row mood_options_lane">
				<div class="mood-option-text-music"><h1>Play music</h1></div>
				<div class="mood-option-text-music-stop"><h1>Stop it</h1></div>
				
				<iframe id="mood-music" style="display: none;"
					src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/138084493&auto_play=false&buying=false&liking=false&download=false&sharing=false&show_artwork=false&show_comments=false&show_playcount=false&show_user=false" 
					width="60" height="60" scrolling="no" 
					frameborder="no"></iframe>
			</div>
			<div class="row mood_options_lane">
				<h1 class="add-journal-entry">Journal</h1>
				<h1 class="add-journal-entry-done">Thanks <i class="fa fa-heart-o"></i></h1>
				<h2 class="journal-entry-title"><input class="journal-entry-title-text" value="" placeholder="Title"/></h2>
				<h2 class="journal-entry-text"><textarea class="journal-entry-text-area" placeholder="Write about your day, honey...."></textarea></h2>
				<h1 class="add-journal-entry-submit"><i class="fa fa-plus-square-o"></i> Submit</h1>
			</div>
			<div class="row mood_options_lane">
				<h1 class="take_steps">Distraction</h1>
				<h1 class="take_step take-step-1">Go for a walk</h1>
				<h1 class="take_step take-step-2">Solve a riddle</h1>
				<h1 class="take_step take-step-3">Paint a mandala</h1>
				<h1 class="take_step take-step-4">Medidate</h1>
			</div>
			<div class="row mood_options_lane">
				<a class="mood_option_call" href="tel:xxx"><h1>Call</h1></a>
			</div>
		</div>

	</div>

	<!-- CHARTS PAGE -->

	<div class="container mood_stats_view" style="display:none;">

		<div class="jumbotron mood_stats_header">
			<div class="go-home"><h1>Your stats</h1></div>
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

		
	</div>

	<!-- BOTTOM -->
	<div class="mood mood_view_bottom_option" style="display:none">
		<div class="go-home"><h1>Home</h1></div>
	</div>
	<div class="mood mood_view_bottom_option" style="display:none">
		<div class="show-charts"><h1>Charts</h1></div>
	</div>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="libraries/jquery-1.11.3.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<!-- Latest compiled and minified JavaScript -->
	<script src="libraries/bootstrap/js/bootstrap.3.3.4.min.js"></script>

<!-- 	SOUNDCLOUD -->
    <script src="//connect.soundcloud.com/sdk.js"></script>
    <script src="libraries/soundcloud/api.js"></script>

<!-- CHARTS -->
    <script src="libraries/Chart.min.js"></script>
	
	
	
	<script src="javascript/peace.js"></script>
</body>
</html>