<?php // Template Name: Author Page ?>

<?php get_header() ?>

<section class="author-container px-4 md:px-0">

    <?php $current_author = ( isset( $_GET['author_name'] ) ) ? get_user_by( 'slug', $author_name ) : get_userdata( intval( $author ) ); ?>

    <div class="text-center md:text-left auhor_profile md:flex">
        <div class="author-inner md:mr-8">
            <?php echo get_avatar( $current_author->user_email , '100 '); ?>
        </div>
        <div class="author-inner">
            <h1 class="mt-8 mb-4 md:my-0 inline-block"><?php echo $current_author->display_name; ?></h1>
            <p><?php echo $current_author->user_description; ?></p>
            <div class="social-icon">
                <?php if( !empty($current_author->qodef_user_facebook) ) : ?>
                <a href="<?php echo $current_author->qodef_user_facebook; ?>"
                    class="text-dark-blue w-10 h-10 inline-flex items-center justify-center transition ease-in-out duration-500 border border-dark-blue rounded-full hover:text-white hover:bg-dark-blue hover:border-dark-blue"><i
                        class="fa fa-facebook"></i></a>
                <?php endif; ?>
                <?php if( !empty($current_author->qodef_user_instagram) ) : ?>
                <a href="<?php echo $current_author->qodef_user_instagram; ?>"
                    class="text-dark-blue w-10 h-10 inline-flex items-center justify-center transition ease-in-out duration-500 border border-dark-blue rounded-full hover:text-white mx-17 hover:bg-dark-blue hover:border-dark-blue"><i
                        class="fa fa-instagram"></i></a>
                <?php endif; ?>
                <?php if( !empty($current_author->qodef_user_twitter) ) : ?>
                <a href="<?php echo $current_author->qodef_user_twitter; ?>"
                    class="text-dark-blue w-10 h-10 inline-flex items-center justify-center transition ease-in-out duration-500 border border-dark-blue rounded-full hover:text-white hover:bg-dark-blue hover:border-dark-blue"><i
                        class="fa fa-twitter"></i></a>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="mb-6 md:mb-8 md:mt-16 font-Roboto">
        <h2 class="text-lg font-bold">Article By: <span
                class="text-lg font-medium"><?php echo $current_author->display_name; ?></span></h2>
    </div>

    <?php  ?>

    <?php
    if ( have_posts() ) :

        while ( have_posts() ) : the_post();

            get_template_part( 'template-parts/content', 'archive' );

        endwhile;

        the_posts_pagination( array( 'mid_size' => 2 ) );

    else :

        get_template_part( 'template-parts/content', 'none' );

    endif;
    ?>

</section>



<?php get_footer() ?>