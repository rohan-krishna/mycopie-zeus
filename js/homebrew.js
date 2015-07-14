$(document).ready(function() {

	$('#tabsContainer').easytabs();

	$('#betaAjax').click(function() {
		$('.mast-header').hide();
	});
	$('#closeModal').click(function() {
		$('.mast-header').show();
	});
	$('#betaAjax2').click(function() {
		$('.mast-header').hide();
	});
	$('#closeModal2').click(function() {
		$('.mast-header').show();
	});

	$('#UnruledBooks').owlCarousel();

	//Incoming Transitions
	/*
	function animat() {
	setTimeout(function() {
		$('#books').show().addClass('animated bounceInUp');
	},50);
	setTimeout(function() {
		$('#mycharge').show().addClass('animated bounceInUp');
	},300);
	setTimeout(function() {
		$('#myteam').show().addClass('animated bounceInUp');
	},400);
	setTimeout(function() {
		$('#myad').show().addClass('animated bounceInUp');
	},500);
	setTimeout(function() {
		$('#about').show().addClass('animated bounceInUp');
	},600);
	setTimeout(function() {
		$('#contact').show().addClass('animated bounceInUp');
	},700);
	setTimeout(function() {
		$('#fooDivider').show().addClass('animated bounceInUp');
	},750);
	setTimeout(function() {
		$('#fooIndex').show().addClass('animated bounceInUp');
	},800);
	setTimeout(function() {
		$('#fooFB').show().addClass('animated fadeIn');
	},1000);
	setTimeout(function() {
		$('#fooMedia').show().addClass('animated fadeIn');
	},1200);
	$('#divider').show().addClass('animated fadeIn');
	*/
	$('#menu-o').click(function() {
		$('.hero-navigation').toggleClass('menu-o');
	});
	$(window).scroll(function() {

		$('#imgStick').css({'width' : '200px' });
		$('.mast-header').css({ 'height' : '73px' });
		$('.header-navigation ul').css({'line-height' : '52px' });
		var sy = $(this).scrollTop();
		if ( sy > 10 ) {
			$('#imgStick').css({'width' : '160px' });
			$('.mast-header').css({'height' : '60px' });
			$('.header-navigation ul').css({'line-height' : '42px' });
		}

	});
	$('#fooMedia').owlCarousel();

	//Mouseout
	/*
	$('#about').mouseleave(function() {
		$(this).removeClass('animated wobble');
	});
	$('#myvoice').mouseleave(function() {
		$(this).removeClass('animated rubberBand');
	});
	$('#mycharge').mouseleave(function() {
		$(this).removeClass('animated tada');
	});
	$('#twitter').mouseleave(function() {
		$(this).removeClass('animated bounce');
	});
	$('#bounce').mouseleave(function() {
		$(this).removeClass('animated bounce');
	});
	//Mouseenter Effects
	$('#about').mouseover(function() {
		$('#about').removeClass('animated bounceInLeft');
		$('#about').addClass('animated wobble');
	});
	$('#myvoice').mouseenter(function() {
		$('#myvoice').removeClass('animated bounceInRight');
		$('#myvoice').addClass('animated rubberBand');
	});
	$('#mycharge').mouseover(function() {
		$('#mycharge').removeClass('animated bounceInUp');
		$('#mycharge').addClass('animated tada');
	});
	$('#twitter').mouseover(function() {
		$('#twitter').removeClass('animated bounceInRight');
		$('#twitter').addClass('animated bounce');
	});
	$('#bounce').mouseover(function() {
		$(this).removeClass('animated bounce');
		$(this).addClass('animated bounce');
	});
	$('#search-icon').click(function() {
		$('#search-input').addClass('search-open');
	});

	$('.panel-pull').click(function() {
		$('.panel-wrapper').slideToggle();
	});
*/
//Partners Slider Init
//modalOwl
	$('#modalOwl').owlCarousel({
		singleItem : true
	});

	$('#pressSlider').owlCarousel();
	$('#brandSlider').owlCarousel();
	$('#AvailBooks').owlCarousel({
		autoPlay : 2000
	});
//TV Owl
	$('#tvOwl').owlCarousel({
		singleItem : true,
		navigation: false,
		pagination : false,
		scrollOverflow : true,
		normalScrollElements : '#norm',
		responsive : true
	});
	var tvOwl = $('#tvOwl').data('owlCarousel');

	$('#down').click(function() {
		$('.hero-main').moveDown();
	});
	$('#up').click(function() {
		$('.hero-main').moveUp();
	});
	$('#logo').click(function() {
		$('.hero-main').moveTo(1);
	});


	$('.left-arrows').click(function() {
		tvOwl.prev();
	})
	$('.right-arrows').click(function() {
		tvOwl.next();
	});
	
	$('#tool').tooltip();
	$('#tool1').tooltip();
	$('#tool2').tooltip();
	$('#tool3').tooltip();
	$('#tool4').tooltip();
	$('#tool5').tooltip();


	//HeroReveal Height Adjust
	var heroReveal = $('.hero-reveal');
	var RevealWidth = heroReveal.width();
	var RevealHeight = heroReveal.height();
		$('#heroMain').css({ 'top' : RevealHeight + 'px' });
	
	//Reach Wrapper Height
	var winHeight = $(window).height();
		$('.reach-wrapper').css({ 'height' : winHeight + 'px' });
	//About Wrapper Height Fix
		$('.books-wrapper').css({ 'height' : winHeight + 'px' });
		$('.ads-wrapper').css({ 'height' : winHeight + 'px' });
		$('.mycharge-wrapper').css({ 'height' : winHeight + 'px' });
		$('.reach-wrapper').css({ 'height' : winHeight + 'px' });

});

