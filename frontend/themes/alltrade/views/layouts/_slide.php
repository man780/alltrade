<div class="topslider">
	<div class="flex-container">
		<div class="flexslider">
			<ul class="slides">
				<li>
					<a href="#"><img src="<?=$layoutPath?>/slide/img/slide1.jpg" /></a>
				</li>
				
				<li>
					<img src="<?=$layoutPath?>/slide/img/slide2.jpg"/>
				</li>
				
				<li>
					<img src="<?=$layoutPath?>/slide/img/slide3.jpg"/>
				</li>

				<li>
					<img src="<?=$layoutPath?>/slide/img/slide1.jpg"/>
				</li>
			</ul>
		</div>
	</div>
	<script>
		$(document).ready(function () {

			$('.flexslider').flexslider({
				animation: 'fade',
				controlsContainer: '.flexslider',
				slideshowSpeed: 2500,
			});
			
		});
	</script>
</div>