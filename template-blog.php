<?php

/*
Template Name: Blog Page
*/

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 3,
    'order' => 'DESC'
);

$query = new WP_Query($args);

get_header();

?>

<main>
  <section class="blog">
    <div class="container">
      <ul class="blog-links-list">
        <li class="blog-links-list__item">
          <a class="blog-links-list__link blog-links-list__link--active" href="#">Новости</a>
        </li>
        <li class="blog-links-list__item">
          <a class="blog-links-list__link" href="#">Стартапы</a>
        </li>
        <li class="blog-links-list__item">
          <a class="blog-links-list__link" href="#">Интервью</a>
        </li>
      </ul>

      <div class="blog-content">
        <ul class="blog-content__list">

          <?php if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : $query->the_post();?>
          <li class="blog-content__item">
            <div class="blog-content__image-wrapper">
              <?php if(has_post_thumbnail()):?>
                  <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>">
              <?php endif;?>
            </div>
            <div class="blog-content__item-description">
              <h2 class="blog-content__title">
                <?php the_title();?>
              </h2>
              <button class="btn btn--accent  blog-content__description-foodtech">foodtech</button>
              <p class="blog-content__info">
                <?php the_content();?>
              </p>
          </li>
          
          <?php endwhile; 
          else :
            get_template_part( 'includes/section', 'none' );
            ?>

          <?php endif; ?>
        </ul>
        <div id="true_loadmore" class="btn showmore__btn">Показать еще</div>
      </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>
