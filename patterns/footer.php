<?php
/**
 * Title: Footer
 * Slug: fronty/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Site footer with site title and navigation.
 *
 * @package Fronty
 * @since 0.0.1
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
  <!-- wp:group {"layout":{"type":"constrained"}} -->
  <div class="wp-block-group">
    <!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
    <div class="wp-block-group alignwide">
      <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
      <div class="wp-block-group">
        <!-- wp:site-title {"level":0} /-->
        <!-- wp:paragraph {"fontSize":"small"} -->
        <p class="has-small-font-size">© <?php echo esc_html( gmdate( 'Y' ) ); ?> · All rights reserved.</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      
      <!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"fontSize":"small"} /-->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
