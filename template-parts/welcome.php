<?php 

$interests = get_terms(array(
    'taxonomy' => 'interest',
    'hide_empty' => false, 
    'parent' => 0, 
));

$products = get_terms(array(
    'taxonomy' => 'products',
    'hide_empty' => false, 
    'parent' => 0, 
));



?>
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
        <div class="head head-welcome head--bgc" data-id="0">
            <div class="half-container half-container--end">
                <img src="<?php echo get_theme_file_uri('/images/robot2.png'); ?>" alt="" style="top: 10px;left:10px;">
            </div>                
        </div>
        <div class="foot foot-welcome" data-id="0">
            <div class="half-container" style="background-color:#24222C;">
                <div class="meet">
                    <h3>  — Познакомимся?</h3>
                    <div class="robot">
                        <div class="web-only img-container">
                            <img class="web-only" src="<?php echo get_theme_file_uri('/images/robot3.png'); ?>" alt="">
                        </div>
                        <div class="story-text">История начинается здесь...</div>
                    </div>
                </div>
                <div class="meet-btn">
                    <div id="start" class="btn btn--middle btn--violet">
                        Начать
                    </div>
                </div>
            </div>
        </div>
        
        <div class="head head-welcome welcome--hidden" data-id="1">
            <div class="half-container">
                <div class="meet">
                    <h3>  — Кто Вы?</h3>
                    <div class="robot">
                        <div class=" web-only img-container">
                            <img src="<?php echo get_theme_file_uri('/images/robot3.png'); ?>" alt="">
                        </div>
                        <div class="">Выберите свою сферу деятельности</div>

                    </div>
                    <div id="meetInterest" class="terms">
                                                
                        <?php 
                            foreach ($interests as $term) { ?>
                                <div class="term" data-id="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></div>
                                                                  
                                
                            <?php } ?>

                    </div>
                </div>
            </div>                
        </div>
        <div class="foot foot-welcome welcome--hidden" data-id="1">
            <div class="half-container half-container--column">
                <div class="progress">
                    <div class="progress__bar progress__bar--active"></div>
                    <div class="progress__bar"></div>
                    <div class="progress__bar"></div>
                    <div class="progress__bar"></div>
                </div>
                <div class="capture">
                    <div class="text">
                        <p class="web-only">При заполнении формы, вы получите предложение в течение 30 минут. Запрос по другим каналам связи обрабатывается до 2-х рабочих дней.</p>
                    </div>
                    <div class="buttons" style="margin-top: 10px;">
                        <div class="btn btn--square btn--dark back-button">
                            <svg width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 9C24.5523 9 25 8.55228 25 8C25 7.44772 24.5523 7 24 7V9ZM0.292892 7.29289C-0.0976315 7.68342 -0.0976315 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292892 7.29289ZM24 7L1 7V9L24 9V7Z" fill="white"/>
                            </svg>
                        </div>
                        <div class="btn btn--middle btn--violet next-button">Далее</div>
                    </div>

                </div>

            </div>
        </div>


        <div class="head head-welcome welcome--hidden" data-id="2">
            <div class="half-container">
                <div class="meet">
                    <h3>  — Что Вам нужно?</h3>
                    <div class="robot">
                        <div class="web-only img-container">
                            <img src="<?php echo get_theme_file_uri('/images/robot3.png'); ?>" alt="">
                        </div>
                        <div class="">Выберите одно или несколько направлений</div>

                    </div>
                    <div id="meetProducts" class="terms">
                                                
                        <?php 
                            foreach ($products as $term) { ?>
                                <div class="term" data-id="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></div>
                                                                  
                                
                            <?php } ?>

                    </div>
                </div>
            </div>                
        </div>
        <div class="foot foot-welcome welcome--hidden" data-id="2">
            <div class="half-container half-container--column">
                <div class="progress">
                    <div class="progress__bar"></div>
                    <div class="progress__bar progress__bar--active"></div>
                    <div class="progress__bar"></div>
                    <div class="progress__bar"></div>
                </div>
                <div class="capture">
                    <div class="text">
                        <p>&nbsp;</p>
                    </div>
                    <div class="buttons">
                        <div class="btn btn--square btn--dark back-button">
                            <svg width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 9C24.5523 9 25 8.55228 25 8C25 7.44772 24.5523 7 24 7V9ZM0.292892 7.29289C-0.0976315 7.68342 -0.0976315 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292892 7.29289ZM24 7L1 7V9L24 9V7Z" fill="white"/>
                            </svg>
                        </div>
                        <div class="btn btn--middle btn--violet next-button">Далее</div>
                    </div>

                </div>

            </div>
        </div>

        <div class="head head-welcome welcome--hidden" data-id="3">
            <div class="half-container">
                <div id="meetLists" class="meet">
                    <div class="list">
                        <div class="term-name"> </div>
                        <div class="counter"><span id="meetCounter" class="current">1</span>/<span class="all">3</span> </div>
                    </div>

                    <div  class="terms">
                        

                    </div>
                </div>
            </div>                
        </div>
        <div class="foot foot-welcome welcome--hidden" data-id="3">
            <div class="half-container half-container--column">
                <div class="progress">
                    <div class="progress__bar"></div>
                    <div class="progress__bar progress__bar--active"></div>
                    <div class="progress__bar"></div>
                    <div class="progress__bar"></div>
                </div>
                <div class="capture">
                    <div class="text">
                        <p>&nbsp;</p>
                    </div>
                    <div class="buttons">
                        <div class="btn btn--square btn--dark back-button">
                            <svg width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 9C24.5523 9 25 8.55228 25 8C25 7.44772 24.5523 7 24 7V9ZM0.292892 7.29289C-0.0976315 7.68342 -0.0976315 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292892 7.29289ZM24 7L1 7V9L24 9V7Z" fill="white"/>
                            </svg>
                        </div>
                        <div class="btn btn--middle btn--violet next-button">Далее</div>
                    </div>

                </div>

            </div>
        </div>      
        
        <div class="head head-welcome welcome--hidden" data-id="4">
            <div class="half-container">
                <div id="meetBoxes" class="meet">
                    <div class="list">
                        <div class="term-name">Ваши контакты</div> 
                    </div>                                           
                    
                    <div  class="terms">
                        <input id="meetName" type="text" placeholder="Имя">
                        <input id="meetPhone" type="phone" placeholder="Номер телефона">
                        <input id="meetEmail" type="email" placeholder="Электронная почта">

                    </div>
                    <div class="list" style="margin-top:60px; margin-bottom: 40px;">
                        <div class="term-name">— Как Вам удобнее связаться? </div> 
                    </div>
                   
                    <div class="boxes">
                        <label for="telega">
                            <input type="checkbox" name="telega" value="telega">
                            Telegram
                        </label>
                        <label for="whatsapp">
                            <input id="whatsapp" type="checkbox" name="whatsapp" value="whatsapp">
                            WhatsApp
                        </label>
                        <label for="viber">
                            <input id="viber" type="checkbox" name="viber" value="viber">
                            Viber
                        </label>

                        <label for="email">
                            <input id="email" type="checkbox" name="email" value="email">
                            Email
                        </label>
                    </div>                       
                </div>
            </div>                
        </div>
        <div class="foot foot-welcome welcome--hidden" data-id="4">
            <div class="half-container half-container--column">
                <div class="progress">
                    <div class="progress__bar"></div>
                    <div class="progress__bar"></div>
                    <div class="progress__bar progress__bar--active"></div>
                    <div class="progress__bar"></div>
                </div>
                <div class="capture">
                    <div class="text">
                        <p>&nbsp;</p>
                    </div>
                    <div class="buttons">
                        <div class="btn btn--square btn--dark back-button">
                            <svg width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 9C24.5523 9 25 8.55228 25 8C25 7.44772 24.5523 7 24 7V9ZM0.292892 7.29289C-0.0976315 7.68342 -0.0976315 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292892 7.29289ZM24 7L1 7V9L24 9V7Z" fill="white"/>
                            </svg>
                        </div>
                        <div class="btn btn--middle btn--violet next-button">Далее</div>
                    </div>

                </div>

            </div>
        </div>       
        
        <div class="head head-welcome welcome--hidden" data-id="5">
            <div class="half-container">
                <div class="meet">
                    <h3>  Ваши пожелания</h3>
                    <div class="robot">
                        <div class="web-only img-container">
                            <img src="<?php echo get_theme_file_uri('/images/robot3.png'); ?>" alt="">
                        </div>
                        <div class="">Оставьте ваши пожелания к выбранным услугам</div>

                    </div>
                    <div class="terms">

                        <textarea name="" id="textarea" placeholder="Комментарии" rows="12"></textarea>
                                                
                    </div>
                </div>
            </div>                
        </div>
        <div class="foot foot-welcome welcome--hidden" data-id="5">
            <div class="half-container half-container--column">
                <div class="progress">
                    <div class="progress__bar"></div>
                    <div class="progress__bar"></div>
                    <div class="progress__bar"></div>
                    <div class="progress__bar progress__bar--active"></div>
                </div>
                <div class="capture">
                    <div class="text">
                        <p>&nbsp;</p>
                    </div>
                    <div class="buttons">
                        <div class="btn btn--square btn--dark back-button">
                            <svg width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 9C24.5523 9 25 8.55228 25 8C25 7.44772 24.5523 7 24 7V9ZM0.292892 7.29289C-0.0976315 7.68342 -0.0976315 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292892 7.29289ZM24 7L1 7V9L24 9V7Z" fill="white"/>
                            </svg>
                        </div>
                        <div class="btn btn--middle btn--violet next-button">Далее</div>
                    </div>

                </div>

            </div>
        </div>

        <div class="head head-welcome welcome--hidden head--bgc" data-id="6">
            <div class="half-container half-container--end">
                <img src="<?php echo get_theme_file_uri('/images/robot4.png'); ?>" alt="" style="top: 10px;left:10px;">
            </div>                
        </div>
        <div class="foot foot-welcome welcome--hidden" data-id="6">
            <div class="half-container" style="background-color:#231A45;">
                <div class="meet">
                    <h3 style="font-weight:500">  Подзравляем!</h3>
                    <div class="robot">
                        <div class="text-last">История начинается здесь. <br>Ожидайте — впереди много интересного!</div>
                    </div>
                </div>
                <div class="meet-btn" style="margin-right:60px; margin-top: -20px;">
                    <div  class="btn btn--middle btn--violet next-button">
                        Вернуться
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
