<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Ruler</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
 
		<link href="ruler/ruler.css" rel="stylesheet">
		<link href="css/demo.css" rel="stylesheet">
				
		<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
		<script src="http://use.edgefonts.net/source-code-pro.js"></script>
		<script src="http://use.edgefonts.net/source-sans-pro.js"></script>
		 
		<script src="js/modernizr-2.6.2.min.js"></script>
  </head>
	
	<body>
		<div class="wrapper">
			<header>
				<h1>jQuery.Ruler</h1>
			</header>
			
			<section id="intro">
				<h2>Introduction</h2>
				<p>
					jQuery.Ruler is a jQuery plugin born out of sheer curiosity and on a whim. 
					It dynamically places rulers on the x &amp; y axes, with tick marks every 5 pixels &amp; labels every 50 pixels. 
					Should you wish, there are options to enable tracking of the cursor position with a crosshair and/or a box showing the coordinates within the ruler space.
				</p>
				<section>
					<h3>Usage</h3>
					<p>Add jQuery &amp; the Ruler plugin. At the time of writing jQuery v1.8.3 is the latest stable release.</p>
					
					
<pre><code>&lt;script src=<span style='color:#2a00ff; '>"//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"</span>>&lt;/script>
&lt;script src=<span style='color:#2a00ff; '>"js/jquery.ruler.js"</span>>&lt;/script>
</code></pre>
					
				<!--<pre>
<code>$(function() {
  $('body').ruler();	
});</code></pre>-->
<h4>Script</h4>
<pre><code>$<span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>function</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span> <span style='color:#800080; '>{</span>
  $<span style='color:#808030; '>(</span><span style='color:#2a00ff; '>'body'</span><span style='color:#808030; '>)</span><span style='color:#808030; '>.</span>ruler<span style='color:#808030; '>(</span><span style='color:#808030; '>)</span><span style='color:#800080; '>;</span>    
<span style='color:#800080; '>}</span><span style='color:#808030; '>)</span><span style='color:#800080; '>;</span>
</code></pre>
				</section>
				
				<section>
					<h3>CSS</h3>
					<h4>ruler.css</h4>
					
					

