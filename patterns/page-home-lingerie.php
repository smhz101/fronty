<?php
/**
 * Title: Lingerie Shop Homepage
 * Slug: fronty/page-home-lingerie
 * Categories: pages
 * Description: A sophisticated, visual-heavy homepage for lingerie or fashion brands.
 *
 * @package Fronty
 * @since 0.0.1
 */

?>
<!-- wp:cover {"url":"https://via.placeholder.com/1920x1080","dimRatio":0,"minHeight":100,"minHeightUnit":"vh","align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" src="https://via.placeholder.com/1920x1080" alt="Lingerie Model" data-object-fit="cover"/>
  <div class="wp-block-cover__inner-container">
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"600px"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
      <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(3rem, 6vw, 6rem)","fontStyle":"italic","fontWeight":"300"}},"textColor":"base"} -->
      <h1 class="wp-block-heading has-text-align-center has-base-color has-text-color" style="font-size:clamp(3rem, 6vw, 6rem);font-style:italic;font-weight:300">Elegance Redefined</h1>
      <!-- /wp:heading -->
      
      <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
      <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
        <!-- wp:button {"className":"is-style-outline","textColor":"base","style":{"border":{"color":"var:preset|color|base"}}} -->
        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-base-color has-text-color wp-element-button" style="border-color:var(--wp--preset--color--base)">Shop Collection</a></div>
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
  <h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--60)">New Arrivals</h2>
  <!-- /wp:heading -->
  
  <!-- wp:pattern {"slug":"fronty/shop-grid"} /-->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"fronty/product-showcase"} /-->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"neutral-50","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-neutral-50-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
  <!-- wp:columns {"align":"wide"} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:image {"aspectRatio":"1/1","scale":"cover","linkDestination":"none"} -->
      <figure class="wp-block-image"><img src="https://via.placeholder.com/600x600" alt="Silk" style="aspect-ratio:1/1;object-fit:cover"/></figure>
      <!-- /wp:image -->
      <!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
      <h3 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--20)">Silk</h3>
      <!-- /wp:heading -->
    </div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:image {"aspectRatio":"1/1","scale":"cover","linkDestination":"none"} -->
      <figure class="wp-block-image"><img src="https://via.placeholder.com/600x600" alt="Lace" style="aspect-ratio:1/1;object-fit:cover"/></figure>
      <!-- /wp:image -->
      <!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
      <h3 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--20)">Lace</h3>
      <!-- /wp:heading -->
    </div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:image {"aspectRatio":"1/1","scale":"cover","linkDestination":"none"} -->
      <figure class="wp-block-image"><img src="https://via.placeholder.com/600x600" alt="Cotton" style="aspect-ratio:1/1;object-fit:cover"/></figure>
      <!-- /wp:image -->
      <!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
      <h3 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--20)">Cotton</h3>
      <!-- /wp:heading -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->
