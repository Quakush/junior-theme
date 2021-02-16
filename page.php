<?php get_header();?>
        
        <?php if (is_active_sidebar('page-sidebar')):?>

            <?php dynamic_sidebar('page-sidebar');?>

        <?php endif;?>
        
        <h1><?php the_title();?></h1>

        <?php if (has_post_thumbnail()):?>

            <img src="<?=the_post_thumbnail_url('blog-large');?>" alt="<?=the_title();?>">

        <?php endif;?>

        <?php get_template_part('includes/section', 'content');?>

<?php get_footer();?>
