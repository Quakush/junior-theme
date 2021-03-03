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
                    <div class="options-slider__text">
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
                    <div class="options-slider__text">
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
                    <div class="options-slider__text">
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
                <ul class="join-us__slider-list">
                    <li class="join-us__slider-item  join-us__slider-item--active">
                        <div class="join-us__slider-item-img-wrap">
                            <img src="/wp-content/themes/js-corp/images/svg/student-woman.svg" alt="student picture">
                        </div>
                        <span class="join-us__slider-caption">Студент</span>
                    </li>
                    <li class="join-us__slider-item">
                        <div class="join-us__slider-item-img-wrap">
                            <img src="/wp-content/themes/js-corp/images/svg/specialist.svg" alt="student picture">
                        </div>
                        <span class="join-us__slider-caption">Специалист</span>
                    </li>
                    <li class="join-us__slider-item">
                        <div class="join-us__slider-item-img-wrap">
                            <img src="/wp-content/themes/js-corp/images/svg/innovator.svg" alt="student picture">
                        </div>
                        <span class="join-us__slider-caption">Новатор</span>
                    </li>
                    <li class="join-us__slider-item">
                        <div class="join-us__slider-item-img-wrap">
                            <img src="/wp-content/themes/js-corp/images/svg/investor.svg" alt="student picture">
                        </div>
                        <span class="join-us__slider-caption">Инвестор</span>
                    </li>
                    <li class="join-us__slider-item">
                        <div class="join-us__slider-item-img-wrap">
                            <img src="/wp-content/themes/js-corp/images/svg/business.svg" alt="student picture">
                        </div>
                        <span class="join-us__slider-caption">Бизнес</span>
                    </li>
                </ul>

                <ul class="bullets  join-us__bullets">
                    <li class="bullets__active" data="0"></li>
                    <li data="1"></li>
                    <li data="2"></li>
                    <li data="3"></li>
                    <li data="4"></li>
                </ul>
            </div>

            <?php get_template_part('/includes/block', 'sign_up');?>

        </div>  
    </section>

    <section class="pilot-project">
        <div class="container pilot-project__container">
            <div class="pilot-project__text-block">
                <h2 class="title__secondary">Проект для пилота</h2>
                <p class="pilot-project__text">
                    <span>Автоматизация процессов, сокращение издержек, новые продукты -</span>
                    <span>все это даст вашему бизнесу</span>
                    <span>рост и конкурентное</span>
                    <span>преимущество.</span>
                    <span>Мы осуществляем поиск</span>
                    <span>проектов под ваши</span>
                    <span>задачи и помогаем</span>
                    <span>интегрировать</span>
                    <span>в вашу компанию.</span>
                </p>
            </div>

            <div class="pilot-project__text-block">
                <h2 class="title__secondary">Новые кадры</h2>
                <p class="pilot-project__text">Поиск новых кадров один из основных бизнес - процессов в компании. Подходящих специалистов найти все сложнее. Наше партнерство с университетами позволит найти лучших специалистов и быть уверенным, что они готовы к выполнению ваших задач. </p>

                <a class="pilot-project__btn btn btn--big" href="/partnership/">Стать партнером</a>
            </div>

            
            <div class="pilot-project__text-block">
                <h2 class="title__secondary  pilot-project__text-block-title">
                    <span>Инвестируйте</span>
                    в стартапы
                    <span class="pilot-project__text-block-title-small">с первыми продажами</span>
                </h2>
                
                <p class="pilot-project__text">
                    <span>Мы ставим для себя задачу -</span>
                    <span>создать безопасный инструмент</span>
                    <span>инвестирования в стартапы ранних стадий.</span>
                    <span>Мы подберем проект специально для вас,</span>
                    <span>познакомим с командой</span>
                    <span>и после подтвержденного спроса</span>
                    <span>поможем осуществить сделку.</span>
                </p>
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

                <ul class="bullets  projects-slider__bullets">
                    <li class="bullets__active" data="0"></li>
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
