<?php
/**
 * Title: Pricing Comparison
 * Slug: fronty/pricing-comparison
 * Categories: pricing
 * Description: Three-column pricing comparison table.
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
    <h2 class="wp-block-heading has-text-align-center">Choose Your Plan</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">Select the perfect plan for your needs</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"var:preset|spacing|40"} -->
    <div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
      <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"8px","width":"1px"}},"borderColor":"neutral","layout":{"type":"default"}} -->
        <div class="wp-block-group has-border-color has-neutral-border-color" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
          <!-- wp:heading {"textAlign":"center","level":4} -->
          <h4 class="wp-block-heading has-text-align-center">Starter</h4>
          <!-- /wp:heading -->
          
          <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"bottom"}} -->
          <div class="wp-block-group">
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"2.5rem","fontWeight":"700"}}} -->
            <p style="font-size:2.5rem;font-weight:700">$19</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"fontSize":"x-small"} -->
            <p class="has-x-small-font-size">/mo</p>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->
          
          <!-- wp:spacer {"height":"var:preset|spacing|20"} -->
          <div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
          <!-- /wp:spacer -->
          
          <!-- wp:list {"fontSize":"x-small"} -->
          <ul class="wp-block-list has-x-small-font-size">
            <li>5 projects</li>
            <li>Basic support</li>
            <li>1 GB storage</li>
            <li>Email support</li>
          </ul>
          <!-- /wp:list -->
          
          <!-- wp:spacer {"height":"var:preset|spacing|20"} -->
          <div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
          <!-- /wp:spacer -->
          
          <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
          <div class="wp-block-buttons">
            <!-- wp:button {"width":100,"className":"is-style-outline"} -->
            <div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button">Choose Plan</a></div>
            <!-- /wp:button -->
          </div>
          <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:column -->
      
      <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"8px","width":"2px"}},"backgroundColor":"primary","textColor":"base","borderColor":"primary","layout":{"type":"default"}} -->
        <div class="wp-block-group has-border-color has-primary-border-color has-base-color has-primary-background-color has-text-color has-background" style="border-width:2px;border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
          <!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"fontSize":"x-small"} -->
          <p class="has-text-align-center has-x-small-font-size" style="font-weight:600">MOST POPULAR</p>
          <!-- /wp:paragraph -->
          
          <!-- wp:heading {"textAlign":"center","level":4,"textColor":"base"} -->
          <h4 class="wp-block-heading has-text-align-center has-base-color has-text-color">Professional</h4>
          <!-- /wp:heading -->
          
          <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"bottom"}} -->
          <div class="wp-block-group">
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"2.5rem","fontWeight":"700"}},"textColor":"base"} -->
            <p class="has-base-color has-text-color" style="font-size:2.5rem;font-weight:700">$49</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"fontSize":"x-small","textColor":"base"} -->
            <p class="has-x-small-font-size has-base-color has-text-color">/mo</p>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->
          
          <!-- wp:spacer {"height":"var:preset|spacing|20"} -->
          <div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
          <!-- /wp:spacer -->
          
          <!-- wp:list {"fontSize":"x-small","textColor":"base"} -->
          <ul class="wp-block-list has-x-small-font-size has-base-color has-text-color">
            <li>Unlimited projects</li>
            <li>Priority support</li>
            <li>50 GB storage</li>
            <li>Advanced analytics</li>
          </ul>
          <!-- /wp:list -->
          
          <!-- wp:spacer {"height":"var:preset|spacing|20"} -->
          <div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
          <!-- /wp:spacer -->
          
          <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
          <div class="wp-block-buttons">
            <!-- wp:button {"width":100,"backgroundColor":"base","textColor":"primary"} -->
            <div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-primary-color has-base-background-color has-text-color has-background wp-element-button">Choose Plan</a></div>
            <!-- /wp:button -->
          </div>
          <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:column -->
      
      <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"8px","width":"1px"}},"borderColor":"neutral","layout":{"type":"default"}} -->
        <div class="wp-block-group has-border-color has-neutral-border-color" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
          <!-- wp:heading {"textAlign":"center","level":4} -->
          <h4 class="wp-block-heading has-text-align-center">Enterprise</h4>
          <!-- /wp:heading -->
          
          <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"bottom"}} -->
          <div class="wp-block-group">
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"2.5rem","fontWeight":"700"}}} -->
            <p style="font-size:2.5rem;font-weight:700">$99</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"fontSize":"x-small"} -->
            <p class="has-x-small-font-size">/mo</p>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->
          
          <!-- wp:spacer {"height":"var:preset|spacing|20"} -->
          <div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
          <!-- /wp:spacer -->
          
          <!-- wp:list {"fontSize":"x-small"} -->
          <ul class="wp-block-list has-x-small-font-size">
            <li>Unlimited everything</li>
            <li>24/7 support</li>
            <li>Unlimited storage</li>
            <li>Custom solutions</li>
          </ul>
          <!-- /wp:list -->
          
          <!-- wp:spacer {"height":"var:preset|spacing|20"} -->
          <div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
          <!-- /wp:spacer -->
          
          <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
          <div class="wp-block-buttons">
            <!-- wp:button {"width":100,"className":"is-style-outline"} -->
            <div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button">Choose Plan</a></div>
            <!-- /wp:button -->
          </div>
          <!-- /wp:buttons -->
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
