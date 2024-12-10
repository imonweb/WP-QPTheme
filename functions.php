<?php 

add_action('init', function(){
  if(!is_admin()){
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css?', array(), '5.3.3', 'all' );
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/style.css?asdf=sdfs', array(), '1.0.0', 'all' );

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

/*
================================================
   Sidebar 
================================================
*/

function qp_sidebar() {
	register_sidebar( array(
		'name'          => 'Primary Sidebar',
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Sidebar1',
		'id'            => 'footer-sidebar-1',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
  register_sidebar( array(
		'name'          => 'Footer Sidebar2',
		'id'            => 'footer-sidebar-2',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
}

add_action('widgets_init', 'qp_sidebar');

 
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

// echo '<pre';
// print_r(new header_menu_walker());
// echo '</pre>';