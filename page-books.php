<?php
/*
Template Name: Books Template
*/
?>
<?php get_header(); ?>
<div class="page-wrapper">
	<div class="mast-spl">
		<h1 class="text-center"><?php the_title(); ?></h1>
	</div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; ?>
<?php endif; ?>
</div>