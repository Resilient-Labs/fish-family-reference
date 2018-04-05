<section class="logos-container">
    <?php if (get_field('logos_title')) : ?>
        <div class="line-break"></div>
        <h3 class="logos-title">
            <?php the_field('logos_title'); ?>
        </h3>
    <?php endif; ?>
    <?php if (get_field('logos_description')) : ?>
        <p class="logos-description">
            <?php the_field('logos_description'); ?>
        </p>
    <?php endif; ?>
    <div class="logo-section">
        <?php if( have_rows('logos') ): ?>
            <?php while( have_rows('logos') ): the_row(); ?>
                <?php get_template_part('templates/components/logo-single'); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>