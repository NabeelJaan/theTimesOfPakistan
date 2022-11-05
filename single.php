<?php get_header(); ?>

<!-- Single Post -->
<section class="px-2 xl:px-0 pt-4 pb-16">
    <div class="md:max-w-6xl md:mx-auto"> <!-- container -->

        <div class="lg:flex">

            <div class="lg:w-3/3 border rounded shadow bg-white border-grey-100 p-4 lg:mr-4 xl:mr-8">

                <div class="md:items-center mb-8">
                    
                    <?php if ( have_posts() ) : ?>

                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'template-parts/content', 'single' ); ?>

                    <?php endwhile; ?>

                    <?php endif; ?>

                </div> <!-- End col-1 -->
            </div>

                <!-- sidebar -->
                <div class="lg:w-1/03"> <!-- col-2 -->
                 <div class="border rounded shadow bg-white border-grey-100 my-4 md:my-0 p-4">
                     <h2 class="font-semibold font-Jost border-b-2 border-green pb-2">Follow Us</h2>
                     <div class="grid grid-flow-col grid-cols-2 grid-rows-2 gap-2.5 my-4">
						 <a href="#">
                            <div class="flex bg-blue-500 text-white py-2 px-3.5 rounded-sm">
                                <span><i class="fab fa-facebook"></i></span>
                                <div class="ml-4">
                                    <p class="text-13 font-Jost font-semibold">15,000</p>
                                    <p class="text-11 font-Jost">Fans</p>
                                </div>
                            </div>
                         </a>
                         
                         <a href="#">
                            <div class="flex bg-light-blue text-white py-2 px-3.5 rounded-sm">
                                <span><i class="fab fa-twitter"></i></i></span>
                                <div class="ml-4">
                                    <p class="text-13 font-Jost font-semibold">840</p>
                                    <p class="text-11 font-Jost">Fans</p>
                                </div>
                            </div>
                         </a>
                        <a href="#">
                            <div class="flex bg-dark-blue text-white py-2 px-3.5 rounded-sm">
                                <span><i class="fab fa-linkedin-in"></i></span>
                                <div class="ml-4">
                                    <p class="text-13 font-Jost font-semibold">776</p>
                                    <p class="text-11 font-Jost">Fans</p>
                                </div>
                            </div>
                        </a>
                         <a href="#">
                            <div class="flex bg-red-violet text-white py-2 px-3.5 rounded-sm">
                                <span><i class="fab fa-instagram"></i></span>
                                <div class="ml-4">
                                    <p class="text-13 font-Jost font-semibold">3456</p>
                                    <p class="text-11 font-Jost">Fans</p>
                                </div>
                            </div>
                         </a>
                     </div>
                 </div>   
                 <!-- End Follow us -->

                 <!-- Add 
			
                 <div class="py-20 px-8 my-4 border border-green">
                     -Advertisement-
                 </div> -->
			
			
                 <div class="border rounded shadow bg-white border-grey-100 p-4 mt-8">
                     <h2 class="font-semibold border-b-2 border-green pb-2 mb-4">Most Viewed</h2>
                    <div>
						<?php get_sidebar(); ?>
                    </div>

                 <!-- Add 
                 <div class="py-20 px-8 my-4 border border-green">
                     -Advertisement-
                 </div> -->
					 
            </div> <!-- End col-2 -->
            </div> <!-- End Sidebar -->

        </div>

        <?php if ( comments_open() || get_comments_number() ) : ?>
			<div class="w-full">
				<?php comments_template(); ?>
			</div>
			<?php endif; ?>

    </div> <!-- End container -->

</section>

<?php get_footer();