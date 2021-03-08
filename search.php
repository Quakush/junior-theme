<?php

$terms = get_terms('branches', 'orderby=count&hide_empty=0');
get_header();

?>

<main>

	<section class="filters">

        <div class="container">
            <?php get_search_form();?>
            
            <div class="categories">
                <span class="categories__dropdown">Выберите специальность</span>
                <ul class="categories__list">
                    <li class="categories__item  categories__item--all">
                        <a class="categories__link" href="/">All</a>
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
        </div>
    </section>
    <section class="courses">
        <div class="container">

        	<h2 class="title__secondary">
        		<span class="title__colored">
        			Результаты поиска для
        		</span>
        		'<?php echo get_search_query();?>'
        	</h2>
            <div class="courses__headers">
                <span class="courses__headers-item  courses__headers-item--course">Курс</span>
                <span class="courses__headers-item  courses__headers-item--partner">Партнер</span>
                <span class="courses__headers-item  courses__headers-item--price">Стоимость</span>
                <span class="courses__headers-item  courses__headers-item--duration">Длительность</span>
            </div>
            <div class="courses__list">
	
				<?php if( have_posts() ): while( have_posts() ): the_post();?>
				
				<?php get_template_part('includes/section','courses');?>

				<?php endwhile;
               
				if ($wp_query->max_num_pages > 1) : ?>

	                <script>
	                var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
	                var posts = '<?php echo addslashes(wp_json_encode($wp_query->query_vars)); ?>';
	                var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
	                var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
	                </script>

	                <div id="true_loadmore" class="btn  courses__btn">Загрузить ещё</div>

	            <?php endif; else: ?>
						
						There are no results for '<?php echo get_search_query();?>'

			    <?php endif;?>
	        </div>
	    </div>
	</section>
	<section class="aggregator">
        <?php get_template_part('/includes/block', 'aggregator');?>
    </section>
	<?php get_template_part('/includes/block', 'ask_questions');?>
</main>

<?php get_footer();?>
