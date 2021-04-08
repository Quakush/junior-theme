<?php

$cats = get_terms('news_projects_categories', 'orderby=count&hide_empty=0');

$args = array(
     'post_type' => 'projects',
     'post_status' => 'publish',
     'posts_per_page' => 2,
     'paged' => 1,
     'order' => 'DESC'
 );

$projects_query = new WP_Query($args);

get_header();

?>

<main>
    <section class="main-offer main-offer--startup">
        <div class="container">
            <h1 class="title title__strong">
                <div class="title__bullet"><span class="title__colored">online</span> <span class="title__colored">инкубатор</span> </div>
                <div>для <span class="title__colored">стартапов</span></div>
            </h1>
            <div class="main-offer__text-block">
                <p>
                    <span>Вы ищете возможность создать свой стартап</span>
                    <span>или найти новый проект для своей</span>
                    <span>компании, тогда вы в нужном месте.</span>
                    <span>Каждый день мы обучаем</span>
                    <span>основателей, создаем</span>
                    <span>проекты и</span>выпускаем их на рынок.</p>
            </div>
            <?php get_template_part('/includes/block', 'sign_up'); ?>
        </div>
    </section>
    <section class="first-step">
        <img class="clouds" src="/wp-content/themes/js-corp/images/svg/clouds.svg">
        <div class="first-step__background-wrap">
            <div class="container">
                <div class="first-step__inner-wrap">
                    <h2 class="title__secondary"><span class="title__colored">Сделай</span> первый шаг</h2>
                    <p class="first-step__text-block">
                        Пройди наш акселератор* со своей идеей,
                        убедись, что она жизнеспособна, получи
                        первые продажи и мы проинвестируем в
                        создание твоего MVP**.
                    </p>
                    <a class="btn btn--big" href="#">Подать заявку</a>
                    <div class="first-step__legend">
                        <p>
                            *Подходит для любого
                            бизнеса, включая
                            традиционный.</p>

                        <p>
                            **Минимально жизнеспособный
                            продукт — продукт, обладающий
                            минимальными, но достаточными
                            для удовлетворения первых
                            потребителей функциями.</p>
                    </div>
                </div>
            </div>
        </div>
        <img class="clouds  clouds--bottom" src="/wp-content/themes/js-corp/images/svg/clouds.svg">
    </section>
    <section class="team">
        <div class="container">
            <h2 class="title__secondary">Команда для&nbsp;твоего&nbsp;проекта</h2>
            <p class="team__text-block">После прохождения акселератора
                вы продолжите заниматься развитием проекта
                и с командой параллельно создавать MVP.
            </p>
            <ul class="team__list">
                <li class="team__item  team__item--designer">
                    <a class="team__link" href="#">Designer</a>
                </li>
                <li class="team__item  team__item--project">
                    <a class="team__link" href="#">Project manager</a>
                </li>
                <li class="team__item  team__item--developer">
                    <a class="team__link" href="#">Developer</a>
                </li>
            </ul>
        </div>
    </section>
    <section class="prospects">
        <img class="clouds" src="/wp-content/themes/js-corp/images/svg/clouds.svg">
        <div class="prospects__background-wrap">
            <div class="container">
                <h2 class="title__secondary">Ваши&nbsp;перспективы <br> после&nbsp;инкубатора</h2>
                <ul class="prospects__list">
                    <li class="prospects__item"><span>Самостоятельное развитие</span> -
                        при наличии продукта
                        и с подтвержденным спросом
                        вы сможете начать самостоятельно
                        зарабатывать на своей идее.</li>
                    <li class="prospects__item"><span>Корпоративный&nbsp;акселератор</span> -
                        множество компаний ищут
                        проекты на стадии первых
                        продаж - это ваш шанс
                        масштабировать свой проект.</li>
                    <li class="prospects__item"><span>Привлечение инвестиций</span> -
                        при наличии MVP, команды
                        и первых продаж у вас
                        больше шансов привлечь
                        инвестора в ваш проект.</li>
                </ul>
                <a class="btn btn--green btn--big" href="#">Перейти в акселератор</a>
            </div>
        </div>
        <img class="clouds  clouds--bottom" src="/wp-content/themes/js-corp/images/svg/clouds.svg">
    </section>
    <section class="ideas">
        <div class="container">
            <div class="ideas__inner-wrap">
                <h2 class="title__secondary">Ищем ваши идеи</h2>
                <p class="ideas__text-block">Проекты из разных сфер объединяет очень
                    многое: стратегия развития, целевая аудитория,
                    техника продаж и работа с конкурентами. Мы
                    созданы, чтобы помочь вам разобраться в этом.
                </p>
                <div class="ideas__sign-up"><?php get_template_part('/includes/block', 'sign_up'); ?></div>
            </div>
        </div>
    </section>
    <section class="projects  projects--startup">
        <img class="clouds" src="/wp-content/themes/js-corp/images/svg/clouds.svg">
        <div class="projects__background-wrap">
            <div class="container">
                <h2 class="title__secondary">Наши проекты</h2>

                <div class="swiper-wrapper blog-categories-list">
                    <?php foreach ($cats as $cat): ?>
                        <div class="swiper-slide blog-categories__item">
                            <a class="blog-categories__link" href="#" data-cat="<?=$cat->term_id;?>">
                              <?= $cat->name; ?>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>

                <?php if ($projects_query->have_posts()) : ?>
                    <ul class="projects__list">
                    <?php while ($projects_query->have_posts()) : $projects_query->the_post(); ?>

                        <li class="projects__item">

                        <?php get_template_part('includes/section', 'article'); ?>

                        </li>

                <?php endwhile; endif; ?>
                    </ul>

                    <a class="projects__link" href="/projects">все проекты</a>
            </div>
        </div>
        <img class="clouds  clouds--bottom" src="/wp-content/themes/js-corp/images/svg/clouds.svg">
    </section>
    <section class="feedback">
        <div class="container">
            <div class="feedback__grid">
                <div class="feedback__inner-wrap">
                    <h2 class="title__secondary">Ищете проект для пилота или&nbsp;инвестиций</h2>
                    <p class="feedback__text-block">Мы проводим скоринг новаторов и доводим
                        проект до первых продаж, чтобы вы были
                        уверены в своих инвестициях, а также
                        помогаем с интеграцией проектов в бизнес.
                    </p>
                </div>
                <div class="feedback__form-wrap">
                    <div class="feedback__write-us">
                        <?php get_template_part('/includes/block', 'write_us'); ?></div>
                    <div class="feedback__get-news">
                        <?php get_template_part('/includes/block', 'getnews'); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
