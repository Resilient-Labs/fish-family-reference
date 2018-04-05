<?php 
// Query for only the Initiatives
$arguments = array('post_type'=>'initiatives');
$initiatives_query = new WP_Query($arguments);
?>
<?php if($initiatives_query->have_posts()) : ?>
    <section class="initiatives-collage-container">
    <?php while($initiatives_query->have_posts()) :  ?>
        <?php $initiatives_query->the_post(); ?>
            <?php get_template_part('templates/components/primary-initiative'); ?>
            <?php get_template_part('templates/components/secondary-initiative'); ?>
            <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </section>
<?php endif; ?>