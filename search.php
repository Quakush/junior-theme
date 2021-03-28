<?php

$terms = get_terms('branches', 'orderby=count&hide_empty=0');
get_header();

?>

<main>

	<section class="filters">

        <div class="container">
            <?php get_search_form();?>
            <?php get_template_part('/includes/block', 'categories');?>
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
	                var posts = '<?php echo addslashes(wp_json_encode($wp_query->query_vars)); ?>';
	                var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
	                var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
	                </script>

	                <div id="courses" class="btn  courses__btn">Загрузить ещё</div>

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
