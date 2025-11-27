<?php
/**
 * Title: Team List
 * Slug: fronty/team-list
 * Categories: team
 * Description: Vertical list of team members with larger photos and bios.
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
    <h2 class="wp-block-heading has-text-align-center">Our Leadership</h2>
    <!-- /wp:heading -->
    
    <!-- wp:spacer {"height":"var:preset|spacing|40"} -->
    <div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:columns {"align":"wide","verticalAlignment":"center"} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center">
      <!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
      <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
        <!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
        <figure class="wp-block-image size-large is-style-rounded"><img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=600" alt="Team member" style="aspect-ratio:1;object-fit:cover"/></figure>
        <!-- /wp:image -->
      </div>
      <!-- /wp:column -->
      
      <!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
      <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
        <!-- wp:heading {"level":3} -->
        <h3 class="wp-block-heading">Alex Thompson</h3>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"primary"} -->
        <p class="has-primary-color has-text-color" style="font-weight:600">Chief Executive Officer</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:paragraph -->
        <p>With over 15 years of experience in the industry, Alex leads our team with vision and passion. His expertise in strategic planning and business development has been instrumental in our growth.</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
    
    <!-- wp:spacer {"height":"var:preset|spacing|40"} -->
    <div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:columns {"align":"wide","verticalAlignment":"center"} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center">
      <!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
      <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
        <!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
        <figure class="wp-block-image size-large is-style-rounded"><img src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?w=600" alt="Team member" style="aspect-ratio:1;object-fit:cover"/></figure>
        <!-- /wp:image -->
      </div>
      <!-- /wp:column -->
      
      <!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
      <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
        <!-- wp:heading {"level":3} -->
        <h3 class="wp-block-heading">Jessica Martinez</h3>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"primary"} -->
        <p class="has-primary-color has-text-color" style="font-weight:600">Chief Technology Officer</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:paragraph -->
        <p>Jessica brings cutting-edge technical expertise to our organization. Her innovative approach to technology solutions has transformed how we serve our clients.</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
