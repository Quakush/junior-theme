<?php

$posts = get_posts( array(
    'numberposts' => 3,
    'category'    => 0,
    'orderby'     => 'date',
    'order'       => 'DESC',
));

get_header();

?>

<main>

    <section class="main-offer main-offer--main">
        <div class="container">
            <h1 class="title"><div class="title__strong"><span class="title__colored">WE </span>START</div>
                YOUR <span class="title__colored">IDEAS</span></h1>
            <div class="main-offer__text-block">
                <p>Junior Specialists Corporation - это современная, технологическая компания с распределенной командой. Мы создаем продукты из любой точки мира и верим, что они смогут улучшить жизнь любого человека. Хотите стать частью нашей компании?</p>
                <span>
                    Мы будем рады обсудить это с вами.
                </span>
            </div>
            
            <?php get_template_part('/includes/block', 'sign_up');?>
        </div>
    </section>

    <section class="our-mission">
        <div class="container">
            <div class="our-mission__text">
	            <h2 class="title__secondary  our-mission__title"><span class="title__colored">Наша</span> миссия</h2>
	            <p>
	                Мы специализируемся на предпосевной 
	                стадии стартапов, улучшаем ваши навыки, 
	                расширяем знания или дополняем команду. 
	                Помогая вам созреть, вывести проект на 
	                рынок и получить первые продажи. Наша 
	                программа акселерации - это возможность 
	                дать необходимый импульс вашему проекту.
	            </p>
            </div>
        </div>    
    </section>

    <section class="options-slider">
        <div class="container">

            <div class="options-slider__shown-container">
                <li class="options-slider__item  options-slider__item--green  options-slider__item--active">
                    <div class="option-slider__text">
                        <h2 class="title__secondary  options-slider__item-title">Дорога <span class="title__colored">в digital</span></h2>
                        <p>Junior Specialists Corporation - это возможность выбрать проффессию в сфере ИТ, пройти обучение в одном из онлайн-университетов и получить гарантированную практику в нашей компании!  
                        </p>
                    </div>
                    
                    <div class="options-slider__visual">
                        <img src="/wp-content/themes/js-corp/images/svg/student-with-graduation-cap.svg" width="125" alt="slider visual image">
                        <span class="options-slider__visual-title">Startup University</span>
                    </div>
                    <a class="btn btn--green btn--small options-slider__btn" href="#">Выбрать обучение</a>
                </li>
            </div>

            <div class="options-slider__paginator">
                <span class="options-slider__paginator-element  options-slider__paginator-element--back"></span>
                <span class="options-slider__paginator-element  options-slider__paginator-element--forward"></span>
                <span class="options-slider__paginator-page">01</span>
            </div>

            <ul class="options-slider__list">
                <li class="options-slider__item  options-slider__item--blue">
                    <div class="option-slider__text">
                        <h2 class="title__secondary  options-slider__item-title">
                            <span class="title__colored">Сделай</span> первый шаг
                        </h2>
                        <p>Junior Specialists Corporation - это возможность выбрать проффессию в сфере ИТ, пройти обучение в одном из онлайн-университетов и получить гарантированную практику в нашей компании!  
                        </p>
                    </div>
                    
                    <div class="options-slider__visual">
                        <img src="/wp-content/themes/js-corp/images/svg/start-up.svg" width="140" alt="slider visual image">
                        <span class="options-slider__visual-title">Создай STARTUP</span>
                    </div>
                    <a class="btn  btn--small options-slider__btn" href="#">Подать заявку</a>
                </li>

                <li class="options-slider__item  options-slider__item--red">
                    <div class="option-slider__text">
                        <h2 class="title__secondary  options-slider__item-title">
                            <span class="title__colored">КОММЕРЧЕСКАЯ</span>
                            РАЗРАБОТКА
                        </h2>
                        <p>Junior Specialists Corporation - это возможность выбрать проффессию в сфере ИТ, пройти обучение в одном из онлайн-университетов и получить гарантированную практику в нашей компании!  
                        </p>
                    </div>
                    
                    <div class="options-slider__visual">
                        <img src="/wp-content/themes/js-corp/images/svg/softtware-engineer.svg" width="140" alt="slider visual image">
                        <span class="options-slider__visual-title">Разработка проектов</span>
                    </div>
                    <a class="btn btn--small btn--accent options-slider__btn" href="#">Оставить заявку</a>
                </li>
            </ul>

        </div>
    </section>
   
    <section class="ecosystem">
        <div class="container">
            <h2 class="title__secondary ecosystem__title"><span>Экосистема</span> для обучения и создания проектов</h2>
            <p>Мы создали место, где вы сможете реализовать свои идеи, найти будущую профессию, пройти практику и найти партнеров.</p>

            <?php get_template_part('/includes/block', 'sign_up');?>
            <?php get_template_part('/includes/block', 'partners');?>
        </div>
    </section>

    <section class="join-us">
        <div class="container">
            <h2 class="title__secondary join-us__title">
                Присоединяйтесь к нам из любой точки мира
            </h2>

            <p><span>Junior Specialists Corporation -</span> это возможность выбрать проффессию<span>в сфере ИТ, пройти обучение</span>в одном из онлайн-университетов и получить гарантированную практику в нашей компании!</p>

            <div class="slider  join-us__slider">
                <figure class="slider__item item--one fade">
                    <img src="/wp-content/themes/js-corp/images/svg/student-woman.svg" alt="student picture">
                    <figcaption class="slider__caption">Студент</figcaption>

                </figure>

                <figure class="slider__item item--two fade">
                    <img src="/wp-content/themes/js-corp/images/svg/specialist.svg" alt="student picture">
                    <figcaption class="slider__caption">Специалист</figcaption>

                </figure>

                <figure class="slider__item item--three fade">
                    <img src="/wp-content/themes/js-corp/images/svg/innovator.svg" alt="student picture">
                    <figcaption class="slider__caption">Новатор</figcaption>

                </figure>

                <figure class="slider__item item--four fade">
                    <img src="/wp-content/themes/js-corp/images/svg/investor.svg" alt="student picture">
                    <figcaption class="slider__caption">Инвестор</figcaption>

                </figure>

                <figure class="slider__item item--five fade">
                    <img src="/wp-content/themes/js-corp/images/svg/business.svg" alt="student picture">
                    <figcaption class="slider__caption">Бизнес</figcaption>

                </figure>

                <div class="dots">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <span class="dot" onclick="currentSlide(4)"></span>
                    <span class="dot" onclick="currentSlide(5)"></span>
                </div>
            </div>

            <?php get_template_part('/includes/block', 'sign_up');?>

        </div>  
    </section>

    <section class="pilot-project">
        <div class="container pilot-project__container">
            <div class="pilot-project__text-block">
                <h2 class="title__secondary">Проект для пилота</h2>
                <p class="pilot-project__text pilot-project__text--mobile">Автоматизация процессов, сокращение издержек, новые продукты -<br>все это даст вашему бизнесу<br> рост и конкурентное<br>преимущество.<br>Мы осуществляем поиск<br>проектов под ваши<br> задачи и помогаем<br>интегрировать<br>в вашу компанию.</p>
                <p class="pilot-project__text pilot-project__text--desktop">Автоматизация процессов, сокращение издержек, новые продукты - все это даст вашему бизнесу рост и конкурентное преимущество. Мы осуществляем поиск проектов под ваши задачи и помогаем интегрировать в вашу компанию. </p>
            </div>

            <div class="pilot-project__text-block">
                <h2 class="title__secondary">Новые кадры</h2>
                <p class="pilot-project__text">Поиск новых кадров один из основных бизнес - процессов в компании. Подходящих специалистов найти все сложнее. Наше партнерство с университетами позволит найти лучших специалистов и быть уверенным, что они готовы к выполнению ваших задач. </p>

                <a class="pilot-project__btn btn btn--big" href="/partnership/">Стать партнером</a>
            </div>

            
            <div class="pilot-project__text-block">
                <h2 class="title__secondary pilot-project__text-block-title  pilot-project__text-block-title--mobile">Инвестируйте<br>в стартапы<span>с первыми продажами</span></h2>
                <h2 class="title__secondary pilot-project__text-block-title  pilot-project__text-block-title--desktop">Инвестируйте в стартапы с первыми продажами</h2>
                <p class="pilot-project__text  pilot-project__text--mobile">Мы ставим для себя задачу -<br>создать безопасный инструмент<br>инвестирования в стартапы ранних стадий.<br>Мы подберем проект специально для вас,<bt>познакомим с командой<br>и после подтвержденного спроса<br>поможем осуществить сделку. </p>
                <p class="pilot-project__text  pilot-project__text--desktop">Мы ставим для себя задачу - создать безопасный инструмент инвестирования в стартапы ранних стадий. Мы подберем проект специально для вас, познакомим с командой и после подтвержденного спроса поможем осуществить сделку. </p>
                <a class="pilot-project__btn btn btn--big" href="#">Подробнее</a>
            </div>

            
        </div>  
    </section>
    
    <section class="read-us">
        <div class="container">
            <div class="read-us__title-container"><h2 class="title__secondary read-us__title">Читайте нас</h2>
            <a class="read-us__link" href="/blog">Все статьи</a></div>

            <div class="projects-slider">
                <ul class="projects-slider__list">

                    <?php if ($posts) :
                    $i = 0;
                    foreach ($posts as $post) : ?>
                     
                        <li class="
                        <?php if($i === 0){echo "projects-slider__item--active";}?> projects-slider__item">
                            <div class="projects-slider__image-wrap">
                                <?php if(has_post_thumbnail()):?>

                                    <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>">

                                <?php endif;?>
                            </div>
                            <div class="projects-slider__item-caption">
                                <h4><?php the_title();?></h4>
                                <button class="btn  btn--accent  projects-slider__cat-btn" >
                                    foodtech
                                </button>
                                <p><?php the_content();?></p>
                            </div>
                        </li>
                        <?php $i++; ?>

                    <?php endforeach; endif; ?>

                </ul>

                <ul class="projects-slider__bullets">
                    <li data="0"></li>
                    <li data="1"></li>
                    <li data="2"></li>
                </ul> 
            </div>

            <p class="read-us__text">Мы собираем самые интересные новости о наших проектах, программах и наших партнерах. Будьте в курсе всех интересных событиях нашей компании.</p>

        <?php get_template_part('/includes/block', 'getnews');?>
        </div>
    </section>
    <?php get_template_part('/includes/block', 'ask_questions');?>

</main>



<?php get_footer();?>
