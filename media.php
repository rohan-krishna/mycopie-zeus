<?php 
	$args = array('post_type' => 'post','category_name' => 'hero_press' );

	$press = new Wp_Query($args);
?>
<div id="mediaSlider">
	<?php //Loop Commences
	if ( $press->have_posts() ) : while ( $press->have_posts() ) : $press->the_post(); 
	?>
	<div class="item">
		<?php the_content(); ?>
	</div>
	<?php endwhile; ?>
</div>
<?php else: ?>
<div class="alert alert-danger" role="alert">
	<p>Media Slider Placeholder</p>
</div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
<script type="text/javascript">
$('#mediaSlider').owlCarousel();
</script>