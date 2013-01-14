/**
 * jQuery.Ruler v0.9
 * Add Photoshop-like rulers and mouse position to a container element using jQuery.
 * http://ruler.hilliuse.com
 * 
 * Dual licensed under the MIT and GPL licenses.
 * Copyright 2013 Hillius Ettinoffe http://hilliuse.com
 */
(function( $ ){

	$.fn.ruler = function(options) {
	
		var defaults = {
			vRuleSize: 18,
			hRuleSize: 18,
			showCrosshair : true,
			showMousePos: true
		};//defaults
		var settings = $.extend({},defaults,options);
		
		var hRule = '<div class="ruler hRule"></div>',
				vRule = '<div class="ruler vRule"></div>',
				corner = '<div class="ruler corner"></div>',
				vMouse = '<div class="vMouse"></div>',
				hMouse = '<div class="hMouse"></div>',
				mousePosBox = '<div class="mousePosBox">x: 50%, y: 50%</div>';
		
		// Mouse crosshair
		if (settings.showCrosshair) {
			$('body').append(vMouse, hMouse);
		}
		// Mouse position
		if (settings.showMousePos) {
			$('body').append(mousePosBox);
		}
		// If either, then track mouse position
		if (settings.showCrosshair || settings.showMousePos) {
			$(window).mousemove(function(e) {
				if (settings.showCrosshair) {
					$('.vMouse').css("top",e.pageY-($(document).scrollTop())+1);
					$('.hMouse').css("left",e.pageX+1);
					//-($(window).scrollTop())
				}
				if (settings.showMousePos) {
					$('.mousePosBox').html("x:" + (e.pageX-settings.hRuleSize+1) + ", y:" + (e.pageY-settings.vRuleSize+1) ).css({
						top: e.pageY-($(document).scrollTop()) + 16,
						left: e.pageX + 12
					});
				}
			});
		}
		if (settings.mousePos) {
			$('body').append(mousePosBox);
		}
		
		//resize
		$(window).resize(function(e){
			var $hRule = $('.hRule');
			var $vRule = $('.vRule');
			$hRule.empty();
			$vRule.empty().height(0).height($vRule.parent().outerHeight());
			
			// Horizontal ruler ticks
			var tickLabelPos = settings.vRuleSize;
			var newTickLabel = "";
			while ( tickLabelPos <= $hRule.width() ) {
				if ((( tickLabelPos - settings.vRuleSize ) %50 ) == 0 ) {
					newTickLabel = "<div class='tickLabel'>" + ( tickLabelPos - settings.vRuleSize ) + "</div>";
					$(newTickLabel).css( "left", tickLabelPos+"px" ).appendTo($hRule);
				} else if ((( tickLabelPos - settings.vRuleSize ) %10 ) == 0 ) {
					newTickLabel = "<div class='tickMajor'></div>";
					$(newTickLabel).css("left",tickLabelPos+"px").appendTo($hRule);
				} else if ((( tickLabelPos - settings.vRuleSize ) %5 ) == 0 ) {
					newTickLabel = "<div class='tickMinor'></div>";
					$(newTickLabel).css( "left", tickLabelPos+"px" ).appendTo($hRule);
				}
				tickLabelPos = (tickLabelPos + 5);				
			}//hz ticks
			
			// Vertical ruler ticks
			tickLabelPos = settings.hRuleSize;
			newTickLabel = "";
			while (tickLabelPos <= $vRule.height()) {
				if ((( tickLabelPos - settings.hRuleSize ) %50 ) == 0) {
					newTickLabel = "<div class='tickLabel'><span>" + ( tickLabelPos - settings.hRuleSize ) + "</span></div>";
					$(newTickLabel).css( "top", tickLabelPos+"px" ).appendTo($vRule);
				} else if (((tickLabelPos - settings.hRuleSize)%10) == 0) {
					newTickLabel = "<div class='tickMajor'></div>";
					$(newTickLabel).css( "top", tickLabelPos+"px" ).appendTo($vRule);
				} else if (((tickLabelPos - settings.hRuleSize)%5) == 0) {
					newTickLabel = "<div class='tickMinor'></div>";
					$(newTickLabel).css( "top", tickLabelPos+"px" ).appendTo($vRule);
				}
				tickLabelPos = ( tickLabelPos + 5 );				
			}//vert ticks
		});//resize
		
		return this.each(function() {
			var $this = $(this);
			
			// Attach rulers
			$this.css("padding-left", settings.vRuleSize + 1 + "px");
			$(vRule).height($this.outerHeight()).prependTo($this);
			
			$this.css("padding-top", settings.hRuleSize + 1 + "px");
			$(hRule).prependTo($this);
			
			$(corner).css({
				width: settings.hRuleSize,
				height: settings.vRuleSize
			}).prependTo($this);
			
			
			var $hRule = $this.children('.hRule');
			var $vRule = $this.children('.vRule');
		
			// Horizontal ruler ticks
			var tickLabelPos = settings.vRuleSize;
			var newTickLabel = "";
			while ( tickLabelPos <= $hRule.width() ) {
				if ((( tickLabelPos - settings.vRuleSize ) %50 ) == 0 ) {
					newTickLabel = "<div class='tickLabel'>" + ( tickLabelPos - settings.vRuleSize ) + "</div>";
					$(newTickLabel).css( "left", tickLabelPos+"px" ).appendTo($hRule);
				} else if ((( tickLabelPos - settings.vRuleSize ) %10 ) == 0 ) {
					newTickLabel = "<div class='tickMajor'></div>";
					$(newTickLabel).css("left",tickLabelPos+"px").appendTo($hRule);
				} else if ((( tickLabelPos - settings.vRuleSize ) %5 ) == 0 ) {
					newTickLabel = "<div class='tickMinor'></div>";
					$(newTickLabel).css( "left", tickLabelPos+"px" ).appendTo($hRule);
				}
				tickLabelPos = (tickLabelPos + 5);				
			}//hz ticks
			
			// Vertical ruler ticks
			tickLabelPos = settings.hRuleSize;
			newTickLabel = "";
			while (tickLabelPos <= $vRule.height()) {
				if ((( tickLabelPos - settings.hRuleSize ) %50 ) == 0) {
					newTickLabel = "<div class='tickLabel'><span>" + ( tickLabelPos - settings.hRuleSize ) + "</span></div>";
					$(newTickLabel).css( "top", tickLabelPos+"px" ).appendTo($vRule);
				} else if (((tickLabelPos - settings.hRuleSize)%10) == 0) {
					newTickLabel = "<div class='tickMajor'></div>";
					$(newTickLabel).css( "top", tickLabelPos+"px" ).appendTo($vRule);
				} else if (((tickLabelPos - settings.hRuleSize)%5) == 0) {
					newTickLabel = "<div class='tickMinor'></div>";
					$(newTickLabel).css( "top", tickLabelPos+"px" ).appendTo($vRule);
				}
				tickLabelPos = ( tickLabelPos + 5 );				
			}//vert ticks			
			
		});//each		
		
	};//ruler
})( jQuery );