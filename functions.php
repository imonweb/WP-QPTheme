<?php 

add_action('init', function(){
  if(!is_admin()){
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css?', array(), '5.3.3', 'all' );
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/style.css?asdf=sdf', array(), '1.0.0', 'all' );

    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );

    //put jQuery in the footer
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js', false, '3.7.1', true);
    wp_enqueue_script('jquery');

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.js', array('jquery'), '5.3.3', true);
  }
 
  add_theme_support('menus');
  add_theme_support('widgets');
  add_theme_support('post-thumbnails');
// 

  // add_image_size('post-preview', 367,300, true);
  add_image_size('post-preview', 367,366, true);
  add_image_size('post-single', 315,366, true);

  // register menus
  register_nav_menus(
    array(
      'header-menu' => 'Header Menu',
      'footer-menu' => 'Footer Menu',
      'sidebar-menu' => 'Sidebar Menu',
     )
   );

});  
 
add_action( 'after_setup_theme', function () {
	$defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => false, 
	);
	add_theme_support( 'custom-logo', $defaults );
} );

/*
================================================
   Walker Class 
================================================
*/

require get_template_directory() . '/template-parts/walker.php';