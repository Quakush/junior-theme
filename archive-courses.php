<?php

$terms = get_terms('branches', 'orderby=count&hide_empty=0');

$courses_args = array(
    'post_type' => 'courses',
    'post_status' => 'publish',
    'posts_per_page' => 5,
    'paged' => 1,
    'order' => 'DESC'
);

$courses = new WP_Query($courses_args);

$partners_args = array(
    'post_type' => 'partners',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order' => 'DESC'
);

$partners = new WP_Query($partners_args);

get_header();

?>

<div class="pop-up">
    <div class="toggler  toggler--cross">
        <span></span>
    </div>
    <?php get_template_part('/includes/block', 'aggregator');?>
</div>

<main>
    <section class="main-offer  main-offer--courses">
        <div class="container">
            <h1 class="title"><span class="title__colored">ВСЕ КУРСЫ</span>В ОДНОМ МЕСТЕ</h1>
            <p>
                Мы сотрудничаем с различными онлайн и офлайн
                платформами, чтобы вам проще было найти 
                нужный курс. Создайте аккаунт в нашей системе,
                чтобы получить гарантированную практику после
                окончания обучения.
            </p>
            <?php get_template_part('/includes/block', 'sign_up');?>
        </div>
    </section>
    <section class="banners">
        <div class="container">
            <h2 class="banners__title">наши партнеры</h2>
            <ul class="banners__list">

            <?php if ($partners->have_posts()) :

                      while($partners->have_posts()) : $partners-> the_post(); ?>
                    
                        <li class="banners__item">
                            <a class="banners__link" href="#">
                                <img src="<?=get_field('logo-svg')['url'];?>" alt="banner">
                            </a>
                        </li>

            <?php endwhile; endif; ?>
                
            </ul>
        </div>
    </section>
    <section class="filters">

        <div class="container">
            <?php get_search_form();?>
            
            <div class="categories">
                <span class="categories__dropdown">Выберите специальность</span>
                <ul class="categories__list">
                    
                    <?php if ($terms && ! is_wp_error($terms)):
   
                        foreach ($terms as $term ):?>
                        <li class="categories__item">
                            <a class="categories__link" data-cat="<?=$term->term_id;?>" href="#">
                                <?=$term->name;?>
                            </a>
                        </li>
                    <?php endforeach; endif; ?>
                </ul>
            </div>
        </div>
    </section>     
    <section class="courses">
        <div class="container">
            <div class="courses__headers">
                <span class="courses__headers-item  courses__headers-item--course">Курс</span>
                <span class="courses__headers-item  courses__headers-item--partner">Партнер</span>
                <span class="courses__headers-item  courses__headers-item--price">Стоимость</span>
                <span class="courses__headers-item  courses__headers-item--duration">Длительность</span>
            </div>

            <div class="courses__list">

            <?php if ($courses->have_posts()) :

            while($courses->have_posts()) : $courses-> the_post(); ?>
                            
                <?php get_template_part('includes/section', 'courses'); ?>

            <?php endwhile; endif; ?>
            <?php wp_reset_postdata(); ?>

            <?php if ($wp_query->max_num_pages > 1) : ?>

                <script>
                var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                var posts = '<?php echo addslashes(wp_json_encode($wp_query->query_vars)); ?>';
                var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
                </script>

                <div id="true_loadmore" class="btn  courses__btn">Загрузить ещё</div>
            <?php endif; ?>

            </div>

            
        </div>
    </section>
    <section class="aggregator">
        <?php get_template_part('/includes/block', 'aggregator');?>
    </section>
    <?php get_template_part('/includes/block', 'ask_questions');?>
    <section class="education-paltforms-proposal">
        <div class="container">
            <h2 class="title__secondary  education-paltforms-proposal__title">У вас платформа для обучения?</h2>
            <p>
                Вы разрабатываете курсы и проводите
                обучение на своей платформе? Мы хотим
                с вами сотрудничать! Напишите нам!
            </p>
            <form class="education-paltforms-proposal__form" method="POST" action="#">
                <h3 class="title__third">напишите нам</h3>
                <input type="text" name="name" placeholder="Как вас зовут?">
                <input type="email" name="email" placeholder="Введите ваш e-mail">
                <input type="checkbox" name="accept" id="accept">
                <label for="accept">Принимаю условия политики конфиденциальности</label>
                <button class="btn  btn--accent" type="submit">Связаться со мной</button>
            </form>
        </div>
    </section>
</main>

<?php get_footer();?>
