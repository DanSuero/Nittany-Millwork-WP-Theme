<?php
/*
* @package Nittany Millwork
* @subpackage Nittany Millwork
* @since 1.0
* @version 1.0
*/
?>
<?php get_header(); ?>
<section class="container-fluid p-0">
    <div class="container-fluid p-0 pageTitle">
        <div class="row m-0">
            <div class="col p-0 parWrapper">
                <div class="parallax-window">
                    <div class='rellax bg-filler' data-rellax-speed="-7" data-rellax-percentage="0.5">
                    </div>
                </div>
                <div class="content p-4 pt-md-136 p-lg-80 pt-lg-236">
                    <h1 class="text-uppercase h1-lg"><?php if(is_home()): ?> Posts <?php else: echo single_post_title(); endif; ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <?php if(have_posts()):   while(have_posts()):    the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class("mb-5"); ?>>
            <h2 class="m-0"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
            <div class="mb-3">
                <span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
                <span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
            </div>
            <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail('posts', array( 'class' => 'img-fluid mb-2' )); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
            <?php the_content(); ?>
            <?php if(is_home()): ?>
                <span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
            <?php endif; ?>
        </article>
        <?php comments_template(); ?>
        <?php
            endwhile;   endif;
        ?>
    </div>
</section>
<?php get_footer(); ?>