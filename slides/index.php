<?php
/**
* @copyright (c) Locomotive 2013
* @author Nicolas Poliquin <nicolas@polikin.ca>
* @author Mathieu Rivest <rivest.mathieu@gmail.com>
*/


?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="gt-ie"> <!--<![endif]-->
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	
		<title>Compass</title>
				
		<script type="text/javascript" charset="utf-8" src="assets/scripts/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="assets/scripts/jquery.easing.1.3.js"></script>
		
	</head>	
	<body>

		<div class="reveal">

			<div class="slides">

				<section>
					<img class="blank" src="assets/images/sass-compass-logo.png" alt="">
				</section>

				<section>					
					<h2>compass sprite</h2>
					
					<pre>
						<code data-trim>							
							@import "../images/sprites-folder/*.png";
							@include all-sprites-folder-sprites(<strong style="color: #3498db;">true</strong>);
							
							.sprites-folder-sprite, 
							.sprites-folder-book, 
							.sprites-folder-calendar, 
							.sprites-folder-chat, ... {
								    background: url('../images/sprites-folder-<strong style="color: #3498db;">sf54b147fa4</strong>.png') no-repeat;
							}
							
							.sprites-folder-book {
							  background-position: 0 -823px;
							  height: 200px;
							  width: 200px;
							}

							.sprites-folder-calendar {
							  background-position: 0 -223px;
							  height: 200px;
							  width: 200px;
							}

							.sprites-folder-chat {
							  background-position: 0 -423px;
							  height: 200px;
							  width: 200px;
							}
					    </code>
					</pre>
				</section>

				<section>
					<h2>image généré</h2>
					
					<img src="assets/images/compass-sprite-output.png" alt="">
				</section>

			</div>

		</div>
		
		<script type="text/javascript" charset="utf-8" src="assets/scripts/head.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="assets/scripts/reveal.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="assets/scripts/highlight.pack.js"></script>
			
		<link rel="stylesheet" type="text/css" href="assets/styles/reveal.min.css" media="screen,projection" />
		<link rel="stylesheet" type="text/css" href="assets/styles/night.css" media="screen,projection" />
		<link rel="stylesheet" type="text/css" href="assets/styles/monokai.css" media="screen,projection" />
		
		<!-- If the query includes 'print-pdf', use the PDF print sheet -->
		<script>
			document.write( '<link rel="stylesheet" href="assets/styles/print/' + ( window.location.search.match( /print-pdf/gi ) ? 'pdf' : 'paper' ) + '.css" type="text/css" media="print">' );
		</script>
		
		<script type="text/javascript">
			Reveal.initialize({
				transition: 'linear',
				loop: true,
				history: true,
				width: 1400,
				src: 'assets/scripts/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); }
			});
			
			hljs.initHighlightingOnLoad();
		
		</script>
	
	</body>
</html>
