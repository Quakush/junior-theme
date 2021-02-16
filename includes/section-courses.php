<div class="courses__item">
    <span class="courses__partner"><?=get_field('partner');?></span>
    
    <h3 class="title__third  courses__title"><?php the_title();?></h3>
    
    <span class="courses__duration"><?=get_field('duration');?></span>
    <span class="courses__price"><?=get_field('price');?></span>

    <a href="<?=get_field('link');?>" class="btn  btn--big  btn--green  courses__item-btn" target="_blank">Начать обучение</a>

</div>
