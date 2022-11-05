<?php
    $id = 'latest-posts-' . $block['id'];
    $count = get_field('number_of_post');
?>

<section id="<?php echo esc_attr($id); ?>" class="px-2 pb-16 mt-10 xl:px-0">

    <div class="md:max-w-6xl md:mx-auto"> <!-- container -->

        <h2 class="border-b-2 border-green mb-12 max-w-784px">
            <span class="posts_header relative text-white font-medium font-jost inline-block pl-26px pr-5 pb-2 pt-1 text-2xl">
                <?php the_field('latest_post_title'); ?>
            </span>
        </h2>

        <div class="lg:flex">

            <div class="md:grid md:grid-flow-row md:grid-cols-2 md:gap-5 md:mr-6 lg:w-3/3 lg:mr-4 xl:mr-8">

                <?php
                    $args = array(
                        'post_type'         =>  'post',
                        'posts_per_page'    =>  6,
                        'category__not_in'  =>  9,
                        'post_status'       =>  'publish'
                    );

                    $the_query = new WP_Query( $args );
                    $i = 1;
                    if ( $the_query->have_posts() ):
                        while ( $the_query->have_posts() ) : $the_query->the_post();
                        $ex_id = get_the_ID();
                ?>

                <div class="f-hidden shadow-sm bg-white rounded-xl pb-5"> <!-- col-1 -->

                    <div class=""> 
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('lp-img', ['class' => 'w-full rounded-t-xl']); ?>
                        </a>
                    </div>

                    <div class="mt-5 px-5">
                        <div class="text-xs mt-2 md:mt-0 mb-1 font-Jost">

                            <span class="text-green"><i class="far fa-calendar-alt"></i></span> <span><?php echo get_the_date('F j, Y'); ?> 
                            <span class="text-green"><i class="far fa-user"></i></span> </span> <span><?php echo get_the_author(); ?></span>
                            
                        </div>
                        <a href="<?php the_permalink(); ?>">
                            <h3 class="text-xl font-Jost my-4 font-semibold leading-6"><?php the_title(); ?></h3>
                        </a>
                        <div class="text-sm font-Jost leading-21 mb-4 my-2"><?php the_excerpt(); ?></div>
                        <a class="transition ease-in-out duration-500 inline-block bg-green text-white text-xs leading-21 py-7 px-15 hover:bg-dark-green rounded-sm" href="<?php the_permalink(); ?>">Read More</a>
                    </div>
                </div> <!-- End col-1 -->

                <?php
                    $i++;

                    endwhile;

                    wp_reset_postdata();
                    
                    endif;
                ?>
            </div>
            


            <div class="lg:w-1/03"> <!-- col-2 -->

                 <div class="border bg-white shadow-sm rounded-xl my-4 md:my-0 p-4">
                     <h2 class="font-semibold font-Jost border-b-2 border-green pb-2">Follow Us</h2>
                     <div class="grid grid-flow-col grid-cols-2 grid-rows-2 gap-2.5 my-4">
                         <a href="#">
                            <div class="flex bg-blue-500 text-white py-2 px-3.5 rounded-sm">
                                <span><i class="fab fa-facebook"></i></span>
                                <div class="ml-4">
                                    <p class="text-13 font-Jost font-semibold">14,000</p>
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

                 <!-- Add -->

                 <!-- <div class="py-20 px-8 my-4 border border-green">
                     -Advertisement-
                 </div> -->


                 <div class="border rounded-xl shadow-sm bg-white p-4 mt-8">
                     <h2 class="font-semibold border-b-2 border-green pb-2 mb-4">Most Viewed</h2>
                    <div>
						<?php get_sidebar(); ?>
                    </div>
                 </div>


                 <!-- Add -->

                 <!-- <div class="py-20 px-8 my-4 border border-green">
                     -Advertisement-
                 </div> -->
                 
            </div> <!-- End col-2 -->
            
        </div>

    </div>

</section>