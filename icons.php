<?php
$args = array('post_type' => 'post','category_name' => 'hero_icons');

$icons = new WP_Query( $args );
if ( $icons->have_posts() ) : $icons->the_post();

the_content(); 

endif;
wp_reset_postdata();
?>
