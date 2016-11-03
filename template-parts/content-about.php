<?php

  // Advanced Custom Fields
  $about_content        = get_field('about_content');

?>

<!-- Start About Us Section -->
<section id="about">
  <div class="title about-title"><span>About Us</span></div>
  <div class="about-wrapper">
    <div class="about-description">
      <?php echo $about_content ?>
    </div>
  </div>
</section>
<!-- End About Us Section -->
