<section class="initiative">
    <div class="image-header-wrapper">
        <?php if (get_field('hero_image')) : ?>
            <img src="<?php the_field('hero_image'); ?>" />
        <?php elseif (get_field('primary_image')) : ?>
            <img src="<?php the_field('primary_image'); ?>" />
        <?php endif; ?>
    </div>

    <section class="description-container">
        <?php if ( get_the_title() ) : ?>
            <div class="line-break"></div>
            <h3 class="initiative-title">
                <?php the_title(); ?>
            </h3>
        <?php endif; ?>
        <?php if ( get_the_content() ) : ?>
            <p class="initiative-content">
                <?php the_content(); ?>
            </p>
        <?php endif; ?>
        
        <?php if (get_field('website_link')) : ?>
            <a href="<?php the_field('website_link'); ?>" target="_blank">Learn More</a>
        <?php endif; ?>
    </section>
</section>