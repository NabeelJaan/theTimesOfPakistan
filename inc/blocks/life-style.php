<?php
    $id = 'life&Style-' . $block['id'];
    $count = get_field('number_of_post');
?>

<section id="<?php echo esc_attr($id); ?>" class="life-style relative md:px-4 xl:px-8">
    <div class="container max-w-6xl mx-auto pb-24 px-8 lg:px-0">

        <div>
            <h2 class="border-b-2 border-green mb-12">
                <span class="ls-head relative text-white font-medium font-jost inline-block pl-26px pr-5 pb-2 pt-1 text-2xl">
                    <?php the_field('life_and_style'); ?>
                </span>
            </h2>
        </div>

        <div class="grid grid-cols-1 grid-rows-9 md:grid-cols-2 md:grid-rows-5 lg:grid-cols-3 lg:grid-rows-3 grid-flow-row gap-5">
            
        <?php
            $terms = get_terms([
                'taxonomy' => 'category',
                'hide_empty' => false,
                'include' => array(get_field('show_on_home_page')),
            ]);
            
            foreach($terms as $term):
                $cat_image  =   get_field('category_image' ,$term);
            ?>
        
                <div class="health relative mx-auto ">

                    <?php
                        $the_query = new WP_Query( array( 
                            'category_name' => $term->name, 
                            'posts_per_page' => 1 
                        ) );

                        if ( $the_query->have_posts() ):
                            while ( $the_query->have_posts() ) : $the_query->the_post();
                                    $ex_id = get_the_ID();
                    ?>
                

                    <div class="inline-flex items-center">
                        <h3 class="font-Jost font-semibold text-lg text-heading-color pb-5"><?php echo $term->name;?></h3>
                        <span class="pl-2 pb-5" ><i class="text-md font-bold far fa-greater-than"></i></span>
                    </div>

                    <a class="realtive" href="/category/<?php echo $term->slug;?>">

                        <div class="bg-white shadow-sm rounded-xl">
                            <div class="hover-effect overflow-hidden min-h-210px max-w-370px bg-no-repeat bg-center bg-cover " style="background-image:linear-gradient(180deg, rgba(25, 25, 25, 0.01)30%, rgba(25, 25, 25,0.7)70%); ">
                                <div class="img mix-blend-multiply">
                                <?php the_post_thumbnail('lp-img', ['class' => 'w-full rounded-t-xl']); ?>
                            </div>

                            </div>

                            <div class="crousel-text-ls absolute bottom-24 left-3 max-w-370px">

                                <h6 class="font-Jost font-medium text-xl text-white text-left px-4 pb-5">
                                    <?php the_title(); ?>
                                </h6>                       
                            </div>

                            <div class="px-5 pb-8 pt-4">
                                <h4 class="font-Jost font-regula text-md text-black max-w-370px pt-2" ><?php the_excerpt(); ?></h4>
                            </div>

                        </div>

                    </a>

                    <?php
                        endwhile;
                        wp_reset_postdata();
                        endif;
                        ?>
                </div>

            <?php 
                endforeach;
            ?>


        </div>
    </div>

</section>