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
	
	/* Smooth scrolling */
    
    $(window).load(function(){
            $(function() {
                $('a[href*=#]:not([href=#])').click(function() {
                    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                        var target = $(this.hash);
                        var check = $(window).width();
                        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                        if (target.length) {
                            if (check > 1000) {
                                $('html,body').animate({
                                scrollTop: (target.offset().top - 50)
                            }, 1000);
                            }
                            
                            else {
                                $('html,body').animate({
                                scrollTop: (target.offset().top - 420)
                            }, 1000);
                            }
                            
                            $('nav').removeClass('toggled');
                            return false;
                        };
                    };
                });
            });
    });
    
	    /* Auto divide menu width */
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
                