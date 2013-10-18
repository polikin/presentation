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
				
		<link rel="stylesheet" href="assets/styles/reveal.min.css">
		<link rel="stylesheet" href="assets/styles/theme/night.css" id="theme">

		<!-- For syntax highlighting -->
		<link rel="stylesheet" href="assets/styles/lib/css/monokai.css">

		<!-- If the query includes 'print-pdf', use the PDF print sheet -->
		<script>
			document.write( '<link rel="stylesheet" href="assets/styles/print/' + ( window.location.search.match( /print-pdf/gi ) ? 'pdf' : 'paper' ) + '.css" type="text/css" media="print">' );
		</script>

		<!--[if lt IE 9]>
		<script src="lib/js/html5shiv.js"></script>
		<![endif]-->
		
		
		
		
		
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
						
						<?php
						/* pas d'indentation pour le <code>, sinon le code s'affiche mal dans chrome et pdf généré */
						?>
<code data-trim>							
	@import "../images/sprites-folder/*.png";
	@include all-sprites-folder-sprites(true);

	.sprites-folder-sprite, 
	.sprites-folder-book, 
	.sprites-folder-calendar, 
	.sprites-folder-chat, ... {
		    background: url('../images/sprites-folder-sf54b147fa4.png') no-repeat;
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
					<h2>images générés</h2>
					
					<img src="assets/images/compass-sprite-output.png" alt="">
				</section>

			</div>

		</div>
		
		<script src="assets/scripts/head.min.js"></script>
		<script src="assets/scripts/reveal.min.js"></script>

		<script>

			// Full list of configuration options available here:
			// https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize({
				controls: true,
				progress: true,
				history: true,
				center: true,
				width: 1400,

				theme: Reveal.getQueryHash().theme, // available themes are in /css/theme
				transition: Reveal.getQueryHash().transition || 'linear', // default/cube/page/concave/zoom/linear/fade/none

				// Optional libraries used to extend on reveal.js
				dependencies: [
					{ src: 'assets/plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } }
				]
			});

		</script>
		
	
	</body>
</html>
