<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Peace</title>

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
<link rel="stylesheet" href="css/fontsize.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

	<div class="container mood_view">
		<div class="row mood mood_stable">
			<i class="fa fa-paw fa-4x"></i>
		</div>
		<div class="row mood mood_fine">
			<i class="fa fa-sun-o fa-4x"></i>
		</div>
		<div class="row mood mood_ok">
			<i class="fa fa-thumbs-o-up fa-4x"></i>
		</div>
		<div class="row mood mood_dizzy">
			<i class="fa fa-umbrella fa-4x"></i>
		</div>
		<div class="row mood mood_bad">
			<i class="fa fa-frown-o fa-4x"></i>
		</div>
		<div class="row mood_view_bottom">
			<div class="col-md-4 mood_view_bottom_icon">
				<i class="fa fa-cogs fa-2x"></i>
			</div>
			<div class="col-md-4 mood_view_bottom_icon">
				<a href="peace.php"><i class="fa fa-dashboard fa-2x"></i></a>
			</div>
			<div class="col-md-4 mood_view_bottom_icon">
				<a href="chart.php"><i class="fa fa-bar-chart-o fa-2x"></i></a>
			</div>
		</div>
	</div>
	
	<div class="container mood_options_view">
	
		<div class="jumbotron mood_options_header">
			<h1>Hello, John!</h1>
			<h4>Nice to meet you.</h4>
		</div>
	
		<div class="container mood_options">
	<!-- 		REPORT -->
			<div class="row mood_options_lane">
				<div class="col-md-5 mood_option_left">
					<i class="fa fa-pencil fa-3x"></i>
				</div>
				<div class="col-md-7 mood_option_right font-size-line">Just report mood</div>
			</div>
	<!-- 		Upload -->
			<div class="row mood_options_lane">
				<div class="col-md-5 mood_option_left">
					<i class="fa fa-upload fa-3x"></i>
				</div>
				<div class="col-md-7 mood_option_right font-size-line">Upload picture</div>
			</div>
	<!-- 		TWEET -->
			<div class="row mood_options_lane">
				<div class="col-md-5 mood_option_left">
					<i class="fa fa-twitter fa-3x"></i>
				</div>
				<div class="col-md-7 mood_option_right font-size-line">Tweet</div>
			</div>
	<!-- 		HEAR MUSIC -->
			<div class="row mood_options_lane">
				<div class="col-md-5 mood_option_left">
					<i class="fa fa-headphones fa-3x"></i>
				</div>
				<div class="col-md-7 mood_option_right font-size-line mood_option_playtrack">
				
				<div class="mood-option-text-music">Hear music</div>
				
				<iframe id="mood-music" 
					src="https://w.soundcloud.com/player/?url=http://api.soundcloud.com/users/1539950/favorites&auto_play=false&buying=false&liking=false&download=false&sharing=false&show_artwork=false&show_comments=false&show_playcount=false&show_user=false" 
					width="60" height="60" scrolling="no" 
					frameborder="no"></iframe>

				
				</div>
			</div>
	<!-- 		JOURNAL -->
			<div class="row mood_options_lane">
				<div class="col-md-5 mood_option_left">
					<i class="fa fa-file-text-o fa-3x"></i>
				</div>
				<div class="col-md-7 mood_option_right font-size-line">Write to journal</div>
			</div>
	<!-- 		CALL SOMEONE -->
			<div class="row mood_options_lane">
				<div class="col-md-5 mood_option_left">
					<i class="fa fa-phone fa-3x"></i>
				</div>
				<div class="col-md-7 mood_option_right font-size-line">
					<a class="mood_option_call" href="tel:***REMOVED***">Call someone, buddy</a>
				</div>
			</div>
	
			<div class="row mood_view_bottom">
				<div class="col-md-4 mood_view_bottom_icon">
					<i class="fa fa-cogs fa-2x"></i>
				</div>
				<div class="col-md-4 mood_view_bottom_icon">
					<a href="peace.php"><i class="fa fa-dashboard fa-2x"></i></a>
				</div>
				<div class="col-md-4 mood_view_bottom_icon">
					<a href="chart.php"><i class="fa fa-bar-chart-o fa-2x"></i></a>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="libraries/jquery-1.11.3.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<!-- Latest compiled and minified JavaScript -->
	<script src="libraries/bootstrap/js/bootstrap.3.3.4.min.js"></script>

	<script src="javascript/clickMood.js"></script>
    <script src="//connect.soundcloud.com/sdk.js"></script>
    <script src="libraries/soundcloud/api.js"></script>
</body>
</html>