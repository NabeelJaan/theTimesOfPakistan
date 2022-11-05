<?php
    $id = '' . $block['id'];
    $count = get_field('number_of_post');
?>

<section id="<?php echo esc_attr($id); ?>" class="visual-stories">
    
    <div class="conatainer max-w-6xl mx-auto pb-24 px-8 lg:px-0">


        <div>
            <h2 class="border-b-2 border-green mb-12">
                <span class="posts_header relative text-white font-medium font-jost inline-block pl-26px pr-5 pb-2 pt-1 text-2xl">
                    <?php the_field('visual_stories_title'); ?>
                </span>
            </h2>
        </div>


        <div class="owl-carousel owl-theme mx-auto">
            <div class="item">
                <a class=" realtive" href="#">
                    <div class="content-wrapper-vs hover-effect overflow-hidden min-h-480px max-w-350px sm:max-w-350px lg:max-w-270px lg:min-h-480px rounded-xl bg-no-repeat bg-center bg-cover " style="background-image:linear-gradient(180deg, rgba(25, 25, 25, 0.01)30%, rgba(25, 25, 25,0.7)70%); ">
                        <img class=" mix-blend-multiply w-300px" src="/wp-content/uploads/2022/10/maya-ali.jpeg" alt="">

                    </div>
                    <div class="crousel-text absolute bottom-4 left-3 max-w-350px sm:max-w-350px lg:max-w-270px">
                        <h6 class="font-Jost font-bold text-2xl text-white text-left pr-8">
                            Maya ali stuns in stylish blue outfit
                        </h6>
                        <h4 class="font-Jost font-regular text-xl text-light-gray text-left pt-4" >
                            Entertainment
                        </h4>
                    </div>

                </a>
            </div>
        </div>
    </div>
    
</section>