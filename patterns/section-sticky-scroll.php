<?php
/**
 * Title: Sticky Scroll Section
 * Slug: fronty/section-sticky-scroll
 * Categories: sticky
 * Description: A 2-column section where one side sticks while the other scrolls.
 *
 * @package Fronty
 * @since 0.0.1
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"neutral-50","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-neutral-50-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column {"width":"40%","className":"is-style-sticky"} -->
    <div class="wp-block-column is-style-sticky" style="flex-basis:40%">
      <!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"clamp(2rem, 4vw, 3rem)","fontWeight":"800","lineHeight":"1.1"}}} -->
      <h2 class="wp-block-heading" style="font-size:clamp(2rem, 4vw, 3rem);font-weight:800;line-height:1.1">Features that drive growth.</h2>
      <!-- /wp:heading -->
      
      <!-- wp:paragraph {"fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
      <p class="has-large-font-size" style="margin-top:var(--wp--preset--spacing--30)">Everything you need to build a world-class website, right out of the box.</p>
      <!-- /wp:paragraph -->
      
      <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
      <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
        <!-- wp:button {"className":"is-style-fill"} -->
        <div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button">Get Started</a></div>
        <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->
    </div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"60%"} -->
    <div class="wp-block-column" style="flex-basis:60%">
      <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"bottom":"var:preset|spacing|40"}},"border":{"radius":"12px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
      <div class="wp-block-group has-base-background-color has-background" style="border-radius:12px;margin-bottom:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
        <!-- wp:heading {"level":3} -->
        <h3 class="wp-block-heading">01. Lightning Fast</h3>
        <!-- /wp:heading -->
        <!-- wp:paragraph -->
        <p>Optimized for speed and performance. Your site will load instantly, keeping visitors engaged and improving your SEO rankings.</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      
      <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"bottom":"var:preset|spacing|40"}},"border":{"radius":"12px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
      <div class="wp-block-group has-base-background-color has-background" style="border-radius:12px;margin-bottom:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
        <!-- wp:heading {"level":3} -->
        <h3 class="wp-block-heading">02. Fully Responsive</h3>
        <!-- /wp:heading -->
        <!-- wp:paragraph -->
        <p>Looks perfect on any device. From mobile phones to large desktop screens, your content will adapt seamlessly.</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      
      <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"bottom":"var:preset|spacing|40"}},"border":{"radius":"12px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
      <div class="wp-block-group has-base-background-color has-background" style="border-radius:12px;margin-bottom:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
        <!-- wp:heading {"level":3} -->
        <h3 class="wp-block-heading">03. SEO Optimized</h3>
        <!-- /wp:heading -->
        <!-- wp:paragraph -->
        <p>Built with search engines in mind. Semantic HTML and clean code help you rank higher and attract more organic traffic.</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      
      <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"12px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
      <div class="wp-block-group has-base-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
        <!-- wp:heading {"level":3} -->
        <h3 class="wp-block-heading">04. Easy to Customize</h3>
        <!-- /wp:heading -->
        <!-- wp:paragraph -->
        <p>Change colors, fonts, and layouts with ease. The Site Editor gives you full control over your website's design.</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->
