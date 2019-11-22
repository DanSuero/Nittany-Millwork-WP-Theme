<?php
/*
* @package Nittany Millwork
* @subpackage Nittany Millwork
* @since 1.0
* @version 1.0
*/
?>
    <?php get_header(); ?>
    <section id="welcome" <?php post_class(); ?>>
        <div class="container-fluid p-0 sectionProducts">
            <div class="row m-0">
                <div class="col p-0 parWrapper">
                    <div id="parallax-1" class="parallax-window">
                        <div class='rellax bg-homeHero' data-rellax-speed="-7" data-rellax-percentage="0.5">
                        </div>
                    </div>
                    <div class="content p-4 pt-md-136 px-lg-80 pt-lg-236 h-100vh">
                        <h1 class="text-uppercase h1-lg">When Quality Matters</h1>
                        <p class="p-header">Experts on Premium Windows &amp; Doors</p>
                        <a href="/services" class="btn btn-header">Our Product Expertise</a>
                        <div class="scrollDwnArr">
                            <span>Scroll Down</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sectionQuality">
            <div class="container p-4 wrapper">
                <div class="row m-0">
                    <div class="col p-0 quality">
                        <h1 class="text-uppercase h1-sm">Right the first time</h1>
                        <p class="p-clean">Nittany Millwork Co. provides premium home remodeling and design product sourcing and expertise from the most trusted brands with the highest quality craftsmanship to you. This ensures that every project is done correctly, the first time, every time.</p>
                        <a href="/services" class="btn btn-border">Windows and Doors for Kitchens and Remodeling</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0 sectionPromise">
            <div class="row m-0">
                <div class="col p-0 parWrapper">
                    <div class="parallax-window">
                        <div class='rellax bg-homeInterior' data-rellax-speed="-7" data-rellax-percentage="0.5">
                        </div>
                    </div>
                    <div class="content p-4 p-lg-80">
                        <h1 class="text-uppercase h1-lg">Our Promise</h1>
                        <p class="p-header">Your products will be the highest quality and your service will be excellent.</p>
                        <a href="contact" class="btn btn-header">Free product quote</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sectionBrand">
            <div class="container p-4 wrapper">
                <div class="row m-0 brand">
                    <div class="col-12 p-0">
                        <h2 class="text-uppercase h2-md">Brands you can trust</h2>
                    </div>
                    <div class="col-6 col-md-auto p-0">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-Loewen.png" />
                    </div>
                    <div class="col-6 col-md-auto p-0">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-SierraPacific.png" />
                    </div>
                    <div class="col-6 col-md-auto p-0">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-ProVia.png" />
                    </div>
                    <div class="col-6 col-md-auto p-0">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-Azek.png" />
                    </div>
                    <div class="col-6 col-md-auto p-0">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-Emtek.png" />
                    </div>
                    <div class="col-12 p-0">
                        <hr />
                    </div>
                    <div class="col-12 p-0">
                        <h2 class="text-uppercase h2-md">Nittany Millwork brands and products all feature:</h2>
                    </div>
                    <div class="col-12 col-md-6 px-1 px-auto features">
                        <div class="row m-0">
                            <div class="col-12 p-0 text-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/energy-efficient.png" />
                            </div>
                            <div class="col-12 p-0">
                                <h2 class="text-uppercase h2-md mb-3">Energy Efficient</h2>
                                <p class="p-sm-gray">Our preferred suppliers offer new and replacement products that are manufactured to exceed the standard energy efficiency level. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 features">
                        <div class="row m-0">
                            <div class="col-12 p-0 text-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/saving-money.png" />
                            </div>
                            <div class="col-12 p-0">
                                <h2 class="text-uppercase h2-md mb-3">We Save You Money</h2>
                                <p class="p-sm-gray">Open communication, efficient and quality products, and professional craftsmanship help to reduce costs at every turn.</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 break">
                    </div>
                    <div class="col-12 p-0 topQuality">
                        <h2 class="text-uppercase h2-md">Top quality products you can count on</h2>
                        <a href="contact" class="btn mx-auto btn-solid" data-toggle="modal" data-target=".modal">Contact us for free estimate</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>
