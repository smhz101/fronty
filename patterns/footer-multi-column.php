<?php
/**
 * Title: Footer Multi-Column
 * Slug: fronty/footer-multi-column
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer with multiple columns for links, about, and contact info.
 *
 * @package Fronty
 * @since 0.0.1
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
  <!-- wp:group {"layout":{"type":"constrained"}} -->
  <div class="wp-block-group">
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
      <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:heading {"level":3,"fontSize":"small"} -->
        <h3 class="wp-block-heading has-small-font-size">About</h3>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"fontSize":"small"} -->
        <p class="has-small-font-size">A clean, minimal WordPress block theme for building beautiful websites.</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","className":"is-style-logos-only"} -->
        <ul class="wp-block-social-links has-icon-color is-style-logos-only">
          <!-- wp:social-link {"url":"#","service":"facebook"} /-->
          <!-- wp:social-link {"url":"#","service":"twitter"} /-->
          <!-- wp:social-link {"url":"#","service":"instagram"} /-->
          <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
        </ul>
        <!-- /wp:social-links -->
      </div>
      <!-- /wp:column -->
      
      <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:heading {"level":3,"fontSize":"small"} -->
        <h3 class="wp-block-heading has-small-font-size">Quick Links</h3>
        <!-- /wp:heading -->
        
        <!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"fontSize":"small"} /-->
      </div>
      <!-- /wp:column -->
      
      <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:heading {"level":3,"fontSize":"small"} -->
        <h3 class="wp-block-heading has-small-font-size">Contact</h3>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"fontSize":"small"} -->
        <p class="has-small-font-size">Email: hello@example.com<br>Phone: (123) 456-7890</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
    
    <!-- wp:separator {"backgroundColor":"neutral","className":"is-style-wide"} -->
    <hr class="wp-block-separator has-text-color has-neutral-background-color has-background is-style-wide"/>
    <!-- /wp:separator -->
    
    <!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide">
      <!-- wp:paragraph {"fontSize":"small"} -->
      <p class="has-small-font-size">© <?php echo esc_html( gmdate( 'Y' ) ); ?> · All rights reserved.</p>
      <!-- /wp:paragraph -->
      
      <!-- wp:paragraph {"fontSize":"small"} -->
      <p class="has-small-font-size">Powered by <a href="https://wordpress.org">WordPress</a></p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
