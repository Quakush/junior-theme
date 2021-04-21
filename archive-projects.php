<?php
$cats = get_terms('news_projects_categories', 'orderby=count&hide_empty=0');

$args = array(
     'post_type' => 'projects',
     'post_status' => 'publish',
     'posts_per_page' => 4,
     'paged' => 1,
     'order' => 'DESC'
 );

$projects_query = new WP_Query($args);

get_header(); ?>

<main>
    <div class="projects-filter">
        <div class="container">
            <h1 class="title">Наши <span class="title__colored">проекты</span></h1>

            <ul class="tags-list">
                <li class="tags-list__item">
                    <a class="tags-list__link tags-list__link--active" href="/startups">Стартапы</a>
                </li>
                <li class="tags-list__item">
                    <a class="tags-list__link" href="/digital">Digital</a>
                </li>
            </ul>
        </div>
	</div>
	
	<section class="projects">
		<img class="clouds" src="/wp-content/themes/js-corp/images/svg/clouds.svg">
		<div class="projects__background-wrap">

			<div class="container">
			    <h2 class="title__secondary projects__title">Наши проекты</h2>

				<div class="swiper-wrapper news-links-list">
			        <?php foreach ($cats as $cat): ?>
			            <div class="swiper-slide news-links-list__item">
			                <a class="news-links-list__link news-links-list__link--active" href="#" data-cat="<?=$cat->term_id;?>">
			                  <?= $cat->name; ?>
			                </a>
			            </div>
			        <?php endforeach; ?>
			    </div>

	            <div class="projects__list">
		            <?php if ($projects_query->have_posts()) :
		                while ($projects_query->have_posts()) : $projects_query->the_post(); ?>

		                	<div class="projects__item">

			                    <?php get_template_part('includes/section', 'article'); ?>
			                </div>

		                <?php endwhile; endif; ?>

		                <?php if ($projects_query->max_num_pages > 1) : ?>
		                  <script>
		                      var posts = '<?php echo addslashes(wp_json_encode($projects_query->query_vars)); ?>';
		                      var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
		                      var max_pages = '<?php echo $projects_query->max_num_pages; ?>';
		                  </script>
		                  <div id="projects" class="btn projects__btn">Загрузить ещё</div>
		                  
		                <?php endif; ?>
		            <?php wp_reset_postdata(); ?>
		        </div>
		    </div>
		</div>
	    <img class="clouds  clouds--bottom" src="/wp-content/themes/js-corp/images/svg/clouds.svg">
    </section>
</main>

<?php get_footer(); ?>
