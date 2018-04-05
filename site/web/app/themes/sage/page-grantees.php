<?php 
/**
* Template Name: Grantees Template
*/
?>
<?php if(have_posts()) : ?>
    <section class="grantees">
    <?php while(have_posts()) :  ?>
        <?php the_post(); ?>
            <h4>
                <?php the_title(); ?>
            </h4>
            <?php the_content(); ?>
            <?php
            // check if the repeater field has rows of data
            if( have_rows('grantees') ): ?>
                <div class="grantees-container">
                <?php while ( have_rows('grantees') ) : the_row(); // loop through the rows of data ?>
                    <span class="grantees-row">
                        <img src="<?php the_sub_field('logo'); ?>" /> <?php // display a sub field value ?>

                        <?php $link = get_sub_field('link'); if( $link ): ?>
                            <a class="button" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
                                <?php echo $link['title']; ?>
                            </a>
                        <?php endif; ?>
                    </span>

                <?php    endwhile; ?>
                </div>
            <?php endif; ?>
            <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </section>
<?php endif; ?>