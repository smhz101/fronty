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
    add_editor_style( array(
      '/assets/css/editor-style.css',
      '/assets/css/blocks.css'
    ) );

    // Remove core block patterns.
    remove_theme_support( 'core-block-patterns' );
    
    // Register custom pattern categories.
    if ( function_exists( 'register_block_pattern_category' ) ) {
      // Featured category for hero sections
      register_block_pattern_category(
        'featured',
        array( 'label' => __( 'Featured', 'fronty' ) )
      );
      
      // Call to Action category
      register_block_pattern_category(
        'call-to-action',
        array( 'label' => __( 'Call to Action', 'fronty' ) )
      );
      
      // Text category for content sections
      register_block_pattern_category(
        'text',
        array( 'label' => __( 'Text', 'fronty' ) )
      );
      
      // Testimonials category
      register_block_pattern_category(
        'testimonials',
        array( 'label' => __( 'Testimonials', 'fronty' ) )
      );
      
      // Posts category
      register_block_pattern_category(
        'posts',
        array( 'label' => __( 'Posts', 'fronty' ) )
      );
      
      // Contact category
      register_block_pattern_category(
        'contact',
        array( 'label' => __( 'Contact', 'fronty' ) )
      );
      
      // Team category
      register_block_pattern_category(
        'team',
        array( 'label' => __( 'Team', 'fronty' ) )
      );
      
      // Gallery category
      register_block_pattern_category(
        'gallery',
        array( 'label' => __( 'Gallery', 'fronty' ) )
      );
      
      // Pricing category
      register_block_pattern_category(
        'pricing',
        array( 'label' => __( 'Pricing', 'fronty' ) )
      );
      
      // Pages category
      register_block_pattern_category(
        'pages',
        array( 'label' => __( 'Pages', 'fronty' ) )
      );

      // Sticky category
      register_block_pattern_category(
        'sticky',
        array( 'label' => __( 'Sticky', 'fronty' ) )
      );
    }
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
    
    // Enqueue blocks styles
    wp_enqueue_style(
      'fronty-blocks',
      get_template_directory_uri() . '/assets/css/blocks.css',
      array(),
      wp_get_theme()->get( 'Version' )
    );
  }
endif;
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\fronty_enqueue_stylesheet' );

if ( ! function_exists( __NAMESPACE__ . '\\fronty_register_block_styles' ) ) :
  /**
   * Registers custom block styles.
   *
   * @since 0.0.1
   *
   * @return void
   */
  function fronty_register_block_styles() {
    // Heading Styles
    register_block_style(
      'core/heading',
      array(
        'name'  => 'gradient-text',
        'label' => __( 'Gradient Text', 'fronty' ),
      )
    );
    register_block_style(
      'core/heading',
      array(
        'name'  => 'underline',
        'label' => __( 'Underlined', 'fronty' ),
      )
    );
    register_block_style(
      'core/heading',
      array(
        'name'  => 'outline',
        'label' => __( 'Outline', 'fronty' ),
      )
    );
    register_block_style(
      'core/heading',
      array(
        'name'  => 'shadow',
        'label' => __( 'Shadow', 'fronty' ),
      )
    );

    // Button Styles
    register_block_style(
      'core/button',
      array(
        'name'  => 'soft',
        'label' => __( 'Soft', 'fronty' ),
      )
    );
    register_block_style(
      'core/button',
      array(
        'name'  => 'pill',
        'label' => __( 'Pill', 'fronty' ),
      )
    );
    register_block_style(
      'core/button',
      array(
        'name'  => 'elevated',
        'label' => __( 'Elevated', 'fronty' ),
      )
    );

    // Separator Styles
    register_block_style(
      'core/separator',
      array(
        'name'  => 'thick',
        'label' => __( 'Thick', 'fronty' ),
      )
    );
    register_block_style(
      'core/separator',
      array(
        'name'  => 'dotted',
        'label' => __( 'Dotted', 'fronty' ),
      )
    );
    register_block_style(
      'core/separator',
      array(
        'name'  => 'dashed',
        'label' => __( 'Dashed', 'fronty' ),
      )
    );

    // Image Styles
    register_block_style(
      'core/image',
      array(
        'name'  => 'shadow',
        'label' => __( 'Shadow', 'fronty' ),
      )
    );
    register_block_style(
      'core/image',
      array(
        'name'  => 'grayscale',
        'label' => __( 'Grayscale', 'fronty' ),
      )
    );

    // List Styles
    register_block_style(
      'core/list',
      array(
        'name'  => 'checkmarks',
        'label' => __( 'Checkmarks', 'fronty' ),
      )
    );
    register_block_style(
      'core/list',
      array(
        'name'  => 'no-bullets',
        'label' => __( 'No Bullets', 'fronty' ),
      )
    );

    // Column Styles
    register_block_style(
      'core/column',
      array(
        'name'  => 'sticky',
        'label' => __( 'Sticky', 'fronty' ),
      )
    );
  }
endif;
add_action( 'init', __NAMESPACE__ . '\\fronty_register_block_styles' );