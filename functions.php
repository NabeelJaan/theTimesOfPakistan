<?php

/**
 * Enqueue scripts.
 */
function tailpress_enqueue_scripts() {
	$theme = wp_get_theme();

	wp_enqueue_style( 'tailpress', tailpress_get_mix_compiled_asset_url( 'css/app.css' ), array(), $theme->get( 'Version' ) );
	wp_enqueue_style( 'FontAwesome', '//pro.fontawesome.com/releases/v5.10.0/css/all.css', array(), '5.10.0' );
	wp_enqueue_style( 'GoogleFonts', '//fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&display=swap', array(), '' );
	wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/style.css', array(), '1.0' );
	wp_enqueue_style('OwlCarousel', get_template_directory_uri() . '/assets/owlcarousel/css/owl.carousel.min.css' );
	wp_enqueue_style('OwlCarouselTheme', get_template_directory_uri() . '/assets/owlcarousel/css/owl.theme.default.css' );


 	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'OwlCarouseljs', get_template_directory_uri() . '/assets/owlcarousel/js/owl.carousel.min.js', array('jquery'), true );
	wp_enqueue_script( 'tailpress', tailpress_get_mix_compiled_asset_url( 'js/app.js' ), array(), $theme->get( 'Version' ) );

}

add_action( 'wp_enqueue_scripts', 'tailpress_enqueue_scripts' );

/**
 * Get mix compiled asset.
 *
 * @param string $path The path to the asset.
 *
 * @return string
 */
function tailpress_get_mix_compiled_asset_url( $path ) {
	$path                = '/' . $path;
	$stylesheet_dir_uri  = get_stylesheet_directory_uri();
	$stylesheet_dir_path = get_stylesheet_directory();

	if ( ! file_exists( $stylesheet_dir_path . '/mix-manifest.json' ) ) {
		return $stylesheet_dir_uri . $path;
	}

	$mix_file_path = file_get_contents( $stylesheet_dir_path . '/mix-manifest.json' );
	$manifest      = json_decode( $mix_file_path, true );
	$asset_path    = ! empty( $manifest[ $path ] ) ? $manifest[ $path ] : $path;

	return $stylesheet_dir_uri . $asset_path;
}

/**
 * Get data from the tailpress.json file.
 *
 * @param mixed $key The key to retrieve.
 *
 * @return mixed|null
 */
function tailpress_get_data( $key = null ) {
	$config = json_decode( file_get_contents( get_stylesheet_directory() . '/tailpress.json' ), true );

	if ( $key === null ) {
		return filter_var_array( $config, FILTER_SANITIZE_STRING );
	}

	$option = filter_var( $config[ $key ], FILTER_SANITIZE_STRING );

	return $option ?? null;
}

/**
 * Theme setup.
 */
function tailpress_setup() {
	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'tailpress' ),
		)
	);

	// Switch default core markup for search form, comment form, and comments
	// to output valid HTML5.
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
	
	// Adding Thumbnail basic support.
	add_theme_support( 'post-thumbnails' );

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

	// Block editor.
	add_theme_support( 'align-wide' );

	add_theme_support( 'wp-block-styles' );
	//Logo
	add_theme_support( 'custom-logo' );

	add_theme_support( 'editor-styles' );

	add_editor_style();

	$tailpress = tailpress_get_data();

	$colors = array_map(
		function ( $color, $hex ) {
			return array(
				'name'  => ucfirst( $color ),
				'slug'  => $color,
				'color' => $hex,
			);
		},
		array_keys( $tailpress['colors'] ),
		$tailpress['colors']
	);

	$font_sizes = array_map(
		function ( $size, $px ) {
			return array(
				'name' => ucfirst( $size ),
				'size' => $px,
				'slug' => $size,
			);
		},
		array_keys( $tailpress['fontSizes'] ),
		$tailpress['fontSizes']
	);

	add_theme_support( 'editor-color-palette', $colors );
	add_theme_support( 'editor-font-sizes', $font_sizes );
}

add_action( 'after_setup_theme', 'tailpress_setup' );

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
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
 * @param mixed   $item The curren item.
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
	Exerpt Lenght
	==========================================
*/

function ld_custom_excerpt_length( $length ) {
    return 10;
}
add_filter( 'excerpt_length', 'ld_custom_excerpt_length', 999 );


/*
	==========================================
	Title Lenght
	==========================================
*/

function the_title_excerpt($before = '', $after = '', $echo = true, $length = false) 
  {
    $title = get_the_title();

    if ( $length && is_numeric($length) ) {
        $title = substr( $title, 0, $length );
    }

    if ( strlen($title)> 0 ) {
        $title = apply_filters('the_title_excerpt', $before . $title . $after, $before, $after);
        if ( $echo )
            echo $title;
        else
            return $title;
    }
}

