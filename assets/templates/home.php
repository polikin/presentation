<?php include 'inc.header.php' ?>

<div class="container cf">
	
	<h1>
		Compass
		<span>http://compass-style.org/reference/compass/css3/</span>
	</h1>
	
	<div class="examples cf">
		<div class="primary">
			<code>$primary</code>
			<code class="output">#1abc9c</code>
		</div>
		
		<div class="secondary">
			<code>$secondary</code>
			<code class="output">#8E44AD</code>
		</div>
		
		<div class="tertiaire">
			<code>$tertiary</code>
			<code class="output">#3498db</code>
		</div>
		
		<div class="primary-lighten">
			<code>background: lighten($primary, 40)</code>
			<code class="output">#AEF4E6</code>
		</div>
		
		<div class="secondary-darken">
			<code>background: darken($secondary, 40)</code>
			<code class="output">#160A1B</code>
		</div>
		
		<div class="tertiary-complement">
			<code>background: complement($tertiary)</code>
			<code class="output">#DB7734</code>
		</div>
		
		<div class="border-radius">
			<code>@include border-radius(50px)</code>
			<code class="output">
			    -webkit-border-radius: 50px;<br>
			    -moz-border-radius: 50px;<br>
			    border-radius: 50px;
			</code>
		</div>

		<div class="border-bottom-right-radius">
			<code>@include border-radius-bottom-right(30px)</code>
			<code class="output">
			    -webkit-border-radius-bottomright: 30px;<br>
			    -moz-border-radius-bottomright: 30px;<br>
			    border-radius-bottomright: 30px;
			</code>
		</div>

		<div class="transition">
			<code>@include transitions(0.3s)</code>
			<code class="output">
			    -webkit-transition: 0.3s;<br>
			    -moz-transition: 0.3s;<br>
			    transition: 0.3s;
			</code>
		</div>
	
		<div class="transition transition-delay">
			<code>@include transitions-delay(1s)</code>
			<code class="output">
			    -webkit-transition-delay: 1s;<br>
			    -moz-transition-delay: 1s;<br>
			    transition-delay: 1s;
			</code>
		</div>

		<div class="box-shadow">
			<code>@include box-shadow(10px)</code>
			<code class="output">
			    -webkit-box-shadow: 10px;<br>
			    -moz-box-shadow: 10px;<br>
			    box-shadow: 10px;
			</code>
		</div>

		<div class="opacity">
			<code>@include opacity(0.6)</code>
			<code class="output">
			    <span style="font-size:13px;">filter: progid:DXImageTransform.Microsoft.<br>Alpha(Opacity=60);</span><br>
			    opacity: 0.6;
			</code>
		</div>

		<div class="extend">
			<code>
				@extend %placeholder <br>{ border-bottom: 4px blue solid; }
			</code>
			<code class="output">
			    .examples .extend, <br>.examples .extend2, <br>.examples .extend3
			</code>
		</div>

		<div class="extend2">
			<code>
				@extend %placeholder <br>{ border-bottom: 4px blue solid; }
			</code>
			<code class="output">
			    .examples .extend, <br>.examples .extend2, <br>.examples .extend3
			</code>
		</div>

		<div class="extend3">
			<code>
				@extend %placeholder <br>{ border-bottom: 4px blue solid; }
			</code>
			<code class="output">
			    .examples .extend, <br>.examples .extend2, <br>.examples .extend3
			</code>
		</div>
		
		<div class="image">
			<code>
				@include background(image-url(loop.svg)
			</code>
			<code class="output">
			    background: <br>url('../images/loop.svg<span style="color:red;">?1380732841</span>') <br>top left no-repeat #1abc9c;
			</code>
		</div>
		
		<div class="image-resize">
			<code>
				height:	image-height("bckg1.jpg");<br>
				width:	image-width("bckg1.jpg");
			</code>
			<code class="output">
				<span class="width"></span>
				<span class="height"></span>
			</code>
			<span class="bckg"></span>
		</div>
		
	</div>
	
	<div class="examples-intermediaire">
		<h2>@if</h2>
		
		<pre class="brush: sass">
			$if: false;
			
			.if {
				@if $if == true {
					&:before { 
						color:	$secondary;
						content: "$if == true, ce contenu s'affiche"; 
					}
				}@else {
					&:before { 
						color:	$tertiary;
						content: "$if == false, ce contenu s'affiche"; 
					}
				}
			}
		</pre>
		
		<br>
		
		<div class="if"></div>	
		
		<h2>@for</h2>	
		
		<h3>scss</h3>
		
		<pre class="brush: sass">
			.for {
				$width: 100%;
				
				@for $i from 0 through 6 {
					.for-#{$i} {
						width  : $width/6;
						height : $i * 20#{px};

						float:	left;

						border     : 1px $white solid;
						background : $secondary;

						@include borderbox(); 

						&:before {
							content: "#{$i * 20}px";
						}
					}
				}
			}
			
		</pre>
		
		<h3>html</h3>
		
		<pre class="brush: php">
			<div class="for">
				<div class="for-1"></div>
				<div class="for-2"></div>
				<div class="for-3"></div>
				<div class="for-4"></div>
				<div class="for-5"></div>
				<div class="for-6"></div>
			</div>
		</pre>
		
		<br>
		
		<div class="for cf">
			<div class="for-1"></div>
			<div class="for-2"></div>
			<div class="for-3"></div>
			<div class="for-4"></div>
			<div class="for-5"></div>
			<div class="for-6"></div>
		</div>
	</div>
	
	<h2>sprite</h2>
	
	<br><br>
	
	<div class="sprite cf">
		<div class="sprites-folder-book"></div>
		<div class="sprites-folder-calendar"></div>
		<div class="sprites-folder-chat"></div>
		<div class="sprites-folder-clipboard"></div>
		<div class="sprites-folder-compas"></div>
	</div>
	
	<br><br><br>

	<div class="credits cf">
		<h4>Auteurs: Nicolas Poliquin &amp; Mathieu Rivest</h4>
		<ul class="float-left">
			<li>Nicolas Poliquin</li>
			<li>email: <a href="mailto:nic@polikin.ca?subject=Questions sur compass/sass">nic@polikin.ca</a></li>
			<li>twitter: <a href="https://twitter.com/_polikin">@_polikin</a></li>
			<li>github: <a href="https://github.com/polikin">https://github.com/polikin</a></li>
			<li>blog: <a href="http://theresponsiveness.tumblr.com/">http://theresponsiveness.tumblr.com/</a></li>
		</ul>
		
		<ul class="float-left">
			<li>Mathieu Rivest</li>
			<li>email: <a href="mailto:rivest.mathieu@gmail.com?subject=Questions sur compass/sass">rivest.mathieu@gmail.com</a></li>
			<!-- <li>twitter: <a href="https://twitter.com/_polikin">@_polikin</a></li>
			<li>github: <a href="https://github.com/polikin">https://github.com/polikin</a></li>
			<li>blog: <a href="http://theresponsiveness.tumblr.com/">http://theresponsiveness.tumblr.com/</a></li> -->
		</ul>

		
		<br class="clear">
		<br><br>
		
		<h4>Crédits:</h4>
		
		<ul style="margin:0;">
			<li><a href="http://compass-style.org/help/">Compass</a></li>
			<li><a href="http://sass-lang.com/tutorial.html">Sass</a></li>
			<li><a href="http://thesassway.com/">The Sass Way</a></li>
			<li><a href="https://speakerdeck.com/imathis/sass-compass-the-future-of-stylesheets-now">https://speakerdeck.com/imathis/sass-compass-the-future-of-stylesheets-now - Brandon Mathis</a></li>
			<li><a href="http://blog.humancoders.com/les-id-es-re-ues-sur-les-pr-processeurs-css-sass-53/">http://blog.humancoders.com/les-id-es-re-ues-sur-les-pr-processeurs-css-sass-53/ - Camille Roux</a></li>
			<li><a href="http://designmodo.github.io/Flat-UI/">Flat UI Kit</a></li>
		</ul>
		
		<br><br><br>
		
	</div>
	
</div>


<script type="text/javascript">
	$(document).ready(function() {
		$('.examples div').hover(function(){
			$('.examples div').toggleClass('not');
			$('code').removeClass('hidden');
			$(this).removeClass('not').toggleClass('hover');
		});
		
		/*****************/
		
		var bckg_width = $('.image-resize .bckg').width();
		var bckg_height = $('.image-resize .bckg').height();
		
		$('.image-resize .width').html(bckg_width + 'px');
		$('.image-resize .height').html(bckg_height + 'px');
		
		/*****************/
		
		$(document).on('click','.examples div', function(e){			
			$(this).find('code').toggleClass('hidden');
		});
	});
</script>

<?php include 'inc.footer.php' ?>