<?php
   
$terms = get_terms('branches', 'orderby=count&hide_empty=0');
wp_reset_postdata();

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'post_type' => 'courses',
    'post_status' => 'publish',
    'posts_per_page' => '5',
    'paged' => $paged,
    'order' => 'DESC',
    'tax_query' => array(
        array(
            'taxonomy' => 'branches',   // taxonomy name
            'field' => 'term_id',
            'terms' => $_GET['term']            
        )
    )
);
$courses = new WP_Query($args);

get_header();

?>

<main>
    
    <section class="courses">
        <div class="container">
            
            <div class="categories">
                <ul class="categories__list">
                    <li class="categories__item  categories__item--active">
                        <a class="categories__link" href="/courses">
                          All  
                        </a>
                    </li>
                    <?php if ($terms && ! is_wp_error($terms)):
   
                        foreach ($terms as $term ):?>
                        <li class="categories__item">
                            <a class="categories__link" href="<?=get_site_url(). "/" . $term->name . "/?term=" . $term->term_id;?>">
                                <?=$term->name;?>
                            </a>
                        </li>
                    <?php endforeach; endif; ?>
                </ul>
            </div>
            
            <div class="courses__list">

                <?php if ($courses->have_posts()) :

                    while($courses->have_posts()) : $courses-> the_post();
                        get_template_part('includes/section', 'courses');
                    endwhile;
                    wp_reset_postdata();

                    if ($wp_query->max_num_pages > 1) : ?>

                        <script>
                        var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                        var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
                        var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                        var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
                        </script>

                        <div id="true_loadmore" class="btn  courses__btn">Загрузить ещё</div>

                    <?php endif; endif; ?>
            </div>
           
        </div>
    </section>
    
</main>

<?php get_footer();?>
