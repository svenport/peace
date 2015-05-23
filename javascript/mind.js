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
});