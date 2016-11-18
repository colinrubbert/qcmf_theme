<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package QCMF_Theme
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!--[if IE ]>
		<meta HTTP-EQUIV="REFRESH" content="0; url=/ie">
	<![endif]-->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'qcmf_theme' ); ?></a>

	<header id="navigation">
		<div class="container">
			<div class="navigation-wrapper" id="navigation-wrapper">
				<div class="brand-wrapper">
					<div class="brand-logo">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="Quality Custom Metal Fabrication Logo" class="brand-image">
					</div>
					<div class="brand-title">
						Quality Custom <br> Metal Fabrication
					</div>
				</div>
				<?php
					wp_nav_menu( array(
						'theme_location' 	=>	'primary',
						'container'				=>	'div',
						'container_class'	=>	'navigation-links-wrapper closed',
						'container_id'		=>	'navigation-links-wrapper'
					) );
				?>
				<div class="navigation-mobile-toggle" id="navigation-mobile-toggle" onClick="toggleMenu()">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/menu.svg" alt="Mobile Navigation Menu Toggle" class="navigation-mobile-toggle-image">
				</div>
			</div>
		</div>
	</header>

	<div id="content" class="site-content">
