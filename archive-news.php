<?php

$cats = get_terms('news_projects_categories', 'orderby=count&hide_empty=0');

$args = array(
    'post_type' => 'news',
    'post_status' => 'publish',
    'posts_per_page' => 3,
    'paged' => 1,
    'order' => 'DESC'
);

$news_query = new WP_Query($args);

get_header();

?>

<main>
  <section class="news">
    <div class="container swiper-container news-container">
      <div class="swiper-wrapper news-links-list">

          <?php foreach ($cats as $cat): ?>
            <div class="swiper-slide news-links-list__item">
              <a class="news-links-list__link news-links-list__link--active" href="#" data-cat="<?=$cat->term_id;?>">
                  <?= $cat->name; ?>
              </a>
            </div>
          <?php endforeach; ?>
      </div>

      <div class="news-content">
        <div class="news-content__list">

            <?php if ($news_query->have_posts()) :
                while ($news_query->have_posts()) : $news_query->the_post(); ?>

                    <?php get_template_part('includes/section', 'article'); ?>

                <?php endwhile; endif; ?>
            <?php wp_reset_postdata(); ?>
            <?php if ($news_query->max_num_pages > 1) : ?>
              <script>
                  var posts = '<?php echo addslashes(wp_json_encode($news_query->query_vars)); ?>';
                  var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                  var max_pages = '<?php echo $news_query->max_num_pages; ?>';
              </script>

              <div class="news-content__btn-container">
                <div id="news" class="btn  news-content__btn">Загрузить ещё</div>
              </div>
            <?php endif; ?>

        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
