<?php

/*
Template Name: Blog Page
*/

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
  <section class="blog">
    <div class="container swiper-container blog-container">
      <div class="swiper-wrapper blog-links-list">

          <?php foreach ($cats as $cat): ?>
            <div class="swiper-slide blog-links-list__item">
              <a class="blog-links-list__link blog-links-list__link--active" href="<?= get_category_link($cat->term_id); ?>">
                  <?= $cat->name; ?>
              </a>
            </div>
          <?php endforeach; ?>
<!---->
<!--        <div class="swiper-slide blog-links-list__item">-->
<!--          <a class="blog-links-list__link blog-links-list__link--active" href="#">Новости</a>-->
<!--        </div>-->
<!--        <div class="swiper-slide blog-links-list__item">-->
<!--          <a class="blog-links-list__link" href="#">Стартапы</a>-->
<!--        </div>-->
<!--        <div class="swiper-slide blog-links-list__item">-->
<!--          <a class="blog-links-list__link" href="#">Интервью</a>-->
<!--        </div>     <div class="swiper-slide blog-links-list__item">-->
<!--          <a class="blog-links-list__link" href="#">Интервью</a>-->
<!--        </div>     <div class="swiper-slide blog-links-list__item">-->
<!--          <a class="blog-links-list__link" href="#">Интервью</a>-->
<!--        </div>-->
<!--        <div class="swiper-slide blog-links-list__item">-->
<!--          <a class="blog-links-list__link" href="#">Интервью</a>-->
<!--        </div>-->
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
              <div id="true_loadmore_blog" class="btn  blog-content__btn">Загрузить ещё</div>
            </div>
          <?php endif; ?>

      </div>

    </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
