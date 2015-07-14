<?php
/*
Available Books Slider
*/
?>
<?php 
	$args = array('post_type' => 'post',
				  'category_name' => 'books-unruled' );
	$brands = new WP_Query($args);
?>
<div class="partners-wrapper padding15">
<div class="container" id="UnruledBooks">
	<?php if ( $brands->have_posts() ) :  while ( $brands->have_posts() ) : $brands->the_post() ?> 
	<div class="item txt-center">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail('full',array('class'=>'img-responsive img-thumbnail') ); ?>
		<?php endif; ?>
		<?php 
			$product_link = get_post_meta($post->ID,'_mcp_link',true);
		?>
		<br/>
		<br/>
		<p><a href="<?php echo $product_link; ?>" class="btn btn-success txt-center" target="_blank"><i class="fa fa-shopping-cart"></i> Buy Now</a></p>
	</div>
<?php endwhile; ?>
<?php endif; ?>
</div>
</div>
<?php wp_reset_postdata(); ?>