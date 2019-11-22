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
                    <h1 class="text-uppercase h1-lg"><?php echo single_post_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <?php 
            if(have_posts()):   
                while(have_posts()):    
                    the_post();
                    the_content();
                endwhile;   
            endif;
        ?>
    </div>
</section>

<?php get_footer(); ?>