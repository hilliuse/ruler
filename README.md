jQuery.Ruler
============

jQuery.Ruler is a jQuery plugin born out of sheer curiosity and on a whim. 
It dynamically places rulers on the x & y axes, with tick marks every 5 pixels & labels every 50 pixels. 
Should you wish, there are options to enable tracking of the cursor position with a crosshair and/or a box showing the coordinates within the ruler space.

### Usage

Add jQuery & the Ruler plugin. 
jQuery.Ruler requires jQuery v1.8.0 or greater. 
At the time of writing jQuery v1.8.3 is the latest stable release.

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/jquery.ruler.js"></script>
	
#### Script

    $(function() {
        $('body').ruler();    
    });
	
### Licensing

jQuery.Ruler is dual licensed under the MIT &amp GPL licenses.

Options
-------

Options are set with an object as an argument to the .ruler() function call. All options are optional; the plugin will use the default values.

    $(function() {
        $('body').ruler({
            vRuleSize: 18,
            hRuleSize: 18,
            showCrosshair : false,
            showMousePos: true
        });    
    });
		
option(type:default)
	
### vRuleSize

vRuleSize(integer:18)  
Width in pixels of the vertial ruler. Set to 0 to disable the vertical ruler.

### hRuleSize

hRuleSize(integer:18)  
Height in pixels of the horizontal ruler. Set to 0 to disable the horizontal ruler.

### showCrosshair

showCrosshair(boolean:false)  
Enables a dotted crosshair that spans the entire page and tracks the cursor position. Disabled on touchscreen devices due to lack of a .mousemove() event.

### showMousePos

showMousePos(boolean:true)  
Enables an overlay box that indicates the cursor position within the rulers. Disabled on touchscreen devices due to lack of a .mousemove() event.