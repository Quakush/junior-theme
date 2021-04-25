<?php

// Load stylesheets and js

add_action('wp_enqueue_scripts', 'scripts');

function scripts()
{
    wp_register_style('style', get_template_directory_uri() . '/css/style.css', [], 1, 'all');
    wp_enqueue_style('style');

    wp_enqueue_script('jquery');

    wp_register_script('swiper-lib', get_template_directory_uri() . '/js/vendor/swiper-lib.min.js', [], 1, true);
    wp_enqueue_script('swiper-lib');

    wp_register_script('swiper-blog', get_template_directory_uri() . '/js/swiper-blog.js', [], 1, true);
    wp_enqueue_script('swiper-blog');

    // wp_register_script('swiper-main', get_template_directory_uri() . '/js/swiper-main.js', [], 1, true);
    // wp_enqueue_script('swiper-main');

    wp_register_script('swiper-block', get_template_directory_uri() . '/js/swiper-block.js', [], 1, true);
    wp_enqueue_script('swiper-block');

    wp_register_script('mobile-menu', get_template_directory_uri() . '/js/mobile-menu.js', [], 1, true);
    wp_enqueue_script('mobile-menu');

    wp_register_script('contact-form', get_template_directory_uri() . '/js/contact-form.js', [], 1, true);
    wp_enqueue_script('contact-form');

    wp_register_script('timer', get_template_directory_uri() . '/js/timer.js', [], 1, true);
    wp_enqueue_script('timer');

    wp_register_script('options-slider', get_template_directory_uri() . '/js/options-slider.js', [], 1, true);
    wp_enqueue_script('options-slider');

    wp_register_script('filter-animation', get_template_directory_uri() . '/js/filter-animation.js', [], 1, true);
    wp_enqueue_script('filter-animation');

    wp_enqueue_script( 'slick-slider-lib', get_stylesheet_directory_uri() . '/js/vendor/slick.min.js', array('jquery'));

    wp_enqueue_script( 'slick-slider', get_stylesheet_directory_uri() . '/js/slick.js', array('jquery'), true);

    // wp_enqueue_script( 'ask-questions-form', get_stylesheet_directory_uri() . '/js/ask-questions-form.js', array('jquery'));

    //ajax rerquests

    $ajax_param = array('ajaxurl' => admin_url('admin-ajax.php'));

    wp_enqueue_script( 'load-more-course', get_stylesheet_directory_uri() . '/js/load-more-course.js', array('jquery'));
    wp_localize_script('load-more-course', 'myPlugin', $ajax_param);

    wp_enqueue_script( 'load-more-news', get_stylesheet_directory_uri() . '/js/load-more-news.js', array('jquery'));
    wp_localize_script('load-more-news', 'myPlugin', $ajax_param);

    wp_enqueue_script( 'load-news-category', get_stylesheet_directory_uri() . '/js/load-news-category.js', array('jquery'));

    wp_localize_script('load-news-category', 'myPlugin', $ajax_param);

    wp_enqueue_script( 'load-course-category', get_stylesheet_directory_uri() . '/js/load-course-category.js', array('jquery'));

    wp_localize_script('load-course-category', 'myPlugin', $ajax_param);
}

// Theme options

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// Menus
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location',
        'socrat-menu' => 'Socrat Page Top Menu Location',
        'accelerator-menu' => 'Accelerator Page Top Menu Location'
    )
);

// Custom Image sizes
add_image_size('blog-small', 200, 200, true);
add_image_size('blog-large', 343, 343, false);
remove_filter('the_content', 'wpautop');

