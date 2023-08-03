/*
Template Name:  Beleza
Author: Ingrid Kuhn
Author URI: http://themeforest.net/user/ingridk
*/
jQuery(function ($) {

    $(document).ready(function () {	
        "use strict"	
		
		// Google Map
		
		google.maps.event.addDomListener(window, 'load', loadGoogleMap);
		function loadGoogleMap() {  
				var mapCanvas = document.getElementById('map-canvas');
				var myLatlng = new google.maps.LatLng(60.391263, 5.322054); //your latitude and longitude here
				var mapOptions = {
					zoom: 16,
					scrollwheel: false,
					center: myLatlng,
					styles:[{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}]
				}
				var map = new google.maps.Map(mapCanvas, mapOptions)
				var marker = new google.maps.Marker({
					position: myLatlng,
					icon: 'img/mapmarker.png',
					map: map,
					title: ''
				});	
			};			
			    
		// Navigation 
		
		var trigger = $('.hamburger'),
		overlay = $('.overlay'),
		isClosed = false;

		trigger.on('click',function () {
		hamburger_cross();      
		});

		function hamburger_cross() {

		if (isClosed == true) {          
			overlay.hide();
			trigger.removeClass('is-open');
			trigger.addClass('is-closed');
			isClosed = false;
			} else {   
			overlay.show();
			trigger.removeClass('is-closed');
			trigger.addClass('is-open');
			isClosed = true;
			}			
			
		$('#sidebar-wrapper .item').on('click',function () {
		overlay.hide();
			trigger.removeClass('is-open');
			trigger.addClass('is-closed');
			isClosed = false;}); 
		}

		$('[data-toggle="offcanvas"]').on('click',function () {
			$('#wrapper').toggleClass('toggled');
		}); 

		$('#sidebar-wrapper .item').on('click',function () {
			$('.hamburger').addClass('is-open');
			$('#wrapper').toggleClass('toggled');
		}); 
		
		 
		// Wow Animations
 
		  new WOW().init();
		  
		//Scrolling feature 

		$('.page-scroll a').on('click', function (event) {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 2500, 'easeInOutExpo');
			event.preventDefault();
		});
		
		//Services Accordion 

        var $accordion, $wideScreen;
        $accordion = $('#accordion').children('li');
            $accordion.on('click', function (e) {
                var $this;
                e.stopPropagation();
                $this = $(this);
                if ($this.hasClass('out')) {
                    $this.addClass('out');
                } else {
                    $this.addClass('out');
                    $this.siblings().removeClass('out');
                }
            });
        
		//	Back Top Link

		var offset = 1200;
		var duration = 500;
		$(window).scroll(function () {
			if ($(this).scrollTop() > offset) {
				$('.back-to-top').fadeIn(400);
			} else {
				$('.back-to-top').fadeOut(400);
			}
		});
	   
		// Calling LayerSlider 
		
		$('#layerslider').layerSlider({
			responsive: true,
			responsiveUnder: 1280,
			layersContainer: 1280,
			skin: 'v5',
			touchNav : true,
			hoverPrevNext: false,
			skinsPath: './layerslider/skins/',
			autoStart: true,
			autoPlayVideos : false
		});
		
		//About Carousel
		
		$("#owl-about").owlCarousel({
			dots: true,
			loop: true,
			items: 1,
			autoplay: false});
			
		//Testimonials Carousel
		
		$("#owl-testimonials").owlCarousel({
			dots: true,
			loop: true,
			autoplay: false,
			margin: 40,
			nav: false,
			 responsive: {
				1: {items: 1,},
				991: {items: 2,},
			}
		});

		// Blog Carousel
		
		$("#owl-blog").owlCarousel({
			items: 3,
			dots: true,
			margin: 40,
			loop: true,
			autoplay: false,
			nav: true,
			navText: [
				"<i class='fa fa-chevron-left'></i>",
			 "<i class='fa fa-chevron-right'></i>"
			],
			responsive: {
				1: {items: 1,},
				1000: {items: 2,},
				1200: {items: 3,}
			}
		});
		
		//Stage Carousel	

		$('#stage').owlCarousel({
			stagePadding: 100,
			loop:true,
			nav:false,
			autoplay: true,
			items:1,
			animateIn:true ,
			lazyLoad: true,
		  responsive:{
				0:{
					items:1,
					stagePadding: 0
				},
					  
				1000:{
					items:1,
					stagePadding: 160
				},
				1200:{
					items:1,
					stagePadding: 250
				},
				1400:{
					items:1,
					stagePadding: 300
				},
				1600:{
					items:1,
					stagePadding: 350
				},
				1800:{
					items:1,
					stagePadding: 400
				}
			}
		})
		
		//Team Carousel	
		
		$("#owl-team").owlCarousel({
			items: 3,
			dots: true,
			loop: true,
			margin: 40,
			autoplay: false,
			nav: true,
			 navText: [
				"<i class='fa fa-chevron-left'></i>",
			 "<i class='fa fa-chevron-right'></i>"
			],
		   
			 responsive: {
				1: {items: 1,},
				550:{items: 2,},
				1000: {items: 3,}
			}
		});
	

		// Pretty Photo

		$("a[data-gal^='prettyPhoto']").prettyPhoto({
			hook: 'data-gal'
		});
		({
			animation_speed: 'normal',
			opacity: 1,
			show_title: true,
			allow_resize: true,
			counter_separator_label: '/',
			theme: 'light_square',
			/* light_rounded / dark_rounded / light_square / dark_square / facebook */
		});	

		// Date Time Picker

		$("#datetimepicker1").datetimepicker();
		
						
		
    }); // end document ready

  
    // Window load function

    $(window).load(function () {   

	     // Page Preloader 	

        $("#preloader").fadeOut(1000);		       

        //Portfolio Isotope 
		
        var $container = $('#lightbox');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false,
				layoutMode : 'masonry'
            }

        });
		$(window).smartresize(function(){
			$container.isotope({
			columnWidth: '.col-sm-3'
			});
		});
		

		//Portfolio Nav Filter

        $('.cat a').on('click', function () {
            $('.cat .active').removeClass('active');
            $(this).addClass('active');

            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });
		
    });// end window load function
		 	 	
   
}); // end jquery function
