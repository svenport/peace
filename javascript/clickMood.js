$(document).ready(function(){
	$(".mood").on("click", function(){
		var backgroundcolor = $(this).css("background-color"),
			color = $(this).css("color");
		$(this).parent().hide();
		$(".mood_options").show();
		$(".mood_options").css("background-color", backgroundcolor);
		$(".mood_options").css("color", color);
	});
});