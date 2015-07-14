<div class="hero-about hidden-xs">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			<h1>Connect With MyCopie</h1>
			<?php $args = array('post_type' =>'post','category_name' => 'about-mycopie','posts_per_page' =>1); ?>
			<?php
					$default = new WP_Query($args);
			?>
			<?php if ( $default->have_posts()) : while ($default->have_posts() ) : $default->the_post(); ?>
				<figure class="pull-left">
				<?php if (has_post_thumbnail() ) {
					the_post_thumbnail();
				}
				?>
				</figure>
				<?php the_content(); ?>
			<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_query(); ?>
			</div>
			<div class="col-md-6">
				<h1>Press Love</h1>
				<?php
					$args = array('post_type' => 'post',
								  'category_name' => 'press-love');
					$media = new WP_Query($args);
				?>
				<div class="media-slider">
				<?php 
					    //Loop Commencing
						if ( $media->have_posts() ) : while ( $media->have_posts() ) : $media->the_post(); 
				?>
					<div class="item">
							<?php the_content(); ?>
					</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</div>
</div>
<script>
$(document).ready(function() {
	$('.media-slider').owlCarousel({
		items : 1
	});
});
</script>