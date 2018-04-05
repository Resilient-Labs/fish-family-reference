<header>
  <nav>
    <h1>
        <a class="brand" href="<?= esc_url(home_url('/')); ?>">Fish Family Foundation</a>
    </h1>
    <?php
       $args = array('menu_class' => 'menu', 'container' => false);
       wp_nav_menu($args);
    ?>
   </nav>
    <nav class="mobile-nav">
      <span></span>
      <span></span>
      <span></span>
      <?php
         $args = array('menu_class' => 'menu', 'container' => false);
         wp_nav_menu($args);
      ?>
    </nav>
</header>
