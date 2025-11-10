<?php 
/**
 * Fronty functions and definitions.
 *
 * @package Fronty
 * @since 0.0.1
 */

/**
 * Define the theme namespace.
 */
namespace Fronty;

if ( ! function_exists( __NAMESPACE__ . '\\fronty_setup' ) ) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * @since 0.0.1
   *
   * @return void
   */
  function fronty_setup() {
    // Make theme available for translation.
    load_theme_textdomain( 'fronty', get_template_directory() . '/languages' );

    // Add support for post formats.
    add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );

    // Enqueue editor stylesheet.
    add_editor_style( get_template_directory_uri() . '/assets/css/editor-style.css' );

    // Remove core block patterns.
    remove_theme_support( 'core-block-patterns' );
  }
endif;
add_action( 'after_setup_theme', __NAMESPACE__ . '\\fronty_setup' );

// Enqueue stylesheet on the front.
if ( ! function_exists( __NAMESPACE__ . '\\fronty_enqueue_stylesheet' ) ) :
  /**
   * Enqueues style.css on the front.
   *
   * @since 0.0.1
   *
   * @return void
   */
  function fronty_enqueue_stylesheet() {
    wp_enqueue_style(
			sanitize_title( 'fronty' ),
			get_parent_theme_file_uri( 'style.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
  }
endif;
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\fronty_enqueue_stylesheet' );