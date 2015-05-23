$(document).ready(function(){
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
});