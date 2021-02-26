<li class="projects-slider__item--active projects-slider__item">
    <div class="projects-slider__image-wrap">
        <?php if(has_post_thumbnail()):?>

			<img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>">

		<?php endif;?>
    </div>
    <div class="projects-slider__item-caption">
        <h4><?php the_title();?></h4>
        <button class="btn  btn--accent  projects-slider__cat-btn" >
            foodtech
        </button>
        <p><?php the_content();?></p>
    </div>
</li>
