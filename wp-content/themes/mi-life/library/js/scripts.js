	
(function($)	{
	
	$(document).ready(function() {
		
		
		// Nav
		// Show and hide main nav on mobile
		$('#toggle').click(function(){
			$('.main-menu').slideToggle('fast');
		});
		
		// On window resize reset menu to ensure nav displays
		var menu = $('.main-menu'); 
		$(window).on('resize', function(){     
		    if(!$("#toggle").is(":visible") && !menu.is(':visible'))
		    {
		      menu.css({'display':''});   
		    }
		});
		
		// Scroll to top button
		$('.to-top').click(function(){
			$('#top-anchor').ScrollTo({
				duration: 500
			});
		});
		
		// Accordian Script 
    var allPanels = $('.accordion > dd').hide();
    var allBtns = $('.accordion > dt > span');

      $('.accordion > dt > span').click(function() {
        $this = $(this);
        $target =  $this.parent().next();
        $('.active').prev().removeClass('openArrow');
        
        $this.addClass('activeBtn');
        
        $('#acc-anchor').ScrollTo({
					duration: 500
				});

        if(!$target.hasClass('active')){
           allPanels.removeClass('active').slideUp('fast');
           $target.addClass('active').slideDown('fast');
        }
        else {
             allPanels.removeClass('active').slideUp('fast');
             allBtns.removeClass('activeBtn');
        }

				return false;
     });
     
     // fancybox video load
			$('.fancybox-media').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',
				padding: 0,
				helpers : {
					media : {}
				}
			});
		
	});

})(jQuery);


(function($) {
  function changeFont(fontSize) {
      return function() {
         $('.entry-content p, .entry-content ul li').css('font-size', fontSize + 'rem');
         sessionStorage.setItem('fSize', fontSize);
      }
    }

    var normalFont = changeFont(1.2),
    		mediumFont = changeFont(1.4),
    		largeFont  = changeFont(1.6);

    $('.js-font-decrease').on('click', function(){
      normalFont();
    	$(this).css('border-bottom','2px solid #30af51'); 
    	$('.js-font-normal, .js-font-increase').css('border-bottom','none');
    });

    $('.js-font-normal').on('click', function(){
      mediumFont();
      $(this).css('border-bottom','2px solid #30af51');
      $('.js-font-decrease, .js-font-increase').css('border-bottom','none');
    });

    $('.js-font-increase').on('click', function(){
      largeFont();
      $(this).css('border-bottom','2px solid #30af51');
      $('.js-font-decrease, .js-font-normal').css('border-bottom','none');
    });

    if (sessionStorage.length !== 0) {
      $('.entry-content p, .entry-content ul li').css('font-size', sessionStorage.getItem('fSize') + 'rem');
    }
  
})(jQuery);