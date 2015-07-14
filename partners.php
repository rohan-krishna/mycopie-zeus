<?php
/*
Partners Slider
*/
?>
<?php 
	$args = array('post_type' => 'post',
				  'category_name' => 'brands' );
	$brands = new WP_Query($args);
?>
<div class="partners-wrapper padding15">
	<h1>Our Partners</h1>
<div class="container" id="PartnersOwl" style="height: 200px">
	<?php if ( $brands->have_posts() ) :  while ( $brands->have_posts() ) : $brands->the_post() ?> 
	<div class="item part-item">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail('full',array('class'=>'align-fix') ); ?>
		<?php endif; ?>
	</div>
<?php endwhile; ?>
<?php endif; ?>
</div>
</div>
<script>
$(document).ready(function() {
	$('#PartnersOwl').owlCarousel({
		pagination : false,
		autoPlay : 3000
	});
});
</script>
<style>
.owl-carousel .owl-wrapper-outer {
	height: 200px;
}
</style>