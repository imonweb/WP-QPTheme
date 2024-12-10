<?php 
  /*  
    This is the template for the footer
    @package qptheme
  */
?>
<footer>
  <div class="container-fluid">
    <div class="row">
      <div class="col border"><?php dynamic_sidebar('footer-sidebar-1'); ?></div>
      <div class="col border"><?php dynamic_sidebar('footer-sidebar-2'); ?></div>
      <div class="col border">
        <?php 
          wp_nav_menu(
            array(
              'theme_location' => 'header-menu',
              'container_class' => 'my_extra_menu_class'
            )
          );

        ?>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>