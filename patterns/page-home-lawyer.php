<?php
/**
 * Title: Lawyer Homepage
 * Slug: fronty/page-home-lawyer
 * Categories: pages
 * Description: A professional, trustworthy homepage layout for law firms and legal services.
 *
 * @package Fronty
 * @since 0.0.1
 */

?>
<!-- wp:cover {"url":"https://via.placeholder.com/1920x1080","dimRatio":60,"overlayColor":"contrast","minHeight":80,"minHeightUnit":"vh","align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="min-height:80vh"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" src="https://via.placeholder.com/1920x1080" alt="Law Office" data-object-fit="cover"/>
  <div class="wp-block-cover__inner-container">
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"800px"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
      <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(2.5rem, 4vw, 4.5rem)","fontWeight":"700"}},"textColor":"base"} -->
      <h1 class="wp-block-heading has-text-align-center has-base-color has-text-color" style="font-size:clamp(2.5rem, 4vw, 4.5rem);font-weight:700">Justice You Can Trust</h1>
      <!-- /wp:heading -->
      
      <!-- wp:paragraph {"align":"center","fontSize":"large","textColor":"neutral-200"} -->
      <p class="has-text-align-center has-neutral-200-color has-text-color has-large-font-size">Experienced legal representation for your most complex challenges.</p>
      <!-- /wp:paragraph -->
      
      <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
      <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
        <!-- wp:button {"className":"is-style-fill","backgroundColor":"primary","textColor":"base"} -->
        <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button">Free Consultation</a></div>
        <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
  </div>
</div>
<!-- /wp:cover -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
  <!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
  <h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--60)">Practice Areas</h2>
  <!-- /wp:heading -->
  
  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column {"style":{"border":{"width":"1px","color":"var:preset|color|neutral-200","radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-column" style="border-color:var(--wp--preset--color--neutral-200);border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
      <!-- wp:heading {"level":3} -->
      <h3 class="wp-block-heading">Corporate Law</h3>
      <!-- /wp:heading -->
      <!-- wp:paragraph -->
      <p>Comprehensive legal solutions for businesses of all sizes.</p>
      <!-- /wp:paragraph -->
      <!-- wp:separator {"className":"is-style-wide"} -->
      <hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
      <!-- /wp:separator -->
      <!-- wp:paragraph {"fontSize":"small","textColor":"primary"} -->
      <p class="has-primary-color has-text-color has-small-font-size"><a href="#">Learn More →</a></p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->
    
    <!-- wp:column {"style":{"border":{"width":"1px","color":"var:preset|color|neutral-200","radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-column" style="border-color:var(--wp--preset--color--neutral-200);border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
      <!-- wp:heading {"level":3} -->
      <h3 class="wp-block-heading">Family Law</h3>
      <!-- /wp:heading -->
      <!-- wp:paragraph -->
      <p>Compassionate guidance for personal and family matters.</p>
      <!-- /wp:paragraph -->
      <!-- wp:separator {"className":"is-style-wide"} -->
      <hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
      <!-- /wp:separator -->
      <!-- wp:paragraph {"fontSize":"small","textColor":"primary"} -->
      <p class="has-primary-color has-text-color has-small-font-size"><a href="#">Learn More →</a></p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->
    
    <!-- wp:column {"style":{"border":{"width":"1px","color":"var:preset|color|neutral-200","radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-column" style="border-color:var(--wp--preset--color--neutral-200);border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
      <!-- wp:heading {"level":3} -->
      <h3 class="wp-block-heading">Real Estate</h3>
      <!-- /wp:heading -->
      <!-- wp:paragraph -->
      <p>Expert advice for residential and commercial property transactions.</p>
      <!-- /wp:paragraph -->
      <!-- wp:separator {"className":"is-style-wide"} -->
      <hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
      <!-- /wp:separator -->
      <!-- wp:paragraph {"fontSize":"small","textColor":"primary"} -->
      <p class="has-primary-color has-text-color has-small-font-size"><a href="#">Learn More →</a></p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"fronty/team-grid"} /-->

<!-- wp:pattern {"slug":"fronty/contact-form"} /-->
