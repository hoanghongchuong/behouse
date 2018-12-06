$(document).ready(function(){
	var bannerFullHeight = function(){
        var el = $('.vk-banner-item');
        var windowHeight = $(window).height();
        // var headerHeight = $('.vk-header').height();
        el.height(windowHeight);

    }();

    $('.scroll-top').on('click', function(){
    	$(window).scrollTop(0).animate(500);
    });
});