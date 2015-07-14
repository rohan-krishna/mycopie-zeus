<?php
/*
Product Slider
*/
?>
<div class="product-wrapper">
<?php
	$args = array(
		'post_type' => 'post',
		'category_name' => 'books',
		'orderby' => 'title',
		'order' => 'DESC'
		);
	$books = new WP_Query($args);
?>
<div class="product-slider">
<div id="owl-demo">
<?php 
	//Loop Commenced
	if ( $books->have_posts() ) : while ( $books->have_posts() ) : $books->the_post(); 
?>
	<div class="item">
		<?php the_content(); ?>
	</div>
<?php endwhile; ?>
</div>
<!--
<a class="owl-nav owl-prev fa fa-angle-left"></a>
<a class="owl-nav owl-next fa fa-angle-right"></a>
!-->
<?php endif; ?>
</div>
<div class="page-main-shelf"></div>
</div>
<script>
$(document).ready(function() {
 	$('#owl-demo').owlCarousel({
 		itemsDesktop : 5,
 		itemsDesktopSmall : 4,
 		itemsTablet : 3,
 		itemsMobile: 1,
 		pagination: false
 	});
});

</script>
