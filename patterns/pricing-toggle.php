<?php
/**
 * Title: Pricing Toggle
 * Slug: fronty/pricing-toggle
 * Categories: pricing
 * Description: Pricing table with a visual monthly/yearly toggle switch.
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
    <h2 class="wp-block-heading has-text-align-center">Simple Pricing</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">Start for free, upgrade when you need to.</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"var:preset|spacing|30"} -->
    <div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons">
      <!-- wp:button {"backgroundColor":"primary","textColor":"base","className":"is-style-fill"} -->
      <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button">Monthly</a></div>
      <!-- /wp:button -->
      
      <!-- wp:button {"className":"is-style-outline"} -->
      <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Yearly (Save 20%)</a></div>
      <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
    
    <!-- wp:spacer {"height":"var:preset|spacing|40"} -->
    <div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
      <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"8px","width":"1px"}},"borderColor":"neutral","layout":{"type":"default"}} -->
        <div class="wp-block-group has-border-color has-neutral-border-color" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
          <!-- wp:heading {"level":4} -->
          <h4 class="wp-block-heading">Basic</h4>
          <!-- /wp:heading -->
          
          <!-- wp:paragraph {"fontSize":"x-large"} -->
          <p class="has-x-large-font-size"><strong>$19</strong>/mo</p>
          <!-- /wp:paragraph -->
          
          <!-- wp:paragraph -->
          <p>Essential features for individuals.</p>
          <!-- /wp:paragraph -->
          
          <!-- wp:list -->
          <ul class="wp-block-list">
            <li>1 User</li>
            <li>5 Projects</li>
            <li>Basic Support</li>
          </ul>
          <!-- /wp:list -->
          
          <!-- wp:button {"width":100,"className":"is-style-outline"} -->
          <div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button">Choose Basic</a></div>
          <!-- /wp:button -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:column -->
      
      <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"8px","width":"1px"}},"borderColor":"neutral","layout":{"type":"default"}} -->
        <div class="wp-block-group has-border-color has-neutral-border-color" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
          <!-- wp:heading {"level":4} -->
          <h4 class="wp-block-heading">Pro</h4>
          <!-- /wp:heading -->
          
          <!-- wp:paragraph {"fontSize":"x-large"} -->
          <p class="has-x-large-font-size"><strong>$49</strong>/mo</p>
          <!-- /wp:paragraph -->
          
          <!-- wp:paragraph -->
          <p>Advanced features for teams.</p>
          <!-- /wp:paragraph -->
          
          <!-- wp:list -->
          <ul class="wp-block-list">
            <li>5 Users</li>
            <li>Unlimited Projects</li>
            <li>Priority Support</li>
          </ul>
          <!-- /wp:list -->
          
          <!-- wp:button {"width":100,"backgroundColor":"primary","textColor":"base"} -->
          <div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button">Choose Pro</a></div>
          <!-- /wp:button -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
