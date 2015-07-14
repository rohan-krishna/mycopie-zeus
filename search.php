<?php get_header(); ?>
<div class="page-wrapper">
	<div class="container">
	<?php //Initiating The Loop
		if ( have_posts() ) : the_post(); ?>
		<h1><?php printf( __( 'Search Results for: %s'), get_search_query() ); ?></h1>	
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	<?php else: ?>
		<h1><?php printf( __( 'Search Results for: %s'), get_search_query() ); ?></h1>
		<h2>Oops! Seems like we missed that one!Try Something else Doc :D</h2>

	<?php endif; //Loop Terminated ?>
	</div>
	<?php get_footer(); ?>
</div>
