$(document).ready(function(){
	var h = $('.h-blog-member-img').outerWidth();
	$('.h-blog-member-img').outerHeight(h);
	$(window).resize(function(){
		h = $('.h-blog-member-img').outerWidth();
		$('.h-blog-member-img').outerHeight(h);		
	});
});