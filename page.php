<?php
/*
Template Name: MyCopie-BP Page
*/
?>
<?php get_header(); ?>
<?php include 'head-new.php'; ?>
<div class="page-wrapper">
	<div>
	<?php //Initiating The Loop
		if ( have_posts() ) : the_post(); ?>	
	<?php the_content(); ?>
	<?php endif; //Loop Terminated ?>
	</div>
</div>
<?php get_footer(); ?>