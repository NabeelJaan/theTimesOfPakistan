<?php
    $id = 'featured-post-' . $block['id'];
    $cat = get_field('category_featured_posts');
    $featured_posts = get_field('number_of_posts-fp');
?>

<section id="<?php echo esc_attr($id); ?>" class="bg-white px-2 xl:px-0 xl:pt-4 pb-30">

    <div class="md:max-w-6xl md:mx-auto"> <!-- container div -->
        <div class="md:flex"> <!-- Start of Main div -->
            <div class="hover-effect mb-1 md:mb-0 relative md:w-3/6 md:mr-1"><!-- Start of left div -->
                <?php
                    $args = array(
                        'post_type'         =>  'post',
                        'posts_per_page'    =>  5,
						'cat'               =>  9,
                        'post_status'       =>  'publish'
                    );

                    $the_query = new WP_Query( $args );

                    $allFeaturedPosts = $the_query->posts;

                    $featuredPost = $allFeaturedPosts[0];
                ?>

                    <div class="f-img">
                        <?php echo get_the_post_thumbnail( $featuredPost->ID, 'featured-main', ['class' => 'w-full transition ease-in-out duration-300 hover:scale-125' ] ); ?>
                    </div>

                    <div class="overlay">
                        <div class="absolute bottom-0 p-2.5 md:py-22 md:px-5">
                            <?php
                                $categories = get_the_category( $featuredPost->ID );
                                $separator = ' ';
                                $output = '';
                                if ( ! empty( $categories ) ) {
                                    foreach( $categories as $category ) {
                                        $output .= '<a class="cat-text text-10 font-medium font-Jost bg-green text-white px-7 py-3 uppercase" href="' . get_category_link( $category->term_id ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
                                    }
                                    echo trim( $output, $separator );
                                }
                            ?>

                            <a href="<?php the_permalink( $featuredPost->ID ); ?>">
                                <h1 class="text-lg md:text-3xl mt-3 md:my-3 leading-6 font-Jost text-white md:font-medium">
                                    <?php echo get_the_title( $featuredPost->ID ); ?>
                                </h1>
                            </a>

                            <a class="hidden md:block text-white font-Jost" href="<?php the_permalink( $featuredPost->ID ); ?>">
                                <span class="font-bold">
                                    <?php 
                                        $author_id=$featuredPost->post_author;
                                        the_author_meta( 'display_name' , $author_id )
                                    ?>
                                </span>

                                <?php echo get_the_date('F j, Y'); ?>
                            </a>
                        </div>
                    </div>

            </div> <!-- End of left div -->


            <div class="md:w-3/6 grid grid-row-2 md:grid-cols-2 gap-1"> <!-- start right div -->

                <?php

                    foreach ($allFeaturedPosts as $index=>$post) : 
                    if ($index > 0) :
                ?>

                <div class="hover-effect relative"><!-- Inner div -->
                    <a href="<?php the_permalink( $post->ID ); ?>">
                        <div class="f-img2">
                            <?php echo get_the_post_thumbnail( $post->ID, 'featured-img-s', ['class' => 'w-full transition ease-in-out duration-300 hover:scale-125' ] ); ?>
                        </div>

                        <div class="overlay">
                            <div class="absolute bottom-0 px-2.5 pb-1 md:py-11 md:px-15">
                                <?php
                                        $categories = get_the_category( $post->ID );
                                        $separator = ' ';
                                        $output = '';
                                        if ( ! empty( $categories ) ) {
                                            foreach( $categories as $category ) {
                                                $output .= '<a class="cat-text text-10 font-Jost font-medium bg-green text-white px-7 py-3 uppercase" href="' . get_category_link( $category->term_id ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
                                            }
                                            echo trim( $output, $separator );
                                        }
                                    ?>
                                <a href="<?php the_permalink( $post->ID ); ?>">
                                    <h2 class="text-white mt-2 leading-4 text-sm font-Jost md:text-base md:font-medium md:leading-5">
                                        <?php echo get_the_title( $post->ID ); ?>
                                    </h2>
                                </a>
                            </div>
                        </div>
                    </a>
                </div> <!-- End Inner div -->

                <?php
                    endif;
                    endforeach;
                ?>

            </div><!--End of right Div-->
        </div> <!-- End Main div -->
    </div><!-- End container div -->
</section>