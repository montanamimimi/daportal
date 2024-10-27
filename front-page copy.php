<?php get_header(); ?>

<?php 

$bannerWebId = get_field('banner_web', 'options');
$bannerWebUrl = wp_get_attachment_url($bannerWebId, 'large');

$bannerMobId = get_field('banner_mob', 'options');
$bannerMobUrl = wp_get_attachment_url($bannerMobId, 'large');

$bannerRotateId = get_field('banner_rotated', 'options');
$bannerRotateUrl = wp_get_attachment_url($bannerRotateId, 'large');

?>

<section class="mainpage-banner"
    style="background-image:url(<?php echo $bannerWebUrl; ?>)"
>
    <div class="container"
        style="background-image:url(<?php echo $bannerMobUrl; ?>)"
    >
        <h1>
            <?php echo get_field('banner_header', 'options'); ?> 
        </h1>               
    </div>
</section>

<section class="mainpage-banner--mob">
    <div class="banner-wrapper" style="background-image:url(<?php echo $bannerRotateUrl; ?>)">
        <div class="container">
            <h1><?php echo get_field('banner_header', 'options'); ?></h1>   
            <h2><?php echo get_field('banner_desc', 'options'); ?> </h2>
            <h3 class="header--short"><?php echo get_field('banner_long_desc', 'options'); ?></h3>
        </div>
    </div>
</section>

<section class="nav-tabs" >
        <nav class="nav-wrapper" data-direction="0">
            <ul class="nav-list">
                <li class="tab tab--middle tab--dark">Идея</li>
                <li class="tab tab--middle tab--dark">Надём клиентов</li>
                <li class="tab tab--middle tab--dark">Бренд-дизайн</li>
                <li class="tab tab--middle tab--dark">Разработка</li>
                <li class="tab tab--middle tab--dark">Идея</li>
                <li class="tab tab--middle tab--dark">Надём клиентов</li>
                <li class="tab tab--middle tab--dark">Бренд-дизайн</li>
                <li class="tab tab--middle tab--dark">Разработка</li>
                <li class="tab tab--middle tab--dark">Идея</li>
                <li class="tab tab--middle tab--dark">Надём клиентов</li>
                <li class="tab tab--middle tab--dark">Бренд-дизайн</li>
                <li class="tab tab--middle tab--dark">Разработка</li>
                <li class="tab tab--middle tab--dark">Идея</li>
            </ul>
        </nav>
    
</section>

<section class="web-headers">
    <div class="container container-flex">
        <h2><?php echo get_field('banner_desc', 'options'); ?> </h2>
        <h3 class="header--short"><?php echo get_field('banner_long_desc', 'options'); ?></h3>
    </div>
</section>

<section class="steps">
    <div class="container">

        <div class="mob-only">
            <h2>Услуги</h2>
        </div>

        <?php         

            $posts = daportal_get_stages('idea');            

            foreach ($posts as $key => $post) {
                get_template_part('template-parts/step', false, array(
                    'id' => $key,
                    'post' => $post,
                    'gallery' => true,
                    'order' => true,
                ));
            }
            
        ?>
    </div>
</section>

<section class="web-headers">
    <div class="container container-flex">
        <h2>Стек технологий</h2>
        <h3 class="header--long">Используйте передовые технологии для создания интуитивно привлекательных интерфейсов</h3>
    </div>
</section>

<section class="icons nav-tabs" >
    <nav class="nav-wrapper nav-wrapper--square" data-direction="0">   
            <ul class="nav-list">
                <li class="tab tab--square">
                    <img src="<?php echo get_theme_file_uri('/images/icon1.png'); ?>" alt="Figma">
                    Figma
                </li>
                <li class="tab tab--square">
                    <img src="<?php echo get_theme_file_uri('/images/icon2.png'); ?>" alt="React">
                    React
                </li>
                <li class="tab tab--square">
                    <img src="<?php echo get_theme_file_uri('/images/icon3.png'); ?>" alt="JavaScript">
                    JavaScript
                </li>
                <li class="tab tab--square">
                    <img src="<?php echo get_theme_file_uri('/images/icon4.png'); ?>" alt="Webpack">
                    Webpack
                </li>
                <li class="tab tab--square">
                    <img src="<?php echo get_theme_file_uri('/images/icon5.png'); ?>" alt="Less">
                    Less
                </li>
                <li class="tab tab--square">
                    <img src="<?php echo get_theme_file_uri('/images/icon6.png'); ?>" alt="Ruby">
                    Ruby
                </li>
                <li class="tab tab--square">
                    <img src="<?php echo get_theme_file_uri('/images/icon7.png'); ?>" alt="Rails">
                    Rails
                </li>
                <li class="tab tab--square">
                    <img src="<?php echo get_theme_file_uri('/images/icon8.png'); ?>" alt="Nginx">
                    Nginx
                </li>
                <li class="tab tab--square">
                    <img src="<?php echo get_theme_file_uri('/images/icon9.png'); ?>" alt="Php">
                    Php
                </li>
                <li class="tab tab--square">
                    <img src="<?php echo get_theme_file_uri('/images/icon11.png'); ?>" alt="JavaScript">
                    JavaScript
                </li>
            </ul>
        </nav>
