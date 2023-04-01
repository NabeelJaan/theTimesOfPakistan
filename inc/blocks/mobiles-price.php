

<section class="px-4 py-22 xl:px-0">
    <div class="max-w-6xl mx-auto">
        <h1 class="text-green font-Jost font-bold text-4xl">
            <?php the_field( 'mobile_prices_heading' ); ?>
        </h1>

        <?php

            $args = array(
                'post_type'         =>  'mobile',
                'posts_per_page'    =>  5,
                'post_status'       =>  'publish'
            );

            $the_query = new WP_Query( $args );

        ?>

        <div class="mobile__phone__wrapper grid md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 grid-flow-row gap-5 mt-5">
            <?php
                if ( $the_query->have_posts() ):
                    while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
                <div class="single__mobile bg-white border rounded-lg p-5 text-center relative">

                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail( 'image-120x150', ['class' => 'mx-auto w-full'] ); ?>
                    </a>

                    <h5 class="text-black font-Jost text-base mt-5">Availble</h5>

                    <div class="flex items-center justify-center mt-3 mb-2">
                        <span><svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" strtok="#ffc107" fill="#ffc107"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg></span>
                        <span><svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" strtok="#ffc107" fill="#ffc107"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg></span>
                        <span><svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" strtok="#ffc107" fill="#ffc107"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg></span>
                        <span><svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" strtok="#ffc107" fill="#ffc107"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg></span>
                        <span><svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" strtok="#ffc107" fill="#ffc107"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg></span>
                    </div>
                    <div class="absolute top-3 right-2">
                        <svg  class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" stroke-width="1.5"><path d="M287.9 0C297.1 0 305.5 5.25 309.5 13.52L378.1 154.8L531.4 177.5C540.4 178.8 547.8 185.1 550.7 193.7C553.5 202.4 551.2 211.9 544.8 218.2L433.6 328.4L459.9 483.9C461.4 492.9 457.7 502.1 450.2 507.4C442.8 512.7 432.1 513.4 424.9 509.1L287.9 435.9L150.1 509.1C142.9 513.4 133.1 512.7 125.6 507.4C118.2 502.1 114.5 492.9 115.1 483.9L142.2 328.4L31.11 218.2C24.65 211.9 22.36 202.4 25.2 193.7C28.03 185.1 35.5 178.8 44.49 177.5L197.7 154.8L266.3 13.52C270.4 5.249 278.7 0 287.9 0L287.9 0zM287.9 78.95L235.4 187.2C231.9 194.3 225.1 199.3 217.3 200.5L98.98 217.9L184.9 303C190.4 308.5 192.9 316.4 191.6 324.1L171.4 443.7L276.6 387.5C283.7 383.7 292.2 383.7 299.2 387.5L404.4 443.7L384.2 324.1C382.9 316.4 385.5 308.5 391 303L476.9 217.9L358.6 200.5C350.7 199.3 343.9 194.3 340.5 187.2L287.9 78.95z"/></svg>
                    </div>
                    <div class="h-10 w-24 inline-flex text-center items-center justify-center bg-dark-green absolute right-0 top-28">
                        <p class="font-medium font-Jost text-xl text-white">39000 <span class="font-normal text-lg">Rs</span></p>
                    </div>

                    <a href="<?php the_permalink(); ?>">
                        <h6 class="text-green font-Jost font-medium">
                            <?php the_title(); ?>
                        </h6>
                    </a>

                </div>

            <?php
                endwhile;
                wp_reset_postdata();
                endif;
            ?>

        </div>

    </div>
</section>