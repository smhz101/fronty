<?php
/**
 * Title: Team Grid
 * Slug: fronty/team-grid
 * Categories: team
 * Description: Grid of team members with photos, names, and titles.
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
    <h2 class="wp-block-heading has-text-align-center">Meet Our Team</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">The talented people behind our success</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"var:preset|spacing|40"} -->
    <div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
      <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=600" alt="Team member" style="aspect-ratio:1;object-fit:cover"/></figure>
        <!-- /wp:image -->
        
        <!-- wp:heading {"textAlign":"center","level":4} -->
        <h4 class="wp-block-heading has-text-align-center">John Smith</h4>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
        <p class="has-text-align-center has-x-small-font-size">CEO & Founder</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:column -->
      
      <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=600" alt="Team member" style="aspect-ratio:1;object-fit:cover"/></figure>
        <!-- /wp:image -->
        
        <!-- wp:heading {"textAlign":"center","level":4} -->
        <h4 class="wp-block-heading has-text-align-center">Sarah Williams</h4>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
        <p class="has-text-align-center has-x-small-font-size">Creative Director</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:column -->
      
      <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=600" alt="Team member" style="aspect-ratio:1;object-fit:cover"/></figure>
        <!-- /wp:image -->
        
        <!-- wp:heading {"textAlign":"center","level":4} -->
        <h4 class="wp-block-heading has-text-align-center">Michael Brown</h4>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
        <p class="has-text-align-center has-x-small-font-size">Lead Developer</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:column -->
      
      <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=600" alt="Team member" style="aspect-ratio:1;object-fit:cover"/></figure>
        <!-- /wp:image -->
        
        <!-- wp:heading {"textAlign":"center","level":4} -->
        <h4 class="wp-block-heading has-text-align-center">Emma Davis</h4>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
        <p class="has-text-align-center has-x-small-font-size">Marketing Manager</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
