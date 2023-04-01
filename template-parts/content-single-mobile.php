<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php
        the_post_thumbnail();
        the_content();

        wp_link_pages(
            array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'twentyseventeen' ),
                'after'  => '</div>',
            )
        );
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php twentyseventeen_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
