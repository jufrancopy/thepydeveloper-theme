<?php

/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<link href="https://fonts.cdnfonts.com/css/futura" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
	<?php do_action('wp_body_open'); ?>
	<div class="site" id="page">

		<!-- ******************* The Navbar Area ******************* -->
		<div id="wrapper-navbar">
			<div class="top-header-holder">
				<div class="container">
					<div class="row align-items-end">
						<div class="col-md-3 logo-holder-logo animate__animated animate__bounceInDown animate__delay-1.5s">
							<a href="<?php echo get_bloginfo('url') ?>" class="wow backOutRight">
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo_blanco.png">
							</a>
						</div>
						<div class="col-md-3 logo-holder-aen animate__animated animate__bounceInDown animate__delay-1.5s">
							<a href="#" class="wow backOutRight">
								<img src="<?php echo get_template_directory_uri(); ?>/img/logoAEN-letras-blancas.png">
							</a>
						</div>

						<div class="col-md-3">
							<div class="donate-holder <?php if (is_front_page()) { ?> animate__animated animate__fadeInDown <?php } ?>">
								<div class="contact-holder">
									<div class="pensa_grande">
										<img src="<?php echo get_template_directory_uri(); ?>/img/pensa-en-grande.png">
									</div>
									<div class="mobile-logo-holder">
										<a href="<?php echo get_bloginfo('url') ?>">
											<img src="<?php echo get_template_directory_uri(); ?>/img/logo_blanco.png">
										</a>
									</div>
									<div class="mobile-aen-logo-holder">
										<a href="<?php echo get_bloginfo('url') ?>">
											<img src="<?php echo get_template_directory_uri(); ?>/img/logoAEN-letras-negras.png">
										</a>
									</div>


									<!-- <div class="social-media-holder-tablet">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-instagram"></i></a>
									</div> -->
									<button class="navbar-toggler md-view" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'understrap'); ?>">
										<div class="menu-title">
											Menu
										</div>
										<div>
											<div class="bar"></div>
											<div class="bar"></div>
											<div class="bar"></div>
										</div>
									</button>

								</div>

								<!-- <a href="http://localhost:8888/viva/wordpress/donation/" class="donation-btn">Paraguay, pensá en grande</a> -->
							</div>
						</div>

						<div class="col- <?php if (is_front_page()) { ?> animate__animated animate__bounceInDown animate__delay-1.5s
								<?php } ?>">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'understrap'); ?>">
								<div class="bar"></div>
								<div class="bar"></div>
								<div class="bar"></div>
								<div class="menu-title">
									Menu
								</div>
							</button>

							<div class="social-media-holder">
								<a href="https://www.facebook.com/hernan.codas"><i class="fa fa-facebook"></i></a>
								<a href="https://twitter.com/CodasHernan"><i class="fa fa-twitter"></i></a>
								<a href="https://www.instagram.com/hernancodas/"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
					</div>

				</div>
			</div>

			<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e('Skip to content', 'understrap'); ?></a>

			<nav id="main-nav" class="navbar navbar-expand-lg" aria-labelledby="main-nav-label">

				<h2 id="main-nav-label" class="sr-only">
					<?php esc_html_e('Main Navigation', 'understrap'); ?>
				</h2>


				<div class="container <?php if (is_front_page()) { ?> animate__animated animate__fadeInUp <?php } ?>">
					<!-- The WordPress Menu goes here -->
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					);
					?>

				</div><!-- .container -->
			</nav><!-- .site-navigation -->
		</div><!-- #wrapper-navbar end -->
	</div>