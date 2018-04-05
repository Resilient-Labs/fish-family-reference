<?php 
/**
* Template Name: Landing Page Template
*/
?>
<section class="landing">
    <?php if(have_posts()) : ?>
        <?php while(have_posts()) :  ?>
            <?php the_post(); ?>
                <?php get_template_part('templates/components/landing-header'); ?>
                <?php get_template_part('templates/components/landing-description'); ?>
                <?php if (get_field('location')) : ?>
                    <div class="location-content">
                        <div class="location-content-container">
                            Get In Touch
                        </div>
                        <div class="location-content-container">
                            <?php the_field('location'); ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php 
                $posts = get_field('initiatives');
                if( $posts ): ?>
                <section class="initiatives-collage-container">
                    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                        <?php get_template_part('templates/components/primary-initiative'); ?>
                        <?php get_template_part('templates/components/secondary-initiative'); ?>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                </section>
                <?php endif; ?>
                
                <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
    <?php endif; ?>
</section>