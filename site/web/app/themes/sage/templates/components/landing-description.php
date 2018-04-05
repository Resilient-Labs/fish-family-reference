<?php if (get_field('description')) : ?>
    <section class="description-container">
        <?php if (get_field('description_title')) : ?>
            <div class="line-break"></div>
            <h3 class="description-title">
                <?php the_field('description_title'); ?>
            </h3>
        <?php endif; ?>

        <p class="description">
            <?php the_field('description'); ?>
        </p>
    </section>
<?php endif; ?>
