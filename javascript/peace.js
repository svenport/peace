var mood = 0;
$(document).ready(function(){

	$( ".peace_logo" ).fadeOut( 2000, function() {
		$( ".peace_home" ).fadeIn(1000);
		$(".mood_view_bottom_option").fadeIn(1000);
	});

	$('.jumbotronssss').on("click", function(){
		$('.mood_options_view').hide();
		$('.mood_stats_view').hide();
		$('.peace_home').show();
	});

	$('.mood-time').on("click", function(){
		$('.mood_options').removeClass('mood_'+mood);
		mood = $(this).attr('id').replace("mood-time-","");
		$('.mood_options').addClass('mood_'+mood);
		initOptions();
		$('.mood_options_view').show();
		$('.mood_stats_view').hide();
		$('.peace_home').hide();
	});

	$('.go-home').on("click", function(){
		$('.mood_options_view').hide();
		$('.mood_stats_view').hide();
		$('.peace_home').show();
	});

	$('.show-charts').on("click", function(){

		$('.mood_options_view').hide();
		$('.mood_stats_view').show();
		$('.peace_home').hide();

		runCharts();
	});
});

function runCharts(){
	var dataMonthly = {
		    labels: ["Dec'14","Jan'15", "Feb'15", "Mar'15", "Apr'15", "May'15"],
		    datasets: [
		        {
		            label: "My First dataset",
		            fillColor: "rgba(220,220,220,0.2)",
		            strokeColor: "rgba(220,220,220,1)",
		            pointColor: "rgba(220,220,220,1)",
		            pointStrokeColor: "#fff",
		            pointHighlightFill: "#fff",
		            pointHighlightStroke: "rgba(220,220,220,1)",
		            data: [2, 1, 3, 2, 5, 4]
		        }
//		        ,//1: worst 5: best
		    ]
		};
	
	var dataWeekly = {
		    labels: ["Mon, 18th", "Tue, 19th", "Wed, 20th", "Thu, 21th", "Fri, 22th", "Sat, 23th", "Sun, 24th"],
		    datasets: [
		        {
		            label: "My First dataset",
		            fillColor: "rgba(220,220,220,0.2)",
		            strokeColor: "rgba(220,220,220,1)",
		            pointColor: "rgba(220,220,220,1)",
		            pointStrokeColor: "#fff",
		            pointHighlightFill: "#fff",
		            pointHighlightStroke: "rgba(220,220,220,1)",
		            data: [4,2,4,3,3,4,5]
		        }
//		        ,//1: worst 5: best
		    ]
		};
	var options = {

		    ///Boolean - Whether grid lines are shown across the chart
		    scaleShowGridLines : true,

		    //String - Colour of the grid lines
		    scaleGridLineColor : "rgba(0,0,0,.05)",

		    //Number - Width of the grid lines
		    scaleGridLineWidth : 1,

		    //Boolean - Whether to show horizontal lines (except X axis)
		    scaleShowHorizontalLines: true,

		    //Boolean - Whether to show vertical lines (except Y axis)
		    scaleShowVerticalLines: true,

		    //Boolean - Whether the line is curved between points
		    bezierCurve : true,

		    //Number - Tension of the bezier curve between points
		    bezierCurveTension : 0.4,

		    //Boolean - Whether to show a dot for each point
		    pointDot : true,

		    //Number - Radius of each point dot in pixels
		    pointDotRadius : 4,

		    //Number - Pixel width of point dot stroke
		    pointDotStrokeWidth : 1,

		    //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
		    pointHitDetectionRadius : 20,

		    //Boolean - Whether to show a stroke for datasets
		    datasetStroke : true,

		    //Number - Pixel width of dataset stroke
		    datasetStrokeWidth : 2,

		    //Boolean - Whether to fill the dataset with a colour
		    datasetFill : true,

		    //String - A legend template
		    legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"

		};
	var ctx = document.getElementById("myChartMonthly").getContext("2d");
	new Chart(ctx).Line(dataMonthly, options);
	var ctx = document.getElementById("myChartWeekly").getContext("2d");
	new Chart(ctx).Line(dataWeekly, options);
};

function initOptions(){

	$(".mood-tracked").hide();
	$(".track-your-mood").show();

	$(".add-journal-entry").show();
	$(".add-journal-entry-submit").hide();
	$(".journal-entry-title").hide(  );
	$(".journal-entry-text").hide(  );
	$(".add-journal-entry-done").hide(  );

	$(".take_steps").show();
	$(".take-step-1").hide();
	$(".take-step-2").hide();
	$(".take-step-3").hide();
	$(".take-step-4").hide();

	SC.initialize({
		client_id: "***REMOVED***"
	});

	$(".mood-option-text-music").on("click", function(){
		try {
			$(".mood-option-text-music").hide();
			$(".mood-option-text-music-stop").show();
			var iFrameElement = $("#mood-music")[0];
			SC.Widget(iFrameElement).play();
		} catch (e) {
			console.log("CATCH", e);
		}
	});
	
	$(".mood-option-text-music-stop").on("click", function(){
		try {
			$(".mood-option-text-music-stop").hide();
			$(".mood-option-text-music").show();
			var iFrameElement = $("#mood-music")[0];
			SC.Widget(iFrameElement).pause();
		} catch (e) {
			console.log("CATCH", e);
		}
	});
	
	$(".track-your-mood").on("click", function(){
		$(this).fadeOut( 350, function() {
			$(".mood-tracked").fadeIn( 350 );
		});
	});
	
	$(".add-journal-entry").on("click", function(){
		$(this).fadeOut( 350, function() {
			$(".journal-entry-title").fadeIn( 350 );
			$(".journal-entry-text").fadeIn( 350 );
			$(".add-journal-entry-submit").fadeIn( 350 );
		});
	});
	
	$(".add-journal-entry-submit").on("click", function(){
		$(this).fadeOut( 350, function() {
			$(".journal-entry-title").hide(  );
			$(".journal-entry-text").hide(  );
			$(".add-journal-entry-done").show(  );
		});
	});
	
	$(".take_steps").on("click", function(){
		$(this).fadeOut( 300, function() {
			$(".take-step-1").fadeIn( 300 );
		});
	});
	$(".take-step-1").on("click", function(){
		$(this).fadeOut( 300, function() {
			$(".take-step-2").fadeIn( 300 );
		});
	});
	$(".take-step-2").on("click", function(){
		$(this).fadeOut( 300, function() {
			$(".take-step-3").fadeIn( 300 );
		});
	});
	$(".take-step-3").on("click", function(){
		$(this).fadeOut( 300, function() {
			$(".take-step-4").fadeIn( 300 );
		});
	});
	$(".take-step-4").on("click", function(){
		$(this).fadeOut( 300, function() {
			$(".take-step-1").fadeIn( 300 );
		});
	});
};