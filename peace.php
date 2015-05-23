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
	<link rel="stylesheet" href="libraries/bootstrap/css/bootstrap.3.3.4.min.css">
	
	<!-- Optional theme -->
	<link rel="stylesheet" href="libraries/bootstrap/css/bootstrap-theme.3.3.4.min.css">
	
	<!-- FONT AWESOME -->
	<link rel="stylesheet" href="libraries/font-awesome-4.3.0/css/font-awesome.min.css">
	
	<!--  PEACH THEME  -->
	<link rel="stylesheet" href="css/moods.css">
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body> 
    <div class="mood_view">
	    <div class="mood mood_stable">
	    	<i class="fa fa-paw fa-5x"></i>
	    </div>
	    <div class="mood mood_fine">
	    	<i class="fa fa-sun-o fa-5x"></i>
	    </div>
	    <div class="mood mood_ok">
	    	<i class="fa fa-thumbs-o-up fa-5x"></i>
	    </div>
	    <div class="mood mood_dizzy">
	    	<i class="fa fa-umbrella fa-5x"></i>
	    </div>
	    <div class="mood mood_bad">
	    	<i class="fa fa-frown-o fa-5x"></i>
	    </div>
    </div>
    
    <div class="jumbotron mood_options">
	  <h1>Hello, John!</h1>
	  <h4>Nice to meet you.</h4>
	  <p></p>
	  <div class="mood_options_lane">
	  	<div class="mood_options_lane_left">
	  		<a class="btn btn-primary btn-lg" href="#" role="button">Just report mood
	  			<i class="fa fa-pencil"></i></a>
	  	</div>
	  	<div class="mood_options_lane_right">
	  		<a class="btn btn-primary btn-lg" href="#" role="button">Upload picture 
	  			<i class="fa fa-upload"></i></a>
	  	</div>
	  </div>
	  
	  <div class="mood_options_lane">
	  	<div class="mood_options_lane_left">
	  		<a class="btn btn-primary btn-lg" href="#" role="button">Tweet
	  			<i class="fa fa-twitter"></i></a>
	  	</div>
	  	<div class="mood_options_lane_right">
	  		<a class="btn btn-primary btn-lg" href="#" role="button">Hear music
	  			<i class="fa fa-headphones"></i></a>
	  	</div>
	  </div>
	  
	  <div class="mood_options_lane">
	  	<div class="mood_options_lane_left">
	  		<a class="btn btn-primary btn-lg" href="#" role="button">Write to journal
	  			<i class="fa fa-file-text-o"></i></a>
	  	</div>
	  	<div class="mood_options_lane_right">
	  		<a class="btn btn-primary btn-lg" href="#" role="button">Call someone, buddy
	  			<i class="fa fa-phone"></i></a>
	  	</div>
	  </div>
	</div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="libraries/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
	<script src="libraries/bootstrap/js/bootstrap.3.3.4.min.js"></script>
	
	<script src="javascript/clickMood.js"></script>
  </body>
</html>