// Register Sidebars
function my_sidebars()
{

    register_sidebar(
        array(
            'name' => 'Getnews Sidebar',
            'id' => 'getnews-sidebar',
            'class'         => 'getnews',
            'before_widget' => '<div id="%1$s" class="getnews %2$s">',
            'after_widget'  => "</div>\n",
            'before_title' => '<h3 class="getnews__title">',
            'after_title' => '</h3>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
    );
}
add_action('widgets_init','my_sidebars');

// Custom post type and taxonomy

add_action('init', 'custom_post_types');

function custom_post_types()
{
    register_taxonomy('branches', ['courses', 'internship'],[
        'labels' => array(
            'name' => 'Категории курсов',
            'singular_name' => 'Категория курса',
            ),
        'public' => true,
        'hierarchical' => true,
        'show_in_rest' => true,
    ]);

    register_post_type('courses', [

        'labels' => array(
            'name' => 'Курсы',
            'singular_name' => 'Курс',
        ),

        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'taxonomies' => array('branches'),
        'menu_icon' => 'dashicons-images-alt2',
        'supports' => array('title', 'editor', 'thumbnail','custom-fields'),
        'show_in_rest' => true,
        'rest_base' => 'courses',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        ]);

    register_post_type('campaigns', [

        'labels' => array(
            'name' => 'Акции',
            'singular_name' => 'Акция',
        ),

        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-heart',
        'supports' => array('title', 'editor', 'thumbnail','custom-fields'),
        'show_in_rest' => true,
        'rest_base' => 'campaigns',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        ]);

    register_post_type('internship', [

        'labels' => array(
            'name' => 'Практики',
            'singular_name' => 'Практика',
        ),

        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => array('title', 'editor', 'thumbnail','custom-fields'),
        'show_in_rest' => true,
        'rest_base' => 'internship',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
    ]);

    register_post_type('categories', [

        'labels' => array(
            'name' => 'Категории',
            'singular_name' => 'Категория',
        ),

        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-buddicons-activity',
        'supports' => array('title', 'editor', 'thumbnail','custom-fields'),
        'show_in_rest' => true,
        'rest_base' => 'categories',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
    ]);

    register_post_type('partners', [

        'labels' => array(
            'name' => 'Партнеры',
            'singular_name' => 'Партнер',
        ),

        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-buddicons-activity',
        'supports' => array('title', 'editor', 'thumbnail','custom-fields'),
        'show_in_rest' => true,
        'rest_base' => 'partners',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
    ]);

    register_post_type('specializations', [

        'labels' => array(
            'name' => 'Специальности',
            'singular_name' => 'Специальность',
        ),

        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-buddicons-activity',
        'supports' => array('title', 'editor', 'thumbnail','custom-fields'),
        'show_in_rest' => true,
        'rest_base' => 'specializations',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
    ]);

    register_post_type('skills', [

        'labels' => array(
            'name' => 'Навыки',
            'singular_name' => 'Навык',
        ),

        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-buddicons-activity',
        'supports' => array('title', 'editor', 'thumbnail','custom-fields'),
        'show_in_rest' => true,
        'rest_base' => 'skills',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
    ]);

    register_post_type('guestarbaiter', [

        'labels' => array(
            'name' => 'Работа за границей',
            'singular_name' => 'Предложение',
        ),

        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-buddicons-activity',
        'supports' => array('title', 'editor', 'thumbnail','custom-fields'),
        'show_in_rest' => true,
        'rest_base' => 'skills',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
    ]);

    register_taxonomy('news_projects_categories', ['news', 'projects'], [
        'labels' => array(
            'name' => 'Категории новостей и проектов',
            'singular_name' => 'Категория новости или проекта',
            ),
        'public' => true,
        'hierarchical' => true,
        'show_in_rest' => true,
    ]);

    register_post_type('news', [

        'labels' => array(
            'name' => 'Новости',
            'singular_name' => 'Новость',
        ),

        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-buddicons-activity',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true,
        'rest_base' => 'news',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
    ]);

    register_post_type('projects', [

        'labels' => array(
            'name' => 'Проекты',
            'singular_name' => 'Проект',
        ),

        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-buddicons-activity',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true,
        'rest_base' => 'projects',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'taxonomies' => array('post_tag')
    ]);
   
}

// подгрузка курсов на страницу по ajax

add_action('wp_ajax_loadmore', 'load_more_courses');
add_action('wp_ajax_nopriv_loadmore', 'load_more_courses');

function load_more_courses(){

    $args = json_decode( stripslashes( $_POST['query'] ), true );
    $args['paged'] = $_POST['page'] + 1; // следующая страница
    $args['post_status'] = 'publish';
    $args['posts_per_page'] = 5;
    
    query_posts( $args );
    
    if( have_posts() ) :
        
        while( have_posts() ): the_post();

            get_template_part('includes/section', 'courses');

        endwhile;
        wp_reset_postdata();

    endif;

    wp_die();
}

//подгрузка постов на странице новостей

add_action('wp_ajax_loadMoreNews', 'load_more_news');
add_action('wp_ajax_nopriv_loadMoreNews', 'load_more_news');

function load_more_news(){

    $args = json_decode( stripslashes( $_POST['query'] ), true );
    $args['paged'] = $_POST['page'] + 1; // следующая страница
    $args['post_status'] = 'publish';
    $args['posts_per_page'] = 3;
    
    query_posts( $args );
    
    if( have_posts() ) :
       
        while( have_posts() ): the_post();

            get_template_part('includes/section', 'article');

        endwhile;
        wp_reset_postdata();

    endif;

    wp_die();
}

// подгрузка курсов по категориям

add_action( 'wp_ajax_get_cat', 'ajax_course_cat' );
add_action( 'wp_ajax_nopriv_get_cat', 'ajax_course_cat' );

function ajax_course_cat() {

    $link = $_POST['link'];

    if (!$link) {
        die( 'Рубрика не найдена' );
    }

    $args['post_type'] = 'courses';
    $args['paged'] = 1;
    $args['post_status'] = 'publish';
    $args['posts_per_page'] = 5;
    $args['tax_query'] = array(
        array(
            'taxonomy' => 'branches',   // taxonomy name
            'field' => 'term_id',
            'terms' => $link
        ));
    
    query_posts($args);

	if (have_posts()) :

        while(have_posts()) : the_post();

            get_template_part('includes/section', 'courses');

        endwhile; endif;
    get_template_part('includes/block', 'load-button');
    wp_reset_postdata();
    wp_die();
}

// ajax загрузка всех курсов по нажатию кнопки "ALL"

add_action( 'wp_ajax_get_courses', 'ajax_show_all_courses' );
add_action( 'wp_ajax_nopriv_get_courses', 'ajax_show_all_courses' );

function ajax_show_all_courses() {

	$args['post_type'] = 'courses';
	$args['paged'] = 1;
	$args['post_status'] = 'publish';
	$args['posts_per_page'] = 5;

	query_posts($args);

	if (have_posts()) :

        while(have_posts()) : the_post();

	    get_template_part('includes/section', 'courses');

	    endwhile; endif;
	    get_template_part('includes/block', 'load-button');
	    wp_reset_postdata();

	wp_die();
}

// подгрузка новостей по категориям

add_action( 'wp_ajax_get_news_cat', 'ajax_news_cat' );
add_action( 'wp_ajax_nopriv_get_news_cat', 'ajax_news_cat' );

function ajax_news_cat() {

    $link = $_POST['link'];

    if (!$link) {
        die( 'Рубрика не найдена' );
    }

    $args['post_type'] = 'news';
    $args['paged'] = 1;
    $args['post_status'] = 'publish';
    $args['posts_per_page'] = 3;
    $args['tax_query'] = array(
        array(
            'taxonomy' => 'news_projects_categories', // taxonomy name
            'field' => 'term_id',
            'terms' => $link
        ));

    query_posts($args);

    if (have_posts()) :

        while(have_posts()) : the_post();

            get_template_part('includes/section', 'article');

        endwhile; endif; 
        get_template_part('includes/block', 'load-button');
        wp_reset_postdata();
    wp_die();
}

/**
 * Remove tag <p> и <br>.
 */

define('WPCF7_AUTOP', false );

/**
 * Remove tag <span>.
 */

add_filter('wpcf7_form_elements', function($content) {

$content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

return $content;

});

?>
