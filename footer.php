<?php 
  /*  
    This is the template for the footer
    @package qptheme
  */
?>
<?php 

  wp_nav_menu(
    array(
      'theme_location' => 'header-menu',
      'container_class' => 'my_extra_menu_class'
    )
  );

?>
<?php wp_footer(); ?>

</body>
</html>