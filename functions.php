<?php
    function nittanymillwork_setup (){
        $postFormats = array ( 'aside', 'gallery', 'quote', 'image', 'video', 'link' );
        $menus =  array( 'top'   => 'Top Menu');
        $html5 = array('comment-form', 'comment-list', 'gallery', 'caption', 'search-form');
        
        load_theme_textdomain('nittanymillwork');
        
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('post-formats', $postFormats);
        add_theme_support('html5', $html5);
        
        add_image_size('posts', 9999, 600, true );
        
        register_nav_menus( $menus );
    }
    add_action( 'after_setup_theme', 'nittanymillwork_setup' );
    
    function scriptsAndStyles(){
		wp_enqueue_style( 'Font-Awesome', get_theme_file_uri( '/assets/css/font-awesome.min.css' ) );
        wp_enqueue_style( 'bootstrap', get_theme_file_uri( '/assets/css/bootstrap.min.css' ) );
        wp_enqueue_style( 'style', get_stylesheet_uri() );
        wp_enqueue_script( 'jQuery', get_theme_file_uri( '/assets/js/jquery.min.js' ) );
        wp_enqueue_script( 'popper', get_theme_file_uri( '/assets/js/popper.min.js' ) );
        wp_enqueue_script( 'bootstrapjs', get_theme_file_uri( '/assets/js/bootstrap.min.js' ) );
        wp_enqueue_script( 'rellax', get_theme_file_uri( '/assets/js/rellax.min.js' ) );
        wp_enqueue_script( 'bowser', get_theme_file_uri( '/assets/js/bowser.min.js' ) );
        wp_enqueue_script( 'script', get_theme_file_uri( '/assets/js/script.js' ) );
    }
    add_action( 'wp_enqueue_scripts', 'scriptsAndStyles' );

// Custom Comments Callback
function html5blankcomments($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<div class="comment-author vcard">
	<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
	<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
	</div>
<?php if ($comment->comment_approved == '0') : ?>
	<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
	<br />
<?php endif; ?>

	<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
		<?php
			printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
		?>
	</div>

	<?php comment_text() ?>

	<div class="reply">
	<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php } ?>