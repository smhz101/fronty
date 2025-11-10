<?php 

namespace Fronty;

if ( ! function_exists( 'fronty_setup' ) ) {

  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   *
   * @since 0.0.1
   *
   * @return void
   */
  function fronty_setup() {
    
    // Make theme available for translation.
    load_theme_textdomain( 'fronty', get_template_directory() . '/languages' );

    // Enqueue editor stylesheet.
    add_editor_style( get_template_directory_uri() . '/style.css' );

    // Remove core block patterns.
    remove_theme_support( 'core-block-patterns' );

  }
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\\fronty_setup' );

/**
 * Enqueue stylesheet.
 *
 * @since 0.0.1
 */
function fronty_enqueue_stylesheet() {  

  wp_enqueue_style( sanitize_title( 'fronty' ), get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\fronty_enqueue_stylesheet' );