/*
	==========================================
	Widgets
	==========================================
*/
function techbasket_widget_setup() {

	// End To Bar

	register_sidebar(
		array(	
			'name'	=> 'Sidebar',
			'id'	=> 'sidebar-1',
			'class'	=> 'custom',
			'description' => 'Social widget',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);

	register_sidebar( array(
		'name'          => __( 'Footer Col', '' ),
		'id'            => 'footer-col',
		'description'   => __( 'Add widgets here to appear in your footer area column 1.', '' ),
		'before_widget' => '<aside id="%1$s" class="widget mb-42 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title font-Roboto xs:mt-15 text-22 font-bold mb-15">',
		'after_title'   => '</h4><div class="bg-dark-blue w-15 h-1 mb-8"></div>',
	) );


	// Copy Rights

	register_sidebar( array(
		'name'          => __( 'CW Col 1', '' ),
		'id'            => 'cw-col-1',
		'description'   => __( 'Add widgets here to appear in your footer area column 1.', '' ),
		'before_widget' => '<aside id="%1$s" class="widget mb-42 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title font-Roboto xs:mt-15 text-22 font-bold mb-15">',
		'after_title'   => '</h4><div class="bg-dark-blue w-15 h-1 mb-8"></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'CW Col 2', '' ),
		'id'            => 'cw-col-2',
		'description'   => __( 'Add widgets here to appear in your footer area column 2.', '' ),
		'before_widget' => '<aside id="%1$s" class="widget mb-42 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title font-Roboto xs:mt-15 text-22 font-bold mb-15">',
		'after_title'   => '</h4><div class="bg-dark-blue w-15 h-1 mb-8"></div>',
	) );
	
}
add_action('widgets_init','techbasket_widget_setup');


/*
	==========================================
	For Most Popular Posts
	==========================================
*/

function ttop_set_post_views($postID) {
    $count_key = 'ttop_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


/*
    ==========================================
    Include files
    ==========================================
*/


if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

	acf_add_options_sub_page( 'Header' );
    
	acf_add_options_sub_page( 'Footer' );
    
}




/*
	==========================================
	 Gutenberg Block
	==========================================
*/

add_action('acf/init', 'techBasket_acf_block');

function techBasket_acf_block() {

	// Check function exists.

	if( function_exists('techBasket_acf_block') ){


		// Register a Home Banner block.

		acf_register_block_type(
			array(
				'name'              => __('featured Post'),
				'title'             => __('featured Post'),
				'description'       => __('A custom block for featured Post'),
				'render_template'   => 'inc/blocks/featured-post.php',
				'category'          => 'techbasket',
				'icon'				=> 'admin-comments',
				'keywords'			=> array( '', '' ),
        	)
		);

		// Register a Latest Post block.

		acf_register_block_type(
			array(
				'name'              => __('Latest Post'),
				'title'             => __('Latest Post'),
				'description'       => __('A custom block for Latest Post'),
				'render_template'   => 'inc/blocks/latest-post.php',
				'category'          => 'techbasket',
				'icon'				=> 'admin-comments',
				'keywords'			=> array( '', '' ),
        	)
		);
		// Register MostViewedPosts.

		acf_register_block_type(
			array(
				'name'              => __('MostViewedPosts'),
				'title'             => __('MostViewedPosts'),
				'description'       => __('A custom block for Latest Post'),
				'render_template'   => 'inc/blocks/mvp.php',
				'category'          => 'techbasket',
				'icon'				=> 'admin-comments',
				'keywords'			=> array( '', '' ),
        	)
		);

		// Register Mobile Phones.

		acf_register_block_type(
			array(
				'name'              => __('Mobile Phones'),
				'title'             => __('Mobile Phones'),
				'description'       => __('A custom block for Latest Post'),
				'render_template'   => 'inc/blocks/mobile-phones.php',
				'category'          => 'techbasket',
				'icon'				=> 'admin-comments',
				'keywords'			=> array( '', '' ),
        	)
		);
		
		// Rgister for visual stories
		
		acf_register_block_type(
			array(
				'name'              => __('Visual Stories'),
				'title'             => __('Visual Stories'),
				'description'       => __('A custom block for Visual Stories'),
				'render_template'   => 'inc/blocks/visual-stories.php',
				'category'          => 'techbasket',
				'icon'				=> 'admin-comments',
				'keywords'			=> array( '', '' ),
        	)
		);

		// Rgister for Life & Style
		
		acf_register_block_type(
			array(
				'name'              => __('Life Style'),
				'title'             => __('Life Style'),
				'description'       => __('A custom block for Life Style'),
				'render_template'   => 'inc/blocks/life-style.php',
				'category'          => 'techbasket',
				'icon'				=> 'admin-comments',
				'keywords'			=> array( '', '' ),
        	)
		);

		// Rgister for Sports
		
		acf_register_block_type(
			array(
				'name'              => __('Sports'),
				'title'             => __('Sports'),
				'description'       => __('A custom block for Life Style'),
				'render_template'   => 'inc/blocks/sports.php',
				'category'          => 'techbasket',
				'icon'				=> 'admin-comments',
				'keywords'			=> array( '', '' ),
        	)
		);

		// Rgister for Entertainment
		
		acf_register_block_type(
			array(
				'name'              => __('Entertainment'),
				'title'             => __('Entertainment'),
				'description'       => __('A custom block for Life Style'),
				'render_template'   => 'inc/blocks/entertainment.php',
				'category'          => 'techbasket',
				'icon'				=> 'admin-comments',
				'keywords'			=> array( '', '' ),
        	)
		);

		// Rgister for Mobiles Price

		acf_register_block_type(
			array(
				'name'              => __('Mobiles Price'),
				'title'             => __('Mobiles Price'),
				'description'       => __('A custom block for Life Style'),
				'render_template'   => 'inc/blocks/mobiles-price.php',
				'category'          => 'techbasket',
				'icon'				=> 'admin-comments',
				'keywords'			=> array( '', '' ),
			)
		);
		
		// Rgister for Contact Us

		acf_register_block_type(
			array(
				'name'              => __('Contact Us'),
				'title'             => __('Contact Us'),
				'description'       => __('A custom block for Life Style'),
				'render_template'   => 'inc/blocks/contact-us.php',
				'category'          => 'techbasket',
				'icon'				=> 'admin-comments',
				'keywords'			=> array( '', '' ),
			)
		);
	}
}


// Mobile Price CPT

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

