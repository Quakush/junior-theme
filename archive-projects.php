<?php

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
	<div class="container">
	    <h1 class="title">Наши проекты</h1>

	    <ul class="tags-list">
	    	<li class="tags-list__item">
	    		<a class="tags-list__link" href="/startups">Стартапы</a>
	    	</li>
	    	<li class="tags-list__item">
	    		<a class="tags-list__link" href="/digital">Digital</a>
	    	</li>
	    </ul>
	
		<div class="projects-content">
	        <div class="projects-content__list">

	            <?php if ($projects_query->have_posts()) :
	                while ($projects_query->have_posts()) : $projects_query->the_post(); ?>

	                    <?php get_template_part('includes/section', 'article'); ?>

	                <?php endwhile; endif; ?>
	                <?php if ($projects_query->max_num_pages > 1) : ?>
	                  <script>
	                      var posts = '<?php echo addslashes(wp_json_encode($projects_query->query_vars)); ?>';
	                      var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
	                      var max_pages = '<?php echo $projects_query->max_num_pages; ?>';
	                  </script>
	                  <div id="projects" class="btn  projects__btn">Загрузить ещё</div>
	                  
	                <?php endif; ?>
	            <?php wp_reset_postdata(); ?>
	        </div>
        </div>
		
	</div>
	
</main>

<?php get_footer(); ?>
