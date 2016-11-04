<?php

  // Advanced Custom Fields
  $qcmf_email             = get_field(qcmf_email);
  $qcmf_phone_number      = get_field(qcmf_phone_number);
  $qcmf_street_address    = get_field(qcmf_street_address);
  $qcmf_city_state_zip    = get_field(qcmf_city_state_zip);

 ?>

<!-- Start Contact Section -->
<section id="contact">
  <div class="title contact-title"><span>Contact Us</span></div>
  <div class="contact-wrapper">
    <div class="contact-content-wrapper">
      <div class="contact-information">
        <div class="contact-address-wrapper">
          <i class="fa fa-map-marker"></i>
          <div class="contact-address"><?php echo $qcmf_street_address ?> <br> <?php echo $qcmf_city_state_zip ?></div>
        </div>
        <div class="contact-phone-wrapper">
          <i class="fa fa-phone"></i>
          <a href="tel:<?php echo $qcmf_phone_number ?>" class="contact-phone-number">
            <?php echo $qcmf_phone_number ?>
          </a>
        </div>
        <div class="contact-email-wrapper">
          <i class="fa fa-envelope"></i>
          <a href="mailto:<?php echo $qcmf_email ?>" class="contact-email">
            <?php echo $qcmf_email ?>
          </a>
        </div>
      </div>
      <div class="contact-map-wrapper">
        <div id="map"></div>
      </div>
    </div>

    <div class="contact-form-wrapper">
      <div class="contact-form-title">
        <h3>Get In Touch</h3>
      </div>
      <form action="" class="contact-form">
        <div class="contact-form-group">
          <input type="text" id="contact-form-name" class="contact-form-name" placeholder="Name">
        </div>
        <div class="contact-form-group">
          <input type="text" id="contact-form-information" class="contact-form-information" placeholder="Email">
        </div>
        <div class="contact-form-group">
          <textarea id="contact-form-message" class="contact-form-message" rows="3" placeholder="Message"></textarea>
        </div>
        <div class="contact-form-group contact-form-group-submit">
          <input type="submit" class="button secondary-button contact-form-submit" value="Submit">
        </div>
      </form>
    </div>
  </div>
</section>
<!-- End Contact Section -->
