$(document).ready(function(){
	var window_height=$(window).height();
	var doc_height=$(document).scrollTop();
	$(window).load(function(){
		$("#img_div_abs").addClass("animate");
		$("#text_div_abs").addClass("animate1");
		$(".news_abs").addClass("animate1");
		$(".gallery_img").addClass("gallery_img_animate");
	})
	
	$(window).scroll(function(){
		var scroll_value = $(window).scrollTop();
		if(scroll_value>1000){
			$("#text_abs").css('top','0');
			$("#text_abs").css('opacity','1');
		}
	});
})