<?php
if ( ! function_exists('wp_win_together_setup')) {
  function wp_win_together_setup() {
    add_theme_support( 'custom-logo',
      array(
        'height'      => 60,
        'width'       => 160,
        'flex-width'  => true,
        'flex-height' => true,
      )
    );
    add_theme_support( 'title-tag' );

	add_image_size('1920x600', 1920, 600, true);
	add_image_size('450x600', 450, 600, true);
  }
  add_action( 'after_setup_theme', 'wp_win_together_setup' );
}

/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'wp_win_together_scripts' );

function wp_win_together_scripts() {

  wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
  wp_enqueue_style( 'general-style', get_template_directory_uri() . '/assets/css/all.min.css' );
  wp_enqueue_style( 'owl-carousel-style', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );
  wp_enqueue_style( 'owl-theme-style', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css' );
  wp_enqueue_style( 'venobox-style', get_template_directory_uri() . '/assets/css/venobox.css' );
  wp_enqueue_style( 'lightbox-style',  'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css' );
//  wp_enqueue_style( 'lightbox-style', get_template_directory_uri() . '/assets/css/lightbox.min.css' );
  wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/assets/css/custom.css' );
  wp_enqueue_style( 'responsive-style', get_template_directory_uri() . '/assets/css/responsive.css' );
  wp_enqueue_style( 'helper-style', get_template_directory_uri() . '/assets/css/helper.css' );

  wp_enqueue_script( 'jquery-3.7', get_template_directory_uri() . '/assets/js/jquery-3.7.1.min.js', array(), false, true );
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), false, true );
  wp_enqueue_script( 'jquery-1.10', get_template_directory_uri() . '/assets/js/jquery-1.10.2.min.js', array(), false, true );
  wp_enqueue_script( 'jquery-counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array(), false, true );
  wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array(), false, true );
  wp_enqueue_script( 'venobox', get_template_directory_uri() . '/assets/js/venobox.min.js', array(), false, true );
  wp_enqueue_script( 'jquery-sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array(), false, true );
  wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), false, true );
  wp_enqueue_script( 'lightbox', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js', array('jquery'),false, true );
//  wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/assets/js/lightbox.min.js', array(), false, true );

  wp_enqueue_script( 'custom-scripts', get_template_directory_uri() . '/assets/js/custom.js', array(), false, true );

//  wp_enqueue_script( 'validator', get_template_directory_uri() . '/assets/js/validator.min.js', array(), false, true );
//  wp_enqueue_script( 'contact', get_template_directory_uri() . '/assets/js/contact.js', array(), false, true );

}
/** add fonts */
function add_google_fonts() {
  wp_enqueue_style( 'google_web_fonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Roboto' );
}

add_action( 'wp_enqueue_scripts', 'add_google_fonts' );

/** Register menus */
function wp_win_together_menus() {
  $locations = array(
    'header' => __( 'Header Menu', 'wp_win_together' ),
    'footer' => __( 'Footer Menu', 'wp_win_together' ),
  );

  register_nav_menus( $locations );
}

add_action( 'init', 'wp_win_together_menus');


/** ACF add options page */
if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
      'page_title'    => 'Theme General Settings',
      'menu_title'    => 'Theme Settings',
      'menu_slug'     => 'theme-general-settings',
      'capability'    => 'edit_posts',
      'redirect'      => false
  ));

  acf_add_options_sub_page(array(
      'page_title'    => 'Theme Header Settings',
      'menu_title'    => 'Header',
      'parent_slug'   => 'theme-general-settings',
  ));

  acf_add_options_sub_page(array(
      'page_title'    => 'Theme Footer Settings',
      'menu_title'    => 'Footer',
      'parent_slug'   => 'theme-general-settings',
  ));
}
