<?php include 'inc.header.php' ?>

<div class="container cf">
	
	<h1>
		Compass
		<span>http://compass-style.org/reference/compass/css3/</span>
	</h1>
	
	<div class="examples">
		<div class="primary">
			<code>$primary</code>
		</div>
		
		<div class="secondary">
			<code>$secondary</code>
		</div>
		
		<div class="tertiaire">
			<code>$tertiaire</code>
		</div>
		
		<div class="border-radius">
			<code>@include border-radius(50px)</code>
			<code class="ouput">
			    -webkit-border-radius: 50px;<br>
			    -moz-border-radius: 50px;<br>
			    border-radius: 50px;
			</code>
		</div>

		<div class="border-bottom-right-radius">
			<code>@include border-radius-bottom-right(30px)</code>
			<code class="ouput">
			    -webkit-border-radius-bottomright: 30px;<br>
			    -moz-border-radius-bottomright: 30px;<br>
			    border-radius-bottomright: 30px;
			</code>
		</div>

		<div class="transition">
			<code>@include transitions(0.3s)</code>
			<code class="ouput">
			    -webkit-transition: 0.3s;<br>
			    -moz-transition: 0.3s;<br>
			    transition: 0.3s;
			</code>
		</div>
	
		<div class="transition transition-delay">
			<code>@include transitions-delay(1s)</code>
			<code class="ouput">
			    -webkit-transition-delay: 1s;<br>
			    -moz-transition-delay: 1s;<br>
			    transition-delay: 1s;
			</code>
		</div>

		<div class="box-shadow">
			<code>@include box-shadow(10px)</code>
			<code class="ouput">
			    -webkit-box-shadow: 10px;<br>
			    -moz-box-shadow: 10px;<br>
			    box-shadow: 10px;
			</code>
		</div>

		<div class="opacity">
			<code>@include opacity(0.6)</code>
			<code class="ouput">
			    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=60);<br>
			    opacity: 0.6;
			</code>
		</div>

		<div class="extend">
			<code>
				@extend %placeholder <br>{ border-bottom: 4px blue solid; }
			</code>
			<code class="ouput">
			    .examples .extend, <br>.examples .extend2, <br>.examples .extend3
			</code>
		</div>

		<div class="extend2">
			<code>
				@extend %placeholder <br>{ border-bottom: 4px blue solid; }
			</code>
			<code class="ouput">
			    .examples .extend, <br>.examples .extend2, <br>.examples .extend3
			</code>
		</div>

		<div class="extend3">
			<code>
				@extend %placeholder <br>{ border-bottom: 4px blue solid; }
			</code>
			<code class="ouput">
			    .examples .extend, <br>.examples .extend2, <br>.examples .extend3
			</code>
		</div>
		
		<div class="image">
			<code>
				@include background(image-url(loop.svg)
			</code>
			<code class="ouput">
			    background: <br>url('../images/loop.svg?1380732841') <br>top left no-repeat #1abc9c;
			</code>
		</div>
		
	</div>
	
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('.examples div').hover(function(){
			$('.examples div').toggleClass('not');
			$('code').removeClass('hidden');
			$(this).removeClass('not').toggleClass('hover');
		});
		
		$(document).on('click','.examples div', function(e){	
		
			$(this).find('code').toggleClass('hidden');
		});
	});
</script>

<?php include 'inc.footer.php' ?>