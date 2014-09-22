
/***************************************************
			SuperFish Menu
***************************************************/	
// initialise plugins
	jQuery.noConflict()(function(){
		jQuery('ul.menu').superfish();
	});
	
	
jQuery.noConflict()(function($) {
  if ($.browser.msie && $.browser.version.substr(0,1)<8)
  {
	$('li').has('ul').mouseover(function(){
		$(this).children('ul').css('visibility','visible');
		}).mouseout(function(){
		$(this).children('ul').css('visibility','hidden');
		})
  }
}); 

/***************************************************
			Nivo Slider
***************************************************/
jQuery.noConflict()(function($){
$(document).ready(function() {
            $('#slider').nivoSlider({
                pauseTime:8000,
                pauseOnHover:false,
				captionOpacity:1
            });        
    });
});

/***************************************************
			PRETTY PHOTO
***************************************************/
jQuery.noConflict()(function($){
$(document).ready(function() {  

$("a[rel^='prettyPhoto']").prettyPhoto({opacity:0.80,default_width:200,default_height:344,theme:'facebook',hideflash:false,modal:false});

});
});


/***************************************************
			TIPSY
***************************************************/
jQuery.noConflict()(function($){
    
    $('#example-1').tipsy();
    
    $('#north').tipsy({gravity: 'n'});
    $('#south').tipsy({gravity: 's'});
    $('#east').tipsy({gravity: 'e'});
    $('#west').tipsy({gravity: 'w'});
    
    $('#auto-gravity').tipsy({gravity: $.fn.tipsy.autoNS});
    
    $('.social').tipsy({fade: true});
	$('.service-tipsy').tipsy({fade: true, gravity: 's'});
    
    $('#example-custom-attribute').tipsy({title: 'id'});
    $('#example-callback').tipsy({title: function() { return this.getAttribute('original-title').toUpperCase(); } });
    $('#example-fallback').tipsy({fallback: "Where's my tooltip yo'?" });
    
    $('#example-html').tipsy({html: true });
    
  });		 


/***************************************************
			SLIDES
***************************************************/	
jQuery.noConflict()(function($){
	$('#slides').slides({
		preload: true,
		generateNextPrev: false
	});
	$('#slides2').slides({
		preload: true,
		generateNextPrev: false,
		generatePagination: true
	});
});


/***************************************************
			ACCORDION SLIDER
***************************************************/
jQuery.noConflict()(function($){
	$('.kwicks').kwicks({
		max : 900,
		spacing : 0
	});
});
			
/***************************************************
			VERTICAL ACCORDION SLIDER
***************************************************/

jQuery.noConflict()(function($){
$('#ca-container').contentcarousel();
});
jQuery.noConflict()(function($) {
	$('#va-accordion').vaccordion();
});

jQuery.noConflict()(function($){
$(document).ready(function() {
	$('ul#filter a').click(function() {
		$(this).css('outline','none');
		$('ul#filter .current').removeClass('current');
		$(this).parent().addClass('current');
		
		var filterVal = $(this).text().toLowerCase().replace(' ','-');
				
		if(filterVal == 'all') {
			$('ul#portfolio li.hidden').fadeIn('slow').removeClass('hidden');
		} else {
			
			$('ul#portfolio li').each(function() {
				if(!$(this).hasClass(filterVal)) {
					$(this).fadeOut('normal').addClass('hidden');
				} else {
					$(this).fadeIn('slow').removeClass('hidden');
				}
			});
		}

		return false;
	});
});
});

jQuery.noConflict()(function($){
$(document).ready(function() {
	$('ul#filter-sidebar a').click(function() {
		$(this).css('outline','none');
		$('ul#filter-sidebar .current').removeClass('current');
		$(this).parent().addClass('current');
		
		var filterVal = $(this).text().toLowerCase().replace(' ','-');
				
		if(filterVal == 'all') {
			$('ul#portfolio li.hidden').fadeIn('slow').removeClass('hidden');
		} else {
			
			$('ul#portfolio li').each(function() {
				if(!$(this).hasClass(filterVal)) {
					$(this).fadeOut('normal').addClass('hidden');
				} else {
					$(this).fadeIn('slow').removeClass('hidden');
				}
			});
		}
		
		return false;
	});
});
});	



	jQuery.noConflict()(function($){
		$('#toggle1').click(function() {
			$('#togglec1').slideToggle('fast');
			return false;
		});
	});
	
	jQuery.noConflict()(function($){
		$('#toggle2').click(function() {
			$('#togglec2').slideToggle('fast');
			return false;
		});
	});
	
	jQuery.noConflict()(function($){
		$('#toggle3').click(function() {
			$('#togglec3').slideToggle('fast');
			return false;
		});
	});
	
	jQuery.noConflict()(function($){
		$('#toggle4').click(function() {
			$('#togglec4').slideToggle('fast');
			return false;
		});
	});
	
	jQuery.noConflict()(function($){
		$('#toggle5').click(function() {
			$('#togglec5').slideToggle('fast');
			return false;
		});
	});
	
	jQuery.noConflict()(function($){
		$('#toggle6').click(function() {
			$('#togglec6').slideToggle('fast');
			return false;
		});
	});
	
	jQuery.noConflict()(function($){
		$('#toggle7').click(function() {
			$('#togglec7').slideToggle('fast');
			return false;
		});
	});
	
	jQuery.noConflict()(function($){
		$('#toggle8').click(function() {
			$('#togglec8').slideToggle('fast');
			return false;
		});
	});
	
	jQuery.noConflict()(function($){
		$('#toggle9').click(function() {
			$('#togglec9').slideToggle('fast');
			return false;
		});
	});
	
	jQuery.noConflict()(function($){
		$('#toggle10').click(function() {
			$('#togglec10').slideToggle('fast');
			return false;
		});
	});
	
	jQuery.noConflict()(function($){
		$('#toggle11').click(function() {
			$('#togglec11').slideToggle('fast');
			return false;
		});
	});
	
	jQuery.noConflict()(function($){
		$('#toggle12').click(function() {
			$('#togglec12').slideToggle('fast');
			return false;
		});
	});
	
	jQuery.noConflict()(function($){
		$('#toggle13').click(function() {
			$('#togglec13').slideToggle('fast');
			return false;
		});
	});
	
	jQuery.noConflict()(function($){
		$('#toggle14').click(function() {
			$('#togglec14').slideToggle('fast');
			return false;
		});
	});
	
	jQuery.noConflict()(function($){
		$('#toggle15').click(function() {
			$('#togglec15').slideToggle('fast');
			return false;
		});
	});
	
	jQuery.noConflict()(function($){
		$('#toggle16').click(function() {
			$('#togglec16').slideToggle('fast');
			return false;
		});
	});
	jQuery.noConflict()(function($){
		$('#toggle17').click(function() {
			$('#togglec17').slideToggle('fast');
			return false;
		});
	});
