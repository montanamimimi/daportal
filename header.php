<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Digital Agensy</title>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="header">
            <div class="container">
                <div class="header-web">
            
                    <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'primary', 
                        'menu_class' => 'menu',             
                        'container' => 'nav',               
                        'container_class' => 'menu-container',
                    ));
                    ?>

                    <div class="feedback">
                        <div class="btn btn--middle btn--violet">Связаться</div>
                    </div>

                </div>
            </div>
        </div>
    </header>
