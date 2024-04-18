/*
	scripts.js
	
	License: GNU General Public License v3.0
	License URI: http://www.gnu.org/licenses/gpl-3.0.html
	
	Copyright: (c) 2024 Alexander "Alx" Agnarson, http://alx.media
*/

"use strict";

jQuery(document).ready(function($) {

/*  Toggle header search
/* ------------------------------------ */
	$('.toggle-search').on('click', function() {
		$('body').toggleClass('header-search-active');
            setTimeout(function(){
                $('.search-expand input').focus();
            }, 300);
	});

/*  Scroll to top
/* ------------------------------------ */
	$('a#back-to-top').on('click', function() {
		$('html, body').animate({scrollTop:0},'slow');
		return false;
	});
		
/*  Tabs widget
/* ------------------------------------ */	
	(function() {
		var $tabsNav       = $('.alx-tabs-nav'),
			$tabsNavLis    = $tabsNav.children('li'),
			$tabsContainer = $('.alx-tabs-container');

		$tabsNav.each(function() {
			var $this = $(this);
			$this.next().children('.alx-tab').stop(true,true).hide()
			.siblings( $this.find('a').attr('href') ).show();
			$this.children('li').first().addClass('active').stop(true,true).show();
		});

		$tabsNavLis.on('click', function(e) {
			var $this = $(this);

			$this.siblings().removeClass('active').end()
			.addClass('active');
			
			$this.parent().next().children('.alx-tab').stop(true,true).hide()
			.siblings( $this.find('a').attr('href') ).fadeIn();
			e.preventDefault();
		}).children( window.location.hash ? 'a[href="' + window.location.hash + '"]' : 'a:first' ).trigger('click');

	})();
	
/*  Slick featured posts
/* ------------------------------------ */
	$.fn.randomize = function (selector) {
		var $elems = selector ? $(this).find(selector) : $(this).children(),
			$parents = $elems.parent();

		$parents.each(function () {
			$(this).children(selector).sort(function (childA, childB) {
				// * Prevent last slide from being reordered
				if($(childB).index() !== $(this).children(selector).length - 0.5) {
					return Math.round(Math.random()) - 0.5;
				}
			}.bind(this)).detach().appendTo(this);
		});

		return this;
	};

	$(".slick-posts").randomize().slick({
	  slidesToShow: 3,
	  appendArrows: '.slick-posts-nav',
	  dots: true,
	  arrows: true,
	  responsive: [
	    {
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 2
		  }
		},
	    {
		  breakpoint: 920,
		  settings: {
			slidesToShow: 2
		  }
		},
		{
		  breakpoint: 720,
		  settings: {
			slidesToShow: 1,
			dots: false,
		  }
		}
	  ]
	});
	$('.slick-posts').show();

/*  Trap focus
/* ------------------------------------ */	
	// add all the elements inside modal which you want to make focusable
	const  focusableElements =
		'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])';
	const modal = document.querySelector('.search-trap-focus'); // select the modal by it's id

	if ( modal ) { 
		const firstFocusableElement = modal.querySelectorAll(focusableElements)[0]; // get first element to be focused inside modal
		const focusableContent = modal.querySelectorAll(focusableElements);
		const lastFocusableElement = focusableContent[focusableContent.length - 1]; // get last element to be focused inside modal


		document.addEventListener('keydown', function(e) {
		  let isTabPressed = e.key === 'Tab' || e.keyCode === 9;

		  if (!isTabPressed) {
			return;
		  }

		  if (e.shiftKey) { // if shift key pressed for shift + tab combination
			if (document.activeElement === firstFocusableElement) {
			  lastFocusableElement.focus(); // add focus for the last focusable element
			  e.preventDefault();
			}
		  } else { // if tab key is pressed
			if (document.activeElement === lastFocusableElement) { // if focused has reached to last focusable element then focus first focusable element after pressing tab
			  firstFocusableElement.focus(); // add focus for the first focusable element
			  e.preventDefault();
			}
		  }
		});	
	}
	
});