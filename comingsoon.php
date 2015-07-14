<?php
/*
Template Name:Coming Soon
*/
?>
<?php get_header(); ?>
<div class="page-wrapper">
	<div class="slider" id="top">
		<?php include 'slider.php'; ?>
	</div>
	<div class="padding162">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>
<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>