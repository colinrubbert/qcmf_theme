<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package QCMF_Theme
 */

 	// Advanced Custom Fields
	$google_maps_api_key					= get_field(google_maps_api_key);

?>

<?php wp_footer(); ?>
		<!-- Start Footer Section -->
		<footer id="footer">
			<div class="footer-container">
				<div class="brand-wrapper">
					<div class="brand-logo">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="Quality Custom Metal Fabrication Logo" class="brand-image">
					</div>
					<div class="brand-title">
						Quality Custom <br> Metal Fabrication</div>
				</div>
				<div class="copyright-wrapper">
					<div class="copyright">
						<span>&copy; <?php echo date('Y'); ?></span> Quality Custom Metal Fabrication
					</div>
					<div class="designed-by">
						Website Designed &amp; Developed by <a href="http://tradewindsinteractive.com" target="_blank" >Tradewinds Interactive</a>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer Section -->

		<!-- JS Scripts & CDN -->
		<script src="<?php bloginfo('template_directory'); ?>/js/jquery-2.2.4.min.js" type="text/javascript"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/modernizr-object-fit.js" type="text/javascript"></script>
		<?php if ( is_page('gallery')): ?>
			<script src="<?php bloginfo('template_directory'); ?>/js/lightbox.js" type="text/javascript"></script>
		<?php endif; ?>
		<script src="<?php bloginfo('template_directory'); ?>/js/main.js" type="text/javascript"></script>
		<?php if ( is_page( array('home', 'contact'))): ?>
			<script async defer
			src="https://maps.googleapis.com/maps/api/js?key=<?php echo $google_maps_api_key ?>&callback=initMap">
			</script>
		<?php endif; ?>

	</body>
</html>
