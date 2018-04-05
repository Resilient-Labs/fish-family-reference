<?php 
/**
* Template Name: Initiatives Main
*/
?>
<section class="initiatives">
    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
            <?php if ( get_the_content() ) : ?>
            <section class="image-header">
                <?php if ( get_the_content() ) : ?>
                    <div class="image-header-headline-content">
                        <?php the_content(); ?>
                    </div>
                <?php endif; ?>
            </section>
            <?php endif; ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>
    <?php 
    $posts = get_field('initiatives');
    if( $posts ): ?>
    <section class="initiative-container">
        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
            <?php setup_postdata($post); ?>
            <?php get_template_part('templates/content-single-initiative'); ?>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    </section>
    <?php endif; ?>

    <?php 
    // Query for only the Initiatives
    $arguments = array('post_type'=>'initiatives');
    $initiatives_query = new WP_Query($arguments);
    ?>
    <?php if($initiatives_query->have_posts()) : ?>
        <?php while($initiatives_query->have_posts()) :  ?>
            <?php $initiatives_query->the_post(); ?>
                <section class="initiative-container">
                    <?php get_template_part('templates/content-single-initiative'); ?>
                </section>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
    <?php endif; ?>
</section>