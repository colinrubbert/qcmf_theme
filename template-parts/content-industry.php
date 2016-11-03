<?php

  // Advanced Custom Fields
  $paper_industry             = get_field('paper_industry');
  $plastic_industry           = get_field('plastic_industry');
  $electronics_industry       = get_field('electronics_industry');
  $commercial_industry        = get_field('commercial_industry');
  $converting_industry        = get_field('converting_industry');
  $marine_industry            = get_field('marine_industry');
  $food_industry              = get_field('food_industry');
  $chemical_industry          = get_field('chemical_industry');
  $oem_industry               = get_field('oem_industry');

?>

<!-- Start Industries Served Section -->
<section id="industry">
  <div class="title industry-title"><span>Industries Served</span></div>
  <div class="industry-icon-wrapper">
    <div class="industry-category-wrapper">
      <div class="industry-category-icon-circle">
        <img src="<?php echo $paper_industry['url'] ?>" alt="<?php echo $paper_industry['alt'] ?>" class="industry-category-icon">
      </div>
      <div class="industry-category-title">Paper</div>
    </div>
    <div class="industry-category-wrapper">
      <div class="industry-category-icon-circle">
        <img src="<?php echo $plastic_industry['url'] ?>" alt="<?php echo $plastic_industry['alt'] ?>" class="industry-category-icon">
      </div>
      <div class="industry-category-title">Plastic</div>
    </div>
    <div class="industry-category-wrapper">
      <div class="industry-category-icon-circle">
        <img src="<?php echo $electronics_industry['url'] ?>" alt="<?php echo $electronics_industry['alt'] ?>" class="industry-category-icon">
      </div>
      <div class="industry-category-title">Electronics</div>
    </div>
    <div class="industry-category-wrapper">
      <div class="industry-category-icon-circle">
        <img src="<?php echo $commercial_industry['url'] ?>" alt="<?php echo $commercial_industry['alt'] ?>" class="industry-category-icon">
      </div>
      <div class="industry-category-title">Commercial &amp; Industrial</div>
    </div>
    <div class="industry-category-wrapper">
      <div class="industry-category-icon-circle">
        <img src="<?php echo $converting_industry['url'] ?>" alt="<?php echo $converting_industry['alt'] ?>" class="industry-category-icon">
      </div>
      <div class="industry-category-title">Paper Converting</div>
    </div>
    <div class="industry-category-wrapper">
      <div class="industry-category-icon-circle">
        <img src="<?php echo $marine_industry['url'] ?>" alt="<?php echo $marine_industry['alt'] ?>" class="industry-category-icon">
      </div>
      <div class="industry-category-title">Marine</div>
    </div>
    <div class="industry-category-wrapper">
      <div class="industry-category-icon-circle">
        <img src="<?php echo $food_industry['url'] ?>" alt="<?php echo $food_industry['alt'] ?>" class="industry-category-icon" >
      </div>
      <div class="industry-category-title">Food</div>
    </div>
    <div class="industry-category-wrapper">
      <div class="industry-category-icon-circle">
        <img src="<?php echo $chemical_industry['url'] ?>" alt="<?php echo $chemical_industry['alt'] ?>" class="industry-category-icon">
      </div>
      <div class="industry-category-title">Chemical</div>
    </div>
    <div class="industry-category-wrapper">
      <div class="industry-category-icon-circle">
        <img src="<?php echo $oem_industry['url'] ?>" alt="<?php echo $oem_industry['alt'] ?>" class="industry-category-icon" >
      </div>
      <div class="industry-category-title">OEM</div>
    </div>
  </div>
</section>
<!-- End Industries Served Section -->
