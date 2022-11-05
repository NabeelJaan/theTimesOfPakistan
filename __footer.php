<footer class="text-white">
	<div class="bg-black-russian px-4 xl:px-0">
		<div class="md:max-w-6xl md:mx-auto">
			<div class="py-16 md:max-w-3xl md:mx-auto text-center">
				<!-- <img class="mx-auto" src="<?php bloginfo('template_directory'); ?>/resources/images/techbasket-footer-logo.png" alt="Logo"> -->
				<p class="site-logo text-green font-bold text-6xl">The Times Of Pakistan</p>
				<p class="my-6 font-Jost tracking-wide">The Times Of Pakistan, Pakistan Based Tech and News website. Our main goal is "We Update you about Technology, Business, Auto, Mobile, Current affairs News from Pakistan and all over the World.</p>
				<p class="mb-6 font-Jost tracking-wide">Contact Us: <a href="mailto:contact@thetimesofpaksitan.pk">contact@thetimesofpaksitan.pk</a></p>
				<div class="text-sm space-x-2 md:mt-6">
					<a class="border transition ease-in-out duration-500 rounded-full w-10 h-10 items-center justify-center inline-flex hover:bg-green hover:text-white hover:border-green" href="#"><i class="fab fa-facebook-f"></i></a>
					<a class="border transition ease-in-out duration-500 rounded-full w-10 h-10 items-center justify-center inline-flex hover:bg-green hover:text-white hover:border-green" href="#"><i class="fab fa-twitter"></i></a>
					<a class="border transition ease-in-out duration-500 rounded-full w-10 h-10 items-center justify-center inline-flex hover:bg-green hover:text-white hover:border-green" href="#"><i class="fab fa-instagram"></i></i></a>
					<a class="border transition ease-in-out duration-500 rounded-full w-10 h-10 items-center justify-center inline-flex hover:bg-green hover:text-white hover:border-green" href="#"><i class="fab fa-linkedin"></i></a>
				</div>
			</div>
		</div>
	</div>
	<div class="bg-green w-full h-px m-auto"></div>

	<!-- copy right text -->
	<div class="bg-black-russian text-white py-5 px-4 md:px-6 xl:px-0">
		<div class="md:max-w-6xl md:mx-auto">
			<div class="md:flex space-y-4 md:space-y-0 items-center md:justify-between">
				<div class="flex font-Jost tracking-wide">
					<?php
						if ( is_active_sidebar( 'cw-col-1' ) ) :
							dynamic_sidebar( 'cw-col-1' );
						endif;
					?>

					<span class="text-red-600"><i class="fa fa-heart"></i></span>
				</div>
				
				<div class="flex justify-center space-x-4 tracking-wide font-Jost">
					<?php
						if ( is_active_sidebar( 'cw-col-2' ) ) :
							dynamic_sidebar( 'cw-col-2' );
						endif;
					?>
				</div>
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

</script>


<?php wp_footer(); ?>

</body>
</html>