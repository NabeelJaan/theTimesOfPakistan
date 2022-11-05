 <?php
	$args = array(
		'post_type'         =>  'post',
		'posts_per_page'    =>  8,
		'post_status'       =>  'publish'
	);


	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ):
	while ( $the_query->have_posts() ) : $the_query->the_post();
	$ex_id = get_the_ID();
?>

<div>
    <a href="<?php the_permalink(); ?>">
        <div class="flex items-center mb-3.5">
            <div class="mr-15 sas">
                <?php the_post_thumbnail( ['mvp-img','class' => 'w-full']); ?>
            </div>
            <div>
                <h4 class="text-sm font-semibold leading-5"><?php the_title_excerpt('', '...', true, '55'); ?></h4>
                <p class="text-11 leading-5">
					<span class="text-green"><i class="far fa-calendar-alt"></i></span> <?php echo get_the_date('F j, Y'); ?>
				</p>
            </div>
        </div>
    </a>
</div>

<?php
	endwhile;
	wp_reset_postdata();
	endif;
?>