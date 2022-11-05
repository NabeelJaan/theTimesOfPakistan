<?php /* Template Name: Blog Page */ ?>

<?php get_header(); ?>

<section class="max-w-6xl mx-auto py-10 ">

    <div class="md:flex">
            <!-- Column 1 -->
            <div class="md:mr-8 lg:flex lg:flex-col px-5 md:px-0">
                <?php
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                $args = array(
                    'post_type'         =>  'post',
                    'posts_per_page'    =>  24,
                    'post_status'       =>  'publish',
                    'paged'             =>  $paged
                );
                $the_query = new WP_Query( $args );
                $i = 1;
                if ( $the_query->have_posts() ):
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>
                <!-- 1 -->
                <div class="md:flex">
                    <div class="xs:mb-8 md:mr-30">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('post-cover-image', ['class' => 'xs:w-full rounded-xl']); ?>
                        </a>
                    </div>
                    <div class="max-w-md">
                    <time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished" class="text-sm text-dark-blue font-Roboto text-gray-700"><?php echo get_the_date(); ?></time>
                        <h4 class="xs:text-22 font-Roboto md:text-22 lg:text-3xl font-bold">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h4>
                        <div class="xs:mt-3 xs:mb-6 font-Roboto text-base md:mt-26 md:mb-29">
                            <?php the_excerpt(); ?>
                </div>
                        <div class="h-link flex items-center md:justify-end md:mt-30">
                            <a class="xs:tracking-wider font-Roboto text-sm font-bold text-dark-blue tracking-wider" href="<?php the_permalink(); ?>">Read More</a>
                            <svg class="f-icon text-dark-blue h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="my-30 bg-Gray80 max-w-3xl h-px"></div>
                    
                <?php
                    $i++;
                    endwhile;

                    echo '<div class="pagination">';
                    $big = 999999999; 
                    echo paginate_links( array(
                        'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                        'format' => '?paged=%#%',
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $the_query->max_num_pages
                    ) );
                    echo '</div>';
                    wp_reset_postdata();
                endif;
                ?>
                
            </div>

            <div class="xs:mt-12 lg:flex lg:flex-col xl:ml-78">

                <?php
                    if ( is_active_sidebar( 'home-sidebar' ) ) :
                        dynamic_sidebar( 'home-sidebar' );
                    endif;
                ?>

            </div>
        </div>
<section>
<?php 
get_footer();