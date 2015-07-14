<?php
//Register Custom Menu
 
function register_bp_default_menus() {
  register_nav_menus(
    array( 'header-menu' =>  'Header Menu',
    		'footer' => 'Footer Navigation',
    		'top-bar' => 'Fixed Top Nav Bar' ));
}

 
add_action( 'init', 'register_bp_default_menus' );


//Required Scripts
function mytheme_js()   
{  
 if (is_admin()) return;  
  
 wp_deregister_script('jquery');  
 wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js');  
 wp_enqueue_script('jquery');  
   
 
 wp_register_script('homebrew', get_stylesheet_directory_uri() . '/js/homebrew.js');
 wp_enqueue_script('homebrew');

 wp_register_script('bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js');
 wp_enqueue_script('bootstrap-js');
 
 

 //Various Stylesheets

 wp_register_style( 'screen-css' , get_stylesheet_directory_uri() . '/style.css');
 wp_enqueue_style( 'screen-css');
 
 wp_register_style( 'animate-css' , get_stylesheet_directory_uri() . '/animate.css');
 wp_enqueue_style( 'animate-css');

 
 wp_register_style( 'bootstrap-css' , '//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css');
 wp_enqueue_style ( 'bootstrap-css');
 
 wp_register_style( 'woocommerce-css' , get_stylesheet_directory_uri() . '/woocommerce.css');
 wp_enqueue_style( 'woocommerce-css');

 wp_register_style( 'owl-css' , get_stylesheet_directory_uri() . '/owl.carousel.css');
 wp_enqueue_style( 'owl-css');

 wp_register_style( 'owl-theme' , get_stylesheet_directory_uri() . '/owl.theme.css');
 wp_enqueue_style( 'owl-theme');
 
}  
add_action('init', mytheme_js);  

//WP_NAV Menu Registration


function my_member_username() {
    global $members_template;

    return $members_template->member->user_login;
}

add_filter('bp_member_name','my_member_username');

//Register Sidebar for MyVoice Page
$args = array(
	'name' => 'myvoice',
	'id'            => 'myvoice-sidebar',
	'description'   => 'Sidebar For MyVoice Page',
    'class'         => 'myvoice-sidebar'
	);
register_sidebar( $args );


@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

//Hiding Admin Tool Bar
if ( is_user_logged_in() ) {
	add_filter('show_admin_bar', '__return_false');
}

//The Breadcrumb with Bootstrap Code
function the_breadcrumb() {

	global $post;
	echo '<ol class="breadcrumb">';
	if (!is_home()) {
		echo '<li><a href="';
		echo get_option('home');
		echo '">';
		echo '<span class="glyphicon glyphicon-home"></span>';
		echo '</a></li>';
		if (is_category() || is_single()) {

			echo '<li>';
			the_category(' </li><li>' );
			if ( is_single()) {
				echo '</li><li>';
				the_title();
				echo '</li>';
			}
		} elseif (is_page()) {
			if($post->post_parent) {
				$anc = get_post_ancestors( $post->ID );
				$title = get_the_title();
				foreach ( $anc as $ancestor ) {
					$output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li>';
				}
				echo $output;
				echo '<li><strong> '.get_the_title().'</strong></li>';
			}
		}
	}
	elseif (is_tag()) {single_tag_title();}
    elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
    elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
    elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
    elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
    elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
    echo '</ol>';

}

//CSS Flipper Shortcode 
function ImgFlipper($atts,$content = null) {
	extract(shortcode_atts(array(
		"front" => '<img src="http://placehold.it/165x234">',
		"back"  => '<img src="http://placehold.it/165x234">' ),$atts));
	return 
	'<div class="flip-container" id="myCard">
			<div class="flipper">
			<div class="front">' . $front .'</div>
			<div class="back">' . $back . '</div></div></div>';
}
add_shortcode("flipper","ImgFlipper");

//Theme Supports
 add_theme_support( 'post-thumbnails' );

//Custom Meta Box for Books-Avail
/*
add_action('admin_init','mcp_meta_box_init');
*/
//Metabox information for adding the metabox and saving the data
/*
function mcp_meta_box_init() {
	//create custom meta box
	add_meta_box('mcp-meta','Product Buy Now Link', 'mcp_meta_box' , 'post' ,'side','default' );
	//Hook to save our Metabox Data when it's stored
	add_action('save_post','mcp_save_meta_box');
}
function mcp_meta_box($post,$box) {
	//Retrieve custom value
	$product_link = get_post_meta($post->ID,'_mcp_link',true);

	//Custom Metabox form elements
	echo '<p>Buy Now Link</p>';
	echo '<p><input type="text" name="mcp_link" value="' . esc_attr($product_link) . '"></p>';
}
function mcp_save_meta_box($post_id,$post) {
	//If revision skip saving meta box
	if($post->post_type == 'revision' ) { return; }
	//Process form data if $_POST is set

		update_post_meta($post_id,'_mcp_link',esc_attr($_POST['mcp_link']));
}
*/

