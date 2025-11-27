<?php
/**
 * Title: Testimonial Single
 * Slug: fronty/testimonial-single
 * Categories: testimonials
 * Description: Large single testimonial with quote and author info.
 *
 * @package Fronty
 * @since 0.0.1
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
  <!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
  <div class="wp-block-group">
    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.5rem","lineHeight":"1.6"}},"textColor":"contrast"} -->
    <p class="has-text-align-center has-contrast-color has-text-color" style="font-size:1.5rem;line-height:1.6">"Working with this team has been an absolute game-changer for our business. Their expertise and dedication are unmatched."</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"var:preset|spacing|30"} -->
    <div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group">
      <!-- wp:image {"width":"60px","height":"60px","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-rounded"} -->
      <figure class="wp-block-image size-thumbnail is-resized is-style-rounded"><img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=150" alt="Customer photo" style="object-fit:cover;width:60px;height:60px"/></figure>
      <!-- /wp:image -->
      
      <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
      <div class="wp-block-group">
        <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
        <p style="font-weight:600">Sarah Johnson</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:paragraph {"fontSize":"x-small"} -->
        <p class="has-x-small-font-size">CEO, Tech Innovations</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
