<?php

  // Advanced Custom Fields
  $equipment_category           = get_field('equipment_category');

?>

<!-- Start Equipment Section -->
<section id="equipment">
  <div class="title equipment-title"><span>Equipment Sample</span></div>
  <div class="equipment-wrapper">
    <?php $loop = new WP_Query( array( 'post_type' => 'qcmf_equipment', 'orderby' => 'post_id', 'order' => 'ASC' ) ) ?>

      <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="equipment-card-container">
          <div class="equipment-card-wrapper">
            <div class="equipment-card-title"><?php the_field('equipment_category'); ?></div>
            <div class="equipment-card-header">Manufacturer:</div>
            <div class="equipment-card-description"><?php the_field('equipment_manufacturer'); ?></div>
            <div class="equipment-card-header">Description:</div>
            <div class="equipment-card-description"><?php the_field('equipment_description'); ?></div>
          </div>
        </div>

      <?php endwhile; wp_reset_query(); ?>
  </div>
</section>
<!-- End Equipment Section -->
