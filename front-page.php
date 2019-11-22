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
                        <div class='rellax bg-homeInteriork3' data-rellax-speed="-7" data-rellax-percentage="0.5">
                        </div>
                    </div>
                    <div class="content p-4 pt-md-136 px-lg-80 pt-lg-236 h-100vh">
                        <h1 class="text-uppercase h1-lg">When Quality Matters</h1>
                        <p class="p-header">A premium window and door company with custom cabinetry and millwork.</p>
                        <a href="/brands" class="btn btn-header">Our Exclusive Product Brands</a>
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
                        <h1 class="text-uppercase h1-sm">Specialists in Architectural and Historical Homes</h1>
                        <p class="p-clean">Nittany Millwork Co. provides rural Pennsylvania with exclusive access to premium window and door product lines, with a team of experts to support your project. This ensures that every project is done correctly, the first time, every time.</p>
                        <a href="/brands" class="btn btn-border">Windows and Doors Premium Brands</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0 sectionPromise">
            <div class="row m-0">
                <div class="col p-0 parWrapper">
                    <div class="parallax-window">
                        <div class='rellax bg-homeInteriork2' data-rellax-speed="-7" data-rellax-percentage="0.5">
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
              
                    <div class="col-12 p-0 topQuality">
                        <h2 class="text-uppercase h2-md">Top quality window and door products you can count on</h2>
                        <a href="brands" class="btn mx-auto btn-solid" data-toggle="modal" data-target=".modal">Setup a free quote</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>
