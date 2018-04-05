<footer>
  <nav>
    <h3>
      <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php echo bloginfo($show = 'name'); ?></a>
    </h3>
    <?php
       $args = array('menu_class' => 'menu', 'container' => false);
       wp_nav_menu($args);
    ?>
  </nav>
</footer>
<small class="footnote">
  <span>Designed and Developed by 
    <a href="http://www.resilientcoders.org" class="resilient-coders" target="_blank">Resilient Coders</a>
  <span>
  <span>
    &copy; <?php echo date("Y"); ?> <?php echo bloginfo($show = 'name'); ?>
  </span>
</small>
