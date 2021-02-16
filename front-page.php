<?php get_header();?>

<main>

    <section class="main-offer main-offer--main">
        <div class="container">
            <h1 class="title"><span class="title__strong title__strong--your-ideas"><span class="title__colored--blue">WE </span>START</span><br>
                YOUR <span class="title__colored--blue">IDEAS</span></h1>

            <p>Junior Specialists Corporation - это современная,технологическая компания с распределенной командой. Мы создаем продукты из любой точки мира и верим, что они смогут улучшить жизнь любого человека. Хотите стать частью нашей компании? Мы будем рады обсудить это с вами.
            </p>
            
            <?php get_template_part('/includes/block', 'sign_up');?>
        </div>
    </section>

    <section class="our-mission">
        <div class="container">
            <div class="our-mission__text">
	            <h2 class="title__secondary  our-mission__title"><span class="title__colored--blue">Наша</span> миссия</h2>
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
        <div class="container options-slider__item">

            <div class="option-slider__text">
            <h2 class="title__secondary  options-slider__item-title">Дорога <span class="title__colored">в digital</span></h2>
            <p>Junior Specialists Corporation - это возможность выбрать проффессию в сфере ИТ, пройти обучение в одном из онлайн-университетов и получить гарантированную практику в нашей компании!  
            </p>
            </div>

            <div class="options-slider__visual">
                <div class="options-slider__visual-image-block">
                    <img src="/wp-content/themes/js-corp/images/svg/student-with-graduation-cap.svg" alt="slider visual image">
                    <span class="options-slider__visual-title">Startup University</span>
                </div>
                <button class="btn btn--green btn--small options-slider__btn">Выбрать обучение</button>
            </div>

            <div class="options-slider__visual--small">
                <div class="options-slider__visual-image-block--blue">
                    <img src="/wp-content/themes/js-corp/images/svg/start-up.svg" alt="slider visual image">
                    <span class="options-slider__visual-title--blue">Создай<br>Startup</span>
                </div>
                <div class="options-slider__visual-image-block--red">
                    <img src="/wp-content/themes/js-corp/images/svg/softtware-engineer.svg" alt="slider visual image">
                    <span class="options-slider__visual-title--red">Разработка<br> проектов</span>
                </div>
            </div>

        </div>
    </section>
   
    <section class="ecosystem">
        <div class="container">
            <h2 class="title__secondary ecosystem__title">Экосистема для обучения и создания проектов</h2>
            <p>Мы создали место, где вы сможете реализовать свои идеи, найти будущую профессию, пройти практику и найти партнеров.</p>

            <?php get_template_part('/includes/block', 'sign_up');?>
        </div>
    </section>

    <section class="join-us">
        <div class="container">
            <div class="join-us__text">
            <h2 class="title__secondary join-us__title">Присоединитесь к нам из любой точки мира</h2>
            <p>Junior Specialists Corporation - это возможность выбрать проффессию в сфере ИТ, пройти обучение в одном из онлайн-университетов и получить гарантированную практику в нашей компании!</p>
            </div>

            <div class="slider">
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
            <div class="pilot-project__text-block text-block--one">
                <h2 class="title__secondary">Проект для пилота</h2>
                <p>Автоматизация процессов, сокращение издержек, новые продукты - все это даст вашему бизнесу рост и конкурентное преимущество. Мы осуществляем поиск проектов под ваши задачи и помогаем интегрировать в вашу компанию. </p>
            </div>

            <div class="pilot-project__text-block text-block--two">
                <h2 class="title__secondary">Новые кадры</h2>
                <p>Поиск новых кадров один из основных бизнес - процессов в компании. Подходящих специалистов найти все сложнее. Наше партнерство с университетами позволит найти лучших специалистов и быть уверенным, что они готовы к выполнению ваших задач. </p>
            </div>

            <button class="pilot-project__btn btn btn--big" type="button">Стать партнером</button>

            <div class="pilot-project__text-block text-block--three">
                <h2 class="title__secondary">Инвестируйте в стартапы с новыми продажами</h2>
                <p>Мы ставим для себя задачу - создать безопасный инструмент инвестирования в стартапы ранних стадий. Мы подберем проект специально для вас, познакомим с командой и после подтвержденного спроса поможем осуществить сделку. </p>
            </div>

            <button class="pilot-project__btn btn btn--big" type="button">Подробнее</button>
        </div>  
    </section>
    
    <section class="read-us">
        <div class="container read-us__container">
            <div class="read-us__title-container"><h2 class="title__secondary read-us__title">Читайте нас</h2>
            <a class="read-us__link" href="#">Все статьи</a></div>

            <div class="projects-slider">
                <div class="projects-slider__item projects-slider__item--one">
                    <div class="projects-slider__item__box">
                        <img src="#" alt="">
                    </div>
                    <div class="projects-slider__item__caption">
                        <div class="row-container"><h4>Шаурма "По-Братски"</h4>
                        <button class="projects-slider__btn" type="button">foodtech</button></div>
                        <p>Мобильное приложение для онлайн-заказа, с собственной панелью управления и возможностью собирать отзывы клиентов.</p>
                    </div>
                </div>

                <div class="projects-slider__item projects-slider__item--two">
                    <div class="projects-slider__item__box">
                        <img src="#" alt="">
                    </div>
                    <div class="projects-slider__item__caption">
                        <div class="row-container"><h4>Шаурма "По-Братски" 2</h4>
                        <button class="projects-slider__btn" type="button">foodtech</button></div>
                        <p>Мобильное приложение для онлайн-заказа, с собственной панелью управления и возможностью собирать отзывы клиентов.</p>
                    </div>
                </div>

                <div class="projects-slider__item projects-slider__item--three">
                    <div class="projects-slider__item__box">
                        <img src="#" alt="">
                    </div>
                    <div class="projects-slider__item__caption">
                        <div class="row-container"><h4>Шаурма "По-Братски" 3</h4>
                        <button class="projects-slider__btn" type="button">foodtech</button></div>
                        <p>Мобильное приложение для онлайн-заказа, с собственной панелью управления и возможностью собирать отзывы клиентов.</p>
                    </div>
                </div>

                <div class="dots--projects-slider">
                    <span class="dot--projects-slider"></span>
                    <span class="dot--projects-slider"></span>
                    <span class="dot--projects-slider"></span>
                </div>  
            </div>

            <p class="read-us__p">Мы собираем самые интересные новости о наших проектах, программах и наших партнерах. Будьте в курсе всех интересных событиях нашей компании.</p>

        <form class="getnews">
            <input class="getnews__email" type="email" name="email" placeholder="Введите ваш e-mail"></input>
                <button class="btn btn--big getnews__btn" type="submit">Получать новости</button>
                <div class="getnews__info-polity"><input type="checkbox" id="confidentiality" name="confidentiality"></input>
                <label for="confidentiality">Принимаю условия <a href="#" class="footer-link">политики конфиденциальности</a></label></div>
        </form>
            
        </div>
    </section>

</main>



<?php get_footer();?>
