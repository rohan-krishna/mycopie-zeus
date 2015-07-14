<?php
$args = array('post_type' => 'post','category_name' => 'hero_icons');

$icons = new WP_Query( $args );
if ( $icons->have_posts() ) : while ( $icons->have_posts() ) : $icons->the_post();
	the_content();
endwhile;
else:
?>
<div class="alert alert-success" role="alert">
	<p>Icons Placeholder.Oops!Nothing in Here Still</p>
</div>
<?php
endif;
wp_reset_postdata();
?>

