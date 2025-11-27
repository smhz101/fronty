<?php
/**
 * Title: CTA with Background
 * Slug: fronty/cta-with-background
 * Categories: call-to-action
 * Description: Full-width call-to-action with background color and gradient.
 *
 * @package Fronty
 * @since 0.0.1
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
  <!-- wp:group {"layout":{"type":"constrained","contentSize":"900px"}} -->
  <div class="wp-block-group">
    <!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center">
      <!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
      <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
        <!-- wp:heading {"textColor":"base"} -->
        <h2 class="wp-block-heading has-base-color has-text-color">Transform Your Website Today</h2>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"textColor":"base"} -->
        <p class="has-base-color has-text-color">Experience the power of modern web design. Start building beautiful, high-performance websites in minutes.</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:column -->
      
      <!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
      <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
        <div class="wp-block-buttons">
          <!-- wp:button {"backgroundColor":"primary","textColor":"base"} -->
          <div class="wp-block-button"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button">Get Started Now</a></div>
          <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
      </div>
      <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
