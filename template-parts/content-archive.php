

<div class="post-box shadow-sm bg-white rounded-md pb-5">

    <div class="">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('lp-img', ['class' => 'w-full rounded-t-md']); ?>
        </a>
    </div>

    <div class="px-4 mt-4">

        <div class="text-xs mt-2 md:mt-0 mb-1 font-Jost">

            <span class="text-green"><i class="far fa-calendar-alt"></i></span> 
            <span><?php echo get_the_date('F j, Y'); ?></span> 
            <span class="text-green"><i class="far fa-user"></i></span> 
            <span><?php echo get_the_author(); ?></span>

        </div>
        
        <div>
            <h3 class="text-lg my-3 font-Jost font-semibold leading-6">
                <a href="<?php the_permalink(); ?>">
                    <?php echo wp_trim_words( get_the_title(), 10 ); ?>
                </a>
            </h3>

            <a class="transition ease-in-out duration-500 inline-block bg-green text-white text-xs leading-21 py-7 px-15 hover:bg-dark-green rounded-sm" href="<?php the_permalink(); ?>">Read More</a>
        </div>
    </div>    

</div>