<pre><code><span style='color:#808030; '>.</span>ruler <span style='color:#800080; '>{</span>
    <span style='color:#bb7977; font-weight:bold; '>background</span><span style='color:#808030; '>:</span> rgba(<span style='color:#008c00; '>255</span><span style='color:#808030; '>,</span><span style='color:#008c00; '>255</span><span style='color:#808030; '>,</span><span style='color:#008c00; '>255</span><span style='color:#808030; '>,</span><span style='color:#008c00; '>1</span>)<span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>color</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>#</span><span style='color:#008000; '>444</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>font-family</span><span style='color:#808030; '>:</span> source <span style='color:#074726; '>code</span> pro<span style='color:#808030; '>,</span> <span style='color:#800000; '>"</span><span style='color:#0000e6; '>Arial Narrow</span><span style='color:#800000; '>"</span><span style='color:#808030; '>,</span> <span style='color:#800000; '>"</span><span style='color:#0000e6; '>Helvetica Neue</span><span style='color:#800000; '>"</span><span style='color:#808030; '>,</span> Helvetica<span style='color:#808030; '>,</span> Arial<span style='color:#808030; '>,</span> Veranda<span style='color:#808030; '>,</span> <span style='color:#074726; '>sans-serif</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>font-size</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>12</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>line-height</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>14</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>overflow</span><span style='color:#808030; '>:</span> <span style='color:#074726; '>hidden</span><span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
<span style='color:#808030; '>.</span>ruler <span style='color:#808030; '>></span> <span style='color:#800000; font-weight:bold; '>div</span> <span style='color:#800080; '>{</span>
    <span style='color:#bb7977; font-weight:bold; '>background</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>#</span><span style='color:#008000; '>444</span><span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
<span style='color:#808030; '>.</span>hRule <span style='color:#800080; '>{</span>
    <span style='color:#bb7977; font-weight:bold; '>position</span><span style='color:#808030; '>:</span> <span style='color:#074726; '>fixed</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>width</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>100</span><span style='color:#006600; '>%</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>height</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>18</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>left</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>0</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>top</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>0</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
    
    <span style='color:#bb7977; font-weight:bold; '>border-bottom</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>1</span><span style='color:#006600; '>px</span> <span style='color:#074726; '>solid</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>z-index</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>9</span><span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
<span style='color:#808030; '>.</span>vRule <span style='color:#800080; '>{</span>
    <span style='color:#bb7977; font-weight:bold; '>position</span><span style='color:#808030; '>:</span> <span style='color:#074726; '>absolute</span><span style='color:#800080; '>;</span>
    
    <span style='color:#bb7977; font-weight:bold; '>min-height</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>100</span><span style='color:#006600; '>%</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>width</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>18</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>left</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>0</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>top</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>0</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
    
    <span style='color:#bb7977; font-weight:bold; '>border-right</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>1</span><span style='color:#006600; '>px</span> <span style='color:#074726; '>solid</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>z-index</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>9</span><span style='color:#800080; '>;</span>

<span style='color:#800080; '>}</span>
<span style='color:#808030; '>.</span>corner <span style='color:#800080; '>{</span>
    <span style='color:#bb7977; font-weight:bold; '>position</span><span style='color:#808030; '>:</span> <span style='color:#074726; '>fixed</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>top</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>0</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>left</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>0</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>width</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>18</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>height</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>18</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>border-right</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>1</span><span style='color:#006600; '>px</span> <span style='color:#074726; '>solid</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>border-bottom</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>1</span><span style='color:#006600; '>px</span> <span style='color:#074726; '>solid</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>z-index</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>10</span><span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
<span style='color:#808030; '>.</span>hRule <span style='color:#808030; '>.</span>tickLabel <span style='color:#800080; '>{</span>
    <span style='color:#bb7977; font-weight:bold; '>position</span><span style='color:#808030; '>:</span> <span style='color:#074726; '>absolute</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>top</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>0</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>width</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>1</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>height</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>100</span><span style='color:#006600; '>%</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>text-indent</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>1</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
<span style='color:#808030; '>.</span>hRule <span style='color:#808030; '>.</span>tickMajor <span style='color:#800080; '>{</span>
    <span style='color:#bb7977; font-weight:bold; '>position</span><span style='color:#808030; '>:</span> <span style='color:#074726; '>absolute</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>bottom</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>0</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>width</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>1</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>height</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>6</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
<span style='color:#808030; '>.</span>hRule <span style='color:#808030; '>.</span>tickMinor <span style='color:#800080; '>{</span>
    <span style='color:#bb7977; font-weight:bold; '>position</span><span style='color:#808030; '>:</span> <span style='color:#074726; '>absolute</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>bottom</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>0</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>width</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>1</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>height</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>4</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
<span style='color:#808030; '>.</span>vRule <span style='color:#808030; '>.</span>tickLabel <span style='color:#800080; '>{</span>
    <span style='color:#bb7977; font-weight:bold; '>position</span><span style='color:#808030; '>:</span> <span style='color:#074726; '>absolute</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>right</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>0</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>height</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>1</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>width</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>100</span><span style='color:#006600; '>%</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>text-indent</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>1</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
<span style='color:#808030; '>.</span>vRule <span style='color:#808030; '>.</span>tickLabel <span style='color:#800000; font-weight:bold; '>span</span> <span style='color:#800080; '>{</span>
    <span style='color:#bb7977; font-weight:bold; '>display</span><span style='color:#808030; '>:</span> <span style='color:#074726; '>block</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>position</span><span style='color:#808030; '>:</span> <span style='color:#074726; '>absolute</span><span style='color:#800080; '>;</span>
    
    <span style='color:#bb7977; font-weight:bold; '>top</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>1</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>right</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>0</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>margin-right</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>18</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
    
    -webkit-transform<span style='color:#808030; '>:</span> rotate(<span style='color:#808030; '>-</span><span style='color:#008c00; '>90</span><span style='color:#006600; '>deg</span>)<span style='color:#800080; '>;</span>
  -moz-transform<span style='color:#808030; '>:</span> rotate(<span style='color:#808030; '>-</span><span style='color:#008c00; '>90</span><span style='color:#006600; '>deg</span>)<span style='color:#800080; '>;</span>
  -ms-transform<span style='color:#808030; '>:</span> rotate(<span style='color:#808030; '>-</span><span style='color:#008c00; '>90</span><span style='color:#006600; '>deg</span>)<span style='color:#800080; '>;</span>
  -o-transform<span style='color:#808030; '>:</span> rotate(<span style='color:#808030; '>-</span><span style='color:#008c00; '>90</span><span style='color:#006600; '>deg</span>)<span style='color:#800080; '>;</span>
  transform<span style='color:#808030; '>:</span> rotate(<span style='color:#808030; '>-</span><span style='color:#008c00; '>90</span><span style='color:#006600; '>deg</span>)<span style='color:#800080; '>;</span>
    
    -webkit-transform-origin<span style='color:#808030; '>:</span> <span style='color:#074726; '>top</span> <span style='color:#074726; '>right</span><span style='color:#800080; '>;</span>
  -moz-transform-origin<span style='color:#808030; '>:</span> <span style='color:#074726; '>top</span> <span style='color:#074726; '>right</span><span style='color:#800080; '>;</span>
  -ms-transform-origin<span style='color:#808030; '>:</span> <span style='color:#074726; '>top</span> <span style='color:#074726; '>right</span><span style='color:#800080; '>;</span>
  -o-transform-origin<span style='color:#808030; '>:</span> <span style='color:#074726; '>top</span> <span style='color:#074726; '>right</span><span style='color:#800080; '>;</span>
  transform-origin<span style='color:#808030; '>:</span> <span style='color:#074726; '>top</span> <span style='color:#074726; '>right</span><span style='color:#800080; '>;</span>
    
<span style='color:#800080; '>}</span>
<span style='color:#808030; '>.</span>vRule <span style='color:#808030; '>.</span>tickMajor <span style='color:#800080; '>{</span>
    <span style='color:#bb7977; font-weight:bold; '>position</span><span style='color:#808030; '>:</span> <span style='color:#074726; '>absolute</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>right</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>0</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>height</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>1</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>width</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>6</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
<span style='color:#808030; '>.</span>vRule <span style='color:#808030; '>.</span>tickMinor <span style='color:#800080; '>{</span>
    <span style='color:#bb7977; font-weight:bold; '>position</span><span style='color:#808030; '>:</span> <span style='color:#074726; '>absolute</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>right</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>0</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>height</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>1</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>width</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>4</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>

<span style='color:#808030; '>.</span>vMouse <span style='color:#800080; '>{</span>
    <span style='color:#bb7977; font-weight:bold; '>display</span><span style='color:#808030; '>:</span> <span style='color:#074726; '>block</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>position</span><span style='color:#808030; '>:</span> <span style='color:#074726; '>fixed</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>width</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>100</span><span style='color:#006600; '>%</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>height</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>0</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
    
    <span style='color:#bb7977; font-weight:bold; '>left</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>background</span><span style='color:#808030; '>:</span> rgba(<span style='color:#008c00; '>0</span><span style='color:#808030; '>,</span><span style='color:#008c00; '>0</span><span style='color:#808030; '>,</span><span style='color:#008c00; '>0</span><span style='color:#808030; '>,</span><span style='color:#008c00; '>0</span>)<span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>border-bottom</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>1</span><span style='color:#006600; '>px</span> <span style='color:#074726; '>dotted</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>z-index</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>11</span><span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
<span style='color:#808030; '>.</span>hMouse <span style='color:#800080; '>{</span>
    <span style='color:#bb7977; font-weight:bold; '>display</span><span style='color:#808030; '>:</span> <span style='color:#074726; '>block</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>position</span><span style='color:#808030; '>:</span> <span style='color:#074726; '>fixed</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>height</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>100</span><span style='color:#006600; '>%</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>width</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>0</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>top</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span>

    <span style='color:#bb7977; font-weight:bold; '>background</span><span style='color:#808030; '>:</span> rgba(<span style='color:#008c00; '>0</span><span style='color:#808030; '>,</span><span style='color:#008c00; '>0</span><span style='color:#808030; '>,</span><span style='color:#008c00; '>0</span><span style='color:#808030; '>,</span><span style='color:#008c00; '>0</span>)<span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>border-left</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>1</span><span style='color:#006600; '>px</span> <span style='color:#074726; '>dotted</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>z-index</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>11</span><span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
<span style='color:#808030; '>.</span>mousePosBox <span style='color:#800080; '>{</span>
    <span style='color:#bb7977; font-weight:bold; '>height</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>16</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>background</span><span style='color:#808030; '>:</span> rgba(<span style='color:#008c00; '>0</span><span style='color:#808030; '>,</span><span style='color:#008c00; '>0</span><span style='color:#808030; '>,</span><span style='color:#008c00; '>0</span><span style='color:#808030; '>,</span><span style='color:#008c00; '>0.25</span>)<span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>color</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>#</span><span style='color:#008000; '>fff</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>font-family</span><span style='color:#808030; '>:</span> source <span style='color:#074726; '>code</span> pro<span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>font-size</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>12</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>line-height</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>16</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>border</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>1</span><span style='color:#006600; '>px</span> <span style='color:#074726; '>solid</span> rgba(<span style='color:#008c00; '>0</span><span style='color:#808030; '>,</span><span style='color:#008c00; '>0</span><span style='color:#808030; '>,</span><span style='color:#008c00; '>0</span><span style='color:#808030; '>,</span><span style='color:#008c00; '>0.5</span>)<span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>position</span><span style='color:#808030; '>:</span> <span style='color:#074726; '>fixed</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>left</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>50</span><span style='color:#006600; '>%</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>top</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>50</span><span style='color:#006600; '>%</span><span style='color:#800080; '>;</span>
    <span style='color:#bb7977; font-weight:bold; '>padding</span><span style='color:#808030; '>:</span> <span style='color:#008c00; '>0</span> <span style='color:#008c00; '>2</span><span style='color:#006600; '>px</span><span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
</code></pre>
					
					
					
					
					
					<!--<h4>Element Styling</h4>
						<p>
							At
						</p>
<pre><code>
</code></pre>-->

				</section>
				
				<section>
					<h3>Fonts</h3>
					<p>Adobe Edge Web Fonts has "Source Code Pro" &amp "Source Sans Pro" which look awesome on the labels for the rulers. It's optional but you can add them like this. If you don't, ruler.css has a font stack that should prove adequate.</p>
<pre><code>&lt;script src=<span style='color:#2a00ff;'>"http://use.edgefonts.net/source-code-pro.js"</span>&gt;&lt;/script&gt;
&lt;script src=<span style='color:#2a00ff;'>"http://use.edgefonts.net/source-sans-pro.js"</span>&gt;&lt;/script&gt;
</code></pre>
				</section>
				
				<section>
					<h3>Project Repository</h3>
					<p>You can find jQuery.Ruler on GitHub at <a href="http://github.com/hilliuse/ruler">github.com/hilliuse/ruler</a>.</p>
				</section>
					
				<section>
					<h3>Licensing</h3>
					<p>jQuery.Ruler is dual licensed under the MIT &amp GPL licenses.</p>
				</section>
			</section>
			
			<section id="options">
				
				<h2>Options</h2>
				<p>Options are set with an object as an argument to the <code>.ruler()</code> function call. All options are optional; the plugin will use the default values.</p>
				
				<pre style='color:#000000;background:#ffffff;'><code>$<span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>function</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span> <span style='color:#800080; '>{</span>
  $<span style='color:#808030; '>(</span><span style='color:#0000e6; '>'body'</span><span style='color:#808030; '>)</span><span style='color:#808030; '>.</span>ruler<span style='color:#808030; '>(</span><span style='color:#800080; '>{</span>
    vRuleSize<span style='color:#800080; '>:</span> <span style='color:#008c00; '>18</span><span style='color:#808030; '>,</span>
    hRuleSize<span style='color:#800080; '>:</span> <span style='color:#008c00; '>18</span><span style='color:#808030; '>,</span>
    showCrosshair <span style='color:#800080; '>:</span> <span style='color:#0f4d75; '>false</span><span style='color:#808030; '>,</span>
    showMousePos<span style='color:#800080; '>:</span> <span style='color:#0f4d75; '>true</span>
  <span style='color:#800080; '>}</span><span style='color:#808030; '>)</span><span style='color:#800080; '>;</span>    
<span style='color:#800080; '>}</span><span style='color:#808030; '>)</span><span style='color:#800080; '>;</span>
</code></pre>

				<ul class="option">
					<li class="name"><code>option</code></li>
					<li class="type">type</li>
					<li class="default res"><code>default</code></li>
				</ul>
				
				<section>
					<h3>vRuleSize</h3>
					<ul class="option">
						<li class="name"><code>vRuleSize</code></li>
						<li class="type">integer</li>
						<li class="default num"><code>18</code></li>
					</ul>
					<p>Width in pixels of the vertial ruler.</p>
				</section>
				
				<section>
					<h3>hRuleSize</h3>
					<ul class="option">
						<li class="name"><code>hRuleSize</code></li>
						<li class="type">integer</li>
						<li class="default num"><code>18</code></li>
					</ul>
					<p>Height in pixels of the horizontal ruler.</p>
				</section>
				
				<section>
					<h3>showCrosshair</h3>
					<ul class="option">
						<li class="name"><code>showCrosshair</code></li>
						<li class="type">boolean</li>
						<li class="default res"><code>false</code></li>
					</ul>
					<p>
						Enables a dotted crosshair that spans the entire page and tracks the cursor position.
						Disabled on touchscreen devices due to lack of a <code>.mousemove()</code> event.
					</p>
				</section>
				
				<section>
					<h3>showMousePos</h3>
					<ul class="option">
						<li class="name"><code>showMousePos</code></li>
						<li class="type">boolean</li>
						<li class="default res"><code>true</code></li>
					</ul>
					<p>
						Enables an overlay box that indicates the cursor position within the rulers.
						Disabled on touchscreen devices due to lack of a <code>.mousemove()</code> event.
					</p>
				</section>
			</section>
			
			<footer>
				jQuery.Ruler by <a href="http://hilliuse.com" target="_blank">HilliusE</a>&trade;
			</footer>
		</div>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="ruler/jquery.ruler.js"></script>
		<script src="js/demo.js"></script>
  </body>
</html>