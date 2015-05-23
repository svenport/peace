$(document).ready(function(){
	$(".mood").on("click", function(){
		var backgroundcolor = $(this).css("background-color"),
			color = $(this).css("color");
		$(this).parent().hide();
		$(".mood_options_view").show();
		$(".mood_options_header").css("background-color", backgroundcolor);
		$(".mood_options_header").css("color", color);
		
		$(".mood_view_bottom_icon").css("background-color", backgroundcolor);
		$(".mood_view_bottom_icon").css("color", color);
	});
});