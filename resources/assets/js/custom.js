/**
Core script to handle the entire theme and core functions
**/
var ButterFly = function(){
	/* Search Bar ============ */
	siteUrl = '';
	
	var screenWidth = $( window ).width();

	var homeSearch = function() {
		'use strict';
		/* top search in header on click function */
		var quikSearch = jQuery("#quik-search-btn");
		var quikSearchRemove = jQuery("#quik-search-remove");

		quikSearch.on('click',function() {

			jQuery('.dez-quik-search').fadeIn(500);
			jQuery('.dez-quik-search').addClass('On');

			//jQuery('.dez-quik-search').animate({'width': '100%' });
			//jQuery('.dez-quik-search').delay(500).css({'left': '0'  });
		});

		quikSearchRemove.on('click',function() {
			jQuery('.dez-quik-search').fadeOut(500);
			jQuery('.dez-quik-search').removeClass('On');

			//jQuery('.dez-quik-search').animate({'width': '0%' ,  'right': '0'  });
			//jQuery('.dez-quik-search').css({'left': 'auto'  });
		});
		/* top search in header on click function End*/
	};

	var cartButton = function(){
		$(".item-close").on('click',function(){
			$(this).closest(".cart-item").hide('500');
		});
		$('.cart-btn').on('click',function(){
			$(".cart-list").slideToggle('slow');
		})
		//$('.cart-btn').toggle(500,easing);
	};

	
	/* One Page Layout ============ */
	var onePageLayout = function() {
		'use strict';
		var headerHeight =   parseInt($('.onepage').css('height'), 10);
		$(".scroll").on('click',function(event) 
		{
			event.preventDefault();
			
			if (this.hash !== "") {
				var hash = this.hash;	
				var seactionPosition = $(hash).offset().top;
				var headerHeight =   parseInt($('.onepage').css('height'), 10);
				//alert(headerHeight);
				
				$('body').scrollspy({target: ".navbar", offset: headerHeight+2}); 
				
				var scrollTopPosition = seactionPosition - (headerHeight);
				
				$('html, body').animate({
					scrollTop: scrollTopPosition
				}, 800, function(){
					//window.location.hash = hash;
				});
			}   
		});
		$('body').scrollspy({target: ".navbar", offset: headerHeight + 2});  
	};
	
	/* Header Height ============ */
	var handelResizeElement = function(){
		var HeaderHeight = $('.header').height();
		$('.header').css('height', HeaderHeight);
	}
	
	/* Load File ============ */
	var dzTheme = function(){
		 'use strict';
		 var loadingImage = '<img src="images/loading.gif">';
		 jQuery('.dzload').each(function(){
		 var dzsrc =   siteUrl + $(this).attr('dzsrc');
		  //jQuery(this).html(loadingImage);
		 	jQuery(this).hide(function(){
				jQuery(this).load(dzsrc, function(){
					jQuery(this).fadeIn('slow');
				}); 
			})
			
		 });
		 
		if($('.js-tilt').length)
		{
			$('.js-tilt').tilt({
				glare: true,
				maxGlare: 0.5
			})	
		}			
		
	}
	
	/* Magnific Popup ============ */
	var MagnificPopup = function(){
		'use strict';	
		/* magnificPopup function */
		jQuery('.mfp-gallery').magnificPopup({
			delegate: '.mfp-link',
			type: 'image',
			tLoading: 'Loading image #%curr%...',
			mainClass: 'mfp-img-mobile',
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0,1] // Will preload 0 - before current, and 1 after the current image
			},
			image: {
				tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
				titleSrc: function(item) {
					return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
				}
			}
		});
		/* magnificPopup function end */
		
		/* magnificPopup for paly video function */		
		jQuery('.video').magnificPopup({
			type: 'iframe',
			iframe: {
				markup: '<div class="mfp-iframe-scaler">'+
						 '<div class="mfp-close"></div>'+
						 '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
						 '<div class="mfp-title">Some caption</div>'+
						 '</div>'
			},
			callbacks: {
				markupParse: function(template, values, item) {
					values.title = item.el.attr('title');
				}
			}
		});
		/* magnificPopup for paly video function end*/
		
	};
	
	/* Scroll To Top ============ */
	var scrollTop = function (){
		'use strict';
		var scrollTop = jQuery("button.scroltop");
		/* page scroll top on click function */	
		scrollTop.on('click',function() {
			jQuery("html, body").animate({
				scrollTop: 0
			}, 1000);
			return false;
		})

		jQuery(window).bind("scroll", function() {
			var scroll = jQuery(window).scrollTop();
			if (scroll > 900) {
				jQuery("button.scroltop").fadeIn(1000);
			} else {
				jQuery("button.scroltop").fadeOut(1000);
			}
		});
		/* page scroll top on click function end*/
	};
	
	/* Handel Accordian ============ */
	var handelAccordian = function(){
		/* accodin open close icon change */	 	
		jQuery('#accordion').on('hidden.bs.collapse', function(e){
			jQuery(e.target)
				.prev('.panel-heading')
				.find("i.indicator")
				.toggleClass('glyphicon-minus glyphicon-plus');
		});
		jQuery('#accordion').on('shown.bs.collapse', function(e){
			jQuery(e.target)
				.prev('.panel-heading')
				.find("i.indicator")
				.toggleClass('glyphicon-minus glyphicon-plus');
		});
		/* accodin open close icon change end */
	}
	
	/* Handel Placeholder ============ */
	var handelPlaceholder = function(){
		/* input placeholder for ie9 & ie8 & ie7 */
		jQuery.support.placeholder = ('placeholder' in document.createElement('input'));
		/* input placeholder for ie9 & ie8 & ie7 end*/
		
		/*fix for IE7 and IE8  */
		if (!jQuery.support.placeholder) {
			jQuery("[placeholder]").focus(function () {
				if (jQuery(this).val() == jQuery(this).attr("placeholder")) jQuery(this).val("");
			}).blur(function () {
				if (jQuery(this).val() == "") jQuery(this).val(jQuery(this).attr("placeholder"));
			}).blur();

			jQuery("[placeholder]").parents("form").submit(function () {
				jQuery(this).find('[placeholder]').each(function() {
					if (jQuery(this).val() == jQuery(this).attr("placeholder")) {
						 jQuery(this).val("");
					}
				});
			});
		}
		/*fix for IE7 and IE8 end */
	};
	
	/* Equal Height ============ */
	var equalHeight = function(container) {
	
		var currentTallest = 0, 
			currentRowStart = 0, 
			rowDivs = new Array(), 
			$el, topPosition = 0;
			
		$(container).each(function() {
			$el = $(this);
			$($el).height('auto')
			topPostion = $el.position().top;

			if (currentRowStart != topPostion) {
				for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
					rowDivs[currentDiv].height(currentTallest);
				}
				rowDivs.length = 0; // empty the array
				currentRowStart = topPostion;
				currentTallest = $el.height();
				rowDivs.push($el);
			} else {
				rowDivs.push($el);
				currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
			}
			for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
				rowDivs[currentDiv].height(currentTallest);
			}
		});
	};
	
	/* Footer Align ============ */
	var footerAlign = function() {
		'use strict';
		jQuery('.site-footer').css('display', 'block');
		jQuery('.site-footer').css('height', 'auto');
		var footerHeight = jQuery('.site-footer').outerHeight();
		jQuery('.footer-fixed > .page-wraper').css('padding-bottom', footerHeight);
		jQuery('.site-footer').css('height', footerHeight);
	};
	
	/* File Input ============ */
	var fileInput = function(){
		'use strict';
		/* Input type file jQuery */	 	 
		jQuery(document).on('change', '.btn-file :file', function() {
			var input = jQuery(this);
			var	numFiles = input.get(0).files ? input.get(0).files.length : 1;
			var	label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
			input.trigger('fileselect', [numFiles, label]);
		});
		
		jQuery('.btn-file :file').on('fileselect', function(event, numFiles, label) {
			input = jQuery(this).parents('.input-group').find(':text');
			var log = numFiles > 10 ? numFiles + ' files selected' : label;
		
			if (input.length) {
				input.val(log);
			} else {
				if (log) alert(log);
			}
		});
		/* Input type file jQuery end*/
	};
	
	/* Header Fixed ============ */
	var headerFix = function(){
		'use strict';
        var menu = jQuery('.sticky-header');
		/* Main navigation fixed on top  when scroll down function custom */		
		jQuery(window).bind('scroll', function () {
			if ($(window).scrollTop() > menu.offset().top) {
				menu.addClass('is-fixed');
                menu.find('img').attr('src', menu.find('img').data('src'));
			} else {
				menu.removeClass('is-fixed');
                menu.find('img').attr('src', menu.find('img').data('img'));
			}
			if($(window).width()<=991) {
                menu.find('img').attr('src', menu.find('img').data('src'));
			}
		});
        if($(window).width()<=991) {
            menu.find('img').attr('src', menu.find('img').data('src'));
        }
        $(window).resize(function(){
        	if($(window).width()<=991 || menu.hasClass('is-fixed')) {
                menu.find('img').attr('src', menu.find('img').data('src'));
			} else {
                menu.find('img').attr('src', menu.find('img').data('img'));
			}
		});
	};

	/* Masonry Box ============ */
	var masonryBox = function(){
		'use strict';
		/* masonry by  = bootstrap-select.min.js */
		var self = $("#masonry");
		self.imagesLoaded(function () {
			self.masonry({
				gutterWidth: 15,
				isAnimated: true,
				itemSelector: ".card-container"
			});
		});

		jQuery(".filters").on('click','li',function(e) {
			e.preventDefault();
			var filter = $(this).attr("data-filter");
			self.masonryFilter({
				filter: function () {
					if (!filter) return true;
					//return $(this).attr("data-filter") == filter;
					return $(this).hasClass(filter);
				}
			});
		});
		/* masonry by  = bootstrap-select.min.js end */
	};
	
	/* Set Div Height ============ */
	var setDivHeight = function(){	
		'use strict';
		var allHeights = [];
		jQuery('.dzseth > div, .dzseth .img-cover, .dzseth .seth').each(function(e){
			allHeights.push(jQuery(this).height());
		})

		jQuery('.dzseth > div, .dzseth .img-cover, .dzseth .seth').each(function(e){
			var maxHeight = Math.max.apply(Math,allHeights);
			jQuery(this).css('height',maxHeight);
		})
		
		allHeights = [];
		/* Removice */
		var screenWidth = $( window ).width();
		if(screenWidth < 991)
		{
			jQuery('.dzseth > div, .dzseth .img-cover, .dzseth .seth').each(function(e){
				jQuery(this).css('height','');
			})
		}	
	};
	
	/* Counter Number ============ */
	var counter = function(){
		if(jQuery('.counter').length)
		{
			jQuery('.counter').counterUp({
				delay: 10,
				time: 3000
			});	
		}
	};
	
	/* Video Popup ============ */
	var handelVideo = function(){
		/* Video responsive function */	
		jQuery('iframe[src*="youtube.com"]').wrap('<div class="embed-responsive embed-responsive-16by9"></div>');
		jQuery('iframe[src*="vimeo.com"]').wrap('<div class="embed-responsive embed-responsive-16by9"></div>');	
		/* Video responsive function end */
	};
	
	/* Gallery Filter ============ */
	var handelFilterMasonary = function(){
		/* gallery filter activation = jquery.mixitup.min.js */ 
		if (jQuery('#image-gallery-mix').length) {
			jQuery('.gallery-filter').find('li').each(function () {
				$(this).addClass('filter');
			});
			jQuery('#image-gallery-mix').mixItUp();
		};
		if(jQuery('.gallery-filter.masonary').length){
			jQuery('.gallery-filter.masonary').on('click','span', function(){
				var selector = $(this).parent().attr('data-filter');
				jQuery('.gallery-filter.masonary span').parent().removeClass('active');
				jQuery(this).parent().addClass('active');
				jQuery('#image-gallery-isotope').isotope({ filter: selector });
				return false;
			});
		}
		/* gallery filter activation = jquery.mixitup.min.js */
	};
	
	/* Handel Bootstrap Select ============ */
	var handelBootstrapSelect = function(){
		/* Bootstrap Select box function by  = bootstrap-select.min.js */ 
		jQuery('select').selectpicker();
		/* Bootstrap Select box function by  = bootstrap-select.min.js end*/
	};
	
	/* Handel Bootstrap Touch Spin ============ */
	var handelBootstrapTouchSpin = function(){
		jQuery("input[name='demo_vertical2']").TouchSpin({
		  verticalbuttons: true,
		  verticalupclass: 'glyphicon glyphicon-plus',
		  verticaldownclass: 'glyphicon glyphicon-minus'
		});
		
	};

	/* Resizebanner ============ */
	var handelBannerResize = function(){
		$(".full-height").css("height", $(window).height());
	};
	
	/* Countdown ============ */
	var handelCountDown = function(){
		/* Time Countr Down Js */
		if($(".countdown").length)
		{
			$('.countdown').countdown({date: '30 march 2019 23:5'}, function() {
				$('.countdown').text('we are live');
			});
		}
		/* Time Countr Down Js End */
	};
	
	/* Content Scroll ============ */
	var handelCustomScroll = function(){
		/* all available option parameters with their default values */
		if($(".content-scroll").length)
		{ 
			$(".content-scroll").mCustomScrollbar({
				setWidth:false,
				setHeight:false,
				axis:"y"
			});	
		}
	};
	
	/* Left Menu ============ */
	var handelSideBarMenu = function(){
		$('.openbtn').on('click',function(e){
			e.preventDefault();
			if($('#mySidenav').length > 0)
			{
				document.getElementById("mySidenav").style.left = "0";
			}

			if($('#mySidenav1').length > 0)
			{
				document.getElementById("mySidenav1").style.right = "0";
			}
			
		})
		
		$('.closebtn').on('click',function(e){
			e.preventDefault();
			if($('#mySidenav').length > 0)
			{
				document.getElementById("mySidenav").style.left = "-300px";
			}
			
			if($('#mySidenav1').length > 0)
			{
				document.getElementById("mySidenav1").style.right = "-820px";
			}
		})
	};
	
	
	var handelParticle = function(tag_id){
		if($("#"+tag_id).length)
		{
			particlesJS(tag_id,
			{
			  "particles": {
				"number": {
				  "value": 10,
				  "density": {
					"enable": false,
					"value_area": 800
				  }
				},
				"color": {
				  "value": "#ffffff"
				},
				"shape": {
				  "type": "image",
				  "stroke": {
					"width": 0,
					"color": "#000000"
				  },
				  
				  "image": {
					"src": "/themes/arben/images/skew/tringle.png",
					"width": 100,
					"height": 100
				  }
				},
				"opacity": {
				  "value": 0.5,
				  "random": false,
				  "anim": {
					"enable": false,
					"speed": 0.5,
					"opacity_min": 0.1,
					"sync": false
				  }
				},
				"size": {
				  "value": 25,
				  "random": false,
				  "anim": {
					"enable": true,
					"speed": 5,
					"size_min": 10,
					"sync": true
				  }
				},
				"line_linked": {
				  "enable": false,
				  "distance": 150,
				  "color": "#ffffff",
				  "opacity": 0.4,
				  "width": 1
				},
				"move": {
				  "enable": true,
				  "speed": 1,
				  "direction": "none",
				  "random": true,
				  "straight": false,
				  "out_mode": "bounce",
				  "bounce": false,
				  "attract": {
					"enable": false,
					"rotateX": 600,
					"rotateY": 1200
				  }
				}
			  },
			  "interactivity": {
				"detect_on": "canvas",
				"events": {
				  "onhover": {
					"enable": false,
					"mode": "grab"
				  },
				  "onclick": {
					"enable": false,
					"mode": "push"
				  },
				  "resize": true
				},
				"modes": {
				  "grab": {
					"distance": 400,
					"line_linked": {
					  "opacity": 1
					}
				  },
				  "bubble": {
					"distance": 400,
					"size": 40,
					"duration": 2,
					"opacity": 8,
					"speed": 3
				  },
				  "repulse": {
					"distance": 200,
					"duration": 0.4
				  },
				  "push": {
					"particles_nb": 1
				  },
				  "remove": {
					"particles_nb": 2
				  }
				}
			  },
			  "retina_detect": true
			}
			);
		}
	}
	
	var wow_animation = function(){
		if($('.wow').length > 0)
		{
			var wow = new WOW(
			{
			  boxClass:     'wow',      // animated element css class (default is wow)
			  animateClass: 'animated', // animation css class (default is animated)
			  offset:       50,          // distance to the element when triggering the animation (default is 0)
			  mobile:       false       // trigger animations on mobile devices (true is default)
			});
			wow.init();	
		}	
	};
	
	var handelBGElements = function(){
		if(screenWidth > 1023)
		{
			if(jQuery('.bgeffect').length)
			{
				var s = skrollr.init({
					edgeStrategy: 'set',
					easing: {
						WTF: Math.random,
						inverted: function(p) {
							return 1-p;
						}
					}
				});			
			}		
		}
	}
	
	/* Function ============ */
	return {
		init:function(){
			onePageLayout();
			dzTheme();
			handelResizeElement();
			homeSearch();
			MagnificPopup();
			handelAccordian();
			scrollTop();
			handelPlaceholder();
			//footerAlign();
			fileInput();
			headerFix();
			setDivHeight();
			handelVideo();
			handelFilterMasonary();
			handelCountDown();
			handelCustomScroll();
			handelSideBarMenu();
			cartButton();
			handelBannerResize();
			/* Home Particle Style */
			// handelParticle('beauty-care');
			// handelParticle('footer1');
			wow_animation();
		},
		
		load:function(){
			masonryBox();
			//handelBootstrapSelect();
			//handelBootstrapTouchSpin();
			//handelBGElements();
			equalHeight('.equal-wraper .equal-col');
			equalHeight('.equal-wraper2 .equal-col');
			equalHeight('.equal-wraper3 .equal-col');
			counter();
		}
	}
	
}();


/* Document.ready Start */	
jQuery(document).ready(function() {
    'use strict';
	ButterFly.init();
});
/* Document.ready END */

/* Window Load START */
jQuery(window).load(function () {
	'use strict'; 
	ButterFly.load();
	ButterFly.init();
	setTimeout(function(){
		jQuery('#loading-area').remove();
	}, 0);
});

/*  Window Load END */