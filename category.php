<?php
$cats = get_categories('hide_empty=0');

get_header();
?>

<main>
    <section class="blog">
        <div class="container">
            <ul class="blog-links-list">
                <?php foreach( $cats as $cat ):?>
                    <li class="blog-links-list__item">
                        <a class="blog-links-list__link blog-links-list__link--active" href="<?=get_category_link($cat->term_id);?>">
                        <?=$cat->name;?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <div class="blog-content">
                <div class="blog-content__list">

                    <?php if (have_posts()) :
                      while (have_posts()) : the_post();?>
                        <article class="blog-content__item">
                          <a class="blog-content__image-wrapper" href="<?php echo get_permalink(); ?>">
                            <?php if(has_post_thumbnail()):?>
                                <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>">
                            <?php endif;?>
                          </a>
                          <div class="blog-content__item-description">
                              <h2 class="blog-content__title">
                                <?php the_title();?>
                              </h2>
                              <button class="btn btn--accent  blog-content__cat-btn">
                                  <?php the_category();?>
                              </button>
                              <p class="blog-content__info">
                                <?php the_content();?>
                              </p>
                          </div>
                        </article>
                  
                      <?php endwhile;
                        if ($wp_query->max_num_pages > 1) : ?>
                        <script>
                        var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                        var posts = '<?php echo addslashes(wp_json_encode($wp_query->query_vars)); ?>';
                        var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                        var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
                        </script>

                        <div id="true_loadmore_blog" class="btn  blog-content__btn">Загрузить ещё</div>
                    <?php endif; 
                      else :
                      get_template_part( 'includes/section', 'none' );
                      ?>

                    <?php endif; ?>
                    
                </div>

            </div>

        </div>
    </section>

</main>


<?php get_footer();?>

?>