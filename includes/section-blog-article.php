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
