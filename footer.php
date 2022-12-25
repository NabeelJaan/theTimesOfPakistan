<footer class="text-white">
	<div class="footer bg-black-russian py-14">
		<div class="container mx-auto max-w-6xl px-5 md:px-8 xl:px-0">
			<div class="grid grid-cols-1 grid-rows-4 sm:grid-cols-2 sm:grid-rows-2 lg:grid-cols-4 lg:grid-rows-1 grid-flow-row border-b border-black border-solid pb-8">
				<div class="sm:pr-5 md:pr-8">
					<a class="site-logo font bold text-4xl text-green text-right" href="#">The Times Of Pakistan</a>
					<p class="font-Jost text-base mt-5">"The Times Of Pakistan, Pakistan Based Tech and News website. Our main goal is "We Update you about Technology, Business, Auto, Mobile, and Current affairs News from Pakistan and all over the World."</p>
					<div class="footer-social mt-5">
						<ul class="flex">
							<li class="mr-4">
								<a href="#">
								<i class="fab fa-facebook-f hover:text-green"></i>
								</a>
							</li>
							<li class="mr-4">
								<a href="#">
								<i class="fab fa-twitter hover:text-green"></i>
								</a>
							</li>
							<li class="mr-4">
								<a href="#">
								<i class="fab fa-linkedin-in hover:text-green"></i>
								</a>
							</li>
							<li class="mr-4">
								<a href="#">
								<i class="fab fa-pinterest-p hover:text-green"></i>
								</a>
							</li>
							<li class="mr-4">
								<a href="#">
								<i class="fab fa-vimeo-v hover:text-green"></i>
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
							<a href="#">Contact us</a>
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
					<p class="mt-10 text-white font-Jost text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nisi itaque obcaecati eligendi ullam ducimus ut deserunt fugit incidunt quae?</p>
					<div class="form-wrap ">
					<?php echo do_shortcode('[wpforms id="93" title="false"]'); ?>
					</div>
				</div>
			</div>
			<div class="mt-5">
				<p class="copyright text-white font-Jost text-base text-center">Copyright © 2022 The Times Of Pakistan. All rights reserved.</p>
			</div>
		</div>
	</div>
</footer>

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


</script>


<?php wp_footer(); ?>

</body>
</html>
