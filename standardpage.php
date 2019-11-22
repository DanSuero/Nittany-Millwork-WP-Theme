<?php /* Template Name: Standard Page */ ?>
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
                        <h1 class="text-uppercase h1-lg"><?php the_field('head1'); ?></h1>
                        <p class="p-header"><?php the_field('head2'); ?></p>
                    </div>
                </div>
            </div>
        </div>

<div id="primary" class="site-content">
    <div id="content" role="main">

      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', 'page' ); ?>
        <?php comments_template( '', true ); ?>
      <?php endwhile; // end of the loop. ?>

    </div><!-- #content -->
  </div><!-- #primary -->
<?php the_content(); ?>
<?php get_footer(); ?>