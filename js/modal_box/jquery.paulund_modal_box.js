/**
 * JQuery Plugin for a modal box
 * Will create a simple modal box with all HTML and styling
 * 
 * Author: Paul Underwood
 * URL: http://www.paulund.co.uk
 * 
 * Available for free download from http://www.paulund.co.uk
 */

(function($){

	// Defining our jQuery plugin

	$.fn.paulund_modal_box = function(prop){

		// Default parameters

		var options = $.extend({
			width : "50%",
			title:"JQuery Modal Box Demo",
			description: "Example of how to create a modal box.",
			top: "20%",
			left: "25%",
		},prop);
				
		//Click event on element
		this.click(function(e){
			add_block_page();
			add_popup_box();
			add_styles();

			$('.paulund_modal_box').fadeIn();
			return false;
		});
		

		/**
		 * Add styles to the html markup
		 */
		 function add_styles(){			
			$('.paulund_modal_box').css({ 
				'position':'absolute', 
				'left':options.left,
				'top':options.top,
				'display':'none',
				'width': options.width,
				'border':'1px solid #fff',
				'box-shadow': '0px 2px 7px #292929',
				'-moz-box-shadow': '0px 2px 7px #292929',
				'-webkit-box-shadow': '0px 2px 7px #292929',
				'border-radius':'10px',
				'-moz-border-radius':'10px',
				'-webkit-border-radius':'10px',
				'background': '#f2f2f2', 
				'z-index':'50',
				'box-sizing': 'border-box',
				'padding': '10px'
			});
			$('.paulund_modal_close').css({
				'position':'relative',
				'top':'-25px',
				'left':'20px',
				'float':'right',
				'display':'block',
				'height':'50px',
				'width':'50px',
				'background': 'url(js/modal_box/images/close.png) no-repeat',
			});
			$('.paulund_block_page').css({
				'position':'fixed',
				'top':'0',
				'left':'0',
				'background-color':'rgba(0,0,0,0.6)',
				'height':'100%',
				'width':'100%',
				'z-index':'10',
				'overflow-y': 'auto'
			});
			$('.paulund_inner_modal_box').css({
				'background-color':'#fff',
				'height':'100%',
				'width':'100%',
				'box-sizing': 'border-box',
				'padding':'10px',
				'border-radius':'10px',
				'-moz-border-radius':'10px',
				'-webkit-border-radius':'10px'
			});
		}
		
		 /**
		  * Create the block page div
		  */
		 function add_block_page(){
			var block_page = $('<div class="paulund_block_page"></div>');
						
			$('body').css({
				'overflow': 'hidden'
			});
			$(block_page).appendTo('body');
		}

		function remove_block_page(){
			$('body').css({
				'overflow': 'auto'
			});
			$(this).parent().fadeOut().remove();
			$('.paulund_block_page').fadeOut().remove();
			return false;
		}
		 	
		 /**
		  * Creates the modal box
		  */
		 function add_popup_box(){
			 var pop_up = $('<div class="paulund_modal_box"><a href="#" class="paulund_modal_close"></a><div class="paulund_inner_modal_box"><h3>' + options.title + '</h3><p>' + options.description + '</p></div></div>');
			 $(pop_up).appendTo('.paulund_block_page');
			 			 
			 $('.paulund_modal_close').click(remove_block_page);
		}

		return this;
	};
	
})(jQuery);
