<?php

  // Advanced Custom Fields
  $hero_title           = get_field('hero_title');
  $hero_subtitle        = get_field('hero_subtitle');

?>

<!-- Start Hero Section -->
<section id="hero" class="top-section">
  <div class="hero-wrapper">
    <h3 class="hero-title"><?php echo $hero_title ?></h3>
    <h4 class="hero-description">
      <?php echo $hero_subtitle ?>
    </h4>
    <div class="hero-button-wrapper">
      <a href="/gallery.html" class="button primary-button">Gallery</a>
      <a href="#contact" class="button secondary-button">Contact Us</a>
    </div>
  </div>
</section>
<!-- End Hero Section -->
