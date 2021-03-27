<?php

if (  $wp_query->max_num_pages > 1 ) : ?>
	    <script>
        var posts = '<?php echo addslashes(wp_json_encode($wp_query->query_vars)); ?>';

        var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
        var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
        </script>

        <div id="<?=get_query_var('post_type');?>" class="btn  courses__btn">Загрузить ещё</div>

<?php endif;
