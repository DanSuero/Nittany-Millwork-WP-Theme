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
                        <h1 class="text-uppercase h1-lg">Areas of Expertise</h1>
                        <p class="p-header">Your answer is a phone call away.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="product">
            <div class="container p-4 wrapper">
                <div class="row m-0 brand">
                    <div class="col-12 p-0">
                        <h2 class="text-uppercase text-center h2-lg">We know the brands you need.</h2>
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
                        <h3 class="text-center h3-sm">We are experts in premium building materials.</h3>
<p>
Nittany Millworks Recommends OSI Maxx for all window and door installations. We also recommend having a factory trained technician on site to demonstrate proper install procedures due to the premium nature of the products we distribute.
</p>
<br><br>
</div>

                    


<div class="section">
  <div class="row">
    <div class="col text-center">
<img src="http://nittanymillwor.wpengine.com/wp-content/uploads/2017/10/pexels-photo-276551-1-e1509474755677.jpeg" width="200px"/>
<h2 class="text-uppercase h2-md">Windows</h2>
<p class="text-center"><b>Brands we know</b></p>
<p class="text-center">Loewen, Kolbe, Sierra Pacific, ProVia, Solar Innovations</p>
    </div>
    <div class="col text-center">
<img src="http://nittanymillwor.wpengine.com/wp-content/uploads/2017/10/pexels-photo-276551-1-e1509474755677.jpeg" width="200px" />
<h2 class="text-uppercase h2-md">Windows</h2>
<p class="text-center"><b>Brands we know</b></p>
<p class="text-center">Loewen, Kolbe, Sierra Pacific, ProVia, Solar Innovations</p>
    </div>
    <div class="col text-center">
<img src="http://nittanymillwor.wpengine.com/wp-content/uploads/2017/10/pexels-photo-276551-1-e1509474755677.jpeg" width="200px" />
<h2 class="text-uppercase h2-md">Windows</h2>
<p class="text-center"><b>Brands we know</b></p>
<p class="text-center">Loewen, Kolbe, Sierra Pacific, ProVia, Solar Innovations</p>
    </div>
  </div>
</div>

        </div>
</section>

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
                   

<div class="sectionQuality">
            <div class="container p-4 wrapper">
                <div class="row m-0">
                    <div class="col p-0 quality">
                        <h1 class="text-uppercase h1-sm">Right the first time</h1>
                        <p class="p-clean">Nittany Millwork Co. provides premium home remodeling and design product sourcing and expertise from the most trusted brands with the highest quality craftsmanship to you. This ensures that every project is done correctly, the first time, every time.</p>
                        <a href="/contact" class="btn btn-border">Contact us for a quote</a>
                    </div>
                </div>
            </div>
        </div>


<?php get_footer(); ?>