</section>
<section class="icons nav-tabs" >
    <nav class="nav-wrapper nav-wrapper--square nav-wrapper--right" data-direction="1">   
            <ul class="nav-list">
                <li class="tab tab--square">
                    <img src="<?php echo get_theme_file_uri('/images/icon1.png'); ?>" alt="Figma">
                    Figma
                </li>
                <li class="tab tab--square">
                    <img src="<?php echo get_theme_file_uri('/images/icon2.png'); ?>" alt="React">
                    React
                </li>
                <li class="tab tab--square">
                    <img src="<?php echo get_theme_file_uri('/images/icon3.png'); ?>" alt="JavaScript">
                    JavaScript
                </li>
                <li class="tab tab--square">
                    <img src="<?php echo get_theme_file_uri('/images/icon4.png'); ?>" alt="Webpack">
                    Webpack
                </li>
                <li class="tab tab--square">
                    <img src="<?php echo get_theme_file_uri('/images/icon5.png'); ?>" alt="Less">
                    Less
                </li>
                <li class="tab tab--square">
                    <img src="<?php echo get_theme_file_uri('/images/icon6.png'); ?>" alt="Ruby">
                    Ruby
                </li>
                <li class="tab tab--square">
                    <img src="<?php echo get_theme_file_uri('/images/icon7.png'); ?>" alt="Rails">
                    Rails
                </li>
                <li class="tab tab--square">
                    <img src="<?php echo get_theme_file_uri('/images/icon8.png'); ?>" alt="Nginx">
                    Nginx
                </li>
                <li class="tab tab--square">
                    <img src="<?php echo get_theme_file_uri('/images/icon9.png'); ?>" alt="Php">
                    Php
                </li>
                <li class="tab tab--square">
                    <img src="<?php echo get_theme_file_uri('/images/icon11.png'); ?>" alt="JavaScript">
                    JavaScript
                </li>
                <li class="tab tab--square">
                    <img src="<?php echo get_theme_file_uri('/images/icon9.png'); ?>" alt="Php">
                    Php
                </li>
                <li class="tab tab--square">
                    <img src="<?php echo get_theme_file_uri('/images/icon11.png'); ?>" alt="JavaScript">
                    JavaScript
                </li>
            </ul>
        </nav>
</section>

<section class="container-banner">
    <div class="container">
        <div class="banner"
            style="background-image:url(<?php echo get_theme_file_uri('/images/banner_bgc_1.png'); ?>); background-size:cover"
        >
            <div class="banner__description">
                <h2>Разработай сервис или приложение</h2>
                <p>От концепции до реализации: полный цикл разработки, для создания уникального продукта</p>
                <div class="btn btn--large btn--violet" style="width: 80%;">Подробнее</div>
            </div>
            <div class="banner__image">
                <img src="<?php echo get_theme_file_uri('/images/banner_1_device.png')?>" alt="Macbook and mobile">
            </div>
        </div>
    </div>
</section>


<section class="web-headers">
    <div class="container container-flex">
        <h2>Этапы реализации</h2>
        <h3 class="header--long"></h3>
    </div>
</section>

<section class="steps">
    <div class="container">
        <?php         

        $posts = daportal_get_stages('stages');            

        foreach ($posts as $key => $post) {
            get_template_part('template-parts/step', false, array(
                'id' => $key,
                'post' => $post,
                'gallery' => false,
                'order' => false,
            ));
        }

        ?>
    </div>
