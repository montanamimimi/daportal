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

                <div class="header-mob">

                    <div id="burgerOn" class="burger">
                        <svg width="28" height="25" viewBox="0 0 28 25" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="27" height="24.36" transform="translate(0.5)" fill="url(#pattern0_1_835)"/>
                        <defs>
                        <pattern id="pattern0_1_835" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_1_835" transform="scale(0.0243902 0.027027)"/>
                        </pattern>
                        <image id="image0_1_835" width="41" height="37" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACkAAAAlCAYAAADfosCNAAAACXBIWXMAABCcAAAQnAEmzTo0AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAABRSURBVHgB7dVRFUBQGATh4QhGMkSRhCia4E9x9x7zPWyEWdCPDM+HbPtUQ7YLSWqnYj6T7e7mcRay3UhSOxXzjWxXxXxFktS1epyTbMeIlOUF0HEYpurflZMAAAAASUVORK5CYII="/>
                        </defs>
                        </svg>
                    </div>
                    
                    <div class="burder-list">

                        <div class="container">
                            <div id="burgerOff" class="burger">
                                <svg width="28" height="25" viewBox="0 0 28 25" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="27" height="24.36" transform="translate(0.5)" fill="url(#pattern0_1_835)"/>
                                <defs>
                                <pattern id="pattern0_1_835" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_1_835" transform="scale(0.0243902 0.027027)"/>
                                </pattern>
                                <image id="image0_1_835" width="41" height="37" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACkAAAAlCAYAAADfosCNAAAACXBIWXMAABCcAAAQnAEmzTo0AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAABRSURBVHgB7dVRFUBQGATh4QhGMkSRhCia4E9x9x7zPWyEWdCPDM+HbPtUQ7YLSWqnYj6T7e7mcRay3UhSOxXzjWxXxXxFktS1epyTbMeIlOUF0HEYpurflZMAAAAASUVORK5CYII="/>
                                </defs>
                                </svg>
                            </div>
                            <?php 
                            wp_nav_menu(array(
                                'theme_location' => 'primary', 
                                'menu_class' => 'menu',             
                                'container' => 'nav',               
                                'container_class' => 'menu-container',
                            ));
                            ?>
                        </div>


                    </div>
            


                    <div class="feedback">
                        <div class="btn btn--middle btn--violet">Связаться</div>
                    </div>

                </div>
            </div>
        </div>
    </header>
