<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
        <?php get_template_part('templates/content-single-initiative'); ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>