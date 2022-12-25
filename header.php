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
					<div class="text-sm space-x-4 flex items-center justify-center">

						<span class="">
							<?php $header_facebook = get_field( 'header_facebook' , 'option' ); ?>

							<a href="<?php echo $header_facebook ['url'] ?>" aria-label="facebook" target="_blank">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="16px" height="16px">
									<path fill="#ffffff" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/>
								</svg>
							</a>
						</span>

						<span class="">
							<?php $header_twitter = get_field( 'header_twitter' , 'option' ); ?>

							<a href="<?php echo $header_twitter ['url'] ?>" aria-label="facebook" target="_blank">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="16px" height="16px">
									<path fill="#ffffff" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/>
								</svg>
							</a>
						</span>

						<span class="">
							<?php $header_linkedin = get_field( 'header_linkedin' , 'option' ); ?>

							<a href="<?php echo $header_linkedin ['url'] ?>" aria-label="facebook" target="_blank">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="16px" height="16px">
									<path fill="#ffffff" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/>
								</svg>
							</a>
						</span>

						<span class="">
							<?php $header_instagram = get_field( 'header_instagram' , 'option' ); ?>

							<a href="<?php echo $header_instagram ['url'] ?>" aria-label="facebook" target="_blank">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="16px" height="16px">
									<path fill="#ffffff" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
								</svg>
							</a>
						</span>

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