<div class="immigration-slider__item">
    <?php if(has_post_thumbnail()):?>
        <img src="<?=the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>">
    <?php endif;?>
    <div class="immigration-slider__item-wrap">
        <h2 class="title__secondary  immigration-slider__item-title">
            <span><?=the_title();?> with</span> JS Corporation
        </h2>
        <p>
            <?=the_content();?>
        </p>
        <button class="btn  btn--green btn--big  immigration-slider__item-btn">
            Оставить заявку
        </button>
    </div>
</div>
