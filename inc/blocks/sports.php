<?php
    $id = 'Sports-' . $block['id'];
    $count = get_field('number_of_post');
?>

<div id="<?php echo esc_attr($id); ?>" class="sports-section">

    <div class="container mx-auto max-w-6xl pb-24 px-8 xl:px-0 ">
        <div class="sm:flex justify-between border-b-2 border-green mb-12">

            <div>
                <h2>
                    <span class="sports-post relative text-white font-medium font-jost inline-block pl-26px pr-5 pb-2 pt-1 text-2xl">
                        <?php the_field('sports_title'); ?>
                    </span>
                </h2>
            </div>

            <div class="tabs flex content-center justify-end">
                <ul id="sports-tabs-nav" class="flex justify-end items-center">

                    <?php
                        $terms = get_terms([
                            'taxonomy' => 'category',
                            'hide_empty' => false,
                            'include' => array(get_field('show_on_home_page')),
                        ]);
                        
                        foreach($terms as $term):
                            $cat_image  =   get_field('category_image' ,$term);
                    ?>
                    

                        <li class="mr-5 relative">
                            <a class="font-Jost text-sm text-center text-heading-color hover:text-green " href="#tabs-4"><?php echo $term->name;?></a>
                        </li>
                        

                    <?php 
                        endforeach;
                    ?>
                    
                </ul>
            </div>

        </div>



        <div id="sports-tabs-content">

            <div id="tabs-4" class= "sports-tab-content">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 pt-6 border-b border-gray border-dashed">
                    <div class="col-span-2 lg:pr-5 lg:pb-5 lg:border-r border-gray border-dashed">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="flex justify-center md:block">
                                <div class="relative">
                                    <a class="" href="#">
                                        <div class="content-wrapper-ls overflow-hidden hover-effect  rounded-xl  min-h-210px max-w-370px bg-no-repeat bg-center bg-cover " style="background-image:linear-gradient(180deg, rgba(25, 25, 25, 0.01)30%, rgba(25, 25, 25,0.7)70%); ">
                                            <img class=" mix-blend-multiply w-370px" src="/wp-content/uploads/2022/10/download.jpg" alt="">
                                        </div>
                                        <div class=" absolute bottom-5 max-w-370px">
                                            <h6 class="font-Jost font-medium text-2xl text-white pl-2.5 text-left pr-8">
                                                Maya ali stuns in stylish blue outfit
                                            </h6>                       
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="image-content-right pt-2.5">
                                <ul>
                                    <li class="py-2.5 border-b border-gray border-dashed relative">
                                        <div class="post-points pl-3.5">
                                            <a  href="#"><p class="font-Jost text-heading-color text-base hover:text-green" >Explosive England can beat anyone</p></a>
                                        </div>
                                    </li>
                                    <li class="py-2.5 border-b border-gray border-dashed relative">
                                        <div class="post-points pl-3.5">
                                            <a  href="#"><p class="font-Jost text-heading-color text-base hover:text-green" >Explosive England can beat anyone</p></a>
                                        </div>
                                    </li>
                                    <li class="py-2.5 border-b border-gray border-dashed relative">
                                        <div class="post-points pl-3.5">
                                            <a  href="#"><p class="font-Jost text-heading-color text-base hover:text-green" >Explosive England can beat anyone</p></a>
                                        </div>
                                    </li>
                                    <li class="py-2.5 border-b border-gray border-dashed relative">
                                        <div class="post-points pl-3.5">
                                            <a  href="#"><p class="font-Jost text-heading-color text-base hover:text-green" >Explosive England can beat anyone</p></a>
                                        </div>
                                    </li>
                                    <li class="py-2.5 border-b border-gray border-dashed relative">
                                        <div class="post-points pl-3.5">
                                            <a  href="#"><p class="font-Jost text-heading-color text-base hover:text-green" >Explosive England can beat anyone</p></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="pt-5">
                            <div class="grid grid-cols-2 grid-rows-2  sm:grid-cols-4 sm:grid-rows-1 gap-5">
                                <div class= "flex justify-center">
                                    <div>
                                        <a class="" href="#">
                                            <div class="overflow-hidden hover-effect  rounded-md  sm:h-100px max-w-174px" >
                                                <img class="" src="/wp-content/uploads/2022/10/download.jpg" alt="">
                                            </div>
                                            <h6 class="title mt-3.5 font-Jost text-heading-color font-semibold text-xs hover:text-green max-w-190px">PAK vs ENG: All four matches in Karachi registered full house</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class= "flex justify-center">
                                    <div>
                                        <a class="" href="#">
                                            <div class="overflow-hidden hover-effect  rounded-md  sm:h-100px max-w-174px" >
                                                <img class="" src="/wp-content/uploads/2022/10/download.jpg" alt="">
                                            </div>
                                            <h6 class="title mt-3.5 font-Jost text-heading-color font-semibold text-xs hover:text-green max-w-190px">PAK vs ENG: All four matches in Karachi registered full house</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class= "flex justify-center">
                                    <div>
                                        <a class="" href="#">
                                            <div class="overflow-hidden hover-effect  rounded-md  sm:h-100px max-w-174px" >
                                                <img class="" src="/wp-content/uploads/2022/10/download.jpg" alt="">
                                            </div>
                                            <h6 class="title mt-3.5 font-Jost text-heading-color font-semibold text-xs hover:text-green max-w-190px">PAK vs ENG: All four matches in Karachi registered full house</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class= "flex justify-center">
                                    <div>
                                        <a class="" href="#">
                                            <div class="overflow-hidden hover-effect  rounded-md  sm:h-100px max-w-174px" >
                                                <img class="" src="/wp-content/uploads/2022/10/download.jpg" alt="">
                                            </div>
                                            <h6 class="title mt-3.5 font-Jost text-heading-color font-semibold text-xs hover:text-green max-w-190px">PAK vs ENG: All four matches in Karachi registered full house</h6>
                                        </a>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 lg:col-span-1" >
                        <div class="post-box py-2.5">
                            <a class="flex items-center" href="#">
                                <div class="  overflow-hidden hover-effect  rounded-md  h-12 max-w-85px" >
                                    <img class="" src="/wp-content/uploads/2022/10/download.jpg" alt="">
                                </div>
                                <h6 class="title pl-5 font-Jost text-heading-color text-sm ">SA’s Mark Boucher to step down as head coach after T20 World Cup</h6>
                            </a>
                        </div>
                        <div class="post-box py-2.5">
                            <a class="flex items-center" href="#">
                                <div class="  overflow-hidden hover-effect  rounded-md  h-12 max-w-85px" >
                                    <img class="" src="/wp-content/uploads/2022/10/download.jpg" alt="">
                                </div>
                                <h6 class="title pl-5 font-Jost text-heading-color text-sm ">SA’s Mark Boucher to step down as head coach after T20 World Cup</h6>
                            </a>
                        </div>
                        <div class="post-box py-2.5">
                            <a class="flex items-center" href="#">
                                <div class="  overflow-hidden hover-effect  rounded-md  h-12 max-w-85px" >
                                    <img class="" src="/wp-content/uploads/2022/10/download.jpg" alt="">
                                </div>
                                <h6 class="title pl-5 font-Jost text-heading-color text-sm ">SA’s Mark Boucher to step down as head coach after T20 World Cup</h6>
                            </a>
                        </div>
                        <div class="post-box py-2.5">
                            <a class="flex items-center" href="#">
                                <div class="  overflow-hidden hover-effect  rounded-md  h-12 max-w-85px" >
                                    <img class="" src="/wp-content/uploads/2022/10/download.jpg" alt="">
                                </div>
                                <h6 class="title pl-5 font-Jost text-heading-color text-sm ">SA’s Mark Boucher to step down as head coach after T20 World Cup</h6>
                            </a>
                        </div>
                        <div class="post-box py-2.5">
                            <a class="flex items-center" href="#">
                                <div class="  overflow-hidden hover-effect  rounded-md  h-12 max-w-85px" >
                                    <img class="" src="/wp-content/uploads/2022/10/download.jpg" alt="">
                                </div>
                                <h6 class="title pl-5 font-Jost text-heading-color text-sm ">SA’s Mark Boucher to step down as head coach after T20 World Cup</h6>
                            </a>
                        </div>
                        <div class="post-box py-2.5">
                            <a class="flex items-center" href="#">
                                <div class="  overflow-hidden hover-effect  rounded-md  h-12 max-w-85px" >
                                    <img class="" src="/wp-content/uploads/2022/10/download.jpg" alt="">
                                </div>
                                <h6 class="title pl-5 font-Jost text-heading-color text-sm ">SA’s Mark Boucher to step down as head coach after T20 World Cup</h6>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            
            
        </div>  

    </div>
</div>

