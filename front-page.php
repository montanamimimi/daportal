<?php get_header(); ?>

<?php 

$bannerWebId = get_field('banner_web', 'options');
$bannerWebUrl = wp_get_attachment_url($bannerWebId, 'large');

$bannerMobId = get_field('banner_mob', 'options');
$bannerMobUrl = wp_get_attachment_url($bannerMobId, 'large');

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

<section class="nav-tabs">
    <div class="container">
        <nav>
            <ul>
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
    </div>
</section>

<section class="web-headers">
    <div class="container container-flex">
        <h2><?php echo get_field('banner_desc', 'options'); ?> </h2>
        <h3 class="header--short"><?php echo get_field('banner_long_desc', 'options'); ?></h3>
    </div>
</section>

<section class="steps">
    <div class="container">

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

<section class="icons">
    <div class="container">
        ICONS
    </div>
</section>

<section class="container-banner">
    <div class="container">
        <div class="banner"
            style="background-image:url(<?php echo get_theme_file_uri('/images/banner_bgc_1.png'); ?>); background-size:cover"
        >
            <div class="banner__description">
                <h2>Разработай сервис или приложение</h2>
                <p>От концепции до реализации: полный цикл разработки,  для создания уникального продукта</p>
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

        </div>

        <div class="all-items">
            <a href="#">Все статьи</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>

