<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ssrc
 */

get_header();
?>

	<div class="max-w-6xl mx-auto px-5 my-10 md:px-10 xl:px-0 sd">
		
		<div class="md:flex md:flex-row md:justify-between">

			<!-- single post -->

			<div class="w-full md:w-9/12 ">
				<div class="md:grid md:grid-cols-3 md:grid-flow-row md:gap-4">

					<?php if ( have_posts() ) : ?>

						<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', 'archive' );

							endwhile;

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
				</div>

				<div>
					<?php the_posts_pagination( array( 'mid_size' => 2 ) ); ?>
				</div>

			</div>

			<!-- sidebar -->

			<div class="ml-5 md:w-3/12">
			
				<div class="border rounded-xl shadow-sm bg-white p-4">

					<h2 class="font-semibold border-b-2 border-green pb-2 mb-4">Most Viewed</h2>
					<?php get_sidebar(); ?>

				</div>

			</div>

		</div>
	</div>

<?php

get_footer();