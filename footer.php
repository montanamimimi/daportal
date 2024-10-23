<footer>

    <div class="container">
        <div class="menus">

            <div class="menu">
                <ul class="menu-header">
                    <li>Услуги</li>
                </ul>

                <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'secondary1', 
                        'menu_class' => 'menu',             
                        'container' => 'nav',              
                        'container_class' => 'menu-container',
                    ));            
                ?>
            </div>

            <div class="menu">
                <ul class="menu-header">
                    <li>&nbsp;</li>
                </ul>

                <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'secondary2', 
                        'menu_class' => 'menu',             
                        'container' => 'nav',              
                        'container_class' => 'menu-container',
                    ));            
                ?>
            </div>

            <div class="menu">
                <ul class="menu-header">
                    <li>Экоситема</li>
                </ul>

                <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'secondary3', 
                        'menu_class' => 'menu',             
                        'container' => 'nav',              
                        'container_class' => 'menu-container',
                    ));            
                ?>
            </div>

        </div>
    </div>
    <div class="social">
        <div class="container">
            <div class="social-header">
                    Социальные сети
            </div>
            <div class="social-items">

                <div class="social-item">
                    <div class="icon">
                        <img src="<?php echo get_theme_file_uri('/images/bottom-fb.png'); ?>" alt="Facebook">
                    </div>
                    <div class="text">Facebook</div>
                </div>
                <div class="social-item">
                    <div class="icon">
                        <img src="<?php echo get_theme_file_uri('/images/bottom-y.png'); ?>" alt="YouTube">
                    </div>
                    <div class="text">YouTube</div>
                </div>
                <div class="social-item">
                    <div class="icon">
                        <img src="<?php echo get_theme_file_uri('/images/bottom-i.png'); ?>" alt="Instagram">
                    </div>
                    <div class="text">Instagram</div>
                </div>
                <div class="social-item">
                    <div class="icon">
                        <img src="<?php echo get_theme_file_uri('/images/bottom-in.png'); ?>" alt="LinkedIn">
                    </div>
                    <div class="text">LinkedIn</div>
                </div>
                <div class="social-item">
                    <div class="icon">
                        <img src="<?php echo get_theme_file_uri('/images/bottom-x.png'); ?>" alt="Twitter">
                    </div>
                    <div class="text">Twitter</div>
                </div>
                <div class="social-item">
                    <div class="icon">
                        <img src="<?php echo get_theme_file_uri('/images/bottom-vk.png'); ?>" alt="ВКонтакте">
                    </div>
                    <div class="text">ВКонтакте</div>
                </div>

            </div>
        </div>
    </div>

    <div class="inspire">
        <p>Будущее здесь.</p>
        <div class="copy">&copy;2024</div>
    </div>
    
</footer>
<?php wp_footer(); ?>

</body>
</html>