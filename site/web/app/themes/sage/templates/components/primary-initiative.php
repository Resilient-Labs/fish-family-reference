<div class="primary-initiative">
    <?php if ( get_the_permalink() ) : ?>
        <a href="<?php the_permalink(); ?>">
    <?php endif; ?>

    <?php if ( get_the_title() ) : ?>
        <div class="line-break"></div>
        <h3 class="initiative-title">
            <?php the_title(); ?>
        </h3>
    <?php endif; ?>

    <?php if (get_field('primary_image')) : ?>
        <img src="<?php the_field('primary_image'); ?>" />
    <?php endif; ?>

    <?php if ( get_the_permalink() ) : ?>
        </a>
    <?php endif; ?>
</div>