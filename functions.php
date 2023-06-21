<?php

/**
 * Theme setup.
 */
function tailpress_setup() {
	add_theme_support( 'title-tag' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'tailpress' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

    add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/editor-style.css' );

	/*
	==========================================
	Custom Image size
	==========================================
	*/
	
	add_image_size( 'featured-main',580, 350, true );
	add_image_size( 'featured-img-s',285, 171, true );
	add_image_size( 'lp-img',360, 203, true );
	add_image_size( 'mvp-img',110, 75, true );
	add_image_size( 'image-120x150', 120, 150, true );
    add_image_size( 'mpp-w-img', 85, 85, true );


}

add_action( 'after_setup_theme', 'tailpress_setup' );

/**
 * Enqueue theme assets.
 */
function tailpress_enqueue_scripts() {
	$theme = wp_get_theme();

	wp_enqueue_style( 'GoogleFonts', '//fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&display=swap', array(), '' );

	wp_enqueue_style( 'tailpress', tailpress_asset( 'css/app.css' ), array(), $theme->get( 'Version' ) );
	wp_enqueue_script( 'tailpress', tailpress_asset( 'js/app.js' ), array(), $theme->get( 'Version' ) );
}

add_action( 'wp_enqueue_scripts', 'tailpress_enqueue_scripts' );

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function tailpress_asset( $path ) {
	if ( wp_get_environment_type() === 'production' ) {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg( 'time', time(),  get_stylesheet_directory_uri() . '/' . $path );
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_li_class( $classes, $item, $args, $depth ) {
	if ( isset( $args->li_class ) ) {
		$classes[] = $args->li_class;
	}

	if ( isset( $args->{"li_class_$depth"} ) ) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4 );

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class( $classes, $args, $depth ) {
	if ( isset( $args->submenu_class ) ) {
		$classes[] = $args->submenu_class;
	}

	if ( isset( $args->{"submenu_class_$depth"} ) ) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3 );

/*
	==========================================
	Widgets
	==========================================
*/


function ttop_widget_setup() {


	register_sidebar(
		array(	
			'name'	=> 'Sidebar',
			'id'	=> 'sidebar-1',
			'class'	=> 'custom',
			'description' => 'Posts widget',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
	
}

add_action('widgets_init','ttop_widget_setup');


/*
    ==========================================
    Include files
    ==========================================
*/

require get_template_directory() . '/inc/gb-blocks.php';

/*
    ==========================================
      Options Page for Header and Footer
    ==========================================
*/

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

	acf_add_options_sub_page( 'Header' );
    
	acf_add_options_sub_page( 'Footer' );
    
}

/*
	==========================================
	 Mobile Price CPT
	==========================================
*/

function create_custom_post_type() {
    $labels = array(
        'name' => __( 'Mobiles Price', 'textdomain' ),
        'singular_name' => __( 'Mobile Price', 'textdomain' ),
        'menu_name' => __( 'Mobiles', 'textdomain' ),
        'all_items' => __( 'All Mobiles', 'textdomain' ),
        'add_new' => __( 'Add New', 'textdomain' ),
        'add_new_item' => __( 'Add New Mobile', 'textdomain' ),
        'edit_item' => __( 'Edit Mobile', 'textdomain' ),
        'new_item' => __( 'New Mobile', 'textdomain' ),
        'view_item' => __( 'View Mobile', 'textdomain' ),
        'search_items' => __( 'Search Mobiles', 'textdomain' ),
        'not_found' => __( 'No mobiles found', 'textdomain' ),
        'not_found_in_trash' => __( 'No mobiles found in trash', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Mobile:', 'textdomain' ),
        'featured_image' => __( 'Featured image for this mobile', 'textdomain' ),
        'set_featured_image' => __( 'Set featured image for this mobile', 'textdomain' ),
        'remove_featured_image' => __( 'Remove featured image for this mobile', 'textdomain' ),
        'use_featured_image' => __( 'Use as featured image for this mobile', 'textdomain' ),
        'archives' => __( 'Mobile archives', 'textdomain' ),
        'insert_into_item' => __( 'Insert into mobile', 'textdomain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this mobile', 'textdomain' ),
        'filter_items_list' => __( 'Filter mobiles list', 'textdomain' ),
        'items_list_navigation' => __( 'Mobiles list navigation', 'textdomain' ),
        'items_list' => __( 'Mobiles list', 'textdomain' ),
    );
    $args = array(
        'label' => __( 'Mobiles Price', 'textdomain' ),
        'labels' => $labels,
        'description' => __( 'A custom post type for mobiles', 'textdomain' ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_rest' => true,
        'rest_base' => 'mobiles',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'has_archive' => true,
        'rewrite' => array(
            'slug' => 'mobiles',
            'with_front' => true,
            'pages' => true,
            'feeds' => true,
        ),
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'comments',
            'revisions',
            'custom-fields',
        ),
        'taxonomies' => array(
            'brand',
            'color',
        ),
    );
    register_post_type( 'mobile', $args );
}
add_action( 'init', 'create_custom_post_type' );



function create_mobile_brands_taxonomy() {
    $labels = array(
        'name' => __( 'Mobile Brands', 'textdomain' ),
        'singular_name' => __( 'Mobile Brand', 'textdomain' ),
        'search_items' => __( 'Search Mobile Brands', 'textdomain' ),
        'all_items' => __( 'All Mobile Brands', 'textdomain' ),
        'parent_item' => __( 'Parent Mobile Brand', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Mobile Brand:', 'textdomain' ),
        'edit_item' => __( 'Edit Mobile Brand', 'textdomain' ),
        'update_item' => __( 'Update Mobile Brand', 'textdomain' ),
        'add_new_item' => __( 'Add New Mobile Brand', 'textdomain' ),
        'new_item_name' => __( 'New Mobile Brand Name', 'textdomain' ),
        'menu_name' => __( 'Mobile Brands', 'textdomain' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
        'rewrite' => array( 'slug' => 'mobile-brands' ),
    );

    register_taxonomy( 'mobile_brands', array( 'mobile' ), $args );
}

add_action( 'init', 'create_mobile_brands_taxonomy' );
