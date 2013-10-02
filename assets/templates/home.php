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
		</div>

		<div class="border-bottom-right-radius">
			<code>@include border-radius-bottom-right(30px)</code>
		</div>

		<div class="transition">
			<code>@include transitions(0.3s)</code>
		</div>
	
		<div class="transition transition-delay">
			<code>@include transitions-delay(1s)</code>
		</div>

		<div class="box-shadow">
			<code>@include box-shadow(10px)</code>
		</div>

		<div class="opacity">
			<code>@include opacity(0.6)</code>
		</div>

		<div class="extend">
			<code>
				@extend %placeholder <br>{ border-bottom: 4px blue solid; }
			</code>
		</div>

		<div class="extend2">
			<code>
				@extend %placeholder <br>{ border-bottom: 4px blue solid; }
			</code>
		</div>

		<div class="extend3">
			<code>
				@extend %placeholder <br>{ border-bottom: 4px blue solid; }
			</code>
		</div>
		
		<div class="image">
			<code>
				@include background(image-url(loop.svg)
			</code>
		</div>
		
	</div>
	
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('.examples div').hover(function(){
			$('.examples div').toggleClass('not');
			$(this).removeClass('not').toggleClass('hover');
		});
	});
</script>

<?php include 'inc.footer.php' ?>