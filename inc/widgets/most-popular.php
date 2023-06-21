
<h3 class="text-orange text-lg font-bold font-Jost">
    <?php the_field( 'mpp_title' ); ?>
</h3>
<?php

    $websitesLoveWidget = get_field( 'mpp_select_posts' );

    foreach ($websitesLoveWidget as $index=>$post) :
?>

    <div class="single__mpp__card flex lg:justify-between items-center border-b py-5 border-[#e5e5e5]">
        <div class="mpp__img mr-[14px] w-[85px]">

            <a href="<?php the_permalink(); ?>" class="block overflow-hidden rounded-full">

                <?php echo get_the_post_thumbnail( $post->ID, 'mpp-w-img', ['class' => 'rounded-full object-fit transition ease-in-out duration-300 hover:scale-125' ] ); ?>
            </a>

        </div>

        <div class="lg:max-w-[228px]">
            <span class="text-davyGray text-sm font-Jost font-medium">
                <?php echo get_the_date('F j, Y'); ?>
            </span>
            <h3 class="text-black text-base font-Jost leading-[25px] transition ease-in-out duration-300 hover:text-orange">
                <a href="<?php the_permalink(); ?>">
                    <?php echo wp_trim_words( get_the_title( $post->ID ), 6 ); ?>
                </a>
            </h3>
        </div>
    </div>

<?php
    endforeach;
?>