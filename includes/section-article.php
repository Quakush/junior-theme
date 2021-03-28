<?php 
$cat_name = get_the_terms(get_the_ID(), 'news_projects_categories')[0];
$category_link = get_term_link($cat_name, $taxonomy = 'news_projects_categories'); ?>

<article class="article-mini__item">
    <a class="article-mini__image-wrap" href="<?= get_permalink();?>">
        <?php if(has_post_thumbnail()):?>
            <img src="<?=the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>">
        <?php endif;?>
    </a>
    <div class="article-mini__item-caption">
      <a class="btn  btn--small  btn--accent  article-mini__cat-btn" href="<?=$category_link;?>">
        <?=$cat_name->name;?>
      </a>
      <h4><?php the_title(); ?></h4>
      <p><?php the_content(); ?></p>
    </div>
</article>
