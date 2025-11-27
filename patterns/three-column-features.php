<?php
/**
 * Title: Three Column Features
 * Slug: fronty/three-column-features
 * Categories: text, featured
 * Description: Three column layout with icons, headings, and descriptions.
 *
 * @package Fronty
 * @since 0.0.1
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
  <!-- wp:group {"layout":{"type":"constrained"}} -->
  <div class="wp-block-group">
    <!-- wp:heading {"textAlign":"center"} -->
    <h2 class="wp-block-heading has-text-align-center">Why Choose Us</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">Discover the features that make us different</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"var:preset|spacing|30"} -->
    <div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
      <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:heading {"textAlign":"center","level":3} -->
        <h3 class="wp-block-heading has-text-align-center">⚡</h3>
        <!-- /wp:heading -->
        
        <!-- wp:heading {"textAlign":"center","level":4,"fontSize":"small"} -->
        <h4 class="wp-block-heading has-text-align-center has-small-font-size">Lightning Fast</h4>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
        <p class="has-text-align-center has-small-font-size">Optimized for speed and performance. Your site loads in milliseconds.</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:column -->
      
      <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:heading {"textAlign":"center","level":3} -->
        <h3 class="wp-block-heading has-text-align-center">🎨</h3>
        <!-- /wp:heading -->
        
        <!-- wp:heading {"textAlign":"center","level":4,"fontSize":"small"} -->
        <h4 class="wp-block-heading has-text-align-center has-small-font-size">Beautiful Design</h4>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
        <p class="has-text-align-center has-small-font-size">Clean, modern aesthetics that make your content shine.</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:column -->
      
      <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:heading {"textAlign":"center","level":3} -->
        <h3 class="wp-block-heading has-text-align-center">🔧</h3>
        <!-- /wp:heading -->
        
        <!-- wp:heading {"textAlign":"center","level":4,"fontSize":"small"} -->
        <h4 class="wp-block-heading has-text-align-center has-small-font-size">Easy to Customize</h4>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
        <p class="has-text-align-center has-small-font-size">Intuitive block editor makes customization a breeze.</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