/**
 * Determine whether blog/site has more than one category.
 *
 * @since Twenty Fifteen 1.0
 *
 * @return bool True of there is more than one category, false otherwise.
 */
function twentyfifteen_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'twentyfifteen_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'twentyfifteen_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so twentyfifteen_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so twentyfifteen_categorized_blog should return false.
		return false;
	}
}

if ( ! function_exists( 'twentyfifteen_post_thumbnail' ) ) :
/**
 * Display an optional post thumbnail.
 *
 * Wraps the post thumbnail in an anchor element on index views, or a div
 * element when on single views.
 *
 * @since Twenty Fifteen 1.0
 */
function twentyfifteen_post_thumbnail() {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}

	if ( is_singular() ) :
	?>

	<div class="post-thumbnail">
		<?php the_post_thumbnail(); ?>
	</div><!-- .post-thumbnail -->

	<?php else : ?>

	<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
		<?php
			the_post_thumbnail( 'post-thumbnail', array( 'alt' => get_the_title() ) );
		?>
	</a>

	<?php endif; // End is_singular()
}
endif;

if ( ! function_exists( 'twentyfifteen_entry_meta' ) ) :
/**
 * Prints HTML with meta information for the categories, tags.
 *
 * @since Twenty Fifteen 1.0
 */
function twentyfifteen_entry_meta() {
	if ( is_sticky() && is_home() && ! is_paged() ) {
		printf( '<span class="sticky-post">%s</span>', __( 'Featured', 'twentyfifteen' ) );
	}

	$format = get_post_format();
	if ( current_theme_supports( 'post-formats', $format ) ) {
		printf( '<span class="entry-format">%1$s<a href="%2$s">%3$s</a></span>',
			sprintf( '<span class="screen-reader-text">%s </span>', _x( 'Format', 'Used before post format.', 'twentyfifteen' ) ),
			esc_url( get_post_format_link( $format ) ),
			get_post_format_string( $format )
		);
	}

	if ( in_array( get_post_type(), array( 'post', 'attachment' ) ) ) {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			get_the_date(),
			esc_attr( get_the_modified_date( 'c' ) ),
			get_the_modified_date()
		);

		printf( '<span class="posted-on"><span class="screen-reader-text">%1$s </span><a href="%2$s" rel="bookmark">%3$s</a></span>',
			_x( 'Posted on', 'Used before publish date.', 'twentyfifteen' ),
			esc_url( get_permalink() ),
			$time_string
		);
	}

	if ( 'post' == get_post_type() ) {
		if ( is_singular() || is_multi_author() ) {
			printf( '<span class="byline"><span class="author vcard"><span class="screen-reader-text">%1$s </span><a class="url fn n" href="%2$s">%3$s</a></span></span>',
				_x( 'Author', 'Used before post author name.', 'twentyfifteen' ),
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				get_the_author()
			);
		}

		$categories_list = get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfifteen' ) );
		if ( $categories_list && twentyfifteen_categorized_blog() ) {
			printf( '<span class="cat-links"><span class="screen-reader-text">%1$s </span>%2$s</span>',
				_x( 'Categories', 'Used before category names.', 'twentyfifteen' ),
				$categories_list
			);
		}

		$tags_list = get_the_tag_list( '', _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfifteen' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links"><span class="screen-reader-text">%1$s </span>%2$s</span>',
				_x( 'Tags', 'Used before tag names.', 'twentyfifteen' ),
				$tags_list
			);
		}
	}

	if ( is_attachment() && wp_attachment_is_image() ) {
		// Retrieve attachment metadata.
		$metadata = wp_get_attachment_metadata();

		printf( '<span class="full-size-link"><span class="screen-reader-text">%1$s </span><a href="%2$s">%3$s &times; %4$s</a></span>',
			_x( 'Full size', 'Used before full size attachment link.', 'twentyfifteen' ),
			esc_url( wp_get_attachment_url() ),
			$metadata['width'],
			$metadata['height']
		);
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( __( 'Leave a comment', 'twentyfifteen' ), __( '1 Comment', 'twentyfifteen' ), __( '% Comments', 'twentyfifteen' ) );
		echo '</span>';
	}
}
endif;

?>
