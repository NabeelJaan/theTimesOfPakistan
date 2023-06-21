<?php


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
		// Most Popular Posts

		acf_register_block_type(

			array(
				'name'              => __('Popular Posts'),
				'title'             => __('Popular Posts'),
				'description'       => __('A custom block for Most Popular Posts'),
				'render_template'   => 'inc/widgets/most-popular.php',
				'category'          => 'Woofster',
				'icon'				=> 'block-default',
				'keywords'			=> array( 'Most Popular Posts', '' ),
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

?>