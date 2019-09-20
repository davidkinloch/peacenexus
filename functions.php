<?php

add_filter( 'auto_update_plugin', '__return_true' );

add_action( 'wp_enqueue_scripts', function(){
        wp_deregister_script('jquery');  
        if (is_admin()) return; // don't dequeue on the backend
        // Load a copy of jQuery from the Google API CDN  
        // The last parameter set to TRUE states that it should be loaded  
        // in the footer.  
        wp_register_script('jquery', '//code.jquery.com/jquery-2.1.1.min.js', FALSE, '2.1.1', TRUE);  
        
        wp_enqueue_script('jquery');
        wp_enqueue_script('materialize', '//cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js', FALSE, '1.11.0', TRUE);  
        wp_enqueue_script( 'production.min', get_template_directory_uri() . '/js/build/production.min.js', array(), '1.0.0', true );
});

/**
 * Enable responsive embeds
 * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#responsive-embedded-content
 */
add_theme_support( 'responsive-embeds' );

/**
 * Enable responsive embeds
 * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#responsive-embedded-content
 */
add_theme_support( 'align-wide' );

// function wrap_embed_with_div($html, $url, $attr) {

//      return '<div class="video-container">' . $html . '</div>';

// }

//  add_filter('embed_oembed_html', 'wrap_embed_with_div', 10, 3);

// menu
function wp_nav_menu_no_ul()
{
    $options = array(
        'echo' => false,
        'container' => false,
        'theme_location' => 'primary',
        'fallback_cb'=> 'fall_back_menu'
    );

    $menu = wp_nav_menu($options);
    echo preg_replace(array(
        '#^<ul[^>]*>#',
        '#</ul>$#'
    ), '', $menu);

}

function fall_back_menu(){
    return;
}



//add SVG to allowed file uploads
function add_file_types_to_uploads($file_types){

    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );

    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

// change name posts to Highlights
function revcon_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Highlights';
    $submenu['edit.php'][5][0] = 'Highlights';
    $submenu['edit.php'][10][0] = 'New Highlight';
    $submenu['edit.php'][15][0] = 'Regions';
    $submenu['edit.php'][16][0] = 'Services';
    echo '';
}
function revcon_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Highlights';
    $labels->singular_name = 'Highlights';
    $labels->add_new = 'New Highlight';
    $labels->add_new_item = 'New Highlight';
    $labels->edit_item = 'Edit Highlights';
    $labels->new_item = 'Highlights';
    $labels->view_item = 'View Highlights';
    $labels->search_items = 'Search Highlights';
    $labels->not_found = 'No Highlights found';
    $labels->not_found_in_trash = 'No Highlights found in Trash';
    $labels->all_items = 'All Highlights';
    $labels->menu_name = 'Highlights';
    $labels->name_admin_bar = 'Highlights';
}

add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );


/**
 * Register Regions post type
*/
function region_post_type() {
   
   // Labels
    $labels = array(
        'name' => _x("Regions", "post type general name"),
        'singular_name' => _x("Region", "post type singular name"),
        'menu_name' => 'Regions',
        'add_new' => _x("Add New", "Region item"),
        'add_new_item' => __("Add New "),
        'edit_item' => __("Edit Region"),
        'new_item' => __("New Region"),
        'view_item' => __("View Region"),
        'search_items' => __("Search Regions"),
        'not_found' =>  __("No Regionss Found"),
        'not_found_in_trash' => __("No Regionss Found in Trash"),
        'parent_item_colon' => ''
    );
    
    // Register post type
    register_post_type('regions' , array(
         'labels'              => $labels,
        'supports'            => array( 'title', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-admin-site',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'rewrite'               => true,
        'taxonomies'          => array( 'category', 'post_tag' )

    ) );
}
add_action( 'init', 'region_post_type', 0 );

/**
 * Register Services post type
*/
function service_post_type() {
   
   // Labels
    $labels = array(
        'name' => _x("Services", "post type general name"),
        'singular_name' => _x("Service", "post type singular name"),
        'menu_name' => 'Services',
        'add_new' => _x("Add New", "Service item"),
        'add_new_item' => __("Add New "),
        'edit_item' => __("Edit Service"),
        'new_item' => __("New Service"),
        'view_item' => __("View Service"),
        'search_items' => __("Search Services"),
        'not_found' =>  __("No Services Found"),
        'not_found_in_trash' => __("No Services Found in Trash"),
        'parent_item_colon' => ''
    );
    
    // Register post type
    register_post_type('services' , array(
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'show_in_rest' => true,
        'menu_position'       => 6,
        'menu_icon'           => 'dashicons-format-gallery',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'rewrite'               => true,
        'taxonomies'          => array( 'category', 'post_tag' )

    ) );
}
add_action( 'init', 'service_post_type', 0 );


// REMOVE EMOJI SCRIPT FROM HEAD TAG IN WORDPRESS
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');



//disable admin bar
//add_filter('show_admin_bar', '__return_false');

// Menus
register_nav_menus( array(
    'primary' => __( 'Primary Menu',      'peacenexus' ),
    'footer-links-left' => __( 'Footer Links Left',      'peacenexus' ),
    'footer-links-right' => __( 'Footer Links Right',      'peacenexus' )
) );



//add work cpt to cateorgy archives 
if ( ! function_exists( 'post_is_in_descendant_category' ) ) {
    function post_is_in_descendant_category( $cats, $_post = null ) {
        foreach ( (array) $cats as $cat ) {
            // get_term_children() accepts integer ID only
            $descendants = get_term_children( (int) $cat, 'category' );
            if ( $descendants && in_category( $descendants, $_post ) )
                return true;
        }
        return false;
    }
}


function namespace_add_custom_types( $query ) {
  if( is_archive() && (is_category('124') || is_category('125') || is_category('126') || is_category('127') || is_category('128') || is_category('129') || is_category('130') || is_category('131') || is_category('132') || is_category('133') || is_category('134') || is_category('137') || is_tag()) && empty( $query->query_vars['suppress_filters'] ) ) {
        $query->set( 'post_type', array(
                'work',
            ));
          return $query;
        }
}
add_filter( 'pre_get_posts', 'namespace_add_custom_types' );



// Add thumbnai to posts
add_theme_support( 'post-thumbnails' );

// srip inl dimensions on images
//add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
//add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );

//image sizes
add_image_size( 'thumbs', 320, 161 );
add_image_size( 'hero', 1600, 820 );

// check for a certain meta key on the current post and add a body class if meta value exists
add_filter('body_class','krogs_custom_field_body_class');
function krogs_custom_field_body_class( $classes ) {
    if ( get_post_meta( get_the_ID(), 'dark_header', true ) ) {
        $classes[] = 'dark';   
    }
    // return the $classes array
    return $classes;
}

// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
       global $post;
    return ' <span class="section-Highlights__more"> &#8230; Read more</span>';
}
add_filter('excerpt_more', 'new_excerpt_more');

