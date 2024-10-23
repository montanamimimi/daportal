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
        <nav class="nav-wrapper">
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

<section class="welcome">
    
        <div class="welcome-left">
            <div class="head">

                <div class="half-container">
                    <h2>Давайте делать Продукты вместе</h2>
                    <div class="downloads">
                        <a class="download-item" style="padding-left: 88px;" href="<?php echo get_field('download_pdf', 'options'); ?>" download>
                            <img src="<?php echo get_theme_file_uri('/images/book.png'); ?>" alt="Скачать" style="top: 10px;left: -24px;">
                            <div class="text">
                                Скачай презентацию
                                <svg width="90" height="1" viewBox="0 0 90 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="-4.37114e-08" y1="0.5" x2="90" y2="0.499992" stroke="white"/>
                                </svg>

                            </div>
                        </a>
                        <div class="download-item">
                            <img src="<?php echo get_theme_file_uri('/images/laptop.png'); ?>" alt="Заполнить" style="top: 10px;left:10px;">
                            <div class="text">
                                Заполни бриф
                                <svg width="90" height="1" viewBox="0 0 90 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="-4.37114e-08" y1="0.5" x2="90" y2="0.499992" stroke="white"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="foot">
                <div class="half-container">
                    <h3>Свяжитесь с нами</h3>
                    <div class="social-welcome">

                        <div class="social-welcome__item">
                            <div class="icon">
                                <img src="<?php echo get_theme_file_uri('/images/welcome-email.png'); ?>" alt="Email">
                            </div>
                            <div class="text">E-mail</div>
                        </div>
                        <div class="social-welcome__item">
                            <div class="icon">
                                <img src="<?php echo get_theme_file_uri('/images/welcome-viber.png'); ?>" alt="Viber">
                            </div>
                            <div class="text">Viber</div>
                        </div>
                        <div class="social-welcome__item">
                            <div class="icon">
                                <img src="<?php echo get_theme_file_uri('/images/welcome-whatsapp.png'); ?>" alt="Whatsapp">
                            </div>
                            <div class="text">WhatsApp</div>
                        </div>
                        <div class="social-welcome__item">
                            <div class="icon">
                                <img src="<?php echo get_theme_file_uri('/images/welcome-telegram.png'); ?>" alt="Telegram">
                            </div>
                            <div class="text">Telegram</div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
        <div class="welcome-right">
            <div class="head">
                <div class="half-container">
                    <img src="<?php echo get_theme_file_uri('/images/robot2.png'); ?>" alt="Заполнить" style="top: 10px;left:10px;">
                </div>                
            </div>
            <div class="foot">
                <div class="half-container">
                    <div class="meet">
                        <h3>  — Познакомимся?</h3>
                        <div class="robot">
                            <div class="img-container">
                                <img src="<?php echo get_theme_file_uri('/images/robot3.png'); ?>" alt="">
                            </div>
                            <div class="">История начинается здесь...</div>
                        </div>
                    </div>
                    <div id="start" class="meet-btn">
                        <div class="btn btn--middle btn--violet">
                            Начать
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
</section>

<?php get_footer(); ?>

