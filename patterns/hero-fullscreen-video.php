<?php
/**
 * Title: Full Screen Hero with Overlay Header (Video)
 * Slug: fronty/hero-fullscreen-video
 * Categories: banner, header
 * Description: A full-screen hero section with a background video and an integrated overlay header.
 *
 * @package Fronty
 * @since 0.0.1
 */

?>
<!-- wp:cover {"dimRatio":60,"overlayColor":"contrast","minHeight":100,"minHeightUnit":"vh","align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-60 has-background-dim"></span><video class="wp-block-cover__video-background intrinsic-ignore" autoplay muted loop playsinline src="https://assets.mixkit.co/videos/preview/mixkit-stars-in-space-1610-large.mp4" data-object-fit="cover"></video>
  <div class="wp-block-cover__inner-container">
    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
      <!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"base"} /-->
      
      <!-- wp:navigation {"layout":{"type":"flex","justifyContent":"right"},"style":{"typography":{"fontWeight":"600"}},"textColor":"base","overlayMenu":"mobile"} /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"auto","bottom":"auto"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="margin-top:auto;margin-bottom:auto">
      <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(2.5rem, 5vw, 5rem)","fontWeight":"800","lineHeight":"1.1"}},"textColor":"base"} -->
      <h1 class="wp-block-heading has-text-align-center has-base-color has-text-color" style="font-size:clamp(2.5rem, 5vw, 5rem);font-weight:800;line-height:1.1">Experience the Future</h1>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"clamp(1.125rem, 2vw, 1.5rem)"}},"textColor":"neutral-200"} -->
      <p class="has-text-align-center has-neutral-200-color has-text-color" style="font-size:clamp(1.125rem, 2vw, 1.5rem)">Immersive digital experiences that captivate and convert.</p>
      <!-- /wp:paragraph -->

      <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
      <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
        <!-- wp:button {"className":"is-style-fill"} -->
        <div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button">Watch Demo</a></div>
        <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
  </div>
</div>
<!-- /wp:cover -->
