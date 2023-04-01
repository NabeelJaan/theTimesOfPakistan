<footer class="text-white">
	<div class="footer bg-black-russian py-14">
		<div class="container mx-auto max-w-6xl px-5 md:px-8 xl:px-0">
			<div class="grid grid-cols-1 grid-rows-4 sm:grid-cols-2 sm:grid-rows-2 lg:grid-cols-4 lg:grid-rows-1 grid-flow-row border-b border-black border-solid pb-8">

				<div class="sm:pr-5 md:pr-8	">

					<a class="site-logo font bold text-4xl text-green text-right" href="#" aria-label="the times of pakistan" target="_self">
						<?php the_field( 'site_logo_text' , 'option' ); ?>
					</a>

					<p class="font-Jost text-base mt-5">
						<?php the_field( 'about_content', 'option' ); ?>
					</p>

					<div class="footer-social mt-5">

						<ul class="flex">
							<li class="mr-4">

								<?php $facebook_link = get_field( 'facebook_link' , 'option' ); ?>

								<a href="<?php echo $facebook_link ['url'] ?>" class="border transition ease-in-out duration-500 rounded-full w-10 h-10 items-center justify-center inline-flex hover:bg-green hover:text-white hover:border-green" aria-label="facebook" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="16px" height="16px">
										<path fill="#ffffff" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/>
									</svg>
								</a>

							</li>

							<li class="mr-4">
								<?php $twitter_link = get_field( 'twitter_link' , 'option' ); ?>

								<a href="<?php echo $twitter_link['url'] ?>" class="border transition ease-in-out duration-500 rounded-full w-10 h-10 items-center justify-center inline-flex hover:bg-green hover:text-white hover:border-green" aria-label="twitter" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="16px" height="16px">
										<path fill="#ffffff" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/>
									</svg>
								</a>
							</li>

							<li class="mr-4">

								<?php $linkedin = get_field( 'linkedin' , 'option' ); ?>
								
								<a href="<?php echo $linkedin['url'] ?>" class="border transition ease-in-out duration-500 rounded-full w-10 h-10 items-center justify-center inline-flex hover:bg-green hover:text-white hover:border-green" aria-label="linkedin" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="16px" height="16px">
										<path fill="#ffffff" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/>
									</svg>
								</a>

							</li>

							<li class="mr-4">

								<?php $instagram = get_field( 'instagram' , 'option' ); ?>

								<a href="<?php echo $instagram['url'] ?>" class="border transition ease-in-out duration-500 rounded-full w-10 h-10 items-center justify-center inline-flex hover:bg-green hover:text-white hover:border-green" aria-label="instagram" target="_blank">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="16px" height="16px">
									<path fill="#ffffff" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
								</svg>
								</a>

							</li>
						</ul>

					</div>

				</div>

				<div class="links-footer navigation lg:pl-14">
					<h3 class="font-Jost text-3xl font-semibold">Navigation</h3>
					<ul class="mt-10">
						<li class="relative pl-4 text-white font-Jost text-lg mb-2 hover:text-green">
							<a href="#">About us</a>
						</li>
						<li class="relative pl-4 text-white font-Jost text-lg mb-2 hover:text-green">
							<a href="https://thetimesofpakistan.pk/contact-us/">Contact us</a>
						</li>
						<li class="relative pl-4 text-white font-Jost text-lg mb-2 hover:text-green">
							<a href="#">Projects</a>
						</li>
						<li class="relative pl-4 text-white font-Jost text-lg mb-2 hover:text-green">
							<a href="#">Recent Post</a>
						</li>
					</ul>
				</div>
				<div class="links-footer all-services">
					<h3 class="font-Jost text-3xl font-semibold">All Services</h3>
					<ul class="mt-10">
						<li class="relative pl-4 text-white font-Jost text-lg mb-2 hover:text-green">
							<a href="#">Web Design</a>
						</li>
						<li class="relative pl-4 text-white font-Jost text-lg mb-2 hover:text-green">
							<a href="#">Web Development</a>
						</li>
						<li class="relative pl-4 text-white font-Jost text-lg mb-2 hover:text-green">
							<a href="#">Web Development</a>
						</li>
						<li class="relative pl-4 text-white font-Jost text-lg mb-2 hover:text-green">
							<a href="#">Digital Marketing</a>
						</li>
					</ul>
				</div>
				<div class="links-footer all-services">
					<h3 class="font-Jost text-3xl font-semibold">News Letter</h3>

					<p class="mt-10 text-white font-Jost text-base capitalize">
						<?php the_field( 'news_letter_text', 'option' ); ?>
					</p>

					<div class="form-wrap ">
						<?php echo do_shortcode('[wpforms id="163" title="false"]'); ?>
					</div>

				</div>
			</div>
			<div class="mt-5">
				<p class="copyright text-white font-Jost text-base text-center">
					&copy; <?php echo date('Y'); ?> The Times Of Pakistan. All rights reserved.
				</p>
			</div>
		</div>
	</div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script>

	jQuery("#primary-menu-toggle").on("click",function() {
		if(jQuery(this).hasClass("icon")){
			jQuery(this).removeClass("icon");
		} else{
			jQuery("icon").removeClass("icon");
			jQuery(this).addClass("icon");
		}
	});
	

	jQuery(".f-hidden").slice(0, 12).show();
	if (jQuery(".prod_item:hidden").length != 0) {
		jQuery("#loadMore").show();
	}

	jQuery("#loadMore").on('click', function(e) {

		e.preventDefault();

		jQuery(".f-hidden:hidden").slice(0, 12).slideDown();
		if (jQuery(".f-hidden:hidden").length == 0) {
			jQuery("#loadMore").fadeOut('slow');
		}

	});

	jQuery('.owl-carousel').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		responsive:{
			0:{
			items:1
			},
			600:{
			items:2
			},
			1000:{
			items:4
			}
				

			}
	});
	// Show the first tab and hide the rest
		jQuery('#entertainment-tabs-nav li:first-child').addClass('active');
		jQuery('.entertainment-tab-content').hide();
		jQuery('.entertainment-tab-content:first').show();

		// Click function
		jQuery('#entertainment-tabs-nav li').click(function(){
		jQuery('#entertainment-tabs-nav li').removeClass('active');
		jQuery(this).addClass('active');
		jQuery('.entertainment-tab-content').hide();
		
		var activeTab = jQuery(this).find('a').attr('href');
		jQuery(activeTab).fadeIn();
		return false;
		});

	// Show the first tab and hide the rest
	jQuery('#sports-tabs-nav li:first-child').addClass('active');
		jQuery('.sports-tab-content').hide();
		jQuery('.sports-tab-content:first').show();

		// Click function
		jQuery('#sports-tabs-nav li').click(function(){
		jQuery('#sports-tabs-nav li').removeClass('active');
		jQuery(this).addClass('active');
		jQuery('.sports-tab-content').hide();
		
		var activeTab = jQuery(this).find('a').attr('href');
		jQuery(activeTab).fadeIn();
		return false;
		});

	// splide
		var main = new Splide( '#main-slider', {
			type       : 'fade',
			heightRatio: 0.5,
			pagination : false,
			arrows     : false,
			cover      : true,
			} );

		var thumbnails = new Splide( '#thumbnail-slider', {
			rewind          : true,
			fixedWidth      : 104,
			fixedHeight     : 58,
			isNavigation    : true,
			gap             : 10,
			focus           : 'center',
			pagination      : false,
			cover           : true,
			dragMinThreshold: {
				mouse: 4,
				touch: 10,
			},
			breakpoints : {
				640: {
				fixedWidth  : 66,
				fixedHeight : 38,
				},
			},
			} );

		main.sync( thumbnails );
		main.mount();
		thumbnails.mount();
</script>



<?php wp_footer(); ?>

</body>
</html>
