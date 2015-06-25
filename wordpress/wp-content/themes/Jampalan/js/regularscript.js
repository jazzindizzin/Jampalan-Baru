jQuery(document).ready(function($) {  
    /* Stick navigation to the top of the page */
	var stickyNavTop = $('.main-navigation').offset().top; 

	$(window).scroll(function(){  
		var scrollTop = $(window).scrollTop();  

		if (scrollTop > stickyNavTop) {   
			$('.main-navigation').addClass('sticky-header'); 
			$('.site-header').addClass('shifted');
		} else {  
			$('.main-navigation').removeClass('sticky-header');   
			$('.site-header').removeClass('shifted');
		}  

	});
    
    $('nav').ready(function(){
                $('nav > div > ul > li').css('width', function(w){
                    var n = $('nav > div > ul').children('li').size();
                    var b = $('body').width();
                    var w = b / n;
                    return w;
			     });
                $('nav>div>ul>li').css('text-align','center');
            var widthcheck = $(window).width();
            if (widthcheck <= 1000){
                $('nav > div > ul > li').css('width', function(w){
                        var b = $('body').width();
                        var w = b;
                        return w;
                });
                $('nav>div>ul>li').css('text-align','left');
            };
        });
    
        $(window).on('resize',function(){
                $('nav > div > ul > li').css('width', function(w){
                        var n = $('nav > div > ul').children('li').size();
                        var b = $('body').width();
                        var w = b / n;
                        return w;
                });
                $('nav>div>ul>li').css('text-align','center');
            
            var widthcheck = $(window).width();
            if (widthcheck <= 1000){
                $('nav > div > ul > li').css('width', function(w){
                        var b = $('body').width();
                        var w = b;
                        return w;
                });
                $('nav>div>ul>li').css('text-align','left');
            };
        });
	
});
                