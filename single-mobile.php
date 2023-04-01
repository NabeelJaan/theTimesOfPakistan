<?php
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php
        // Start the Loop.
        while ( have_posts() ) :
            the_post();

            // Include the single content template.
            get_template_part( 'template-parts/content', 'single-mobile' );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

            // End of the loop.
        endwhile;
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
