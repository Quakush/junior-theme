<?php
get_header();

?>

<main>
    <section class="page-wrap">
        <div class="container">

            <h1><?php the_title();?></h1>

            <?php if (has_post_thumbnail()):?>

                <img src="<?=the_post_thumbnail_url('blog-large');?>" alt="<?=the_title();?>">

            <?php endif;?>

            <p><?php the_content();?></p>
            <?php wp_link_pages();?>
        </div>
    </section>
</main>



<?php get_footer();?>