//Smooth Scrolling - Thanks to CSS-Tricks
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
//Scroll To Top
$(function() {
	//Inside The Scrolling Element
	var $elem = $('body');
	
	//Showing Nav Buttons
	$('#go-top').fadeIn('slow');
	
	 // whenever we scroll fade out both buttons
    $(window).bind('scrollstart', function(){
        $('#go-top').stop().animate({'opacity':'0.2'});
    });
        // ... and whenever we stop scrolling fade in both buttons
    $(window).bind('scrollstop', function(){
        $('#go-top').stop().animate({'opacity':'1'});
    });
	 // clicking the "up" button will make the page scroll to the top of the page
    $('#go-top').click(
        function (e) {
            $('html, body').animate({scrollTop: '0px'}, 800);
        }
    );
 });
 //About Us Hint
 //Blimp Effect
 //Scroll Header Effect




//Scroll Header Effect
/*
var AnimatedHeader = (function() {

	var docElem = document.documentElement,
		header = document.querySelector('.header-wrapper'),
		didScroll = false,
		changeHeaderOn = 300;

	function init() {
		window.addEventListener( 'scroll', function( event) {
			if ( !didScroll ) {
				didScroll = true;
				setTimeout( scrollPage , 250);
			}
		}, false);
	}

	function scrollPage() {
		var sy = scrollY();
		if ( sy >= changeHeaderOn ) {
			classie.add( header , 'header-shrink');
		} else {
			classie.remove( header, 'header-shrink');
		}
		didScroll = false;
	}

	function scrollY() {
		return window.pageYOffset || docElem.scrollTop;
	}

	init();
})();
*/
$(window).scroll(function() {
	$('.head-logo').css({ "width" : "128px" });
	$('.head-nav-2').css({});
	var sy = $(this).scrollTop();
	if ( sy < 10 ) {
		$('.head-logo').css({ width : '167' + 'px'});
	}
});

// Find all YouTube videos
var $allVideos = $("iframe[src^='http://www.youtube.com']"),

    // The element that is fluid width
    $fluidEl = $(".hero-tv");

// Figure out and save aspect ratio for each video
$allVideos.each(function() {

  $(this)
    .data('aspectRatio', this.height / this.width)

    // and remove the hard coded width/height
    .removeAttr('height')
    .removeAttr('width');

});

// When the window is resized
$(window).resize(function() {

  var newWidth = $fluidEl.width();

  // Resize all videos according to their own aspect ratio
  $allVideos.each(function() {

    var $el = $(this);
    $el
      .width(newWidth)
      .height(newWidth * $el.data('aspectRatio'));

  });

// Kick off one resize to fix all videos on page load
}).resize();

$(document).ready(function() {
	function scroll_style() {
   var window_top = $(window).scrollTop();
   var div_top = $('#heroheader').offset().top-10;

   if (window_top > div_top){
      $('#top-nav').css({"top":"0"});
   } else {
   		$('#top-nav').css({"top":"-127px"});
   }
}
$(function() {
  $(window).scroll(scroll_style);
  scroll_style();
 });
});
