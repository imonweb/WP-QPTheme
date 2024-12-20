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
  add_image_size('post-preview-small', 100, 100, true);
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

/*
================================================
   Widgets 
================================================
*/
require get_template_directory() . '/template-parts/widgets.php';

// $my_widget = new Recent_posts_widget();

/*
================================================
   Customizer 
================================================
*/

function qp_customize_register( $wp_customizer ) {
  //  image slider section
  $wp_customizer->add_section( 'qp_slider_settings', array(
		'title' => __( 'Slider Image Settings' ),
		'description' => __( 'Edit slider image settings' ),
		'priority' => 160,
		'capability' => 'edit_theme_options',
		'theme_supports' => '', // Rarely needed.
	) );

	// activate slider settings
	$wp_customizer->add_setting( 'qp_slider_activate', array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'default' => '1',
		'transport' => 'refresh', // or postMessage
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customizer->add_control('qp_slider_activate',
		array(
			'type' => 'checkbox',
			'section' => 'qp_slider_settings',
			'label'      => __( 'Activate Image Slider' ),
			'description' => __( 'Activate or deactivate the front page image slider'),
			'input_attrs'    => array(
				'class' => 'my-custom-class-for-json',
				'style' => '',
			),
		)
	);

	// slider text settings
	//#1
	$wp_customizer->add_setting( 'qp_slider_header_text_1', array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'default' => 'First slide label',
		'transport' => 'refresh', // or postMessage
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customizer->add_setting( 'qp_slider_content_text_1', array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'default' => 'Some representative placeholder content for the first slide',
		'transport' => 'refresh', // or postMessage
		'sanitize_callback' => 'sanitize_text_field',
	) );

	//#2
	$wp_customizer->add_setting( 'qp_slider_header_text_2', array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'default' => '',
		'transport' => 'refresh', // or postMessage
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customizer->add_setting( 'qp_slider_content_text_2', array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'default' => '',
		'transport' => 'refresh', // or postMessage
		'sanitize_callback' => 'sanitize_text_field',
	) );

	//#3
	$wp_customizer->add_setting( 'qp_slider_header_text_3', array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'default' => '',
		'transport' => 'refresh', // or postMessage
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customizer->add_setting( 'qp_slider_content_text_3', array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'default' => '',
		'transport' => 'refresh', // or postMessage
		'sanitize_callback' => 'sanitize_text_field',
	) );

	//#4
	$wp_customizer->add_setting( 'qp_slider_header_text_4', array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'default' => '',
		'transport' => 'refresh', // or postMessage
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customizer->add_setting( 'qp_slider_content_text_4', array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'default' => '',
		'transport' => 'refresh', // or postMessage
		'sanitize_callback' => 'sanitize_text_field',
	) );

	// slider image 1
	$wp_customizer->add_setting( 'qp_slider_image_1', array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'default' => '',
		'transport' => 'refresh', // or postMessage
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customizer->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customizer,
			'qp_slider_image_1',
			array(
				'label'      => __( 'Slider Image 1' ),
				'section'    => 'qp_slider_settings',
				'height'=>200, // cropper Height
				'width'=>1000, // Cropper Width
				'flex_width'=>false, //Flexible Width
				'flex_height'=>false, // Flexible Heiht
			)
		)
	);

	// header text 1
	$wp_customizer->add_control('qp_slider_header_text_1',
		array(
			'type' => 'text',
			'section' => 'qp_slider_settings',
			'label'      => __( 'Image 1 Header Text' ),
			'input_attrs'    => array(
				'class' => 'my-custom-class-for-json',
				'style' => '',
				'placeholder' =>	__( 'Image 1 Header Text' ),
			),
		)
	);

	// content text 1
	$wp_customizer->add_control('qp_slider_content_text_1',
		array(
			'type' => 'textarea',
			'section' => 'qp_slider_settings',
			'label'      => __( 'Image 1 Content Text' ),
			'input_attrs'    => array(
				'class' => 'my-custom-class-for-json',
				'style' => '',
				'placeholder' =>	__( 'Image 1 Content Text' ),
			),
		)
	);

	// slider image 2
	$wp_customizer->add_setting( 'qp_slider_image_2', array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'default' => '',
		'transport' => 'refresh', // or postMessage
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customizer->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customizer,
			'qp_slider_image_2',
			array(
				'label'      => __( 'Slider Image 2' ),
				'section'    => 'qp_slider_settings',
				'height'=>200, // cropper Height
				'width'=>1000, // Cropper Width
				'flex_width'=>false, //Flexible Width
				'flex_height'=>false, // Flexible Heiht
			)
		)
	);

	// header text 2
	$wp_customizer->add_control('qp_slider_header_text_2',
		array(
			'type' => 'text',
			'section' => 'qp_slider_settings',
			'label'      => __( 'Image 2 Header Text' ),
			'input_attrs'    => array(
				'class' => 'my-custom-class-for-json',
				'style' => '',
				'placeholder' =>	__( 'Image 2 Header Text' ),
			),
		)
	);

	// content text 2
	$wp_customizer->add_control('qp_slider_content_text_2',
		array(
			'type' => 'textarea',
			'section' => 'qp_slider_settings',
			'label'      => __( 'Image 2 Content Text' ),
			'input_attrs'    => array(
				'class' => 'my-custom-class-for-json',
				'style' => '',
				'placeholder' =>	__( 'Image 2 Content Text' ),
			),
		)
	);

	// slider image 3
	$wp_customizer->add_setting( 'qp_slider_image_3', array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'default' => '',
		'transport' => 'refresh', // or postMessage
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customizer->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customizer,
			'qp_slider_image_3',
			array(
				'label'      => __( 'Slider Image 3' ),
				'section'    => 'qp_slider_settings',
				'height'=>200, // cropper Height
				'width'=>1000, // Cropper Width
				'flex_width'=>false, //Flexible Width
				'flex_height'=>false, // Flexible Heiht
			)
		)
	);

	// header text 3
	$wp_customizer->add_control('qp_slider_header_text_3',
		array(
			'type' => 'text',
			'section' => 'qp_slider_settings',
			'label'      => __( 'Image 3 Header Text' ),
			'input_attrs'    => array(
				'class' => 'my-custom-class-for-json',
				'style' => '',
				'placeholder' =>	__( 'Image 3 Header Text' ),
			),
		)
	);

	// content text 3
	$wp_customizer->add_control('qp_slider_content_text_3',
		array(
			'type' => 'textarea',
			'section' => 'qp_slider_settings',
			'label'      => __( 'Image 3 Content Text' ),
			'input_attrs'    => array(
				'class' => 'my-custom-class-for-json',
				'style' => '',
				'placeholder' =>	__( 'Image 3 Content Text' ),
			),
		)
	);

	// slider image 4
	$wp_customizer->add_setting( 'qp_slider_image_4', array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'default' => '',
		'transport' => 'refresh', // or postMessage
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customizer->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customizer,
			'qp_slider_image_4',
			array(
				'label'      => __( 'Slider Image 4' ),
				'section'    => 'qp_slider_settings',
				'height'=>200, // cropper Height
				'width'=>1000, // Cropper Width
				'flex_width'=>false, //Flexible Width
				'flex_height'=>false, // Flexible Heiht
			)
		)
	);

	// header text 4
	$wp_customizer->add_control('qp_slider_header_text_4',
		array(
			'type' => 'text',
			'section' => 'qp_slider_settings',
			'label'      => __( 'Image 4 Header Text' ),
			'input_attrs'    => array(
				'class' => 'my-custom-class-for-json',
				'style' => '',
				'placeholder' =>	__( 'Image 4 Header Text' ),
			),
		)
	);

	// content text 4
	$wp_customizer->add_control('qp_slider_content_text_4',
		array(
			'type' => 'textarea',
			'section' => 'qp_slider_settings',
			'label'      => __( 'Image 4 Content Text' ),
			'input_attrs'    => array(
				'class' => 'my-custom-class-for-json',
				'style' => '',
				'placeholder' =>	__( 'Image 4 Content Text' ),
			),
		)
	);

}
add_action( 'customize_register', 'qp_customize_register' );