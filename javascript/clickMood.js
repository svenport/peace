$(document).ready(function(){
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
		
		if($(this).hasClass('mood_stable')){
			tmp = $(".mood_options_lane").find(".mood_option_right").get(0);
			tmp = $(tmp);
			tmp.css("text-decoration", "underline");
		}
		
		if($(this).hasClass('mood_fine')){
			tmp = $(".mood_options_lane").find(".mood_option_right").get(1);
			$(tmp).css("text-decoration", "underline");
		}
		
		if($(this).hasClass('mood_ok')){
			tmp = $(".mood_options_lane").find(".mood_option_right").get(2);
			$(tmp).css("text-decoration", "underline");
		}
		
		if($(this).hasClass('mood_dizzy')){
			tmp = $(".mood_options_lane").find(".mood_option_right").get(4);
			$(tmp).css("text-decoration", "underline");
		}
		
		if($(this).hasClass('mood_bad')){
			tmp = $(".mood_options_lane").find(".mood_option_right").get(5);
			$(tmp).css("text-decoration", "underline");
		}
		
		$(".mood_option_playtrack").on("click", function(){
			alert("playtrack");
		});
	});
});