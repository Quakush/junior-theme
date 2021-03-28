<?php
$cats = get_terms('news_projects_categories', 'orderby=count&hide_empty=0');

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

            <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>

                    <?php get_template_part('includes/section', 'article'); ?>

                <?php endwhile; endif; ?>
            <?php wp_reset_postdata(); ?>
            <?php if ($wp_query->max_num_pages > 1) : ?>
              <script>
                  var posts = '<?php echo addslashes(wp_json_encode($wp_query->query_vars)); ?>';
                  var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                  var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
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
