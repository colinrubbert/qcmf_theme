<?php

  // Advanced Custom Fields
  $steel                  = get_field('carbon_steel_gallery');
  $stainless_steel        = get_field('stainless_steel_gallery');
  $aluminum               = get_field('aluminum_gallery');

?>


<!-- Start Gallery Section -->
<section id="gallery" class="top-section">
  <div class="title gallery-title"><span>Gallery</span></div>
  <!-- Gallery Wrapper -->
  <div class="gallery-wrapper">
    <div class="gallery-album-switcher" id="gallery-album-switcher">
      <div class="gallery-album-name" id="carbon-steel">Carbon Steel</div>
      <div class="gallery-album-name" id="stainless-steel">Stainless Steel</div>
      <div class="gallery-album-name" id="aluminum">Aluminum</div>
    </div>

    <!-- Carbon Steel Section -->
    <div class="gallery-album-container" id="carbon-steel-album">
      <div class="gallery-album-title">Carbon Steel</div>
      <div class="gallery-album-wrapper">
        <?php
          if( $steel ): ?>
            <?php foreach( $steel as $steel ): ?>
              <div class="gallery-album-item-wrapper">
                <a href="<?php echo $steel['url']; ?>" data-lightbox="carbon steel">
                  <img src="<?php echo $steel['sizes']['large']; ?>" alt="<?php echo $steel['alt']; ?>" class="gallery-album-item">
                </a>
              </div>
            <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>

    <!-- Stainless Steel Section -->
    <div class="gallery-album-container" id="stainless-steel-album">
      <div class="gallery-album-title">Stainless Steel</div>
        <div class="gallery-album-wrapper">
          <?php
            if( $stainless_steel ): ?>
              <?php foreach( $stainless_steel as $stainless_steel ): ?>
                <div class="gallery-album-item-wrapper">
                  <a href="<?php echo $stainless_steel['url']; ?>" data-lightbox="carbon steel">
                    <img src="<?php echo $stainless_steel['sizes']['large']; ?>" alt="<?php echo $stainless_steel['alt']; ?>" class="gallery-album-item">
                  </a>
                </div>
              <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>

    <!-- Aluminum Section -->
    <div class="gallery-album-container" id="aluminum-album">
      <div class="gallery-album-title">Aluminum</div>
      <div class="gallery-album-wrapper">
        <?php
          if( $aluminum ): ?>
            <?php foreach( $aluminum as $aluminum ): ?>
              <div class="gallery-album-item-wrapper">
                <a href="<?php echo $aluminum['url']; ?>" data-lightbox="carbon steel">
                  <img src="<?php echo $aluminum['sizes']['large']; ?>" alt="<?php echo $aluminum['alt']; ?>" class="gallery-album-item">
                </a>
              </div>
            <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
    
  </div> <!-- End Gallery Wrapper -->
</section>
<!-- End Gallery Section -->
