<?php
/**
 * Title: Beauty Services Homepage
 * Slug: fronty/page-home-beauty
 * Categories: pages
 * Description: An elegant, soft homepage layout for beauty salons and spas.
 *
 * @package Fronty
 * @since 0.0.1
 */

?>
<!-- wp:cover {"url":"https://via.placeholder.com/1920x1080","dimRatio":20,"overlayColor":"neutral-200","minHeight":90,"minHeightUnit":"vh","align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="min-height:90vh"><span aria-hidden="true" class="wp-block-cover__background has-neutral-200-background-color has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background" src="https://via.placeholder.com/1920x1080" alt="Beauty Spa" data-object-fit="cover"/>
  <div class="wp-block-cover__inner-container">
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"radius":"0px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-base-background-color has-background" style="border-radius:0px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
      <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"italic","fontWeight":"300","fontSize":"clamp(3rem, 5vw, 5rem)"}}} -->
      <h1 class="wp-block-heading has-text-align-center" style="font-size:clamp(3rem, 5vw, 5rem);font-style:italic;font-weight:300">Radiance & Grace</h1>
      <!-- /wp:heading -->
      
      <!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"0.1em","textTransform":"uppercase"}}} -->
      <p class="has-text-align-center" style="letter-spacing:0.1em;text-transform:uppercase">Luxury Spa & Beauty Lounge</p>
      <!-- /wp:paragraph -->
      
      <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
      <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
        <!-- wp:button {"className":"is-style-outline"} -->
        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Book Appointment</a></div>
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
  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center">
      <!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
      <figure class="wp-block-image size-large"><img src="https://via.placeholder.com/600x800" alt="Facial Treatment" style="aspect-ratio:3/4;object-fit:cover"/></figure>
      <!-- /wp:image -->
    </div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center">
      <!-- wp:heading {"level":2,"style":{"typography":{"fontStyle":"italic"}}} -->
      <h2 class="wp-block-heading" style="font-style:italic">Our Philosophy</h2>
      <!-- /wp:heading -->
      <!-- wp:paragraph -->
      <p>We believe that beauty is a reflection of inner peace. Our treatments are designed to rejuvenate your body and soul, using only the finest organic ingredients.</p>
      <!-- /wp:paragraph -->
      <!-- wp:list {"className":"is-style-no-bullets"} -->
      <ul class="wp-block-list is-style-no-bullets">
        <li>✨ Organic Skincare</li>
        <li>✨ Expert Therapists</li>
        <li>✨ Serene Atmosphere</li>
      </ul>
      <!-- /wp:list -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"fronty/testimonials-single"} /-->

<!-- wp:pattern {"slug":"fronty/cta-simple"} /-->
