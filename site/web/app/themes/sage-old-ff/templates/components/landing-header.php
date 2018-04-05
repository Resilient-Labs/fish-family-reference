<section class="image-header">
    <?php if ( get_the_content() ) : ?>
        <div class="image-header-headline-content">
            <?php the_content(); ?>
        </div>
    <?php endif; ?>
    <?php if ( get_the_post_thumbnail() ) : ?>
        <div class="image-header-wrapper">
            <?php the_post_thumbnail(); ?>
        </div>
    <?php endif; ?>
</section>