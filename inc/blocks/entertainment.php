<?php
    $id = 'Entertainment-' . $block['id'];
    $count = get_field('number_of_post');
?>

<div id="<?php echo esc_attr($id); ?>" class="Entertainment-section">
    <div class="container mx-auto max-w-6xl pb-24 px-8 xl:px-0">

        <div class="sm:flex justify-between border-b-2 border-green mb-12">

            <div>
                <h2 class="">
                    <span class="posts_header relative text-white font-medium font-jost inline-block pl-26px pr-5 pb-2 pt-1 text-2xl">
                        <?php the_field('entertainment_title'); ?>
                    </span>
                </h2>
            </div>


            <div class="tabs flex content-center justify-end">
                <ul id="entertainment-tabs-nav" class="flex justify-end items-center">
                    <li class="mr-5 relative"><a class="font-Jost text-sm text-center text-heading-color hover:text-green " href="#tabs-1">Feartured</a></li>
                    <li class="mr-5 relative"><a class="font-Jost text-sm text-center text-heading-color hover:text-green " href="#tabs-2">Hollywood</a></li>
                    <li class="relative"><a class="font-Jost text-sm text-center text-heading-color hover:text-green " href="#tabs-3">Bollywood</a></li>
                </ul>
            </div>
        </div>

        <div id="entertainment-tabs-content">
            <div id="tabs-1" class= "entertainment-tab-content">
                <div class="grid  grid-cols-1 grid-rows-2 md:grid-cols-2 md:grid-rows-1 lg:grid-cols-3 lg:grid-rows-1 grid-flow-row gap-5">
                    <div class="entertainment-p1 flex justify-center">
                        <div class="relative">
                            <a class="" href="#">
                                <div class="  overflow-hidden hover-effect  rounded-xl   max-w-370px bg-no-repeat bg-center bg-cover " style="background-image:linear-gradient(180deg, rgba(25, 25, 25, 0.01)30%, rgba(25, 25, 25,0.7)70%); ">
                                    <img class=" mix-blend-multiply " src="/wp-content/uploads/2022/10/FotoJet-38-18.jpg" alt="">
                                </div>
                                <div class=" absolute bottom-5 left-3 max-w-370px">
                                    <h6 class="font-Jost font-medium text-xl text-white text-left pr-5">
                                        Maya ali stuns in stylish blue outfit, ali stuns in stylish blue outfit
                                    </h6>                       
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="entertainment-p2 flex justify-center">
                        <div class="relative">
                            <a class="" href="#">
                                <div class="  overflow-hidden hover-effect  rounded-xl  max-w-370px bg-no-repeat bg-center bg-cover " style="background-image:linear-gradient(180deg, rgba(25, 25, 25, 0.01)30%, rgba(25, 25, 25,0.7)70%); ">
                                    <img class=" mix-blend-multiply " src="/wp-content/uploads/2022/10/FotoJet-38-18.jpg" alt="">
                                </div>
                                <div class=" absolute bottom-5 left-3 max-w-370px">
                                    <h6 class="font-Jost font-medium text-xl text-white text-left pr-5">
                                        Maya ali stuns in stylish blue outfit, ali stuns in stylish blue outfit
                                    </h6>                       
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="entertainment-p3 hidden lg:block">
                        <div class="relative">
                            <a class="" href="#">
                                <div class="  overflow-hidden hover-effect  rounded-xl   max-w-370px bg-no-repeat bg-center bg-cover " style="background-image:linear-gradient(180deg, rgba(25, 25, 25, 0.01)30%, rgba(25, 25, 25,0.7)70%); ">
                                    <img class=" mix-blend-multiply " src="/wp-content/uploads/2022/10/FotoJet-38-18.jpg" alt="">
                                </div>
                                <div class=" absolute bottom-5 left-3 max-w-370px">
                                    <h6 class="font-Jost font-medium text-xl text-white text-left pr-5">
                                        Maya ali stuns in stylish blue outfit, ali stuns in stylish blue outfit
                                    </h6>                       
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="grid  grid-cols-1 grid-rows-3 md:grid-cols-1 md:grid-rows-3 lg:grid-cols-3 lg:grid-rows-1 grid-flow-row gap-0 md:gap-5">
                    <div class="pt-2.5">
                        <div class="post-box py-2.5">
                            <a class="flex items-center" href="#">
                                <div class="  overflow-hidden hover-effect  rounded-md  h-12 max-w-85px" >
                                    <img class="" src="/wp-content/uploads/2022/10/FotoJet-38-18.jpg" alt="">
                                </div>
                                <h6 class="title pl-5 font-Jost text-heading-color text-sm ">SA’s Mark Boucher to step down as head coach after T20 World Cup</h6>
                            </a>
                        </div>
                        <div class="post-box py-2.5">
                            <a class="flex items-center" href="#">
                                <div class="  overflow-hidden hover-effect  rounded-md  h-12 max-w-85px" >
                                    <img class="" src="/wp-content/uploads/2022/10/FotoJet-38-18.jpg" alt="">
                                </div>
                                <h6 class="title pl-5 font-Jost text-heading-color text-sm ">SA’s Mark Boucher to step down as head coach after T20 World Cup</h6>
                            </a>
                        </div>
                        <div class="post-box py-2.5">
                            <a class="flex items-center" href="#">
                                <div class="  overflow-hidden hover-effect  rounded-md  h-12 max-w-85px" >
                                    <img class="" src="/wp-content/uploads/2022/10/FotoJet-38-18.jpg" alt="">
                                </div>
                                <h6 class="title pl-5 font-Jost text-heading-color text-sm ">SA’s Mark Boucher to step down as head coach after T20 World Cup</h6>
                            </a>
                        </div>

                    </div>
                    <div class="pt-2.5">
                        <div class="post-box py-2.5">
                            <a class="flex items-center" href="#">
                                <div class="  overflow-hidden hover-effect  rounded-md  h-12 max-w-85px" >
                                    <img class="" src="/wp-content/uploads/2022/10/FotoJet-38-18.jpg" alt="">
                                </div>
                                <h6 class="title pl-5 font-Jost text-heading-color text-sm ">SA’s Mark Boucher to step down as head coach after T20 World Cup</h6>
                            </a>
                        </div>
                        <div class="post-box py-2.5">
                            <a class="flex items-center" href="#">
                                <div class="  overflow-hidden hover-effect  rounded-md  h-12 max-w-85px" >
                                    <img class="" src="/wp-content/uploads/2022/10/FotoJet-38-18.jpg" alt="">
                                </div>
                                <h6 class="title pl-5 font-Jost text-heading-color text-sm ">SA’s Mark Boucher to step down as head coach after T20 World Cup</h6>
                            </a>
                        </div>
                        <div class="post-box py-2.5">
                            <a class="flex items-center" href="#">
                                <div class="  overflow-hidden hover-effect  rounded-md  h-12 max-w-85px" >
                                    <img class="" src="/wp-content/uploads/2022/10/FotoJet-38-18.jpg" alt="">
                                </div>
                                <h6 class="title pl-5 font-Jost text-heading-color text-sm ">SA’s Mark Boucher to step down as head coach after T20 World Cup</h6>
                            </a>
                        </div>

                    </div>
                    <div class="pt-2.5">
                        <div class="post-box py-2.5">
                            <a class="flex items-center" href="#">
                                <div class="  overflow-hidden hover-effect  rounded-md  h-12 max-w-85px" >
                                    <img class="" src="/wp-content/uploads/2022/10/FotoJet-38-18.jpg" alt="">
                                </div>
                                <h6 class="title pl-5 font-Jost text-heading-color text-sm ">SA’s Mark Boucher to step down as head coach after T20 World Cup</h6>
                            </a>
                        </div>
                        <div class="post-box py-2.5">
                            <a class="flex items-center" href="#">
                                <div class="  overflow-hidden hover-effect  rounded-md  h-12 max-w-85px" >
                                    <img class="" src="/wp-content/uploads/2022/10/FotoJet-38-18.jpg" alt="">
                                </div>
                                <h6 class="title pl-5 font-Jost text-heading-color text-sm ">SA’s Mark Boucher to step down as head coach after T20 World Cup</h6>
                            </a>
                        </div>
                        <div class="post-box py-2.5">
                            <a class="flex items-center" href="#">
                                <div class="  overflow-hidden hover-effect  rounded-md  h-12 max-w-85px" >
                                    <img class="" src="/wp-content/uploads/2022/10/FotoJet-38-18.jpg" alt="">
                                </div>
                                <h6 class="title pl-5 font-Jost text-heading-color text-sm ">SA’s Mark Boucher to step down as head coach after T20 World Cup</h6>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="grid  grid-cols-1 grid-rows-3 md:grid-cols-1 md:grid-rows-3 lg:grid-cols-3 lg:grid-rows-1 grid-flow-row gap-2.5 md:gap-5">
                    <div class="blogs-links pt-2.5">
                        <div class="inline-flex items-center">
                            <h3 class="font-Jost font-medium text-md text-heading-color ">Events</h3>
                            <span class="pl-2 "><i class="text-md font-bold far fa-greater-than"></i></span>
                        </div>
                        <ul>
                            <li class="py-2.5 border-b border-gray border-solid relative">
                                <div class="post-points pl-3.5">
                                    <a  href="#"><p class="font-Jost text-heading-color text-base hover:text-green" >Explosive England can beat anyone</p></a>
                                </div>
                            </li>
                            <li class="py-2.5 border-b border-gray border-solid relative">
                                <div class="post-points pl-3.5">
                                    <a  href="#"><p class="font-Jost text-heading-color text-base hover:text-green" >Explosive England can beat anyone</p></a>
                                </div>
                            </li>
                            <li class="py-2.5 border-b border-gray border-solid relative">
                                <div class="post-points pl-3.5">
                                    <a  href="#"><p class="font-Jost text-heading-color text-base hover:text-green" >Explosive England can beat anyone</p></a>
                                </div>
                            </li> 
                        </ul>
                    </div>
                    <div class="blogs-links pt-2.5">
                        <div class="inline-flex items-center">
                            <h3 class="font-Jost font-medium text-md text-heading-color ">Reviews</h3>
                            <span class="pl-2 "><i class="text-md font-bold far fa-greater-than"></i></span>
                        </div>
                        <ul>
                            <li class="py-2.5 border-b border-gray border-solid relative">
                                <div class="post-points pl-3.5">
                                    <a  href="#"><p class="font-Jost text-heading-color text-base hover:text-green" >Explosive England can beat anyone</p></a>
                                </div>
                            </li>
                            <li class="py-2.5 border-b border-gray border-solid relative">
                                <div class="post-points pl-3.5">
                                    <a  href="#"><p class="font-Jost text-heading-color text-base hover:text-green" >Explosive England can beat anyone</p></a>
                                </div>
                            </li>
                            <li class="py-2.5 border-b border-gray border-solid relative">
                                <div class="post-points pl-3.5">
                                    <a  href="#"><p class="font-Jost text-heading-color text-base hover:text-green" >Explosive England can beat anyone</p></a>
                                </div>
                            </li> 
                        </ul>
                    </div>
                    <div class="blogs-links pt-2.5">
                        <div class="inline-flex items-center">
                            <h3 class="font-Jost font-medium text-md text-heading-color ">Music</h3>
                            <span class="pl-2 "><i class="text-md font-bold far fa-greater-than"></i></span>
                        </div>
                        <ul>
                            <li class="py-2.5 border-b border-gray border-solid relative">
                                <div class="post-points pl-3.5">
                                    <a  href="#"><p class="font-Jost text-heading-color text-base hover:text-green" >Explosive England can beat anyone</p></a>
                                </div>
                            </li>
                            <li class="py-2.5 border-b border-gray border-solid relative">
                                <div class="post-points pl-3.5">
                                    <a  href="#"><p class="font-Jost text-heading-color text-base hover:text-green" >Explosive England can beat anyone</p></a>
                                </div>
                            </li>
                            <li class="py-2.5 border-b border-gray border-solid relative">
                                <div class="post-points pl-3.5">
                                    <a  href="#"><p class="font-Jost text-heading-color text-base hover:text-green" >Explosive England can beat anyone</p></a>
                                </div>
                            </li> 
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

