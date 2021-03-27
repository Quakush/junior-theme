<?php

$news_posts = get_posts(array(
    'post_type' => 'news',
    'post_status' => 'publish',
    'numberposts' => 3,
    'category' => 0,
    'orderby' => 'date',
    'order' => 'DESC',
));

get_header();

?>

<main>
    <section class="main-offer main-offer--main">
        <div class="container">
            <h1 class="title">
                <div class="title__strong">
                    <span class="title__colored">WE </span>START
                </div>
                <div class="title__small">
                  YOUR <span class="title__colored">IDEAS</span>
                </div>
            </h1>
            <div class="main-offer__text-block">
                <p>Junior Specialists Corporation - это современная, технологическая компания с распределенной командой. Мы создаем продукты из любой точки мира и верим, что они смогут улучшить жизнь любого человека.</p>
            </div>
            <?php get_template_part('/includes/block', 'sign_up'); ?>
        </div>
    </section>

    <section class="our-mission">
      <img class="clouds" src="/wp-content/themes/js-corp/images/svg/clouds.svg">
      <div class="our-mission__background-wrap">
        <div class="container">
            <div class="our-mission__text">
                <h2 class="title__secondary  our-mission__title">
                    <span class="title__colored">Наша</span> миссия
                </h2>
                <p>
                  Мы специализируемся на предпосевной
                  стадии стартапов, улучшаем ваши навыки,
                  расширяем знания и дополняем команду.
                  Помогаем вам созреть, вывести проект на
                  рынок и получить первые продажи. Наша
                  программа акселерации - это возможность
                  дать необходимый импульс вашему проекту.
                </p>
            </div>
        </div>
      </div>
      <img class="clouds  clouds--bottom" src="/wp-content/themes/js-corp/images/svg/clouds.svg">
    </section>

    <section class="options-slider">
      <div class="container">
        <div class="options-slider__shown-container">
            <article class="options-slider__article  options-slider__article--green  options-slider__article--active" data="1">
              <div class="options-slider__text">
                <h2 class="title__secondary  options-slider__item-title">Дорога <span class="title__colored">в digital</span></h2>
                <p>Junior Specialists Corporation - это возможность выбрать проффессию в сфере ИТ, пройти обучение в одном из онлайн-университетов и получить гарантированную практику в нашей компании!
                </p>
              </div>
              <div class="options-slider__visual">
                <img src="/wp-content/themes/js-corp/images/svg/student-with-graduation-cap.svg" width="222" alt="slider visual image">
                <span class="options-slider__visual-title">Startup University</span>
              </div>
              <a class="btn btn--green btn--small options-slider__btn" href="/all-courses">Выбрать обучение</a>
            </article>
        </div>
          <ul class="options-slider__list">
            <li data="1" class="options-slider__item  options-slider__item--hidden">
              <article class="options-slider__article  options-slider__article--green" data="1">
                <div class="options-slider__text">
                  <h2 class="title__secondary  options-slider__item-title">Дорога <span class="title__colored">в digital</span></h2>
                  <p>Junior Specialists Corporation - это возможность выбрать проффессию в сфере ИТ, пройти обучение в одном из онлайн-университетов и получить гарантированную практику в нашей компании!
                  </p>
                </div>
                <div class="options-slider__visual">
                  <img src="/wp-content/themes/js-corp/images/svg/student-with-graduation-cap.svg" width="222" alt="slider visual image">
                  <span class="options-slider__visual-title">Startup University</span>
                </div>
                <a class="btn btn--green btn--small options-slider__btn" href="/all-courses">Выбрать обучение</a>
            </article>
          </li>
            <li data="2" class="options-slider__item">
              <article class="options-slider__article  options-slider__article--blue" data="2">
                <div class="options-slider__text">
                  <h2 class="title__secondary  options-slider__item-title">СДЕЛАЙ <span class="title__colored">ПЕРВЫЙ ШАГ</span></h2>
                  <p>Junior Specialists Corporation - это первый в мире онлайн инкубатор для стартапов. Пройдите программу акселерации со своей идее и получите возможность стать резидентом и создать MVP. 
                  </p>
                </div>
                <div class="options-slider__visual">
                  <img src="/wp-content/themes/js-corp/images/svg/start-up.svg" width="222" alt="slider visual image">
                  <span class="options-slider__visual-title">Создай STARTUP</span>
                </div>
                <a class="btn  btn--small options-slider__btn" href="#">Подать заявку</a>
              </article>
            </li>

            <li data="3" class="options-slider__item">
              <article class="options-slider__article  options-slider__article--red" data="3">
                <div class="options-slider__text">
                  <h2 class="title__secondary  options-slider__item-title">КОММЕРЧЕСКАЯ<br><span class="title__colored">РАЗРАБОТКА</span></h2>
                  <p>Junior Specialists Corporation - это ваш надежный партнер в разработке информационных продуктов. Наши специалисты готовы к разработке сайтов, мобильных приложений и сложных систем.
                  </p>
                </div>
                <div class="options-slider__visual">
                  <img src="https://u99351.test-handyhost.ru/wp-content/themes/js-corp/images/svg/softtware-engineer.svg" width="222" alt="slider visual image">
                  <span class="options-slider__visual-title">Разработка проектов</span>
                </div>
                <a class="btn btn--accent btn--small options-slider__btn" href="#">Узнать больше</a>
              </article>
            </li>

          </ul>
        <div class="paginator-slider">
            <div class="paginator-slider__element  paginator-slider__element--back"></div>
            <div class="paginator-slider__element  paginator-slider__element--forward"></div>
            <span class="paginator-slider__line"></span>
            <div class="paginator-slider__page">01</div>
        </div>
      </div>
    </section>

    <!-- <section class="options-slider">
        <div class="container">
            <div class="options-slider__shown-container swiper-container">
                <ul class="options-slider__list swiper-wrapper">

                <li class="swiper-slide options-slider__item options-slider__item--green options-slider__item--active">
                    <div class="options-slider__text">
                      <h2 class="title__secondary  options-slider__item-title">Дорога<span class="title__colored">в digital</span></h2>
                      <p>Junior Specialists Corporation - это возможность выбрать проффессию в сфере ИТ, пройти обучение в одном из онлайн-университетов и получить гарантированную практику в нашей компании!
                      </p>
                    </div>
                    <div class="options-slider__visual">
                      <img src="https://u99351.test-handyhost.ru/wp-content/themes/js-corp/images/svg/student-with-graduation-cap.svg" width="222" alt="slider visual image">
                      <span class="options-slider__visual-title">Startup University</span>
                    </div>
                    <a class="btn btn--green btn--small options-slider__btn" href="/all-courses">Выбрать обучение</a>
                </li>

                <li class="swiper-slide options-slider__item  options-slider__item--blue  options-slider__item--active">
                    <div class="options-slider__text">
                      <h2 class="title__secondary  options-slider__item-title">СДЕЛАЙ<span class="title__colored">ПЕРВЫЙ ШАГ</span></h2>
                      <p>Текст текст текст текс ттекст текс ттекст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст
                      </p>
                    </div>
                    <div class="options-slider__visual">
                      <img src="https://u99351.test-handyhost.ru/wp-content/themes/js-corp/images/svg/start-up.svg" width="222" alt="slider visual image">
                      <span class="options-slider__visual-title">Создай STARTUP</span>
                    </div>
                    <a class="btn  btn--small options-slider__btn" href="#">Подать заявку</a>
                </li>

                <li class="swiper-slide options-slider__item  options-slider__item--red  options-slider__item--active">
                    <div class="options-slider__text">
                      <h2 class="title__secondary  options-slider__item-title">КОММЕРЧЕСКАЯ<br><span class="title__colored">РАЗРАБОТКА</span></h2>
                      <p>Текст текст текст текс ттекст текс ттекст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст
                      </p>
                    </div>
                    <div class="options-slider__visual">
                      <img src="https://u99351.test-handyhost.ru/wp-content/themes/js-corp/images/svg/softtware-engineer.svg" width="222" alt="slider visual image">
                      <span class="options-slider__visual-title">Разработка проектов</span>
                    </div>
                    <a class="btn btn--accent btn--small options-slider__btn" href="#">Оставить заявку</a>
                </li>

            </ul>
        </div>

        <div class="swiper-container swiper-small">
            <ul class="swiper-wrapper swiper-small__wrapper">
                <li class="swiper-slide options-slider__item options-slider__item--green swiper-small__item">
                    <div class="options-slider__text">
                      <h2 class="title__secondary  options-slider__item-title">
                        <span class="title__colored">Startup University</span>
                      </h2>
                      <p>Junior Specialists Corporation - это возможность выбрать проффессию в сфере ИТ, пройти обучение в одном из онлайн-университетов и получить гарантированную практику в нашей компании!
                      </p>
                    </div>
                    <div class="options-slider__visual options-slider__visual--small">
                      <img src="https://u99351.test-handyhost.ru/wp-content/themes/js-corp/images/svg/student-with-graduation-cap.svg" width="78" alt="slider visual image">
                      <span class="options-slider__visual-title">Startup University</span>
                    </div>
                    <a class="btn btn--green btn--small options-slider__btn" href="/all-courses">Выбрать обучение</a>
                </li>

                <li class="swiper-slide options-slider__item options-slider__item--blue swiper-small__item">
                    <div class="options-slider__text">
                      <h2 class="title__secondary  options-slider__item-title">
                        <span class="title__colored">КОММЕРЧЕСКАЯ РАЗРАБОТКА</span>
                      </h2>
                      <p>Junior Specialists Corporation - это возможность выбрать проффессию в сфере ИТ, пройти обучение в одном из онлайн-университетов и получить гарантированную практику в нашей компании!
                      </p>
                    </div>
                    <div class="options-slider__visual options-slider__visual--small">
                      <img src="https://u99351.test-handyhost.ru/wp-content/themes/js-corp/images/svg/start-up.svg" width="93" alt="slider visual image">
                      <span class="options-slider__visual-title">Создай STARTUP</span>
                    </div>
                    <a class="btn btn--small btn--accent options-slider__btn" href="#">Оставить заявку</a>
                </li>

                <li class="swiper-slide options-slider__item options-slider__item--red swiper-small__item">
                    <div class="options-slider__text">
                      <h2 class="title__secondary  options-slider__item-title">
                        <span class="title__colored">КОММЕРЧЕСКАЯ РАЗРАБОТКА</span>
                      </h2>
                      <p>Junior Specialists Corporation - это возможность выбрать проффессию в сфере ИТ, пройти обучение в одном из онлайн-университетов и получить гарантированную практику в нашей компании!
                      </p>
                    </div>
                    <div class="options-slider__visual options-slider__visual--small">
                      <img src="https://u99351.test-handyhost.ru/wp-content/themes/js-corp/images/svg/softtware-engineer.svg" width="86" alt="slider visual image">
                      <span class="options-slider__visual-title">Разработка проектов</span>
                    </div>
                    <a class="btn btn--small btn--accent options-slider__btn" href="#">Оставить заявку</a>
                </li>
            </ul>
            <div class="swiper-pagination-wrapper">
                <div class="options-slider__paginator-element  options-slider__paginator-element--back"></div>
                <div class="options-slider__paginator-element  options-slider__paginator-element--forward"></div>
                <span class="swiper-pagination__line"></span>
                <div class="options-slider__paginator swiper-pagination"></div>
            </div>
        </div>
        </div>
    </section>
 -->
    <section class="ecosystem">
      <img class="clouds" src="/wp-content/themes/js-corp/images/svg/clouds.svg">
      <div class="ecosystem__wrap">
        <div class="container">
            <div class="ecosystem__background-content">
              <img class="ecosystem__background-content-clouds" src="/wp-content/themes/js-corp/images/svg/clouds.svg" alt="background">
              <img class="ecosystem__background-content-phone" src="/wp-content/themes/js-corp/images/svg/phone.svg" alt="background">
              <img class="ecosystem__background-content-tablet" src="/wp-content/themes/js-corp/images/svg/tablet.svg" alt="background">
            </div>
            <h2 class="title__secondary ecosystem__title"><span>Экосистема</span> для обучения и создания проектов</h2>
            <p>Мы создали место, где вы сможете реализовать свои идеи, найти будущую профессию, пройти практику и найти партнеров.</p>
            <?php get_template_part('/includes/block', 'sign_up'); ?>
            <?php get_template_part('/includes/block', 'partners'); ?>
        </div>
      </div>
      <img class="clouds  clouds--bottom" src="/wp-content/themes/js-corp/images/svg/clouds.svg">
    </section>

    <section class="join-us">
        <div class="container">
            <h2 class="title__secondary join-us__title">
            Присоединяйтесь к нам из любой точки мира
            </h2>

            <p><span>Junior Specialists Corporation -</span> это возможность выбрать проффессию<span>в сфере ИТ, пройти обучение</span>в одном из онлайн-университетов и получить гарантированную практику в нашей компании!</p>

            <div class="slider  join-us__slider">
                <div class="slider join-us__slider-list">
                  <div class="join-us__slider-item">
                    <div class="join-us__slider-item-img-wrap">
                      <img src="/wp-content/themes/js-corp/images/svg/student-woman.svg" alt="student picture">
                    </div>
                    <span class="join-us__slider-caption">Студент</span>
                  </div>
                  <div class="join-us__slider-item">
                    <div class="join-us__slider-item-img-wrap">
                      <img src="/wp-content/themes/js-corp/images/svg/specialist.svg" alt="student picture">
                    </div>
                    <span class="join-us__slider-caption">Специалист</span>
                  </div>
                  <div class="join-us__slider-item">
                    <div class="join-us__slider-item-img-wrap">
                      <img src="/wp-content/themes/js-corp/images/svg/innovator.svg" alt="student picture">
                    </div>
                    <span class="join-us__slider-caption">Новатор</span>
                  </div>
                  <div class="join-us__slider-item">
                    <div class="join-us__slider-item-img-wrap">
                      <img src="/wp-content/themes/js-corp/images/svg/investor.svg" alt="student picture">
                    </div>
                    <span class="join-us__slider-caption">Инвестор</span>
                  </div>
                  <div class="join-us__slider-item">
                    <div class="join-us__slider-item-img-wrap">
                      <img src="/wp-content/themes/js-corp/images/svg/business.svg" alt="student picture">
                    </div>
                    <span class="join-us__slider-caption">Бизнес</span>
                  </div>
                </div>
            </div>

            <?php get_template_part('/includes/block', 'sign_up'); ?>

        </div>
    </section>

    <section class="pilot-project">
      <img class="clouds" src="/wp-content/themes/js-corp/images/svg/clouds.svg">
      <div class="pilot-project__background-wrap">
        <div class="container">
            <span class="pilot-project__meeting">
                <div class="logo">
                    <a class="logo__link" href="/">
                        <div class="logo__svg-container">
                            <svg><use xlink:href="/wp-content/themes/js-corp/images/svg/sprite.svg#logo"></use></svg>
                        </div>
                        <span>Junior<br>Specialists<br>Corporation</span>
                    </a>
                </div>
                <h4 class="pilot-project__meeting-title">
                    <div class="title__strong"><span>We</span> start</div>
                    <div class="title__small">your <span>ideas</span></div>
                </h4>
            </span>
            <div class="pilot-project__text-block">
                <h2 class="title__secondary">Проект для пилота</h2>
                <p class="pilot-project__text  pilot-project__text--mobile">
                  Автоматизация процессов, сокращение издержек, новые продукты -<br>
                  все это даст вашему бизнесу<br>
                  рост и конкурентное<br>
                  преимущество.<br>
                  Мы осуществляем поиск<br>
                  проектов под ваши<br>
                  задачи и помогаем<br>
                  интегрировать<br>
                  в вашу компанию.<br>
                </p>
                <p class="pilot-project__text  pilot-project__text--desktop">
                  Автоматизация процессов, сокращение издержек, новые продукты - все это даст вашему бизнесу рост и конкурентное преимущество. Мы осуществляем поиск проектов под ваши задачи и помогаем интегрировать в вашу компанию.
                </p>
            </div>

            <div class="pilot-project__text-block">
                <h2 class="title__secondary">Новые кадры</h2>
                <p class="pilot-project__text">Поиск новых кадров один из основных бизнес - процессов в компании. Подходящих специалистов найти все сложнее. Наше партнерство с университетами позволит найти лучших специалистов и быть уверенным, что они готовы к выполнению ваших задач. </p>

                <a class="pilot-project__btn btn btn--big" href="/contact-form">Стать партнером</a>
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
      </div>
      <img class="clouds  clouds--bottom" src="/wp-content/themes/js-corp/images/svg/clouds.svg">
    </section>

    <section class="read-us">
        <div class="container">
            <div class="read-us__title-container">
                <h2 class="title__secondary read-us__title">Читайте нас</h2>
                <a class="read-us__link" href="/news">Все статьи</a>
            </div>

            <div class="news-slider">
                <div class="news-slider__list">

                <?php if ($news_posts) :
                    $i = 0;
                    foreach ($news_posts as $post) :
                        $cat_name = get_the_terms(get_the_ID(), 'news_projects_categories')[0]; ?>

                        <div class="article-mini__item">
                            <div class="article-mini__image-wrap">
                                <?php if (has_post_thumbnail()): ?>

                                  <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>">

                                <?php endif; ?>
                            </div>
                            <div class="article-mini__item-caption">
                                <a class="btn  btn--small  btn--accent  article-mini__cat-btn" href="">
                                    <span><?=$cat_name->name;?></span>
                                </a>
                                <h4><?php the_title(); ?></h4>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                    <?php $i++; ?>

                <?php endforeach; endif; ?>
                </div>
            </div>

            <p class="read-us__text">Мы собираем самые интересные новости о наших проектах, программах и наших партнерах. Будьте в курсе всех интересных событиях нашей компании.</p>

            <?php get_template_part('/includes/block', 'getnews'); ?>
        </div>
    </section>
    
    
    
    <?php get_template_part('/includes/block', 'ask_questions'); ?>
</main>

<?php get_footer(); ?>
