$(document).ready(function(){
	
	$("#mood-music").hide();
	
	SC.initialize({
		client_id: "***REMOVED***"
	});

	$(".mood").on("click", function(){
		var backgroundcolor = $(this).css("background-color"),
			color = $(this).css("color"),
			tmp;
		$(this).parent().hide();
		$(".mood_options_view").show();
		$(".mood_options_header").css("background-color", backgroundcolor);
		$(".mood_options_header").css("color", color);
		
		$(".mood_view_bottom_icon").css("background-color", backgroundcolor);
		$(".mood_view_bottom_icon").css("color", color);
		
		$(".mood_option_playtrack").on("click", function(){
			try {
				$(".mood-option-text-music").hide();
				$("#mood-music").show();
				var iFrameElement = $("#mood-music")[0];
				SC.Widget(iFrameElement).play();
//				SC.stream("/tracks/98682937", {
//					autoPlay: true
//				});
			} catch (e) {
				console.log("CATCH", e);
			}
		});
	});
});