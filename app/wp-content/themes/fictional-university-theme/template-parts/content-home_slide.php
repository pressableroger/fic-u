<div class="hero-slider__slide" style="background-image: url(<?php echo get_field('page_banner_bg_image')['sizes']['pageBanner']; ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center"><?php echo get_the_title(); ?></h2>
        <p class="t-center"><?php echo get_field('page_banner_subtitle'); ?></p>
        <p class="t-center no-margin"><a href="<?php echo get_field('homepage_slider_link'); ?>" class="btn btn--blue">Learn more</a></p>
      </div>
    </div>
  </div>