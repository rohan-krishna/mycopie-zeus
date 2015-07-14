<?php get_header(); ?>
<?php include 'head.php'; ?>

	<div class="page-wrapper">
		<div class="container white-bg">
			<div class="col-md-offset-2 col-md-8">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
echo get_post_format();
			get_template_part( 'content', get_post_format() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		// End the loop.
		endwhile;
		?>

			</div>
		</div>
	</div>

<?php get_footer(); ?>