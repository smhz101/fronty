<?php
/**
 * Title: Footer Newsletter
 * Slug: fronty/footer-newsletter
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer with newsletter signup form and social icons.
 *
 * @package Fronty
 * @since 0.0.1
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
  <!-- wp:group {"layout":{"type":"constrained"}} -->
  <div class="wp-block-group">
    <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide">
      <!-- wp:heading {"textAlign":"center"} -->
      <h2 class="wp-block-heading has-text-align-center">Stay Updated</h2>
      <!-- /wp:heading -->
      
      <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
      <p class="has-text-align-center has-small-font-size">Subscribe to our newsletter for the latest updates and news.</p>
      <!-- /wp:paragraph -->
      
      <!-- wp:spacer {"height":"var:preset|spacing|30"} -->
      <div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
      <!-- /wp:spacer -->
      
      <!-- wp:group {"layout":{"type":"constrained","contentSize":"600px"}} -->
      <div class="wp-block-group">
        <!-- wp:html -->
        <form class="wp-block-group" style="display: flex; gap: 10px; flex-wrap: wrap; justify-content: center;">
          <input type="email" placeholder="Enter your email" style="flex: 1; min-width: 250px; padding: 12px 16px; border: 1px solid #ddd; border-radius: 4px;" required />
          <button type="submit" class="wp-element-button" style="padding: 12px 24px; background: var(--wp--preset--color--primary); color: white; border: none; border-radius: 4px; cursor: pointer;">Subscribe</button>
        </form>
        <!-- /wp:html -->
      </div>
      <!-- /wp:group -->
      
      <!-- wp:spacer {"height":"var:preset|spacing|30"} -->
      <div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
      <!-- /wp:spacer -->
      
      <!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
      <ul class="wp-block-social-links has-icon-color is-style-logos-only">
        <!-- wp:social-link {"url":"#","service":"facebook"} /-->
        <!-- wp:social-link {"url":"#","service":"twitter"} /-->
        <!-- wp:social-link {"url":"#","service":"instagram"} /-->
        <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
      </ul>
      <!-- /wp:social-links -->
      
      <!-- wp:spacer {"height":"var:preset|spacing|30"} -->
      <div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
      <!-- /wp:spacer -->
      
      <!-- wp:separator {"backgroundColor":"neutral","className":"is-style-wide"} -->
      <hr class="wp-block-separator has-text-color has-neutral-background-color has-background is-style-wide"/>
      <!-- /wp:separator -->
      
      <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
      <p class="has-text-align-center has-small-font-size">© <?php echo esc_html( gmdate( 'Y' ) ); ?> · All rights reserved.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
