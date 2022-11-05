<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@700&display=swap">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'text-gray-900 antialiased' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>

	<header class="bg-white">
		<!-- Top bar -->
		<div class="px-2 py-1 xl:px-0 bg-black text-white">
			<div class="md:max-w-6xl md:mx-auto">
				<div class="flex items-center justify-between">
					<div class="flex text-xs">
						<div class="mr-8 font-Jost tracking-wide">
							<span>18 Lahore</span>
						</div>
						<div class="font-Jost tracking-wide">
							<span>
								<?php echo date('l, F j'); ?>
							</span>
						</div>
					</div>
					<div class="text-sm space-x-4">
						<i class="fab fa-facebook-f"></i>
						<i class="fab fa-twitter"></i>
						<i class="fab fa-instagram"></i>
						<i class="fab fa-linkedin"></i>
					</div>
				</div>
			</div>
		</div>
		<!-- End Top bar -->

		<!-- Logo + add -->
		<div class="my-2 hidden lg:block">
			<div class="px-4 xl:px-0 md:max-w-6xl md:mx-auto"> <!--Main -->
				<div class="site-logo md:flex md:justify-between md:items-center">
					<div>
						<?php if ( has_custom_logo() ) { ?>
							<a href="<?php echo get_bloginfo( 'url' ); ?>">
								<?php the_custom_logo(); ?>
							</a>

						<?php } else { ?>

							<a href="<?php echo get_bloginfo( 'url' ); ?>" class="site-logo font-bold text-4xl text-green">
								<?php echo get_bloginfo( 'name' ); ?>
							</a>

							<p class="text-sm font-light text-gray-600">
								<?php echo get_bloginfo( 'description' ); ?>
							</p>

						<?php } ?>
					</div>
					<div class="md:py-8 md:px-350"> <!-- Add -->
						
					</div>
				</div>
			</div>
		</div>	
		<!-- End Logo/add -->

		<div class="hidden xl:block px-4 xl:px-0 max-w-6xl mx-auto bg-dark-navy text-white">
			<div class="lg:flex lg:items-center">
				<?php
					wp_nav_menu(
						array(
							'container_id'    => 'primary-menu',
							'container_class' => 'bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent',
							'menu_class'      => 'lg:flex',
							'theme_location'  => 'primary',
							'li_class'        => 'text-sm transition-all',
							'fallback_cb'     => false,
						)
					);
				?>
			</div>
		</div>




		<!--********************** Mobile Menu********************** -->

		<div class="mobile-hidden px-2 py-4 flex justify-between items-center shadow-lg mb-4">


			<div>
				<div id="primary-menu-toggle">
					<div id="bar1" class="bar"></div>
					<div id="bar2" class="bar"></div>
					<div id="bar3" class="bar"></div>
				</div>
				
				<?php
					wp_nav_menu(
						array(
							'container_id'    => 'primary-menu',
							'container_class' => 'hidden mobile-m bg-green px-4 pt-20 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
							'menu_class'      => 'lg:flex',
							'theme_location'  => 'primary',
							'li_class'        => 'text-sm font-semibold',
							'fallback_cb'     => false,
						)
					);
				?>
			</div>


			<div>

				<?php if ( has_custom_logo() ) { ?>
					<a href="<?php echo get_bloginfo( 'url' ); ?>">
						<?php the_custom_logo(); ?>
					</a>

				<?php } else { ?>
					<div class="text-lg uppercase">
						<a href="<?php echo get_bloginfo( 'url' ); ?>" class="font-extrabold md:text-4xl font-green uppercase">
							<?php echo get_bloginfo( 'name' ); ?>
						</a>
					</div>

					<p class="text-sm font-light text-gray-600">
						<?php echo get_bloginfo( 'description' ); ?>
					</p>

				<?php } ?>

			</div>


		</div>


	</header>