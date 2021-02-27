<?php

$terms = get_terms('branches', 'orderby=count&hide_empty=0');
get_header();

?>

<main>

	<section class="main-offer  main-offer--courses">
        <div class="container">
            <h1 class="title"><span class="title__colored">ВСЕ КУРСЫ</span>В ОДНОМ МЕСТЕ</h1>
            <p>
                Мы сотрудничаем с различными онлайн и офлайн
                платформами, чтобы вам проще было найти 
                нужный курс. Создайте аккаунт в нашей системе,
                чтобы получить гарантированную практику после
                окончания обучения.
            </p>
            <?php get_template_part('/includes/block', 'sign_up');?>
        </div>
    </section>

	<section class="filters">

        <div class="container">
            <?php get_search_form();?>
            
            <div class="categories">
                <span class="categories__dropdown">Выберите специальность</span>
                <ul class="categories__list">
                    
                    <?php if ($terms && ! is_wp_error($terms)):
   
                        foreach ($terms as $term ):?>
                        <li class="categories__item">
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
	    <div class="container">
	        <h2 class="title__secondary  aggregator__title">Агрегатор онлайн-курсов</h2>
	        <p>
	            Скачайте новое приложение, чтобы постоянно быть
	            в курсе новых онлайн-курсов. Проходите обучение
	            у наших партнеров, а практику вы сможете пройти
	            в нашей компании или у наших партнеров.
	        </p>
	        <div class="aggregator__download-links"></div>
	            <ul class="aggregator__download-links-list">
	                <li class="aggregator__download-links-item  aggregator__download-links-item--apple">
	                    <a href=""><img src="/wp-content/themes/js-corp/images/icons/icon-download-apple.svg" alt="download link"></a>
	                </li>
	                <li class="aggregator__download-links-item  aggregator__download-links-item--google">
	                    <a href=""><img src="/wp-content/themes/js-corp/images/icons/icon-download-google.svg" alt="download link"></a>
	                </li>
	            </ul>
	            <span class="aggregator__download-links-text">Скачайте наше приложение для своего телефона</span>
	        </div>
	    </div>
	</section>
	<?php get_template_part('/includes/block', 'ask_questions');?>
</main>

<?php get_footer();?>
