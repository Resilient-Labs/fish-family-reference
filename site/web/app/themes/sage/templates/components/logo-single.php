<?php if (get_sub_field('logo_website_link')) : ?>
    <a href="<?php the_sub_field('logo_website_link'); ?>" target="_blank">
<?php else : ?>
    <a href="#">
<?php endif; ?>
    <?php if (get_sub_field('logo_image')) : ?>
        <img src="<?php the_sub_field('logo_image'); ?>" />
    <?php endif; ?>
    </a>