// add post featured image to RSS feed
function featuredtoRSS($content) {
global $post;
if ( has_post_thumbnail( $post->ID ) ){
$content = '<div>' . get_the_post_thumbnail( $post->ID, 'medium', array( 'style' => 'margin-bottom: 15px;' ) ) . '</div>' . $content;
}
return $content;
}
 
add_filter('the_excerpt_rss', 'featuredtoRSS');
add_filter('the_content_feed', 'featuredtoRSS');

//DISABLE STUFF

// Disable support for comments and trackbacks in post types
function df_disable_comments_post_types_support() {
    $post_types = get_post_types();
    foreach ($post_types as $post_type) {
        if(post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
}
add_action('admin_init', 'df_disable_comments_post_types_support');
// Close comments on the front-end
function df_disable_comments_status() {
    return false;
}
add_filter('comments_open', 'df_disable_comments_status', 20, 2);
add_filter('pings_open', 'df_disable_comments_status', 20, 2);
// Hide existing comments
function df_disable_comments_hide_existing_comments($comments) {
    $comments = array();
    return $comments;
}
add_filter('comments_array', 'df_disable_comments_hide_existing_comments', 10, 2);
// Remove comments page in menu
function df_disable_comments_admin_menu() {
    remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'df_disable_comments_admin_menu');
// Redirect any user trying to access comments page
function df_disable_comments_admin_menu_redirect() {
    global $pagenow;
    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url()); exit;
    }
}
add_action('admin_init', 'df_disable_comments_admin_menu_redirect');
// Remove comments metabox from dashboard
function df_disable_comments_dashboard() {
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
}
add_action('admin_init', 'df_disable_comments_dashboard');
// Remove comments links from admin bar
function df_disable_comments_admin_bar() {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
}
add_action('init', 'df_disable_comments_admin_bar');


//hide custom fields
//add_filter('acf/settings/show_admin', '__return_false');


function sortByTitle($first, $second) {
	return strcasecmp($first['title'], $second['title']);
}

function sortByDate($first, $second) {
	return strcasecmp($second['date'], $first['date']);
}

function get_category_posts() {
	$args = [
		'numberposts' => -1, 
        'category' => $_POST['regions'],
        'tag__in' => $_POST['services']
	];
	$posts = get_posts($args);
    $res = [];            
	foreach($posts as $post) {
		$postId = $post->ID;
		$arr = [];
		//$arr['data'] = (array) $post;
		$arr['permalink'] = get_the_permalink($postId);
		$arr['thumbnail'] = get_the_post_thumbnail_url($postId);
		$arr['title'] = get_the_title($postId);
		$arr['leading_paragraph'] = get_field('leading_paragraph', $postId);
		$arr['date'] = $post->post_modified_gmt;
        $postCategories = get_the_category($postId);
        $postTags = get_the_terms($postId, 'post_tag');
		foreach($postCategories as $postCategory) {
			if ($postCategory->parent == 3) {
				$arr['region_slug'] = $postCategory->slug;
				$arr['region_name'] = $postCategory->cat_name;
			}
        }
        foreach($postTags as $postTag) {
            $arr['service_slug'] = $postTag->slug;
            $arr['service_name'] = $postTag->name;
		}	
		$res[] = $arr;
	}
	
	if ($_POST['sort'] == 'az') {
		usort($res, 'sortByTitle');	
	} else {
		usort($res, 'sortByDate');	
	}	

	return $res;
}

add_action('rest_api_init', function () {
	register_rest_route( 'api', '/posts', array(
    'methods' => 'POST',
    'callback' => 'get_category_posts',
  ) );
} );

//Prevent auto-redirect
remove_action('template_redirect', 'redirect_canonical');

// Add additional Phone format for Gravity Forms
add_filter( 'gform_phone_formats', 'df_phone_format' );

function df_phone_format( $phone_formats ) {
    $phone_formats['any'] = array(
        'label'       => 'All Phones',
        'mask'        => false,
        'regex'       => '/^([+(\d]{1})(([\d+() -.]){5,16})([+(\d]{1})$/',
        'instruction' => false,
    );
 
    return $phone_formats;
}