</section>


<section class="container-banner">
    <div class="container">
        <div class="banner"
            style="background-image:url(<?php echo get_theme_file_uri('/images/banner_bgc_2.png'); ?>)"
        >
            <div class="banner__description--small">
                
                <h3 class="bald">Получите консультацию</h3>
                <p>Свяжитесь с нами удобным способом</p>
                <div class="banner-social">
                    <div class="banner-social__item">
                        <img src="<?php echo get_theme_file_uri('/images/whatsapp.png')?>" alt="Whatsapp">
                        <span>WhatsApp</span>
                    </div>
                    <div class="banner-social__item">
                        <img src="<?php echo get_theme_file_uri('/images/telega.png')?>" alt="Telegram">
                        <span>Telegram</span>
                    </div>
                    <div class="banner-social__item">
                        <img src="<?php echo get_theme_file_uri('/images/viber.png')?>" alt="Viber">
                        <span>Viber</span>
                    </div>
                </div>
            </div>
            <div class="banner__image">
                <img src="<?php echo get_theme_file_uri('/images/robot.png')?>" alt="Macbook and mobile" style="margin-right: 100px;">
            </div>
        </div>
    </div>
</section>

<section class="web-headers">
    <div class="container container-flex">
        <h2>Посмотрите еще</h2>
        <h3 class="header--long"></h3>
    </div>
</section>

<section class="look-more">
    <div class="container">
    <div class="three-blocks-slider">
            <div class="slides">
                <div class="slide">
                    <div class="feature"  style="background-image:url(<?php echo get_theme_file_uri('/images/feature1.png'); ?>)">

                        <div class="header">
                            Разработка
                        </div>

                    </div>

                </div>
                <div class="slide">
                    <div class="feature" style="background-image:url(<?php echo get_theme_file_uri('/images/feature2.png'); ?>)">

                        <div class="header">
                            Стратегия
                        </div>

                    </div>

                </div>
                <div class="slide">
                    <div class="feature" style="background-image:url(<?php echo get_theme_file_uri('/images/feature3.png'); ?>)">

                        <div class="header">
                            Копирайтинг
                        </div>

                    </div>

                </div>
            </div>
            <div class="dots">
                <div class="dot"></div>
                <div class="dot dot--active"></div>
                <div class="dot"></div>
            </div>
        </div>

        <div class="all-items">
            <a href="#">Все услуги</a>
        </div>
    </div>
</section>

<section class="web-headers">
    <div class="container container-flex">
        <h2>Наши статьи</h2>
        <h3 class="header--long"></h3>
    </div>
</section>

<section class="articles">
    <div class="container">
        <div class="three-blocks-slider">
            <div class="slides">
                <div class="slide">
                    <div class="article">
                        <div class="image">
                            <img src="<?php echo get_theme_file_uri('/images/article3.png'); ?>" alt="">
                        </div>
                        <div class="header">
                            Статья
                        </div>
                        <div class="description">
                            Жанр журналистики, в котором автор ставит задачу проанализировать общественные ситуации, процессы, явления, прежде всего..
                        </div>
                    </div>

                </div>
                <div class="slide">
                    <div class="article">
                        <div class="image">
                            <img src="<?php echo get_theme_file_uri('/images/article2.png'); ?>" alt="">
                        </div>
                        <div class="header">
                            Статья
                        </div>
                        <div class="description">
                            Жанр журналистики, в котором автор ставит задачу проанализировать общественные ситуации, процессы, явления, прежде всего..
                        </div>
                    </div>

                </div>
                <div class="slide">
                    <div class="article">
                        <div class="image">
                            <img src="<?php echo get_theme_file_uri('/images/article1.png'); ?>" alt="">
                        </div>
                        <div class="header">
                            Статья
                        </div>
                        <div class="description">
                            Жанр журналистики, в котором автор ставит задачу проанализировать общественные ситуации, процессы, явления, прежде всего..
                        </div>
                    </div>

                </div>
            </div>
            <div class="dots">
                <div class="dot"></div>
                <div class="dot dot--active"></div>
                <div class="dot"></div>
            </div>
        </div>

        <div class="all-items">
            <a href="#">Все статьи</a>
        </div>
    </div>
</section>

<?php 
    get_template_part('template-parts/welcome');
?>

<?php get_footer(); ?>

