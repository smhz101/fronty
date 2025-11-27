<?php
/**
 * Title: Opt-in Page (Squeeze)
 * Slug: fronty/page-funnel-optin
 * Categories: pages
 * Description: A focused opt-in page with a form and minimal distractions.
 *
 * @package Fronty
 * @since 0.0.1
 */

?>
<!-- wp:cover {"url":"https://via.placeholder.com/1920x1080","dimRatio":70,"overlayColor":"contrast","minHeight":100,"minHeightUnit":"vh","align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background" src="https://via.placeholder.com/1920x1080" alt="Background" data-object-fit="cover"/>
  <div class="wp-block-cover__inner-container">
    <!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
    <div class="wp-block-columns alignwide is-vertically-aligned-center">
      <!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
      <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
        <!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(2.5rem, 5vw, 4.5rem)","fontWeight":"800","lineHeight":"1.1"}},"textColor":"base"} -->
        <h1 class="wp-block-heading has-base-color has-text-color" style="font-size:clamp(2.5rem, 5vw, 4.5rem);font-weight:800;line-height:1.1">Free Ebook: The Ultimate Guide to Design</h1>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"fontSize":"large","textColor":"neutral-200"} -->
        <p class="has-neutral-200-color has-text-color has-large-font-size">Download our comprehensive guide and learn the secrets of professional designers. Over 100+ pages of value.</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:list {"className":"is-style-checkmarks","textColor":"base"} -->
        <ul class="wp-block-list is-style-checkmarks has-base-color has-text-color">
          <li>Design Principles</li>
          <li>Color Theory</li>
          <li>Typography Mastery</li>
        </ul>
        <!-- /wp:list -->
      </div>
      <!-- /wp:column -->
      
      <!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
      <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"12px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
        <div class="wp-block-group has-base-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
          <!-- wp:heading {"textAlign":"center","level":3} -->
          <h3 class="wp-block-heading has-text-align-center">Get Instant Access</h3>
          <!-- /wp:heading -->
          
          <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
          <p class="has-text-align-center has-small-font-size">Enter your details below.</p>
          <!-- /wp:paragraph -->
          
          <!-- wp:paragraph -->
          <p>[Contact Form Placeholder]</p>
          <!-- /wp:paragraph -->
          
          <!-- wp:button {"width":100,"className":"is-style-fill"} -->
          <div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link wp-element-button">Download Now</a></div>
          <!-- /wp:button -->
          
          <!-- wp:paragraph {"align":"center","fontSize":"xs","textColor":"neutral-500"} -->
          <p class="has-text-align-center has-neutral-500-color has-text-color has-xs-font-size">We respect your privacy. Unsubscribe at any time.</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
  </div>
</div>
<!-- /wp:cover -->
