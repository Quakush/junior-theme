<?php 
$cat_name = get_the_terms(get_the_ID(), 'news_projects_categories')[0]; ?>

<article class="blog-content__item">
    <a class="blog-content__image-wrapper" href="<?= get_permalink();?>">
        <?php if(has_post_thumbnail()):?>
            <img src="<?=the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>">
        <?php endif;?>
    </a>
    <div class="blog-content__item-description">
      <button class="btn btn--accent  blog-content__cat-btn">
          <?=$cat_name->name;?>
      </button>
        <h2 class="blog-content__title">
            <?=the_title();?>
        </h2>

        <p class="blog-content__info">
            <?=the_content();?>
        </p>
    </div>
</article>
