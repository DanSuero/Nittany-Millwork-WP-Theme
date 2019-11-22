<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg m-0">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="container-fluid header p-3 p-sm-4 py-lg-25 px-lg-80">
        <div class="row m-0">
            <div class="col p-0 justify-content-center">
                <nav class="navbar navbar-expand-md p-0">
                    <a class="navbar-brand p-0" href="/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-nittanyMillWork.png" alt="Nittany Millwork Co" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Collapse Menu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div id="nav" class="collapse navbar-collapse">
                        <?php 
                            wp_nav_menu(array(
                                'menu' => 'Top Menu',
                                'theme_location' => 'top',
                                'container' => 'ul',
                                'menu_class' => 'navbar-nav ml-auto'
                            )); 
                        ?>
                    </div>
                </nav>
            </div>
        </div>
    </header>