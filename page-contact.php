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
                        <h1 class="text-uppercase h1-lg m-0">Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="internalPageThree">
            <div class="container p-4 wrapper">
                <div class="row m-0">
                    <div class="col-12 col-md px-0 mb-5 mb-md-0 pr-md-2">
                        <h1 class="text-uppercase h1-sm text-left mb-3">Let's Connect</h1>
                        <p class="p-sm-gray">
                            We would be glad to answer your questions.
                        </p>
<p>
5970 S Eagle Valley Rd., Bldg 4<br>
Julian, PA 16844<br>
<br>
<b>814-692-2235</b>
</p>
<br>

                    <div class="col-12 col-md p-0 pl-md-3">
                        <h2 class="h2-md text-left mb-4">Drop us a line</h2>
                       <?php gravity_form( 1, $display_title = false, $display_description = false, $display_inactive = false, $field_values = null, $ajax = false, 10, $echo = true ); ?>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php get_footer(); ?>