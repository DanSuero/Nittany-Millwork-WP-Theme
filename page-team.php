<?php
/*
* @package Nittany Millwork
* @subpackage Nittany Millwork
* @since 1.0
* @version 1.0
*/
?>
<?php get_header(); ?>
<section id="<?php echo single_post_title(); ?>" <?php post_class("container-fluid p-0") ?> >
   <div class="container-fluid p-0 pageTitle">
            <div class="row m-0">
                <div class="col p-0 parWrapper">
                    <div class="parallax-window">
                        <div class='rellax bg-filler' data-rellax-speed="-7" data-rellax-percentage="0.5" <?php if(has_post_thumbnail() && !is_home()): ?> style="background-image: url('<?php the_post_thumbnail_url('full'); ?>');" <?php endif; ?> >
                        </div>
                    </div>
                    <div class="content p-4 pt-md-136 p-lg-80 pt-lg-236">
                        <h1 class="text-uppercase h1-lg">Our Team</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="internalPageOne">
            <div class="container p-4 wrapper">
                <div class="row m-0">
                    <div class="col-12 p-0">
                        <h1 class="text-uppercase text-center h1-sm">Our experts</h1>
                        <p class="p-sm-gray text-center px-4">
                   
Nittany Millwork is led by a team of dedicated researchers, installers, and industry experts who are here to make sure you get the right product, for the right purpose, right on time.
                        </p>
                    </div>
                    <div class="w-100 my-5"></div>
                    <div class="col-12 col-md-auto p-0 pr-md-4 mb-3 mb-md-0 text-center">
                        <img class="img-fluid" src="/wp-content/uploads/2018/03/jeremy-davis-plane-kian.jpg" />
                    </div>
                    <div class="col-12 col-md p-0 pl-md-1">
                        <div class="row m-0">
                            <div class="col p-0">
                                <h3 class="h3-sm mb-2">
                                    Jeremy Davis
                                </h3>
                                <p class="p-sm-gray mb-4">
                             <p><b>Owner</b></p>
Together, Jeremy and his wife Aeriel began Nittany Millwork in 2016. Jeremy grew up learning quality construction from his Dad and carries that legacy over into everything Forefront does. He can usually be found fixing something or enjoying the outdoors.
                                
                            </div>
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="w-100 my-5"></div>
                    <div class="col-12 col-md-auto p-0 pr-md-4 mb-3 mb-md-0 text-center">
                        <img class="img-fluid" src="/wp-content/uploads/2018/03/margaret.jpg" />
                    </div>
                    <div class="col-12 col-md p-0 pl-md-1">
                        <div class="row m-0">
                            <div class="col p-0">
                                <h3 class="h3-sm mb-2">
                                    Mary Anne Colling
                                </h3>
                                <p class="p-sm-gray mb-4">
                                  <p><b>Outside Sales</b></p>
Staff bio
                               
                            </div>
                        </div>
                    </div>
   <div class="w-100 my-5"></div>
                    <div class="col-12 col-md-auto p-0 pr-md-4 mb-3 mb-md-0 text-center">
                        <img class="img-fluid" src="/wp-content/uploads/2018/03/olivia.jpg" />
                    </div>
                    <div class="col-12 col-md p-0 pl-md-1">
                        <div class="row m-0">
                            <div class="col p-0">
                                <h3 class="h3-sm mb-2">
                                    Olivia Chapla
                                </h3>
                                <p class="p-sm-gray mb-4">
                                  <p><b>Sales</b></p>
Staff bio
                               
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</section>
<?php get_footer(); ?>