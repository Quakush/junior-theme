<?php

$terms = get_terms('branches', 'orderby=count&hide_empty=0');

?>

<div class="categories">
    <span class="categories__dropdown">Выберите специальность</span>
    <ul class="categories__list">
        <li class="categories__item  categories__item--all">
            <a class="categories__link" href="/courses">Все курсы</a>
        </li>

        <?php if ($terms && ! is_wp_error($terms)):

            foreach ($terms as $term ):?>
            <li class="categories__item  categories__item--cat">
                <a class="categories__link" data-cat="<?=$term->term_id;?>" href="#">
                    <?=$term->name;?>
                </a>
            </li>
        <?php endforeach; endif; ?>
    </ul>
</div>
