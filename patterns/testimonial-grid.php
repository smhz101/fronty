<?php
/**
 * Title: Testimonial Grid
 * Slug: fronty/testimonial-grid
 * Categories: testimonials
 * Description: Grid of multiple testimonials with quotes and author info.
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
    <h2 class="wp-block-heading has-text-align-center">What Our Clients Say</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">Don't just take our word for it</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"var:preset|spacing|40"} -->
    <div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
      <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"8px"}},"backgroundColor":"base","layout":{"type":"default"}} -->
        <div class="wp-block-group has-base-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
          <!-- wp:paragraph -->
          <p>"Exceptional service and outstanding results. Highly recommended!"</p>
          <!-- /wp:paragraph -->
          
          <!-- wp:spacer {"height":"var:preset|spacing|20"} -->
          <div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
          <!-- /wp:spacer -->
          
          <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
          <div class="wp-block-group">
            <!-- wp:image {"width":"40px","height":"40px","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-rounded"} -->
            <figure class="wp-block-image size-thumbnail is-resized is-style-rounded"><img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=150" alt="" style="object-fit:cover;width:40px;height:40px"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group">
              <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"x-small"} -->
              <p class="has-x-small-font-size" style="font-weight:600">Michael Chen</p>
              <!-- /wp:paragraph -->
              
              <!-- wp:paragraph {"fontSize":"x-small"} -->
              <p class="has-x-small-font-size">Founder, StartupXYZ</p>
              <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:column -->
      
      <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"8px"}},"backgroundColor":"base","layout":{"type":"default"}} -->
        <div class="wp-block-group has-base-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
          <!-- wp:paragraph -->
          <p>"A game-changer for our business. Professional and reliable."</p>
          <!-- /wp:paragraph -->
          
          <!-- wp:spacer {"height":"var:preset|spacing|20"} -->
          <div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
          <!-- /wp:spacer -->
          
          <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
          <div class="wp-block-group">
            <!-- wp:image {"width":"40px","height":"40px","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-rounded"} -->
            <figure class="wp-block-image size-thumbnail is-resized is-style-rounded"><img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=150" alt="" style="object-fit:cover;width:40px;height:40px"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group">
              <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"x-small"} -->
              <p class="has-x-small-font-size" style="font-weight:600">Emily Rodriguez</p>
              <!-- /wp:paragraph -->
              
              <!-- wp:paragraph {"fontSize":"x-small"} -->
              <p class="has-x-small-font-size">Director, Creative Co</p>
              <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:column -->
      
      <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"8px"}},"backgroundColor":"base","layout":{"type":"default"}} -->
        <div class="wp-block-group has-base-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
          <!-- wp:paragraph -->
          <p>"Best decision we made. The results speak for themselves."</p>
          <!-- /wp:paragraph -->
          
          <!-- wp:spacer {"height":"var:preset|spacing|20"} -->
          <div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
          <!-- /wp:spacer -->
          
          <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
          <div class="wp-block-group">
            <!-- wp:image {"width":"40px","height":"40px","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-rounded"} -->
            <figure class="wp-block-image size-thumbnail is-resized is-style-rounded"><img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=150" alt="" style="object-fit:cover;width:40px;height:40px"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group">
              <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"x-small"} -->
              <p class="has-x-small-font-size" style="font-weight:600">David Park</p>
              <!-- /wp:paragraph -->
              
              <!-- wp:paragraph {"fontSize":"x-small"} -->
              <p class="has-x-small-font-size">VP, Global Solutions</p>
              <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
          </div>
          <!-- /wp:group -->
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
