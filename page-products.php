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
   <div class="container-fluid p-0 productTitle">
            <div class="row m-0">
                <div class="col p-0 parWrapper">
                    <div class="parallax-window">
                        <div class='rellax bg-homeInterior' data-rellax-speed="-7" data-rellax-percentage="0.5" <?php if(has_post_thumbnail() && !is_home()): ?> style="background-image: url('<?php the_post_thumbnail_url('full'); ?>');" <?php endif; ?> >
                        </div>
                    </div>
                    <div class="content p-4 pt-md-136 px-lg-80 pt-lg-236">
                        <h1 class="text-uppercase h1-lg">Product Experts</h1>
                        <p class="p-header">Window and door experts, not just order-takers.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="product">
            <div class="container p-4 wrapper">
                <div class="row m-0 brand">
                    <div class="col-12 p-0">
                        <h2 class="text-uppercase text-center h2-lg">We have researched and used nearly every major brand available regionally.</h2>
                    </div>
                    <div class="col-6 col-md-auto p-0">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-Loewen.png" />
                    </div>
                    <div class="col-6 col-md-auto p-0">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-JamesHardie.png" />
                    </div>
                    <div class="col-6 col-md-auto p-0">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-ProVia.png" />
                    </div>
                    <div class="col-6 col-md-auto p-0">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-SierraPacific.png" />
                    </div>
                    <div class="col-6 col-md-auto p-0">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-Azek.png" />
                    </div>
                    <div class="w-100 break"></div>
                    <div class="col-12 p-0">
                        <h3 class="text-center h3-sm">The missing piece of the puzzle:
 Why we exist.</h3>
<p>We have been specializing in the installation of premium products for years. However, finding dealers that specialize in knowing their product through and through is nearly impossible to find in PA. Nittany Millwork was born from the need for window and door experts - not just window and door order-takers.
</p>
<p>
We have researched or used nearly every major window brand available regionally and our expertise has pushed us to products that excel.</p>
<br><br>
                    </div>
                    <div class="col-12 col-md-6 p-0 pl-md-0 pr-md-3 features">
                        <div class="row m-0">
                            <div class="col-12 p-0 text-center feaImg">
                                <img src="http://nittanymillwor.wpengine.com/wp-content/uploads/2017/10/pexels-photo-276551-1-e1509474755677.jpeg" />
                            </div>
                            <div class="col-12 p-0">
                                <h2 class="text-uppercase text-center h2-md">Windows</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 p-0 pr-md-0 pl-md-3 features">
                        <div class="row m-0">
                            <div class="col-12 p-0 text-center feaImg">
                                <img src="http://nittanymillwor.wpengine.com/wp-content/uploads/2017/10/dublin-famous-colorful-doors-422844-e1509475495819.jpeg" />
                            </div>
                            <div class="col-12 p-0">
                                <h2 class="text-uppercase text-center h2-md">Doors</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 p-0">
                        <a href="/services" class="btn btn-border">Learn more about our services</a>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php get_footer(); ?>