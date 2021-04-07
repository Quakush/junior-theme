<?php

$cats = get_categories('hide_empty=0');

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 3,
    'paged' => 1,
    'order' => 'DESC'
);

$query = new WP_Query($args);

get_header();

?>

<main>
  <section class="digital-teaser">
    <div class="container">
      <h1 class="digital-teaser__title">Коммерческая<br>
        <span class="digital-teaser__title-second">разработка</span>
      </h1>
      <p class="digital-teaser__description">
        Специализируемся на коммерческой разработке
        для ваших клиентов. Мы разрабатываем web
        и mobile приложения, а также MVP.
        Позвольте расти вашему бизнесу с надежным
        технологическим партнером.
      </p>

        <?php get_template_part('/includes/block', 'ask_questions'); ?>

    </div>
  </section>
  <section class="command">
    <div class="container">
      <h2 class="command__title">Готовая команда<br>
        <span class="command__title-second">для вашего бизнеса</span>
      </h2>
      <p class="command__description">
        Мы сотрудничаем с агентствами, которые
        готовы к работе с командами разработчиков.
        Вы работаете с клиентом и создаете дизайн,
        а мы превращаем его в код.
      </p>
      <button type="submit" class="btn  btn--accent">Связаться со мной</button>
    </div>

  </section>
  <section class="work">
    <div class="container">
      <div class="work work--freelance">
        <h2 class="work-freelance__title">работа с фрилансерами</h2>
        <p class="work-freelance__description">
          Постоянно беспокоиться о сроках и качестве проделанной работы.
        </p>
        <ul class="work-freelance__list">
          <li class="work-freelance__list-item">
            <img src="../wp-content/themes/js-corp/images/svg/low_quality.svg" alt="low">
            <span>Низкое<br> Качество</span>
          </li>
          <li class="work-freelance__list-item">
            <img src="../wp-content/themes/js-corp/images/svg/dedline.svg" alt="dedline">
            <span>Срывает<br>cроки</span>
          </li>
          <li class="work-freelance__list-item">
            <img src="../wp-content/themes/js-corp/images/svg/user_off.svg" alt="user_off">
            <span>Не выходит<br>на связь</span>
          </li>

        </ul>
      </div>

      <div class="work work--our">
        <h2 class="work-our__title">работа с нами</h2>
        <p class="work-our__description">
          Иметь надежного партнера и быть спокойным за разработку.
        </p>
        <ul class="work-our__list">
          <li class="work-our__list-item">
            <img src="../wp-content/themes/js-corp/images/svg/manager.svg" alt="manager">
            <span>Менеджер<br>проекта</span>
          </li>
          <li class="work-our__list-item">
            <img src="../wp-content/themes/js-corp/images/svg/command-dev.svg" alt="command-dev">
            <span>Команда<br>разработчиков</span>
          </li>
          <li class="work-our__list-item">
            <img src="../wp-content/themes/js-corp/images/svg/always-call.svg" alt="always-call">
            <span>Всегда<br>на связи</span>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="technologies">
    <div class="container">
      <h2 class="technologies__title">наши технологии</h2>
      <div class="technologies-items">
        <div class="technologies-items__first-string">
          <img src="../wp-content/themes/js-corp/images/svg/react.svg" alt="react" width="38" height="38">
          <img src="../wp-content/themes/js-corp/images/svg/java-script.svg" alt="java-script" width="35" height="38">
          <img src="../wp-content/themes/js-corp/images/svg/css-3.svg" alt="css-3" width="33" height="38">
          <img src="../wp-content/themes/js-corp/images/svg/java.svg" alt="java" width="38" height="38">
          <img src="../wp-content/themes/js-corp/images/svg/wordpress-.svg" alt="wordpress" width="38" height="38">
        </div>

        <img src="../wp-content/themes/js-corp/images/svg/android-logo_white.svg" alt="android-logo" width="38" height="38">
        <img src="../wp-content/themes/js-corp/images/svg/app-store_white.svg" alt="app-store" width="38" height="38">
        <img src="../wp-content/themes/js-corp/images/svg/API-.svg" alt="API" width="42" height="38">
        <img src="../wp-content/themes/js-corp/images/svg/chip.svg" alt="chip" width="38" height="38">
        <img src="../wp-content/themes/js-corp/images/svg/python-language-logotype.svg" alt="python" width="40" height="38">

      </div>
    </div>
  </section>
  <section class="projects">
    <div class="container">
      <h2 class="projects__title">Наши проекты</h2>

      <div class="blog">
        <div class="container swiper-container blog-container">
          <div class="swiper-wrapper blog-links-list">

              <?php foreach ($cats as $cat): ?>
                <div class="swiper-slide blog-links-list__item">
                  <a class="blog-links-list__link blog-links-list__link--active" href="<?= get_category_link($cat->term_id); ?>">
                      <?= $cat->name; ?>
                  </a>
                </div>
              <?php endforeach; ?>

          </div>
        </div>

        <div class="blog-content">
          <div class="blog-content__list">

              <?php if ($query->have_posts()) :
                  while ($query->have_posts()) : $query->the_post(); ?>

                      <?php get_template_part('includes/section', 'blog-article'); ?>

                  <?php endwhile; endif; ?>
              <?php wp_reset_postdata(); ?>
              <?php if ($query->max_num_pages > 1) : ?>
                <script>
                    var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                    var posts = '<?php echo addslashes(wp_json_encode($query->query_vars)); ?>';
                    var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                    var max_pages = '<?php echo $query->max_num_pages; ?>';
                </script>

                <div class="blog-content__btn-container">
                  <div id="true_loadmore_blog" class="btn blog-content__btn">Загрузить ещё</div>
                </div>
              <?php endif; ?>

          </div>

        </div>
      </div>

  </section>
  <div class="feedback__get-news">
      <?php get_template_part('/includes/block', 'getnews'); ?>
  </div>
</main>

<?php get_footer(); ?>
