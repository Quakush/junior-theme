<?php

/*
Template Name: Education Page
*/

get_header();

?>
                            
    <main>
    <section class="main-offer  main-offer--education">
        <div class="container">
            <h1 class="title"><span class="title__colored">Твоя дорога</span><br>в Digital</h1>
            <p class="main-offer__text  main-offer__text--mobile">
                Старт в IT-профессии &mdash;<br>это обучение и первый опыт 
                работы. Обучись у наших партнёров и приходи на 
                практику в один из наших проектов!
            </p>
            <p class="main-offer__text  main-offer__text--desktop">
                Старт в IT-профессии &mdash; это обучение и первый опыт 
                работы. Обучись у наших партнёров и приходи на 
                практику в один из наших проектов!
            </p>
            <?php get_template_part('/includes/block', 'sign_up');?>
        </div>
    </section>
    <section class="choose-course">
        <div class="container">
            <div class="choose-course__wrap">
                <h2 class="title__secondary  choose-course__title"><span class="title__colored">Все курсы</span> в одном месте</h2>
                <p>
                    Мы сотрудничаем с различными онлайн и офлайн
                    платформами, чтобы вам проще было найти 
                    нужный курс. Создайте аккаунт в нашей системе,
                    чтобы получить гарантированную практику после
                    окончания обучения.
                </p>
                <a class="btn btn--big  btn--green  choose-course__btn" href="/courses/">Выбрать курс</a>
            </div>
        </div>
    </section>
    <section class="choose-profession">
        <div class="container">
            <h2 class="title__secondary  choose-profession__title"><span class="title__colored">Все профессии</span> в одном месте</h2>
            <p class="choose-profession__text-mobile">
                Выбери одну из множества профессий<br> и начни свою карьеру<br>с 
                <span class="choose-profession__text-colored">Junior Specialists Corporation</span>
            </p>
            <p class="choose-profession__text-desktop">
                Выбери одну из множества профессий и начни свою<br>карьеру с 
                <span class="choose-profession__text-colored">Junior Specialists Corporation</span>
            </p>
            <ul class="choose-profession__list">
                <li class="choose-profession__item  choose-profession__item--designer">
                    <a class="choose-profession__link" href="#">Designer</a>
                </li>
                <li class="choose-profession__item  choose-profession__item--project">
                    <a class="choose-profession__link" href="#">Project manager</a>
                </li>
                <li class="choose-profession__item  choose-profession__item--developer">
                    <a class="choose-profession__link" href="#">Developer</a>
                </li>
            </ul>
            <a class="btn btn--big  btn--green  choose-profession__btn" href="#">Еще 50+ профессий</a>
        </div>
    </section>
    <section class="career">
        <div class="container">
            <h2 class="title__secondary  career__title">Ваша карьера <span class="title__colored">начинается здесь</span></h2>
            <p class="career__text--mobile">
                Мы понимаем, как тяжело начать карьеру в IT.<br>Именно поэтому одна
                из наших миссий -<br>сделать ваш путь максимально простым.
            </p>
            <p class="career__text--desktop">
                Мы понимаем, как тяжело начать карьеру в IT. Именно поэтому одна<br>
                из наших миссий - сделать ваш путь максимально простым.
            </p>
            <ul class="career__list">
                <li class="career__item">
                    <span class="career__step-number">1</span>
                    <span class="career__step">Выберите курс</span>
                </li>
                <li class="career__item">
                    <span class="career__step-number">2</span>
                    <span class="career__step">Пройдите обучение</span>
                </li>
                <li class="career__item">
                    <span class="career__step-number">3</span>
                    <span class="career__step">Пройдите практику</span>
                </li>
                <li class="career__item">
                    <span class="career__step-number">4</span>
                    <span class="career__step">Получите работу</span>
                </li>
            </ul>
            <?php get_template_part('/includes/block', 'sign_up');?>
        </div>
    </section>
    <section class="credences">
        <div class="container">
            <h2 class="title__secondary  credences__title"><span class="title__colored">Рекомендательное письмо</span></h2>
            <p>После окончания практики мы даем возможность
                остаться в команде проекта, получать коммерческие
                заказы от нашего отдела разработки, трудоустройство
                у наших партнеров и даже переезд в другую страну.
            </p>
            <a class="btn  btn--green  btn--big  credences__btn" href="/courses/">Выбрать курс</a>
        </div>
    </section>
    <section class="immigration-slider">
        <div class="container">
            <div class="immigration-slider__list">
                <div class="immigration-slider__item">
                    <div class="immigration-slider__item-wrap">
                        <h2 class="title__secondary  immigration-slider__item-title"><span>Road to USA with</span> JS Corporation</h2>
                        <p>
                            Программа трудоустройства специалистов
                            в американские компании.<br>Закончил обучение
                            в одном из университетов и мечтаешь попасть
                            в одну из компаний в США?<br>Оставь заявку
                            и мы расскажем как это сделать.
                        </p>
                        <button class="btn  btn--green btn--big  immigration-slider__item-btn">Оставить заявку</button>
                    </div>
                </div>

                <div class="immigration-slider__item">
                    <div class="immigration-slider__item-wrap">
                        <h2 class="title__secondary  immigration-slider__item-title"><span>Road to Afganistan with</span> JS Corporation</h2>
                        <p>
                            Афканистан прекрасен в это время года<br>Тут даже нечего добавлять - он просто перкрасен<br>Оставь заявку
                            и мы расскажем как это сделать. Как же попасть в эту сказку. Главное потом не выпасть...
                        </p>
                        <button class="btn  btn--green btn--big  immigration-slider__item-btn">Оставить заявку</button>
                    </div>
                </div>

                <div class="immigration-slider__item">
                    <div class="immigration-slider__item-wrap">
                        <h2 class="title__secondary  immigration-slider__item-title"><span>Road to OLBANIA with</span> JS Corporation</h2>
                        <p>
                            Унекальная вазможназдь уфидеть и нафсигда палюбидь страну ПАДОНКАФФ<br>Только с наме у тибя будит возможнздь выпить йаду и поржадь изпацтала, передадь превед медведу и узбагоицца<br>Оставь заявку
                            и мы расскажем как это сделать.
                        </p>
                        <button class="btn  btn--green btn--big  immigration-slider__item-btn">Оставить заявку</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="educational-programms">
        
        <div class="container">
            <h2 class="title__secondary  educational-programms__title">Образовательные программы</h2>
            <div class="educational-programms__inner-wrap">
                <ul class="educational-programms__list">
                    <li class="educational-programms__item  educational-programms__item--school">
                        <h3 class="title__third">Обучение школьников</h3>
                        <p>
                            Программа обучения школьников -
                            это возможность с раннего возраста
                            начать изучение современных 
                            профессий, а также разобраться в 
                            мире стартапов.
                        </p>
                    </li>
                    <li class="educational-programms__item  educational-programms__item--junior">
                        <h3 class="title__third">От 0 до Junior с практикой в реальных проектах</h3>
                        <p>
                            Пройдите обучение у одного из наших
                            партнеров и освойте одну из многих
                            профессий будущего, а практику вы
                            сможете пройти у нас.
                        </p>
                    </li>
                    <li class="educational-programms__item  educational-programms__item--middle">
                        <h3 class="title__third">От Junior до Middle - повышение квалификации</h3>
                        <p>
                            Для тех, кто уже обладает базовыми
                            знаниями мы подготовили курсы от
                            профессионалов своего дела, чтобы
                            вы могли улучшить свои знания.
                        </p>
                    </li>
                </ul>
            </div>
            <a class="btn btn--big  btn--green  educational-programms__btn" href="/courses/">Выбрать курс</a>
        </div>
    </section>

    <?php get_template_part('/includes/block', 'ask_questions');?>

</main>

<?php get_footer();?>
