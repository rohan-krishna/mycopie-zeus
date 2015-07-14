<?php get_header(); ?>
<div class="page-wrapper">
	<div class="row">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="col-md-4 col-sm-4 col-lg-2">
			<div class="thumbnail">
				<div class="caption">
					<p><?php  the_content(); ?></p>
					<h3><?php the_title(); ?></h3>
					<p><?php  the_excerpt(); ?></p>
				</div>
			</div>
		</div>
	<?php endwhile; ?> 
	</div>
<?php endif; ?>
</div>
<?php get_footer(); ?>