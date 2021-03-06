<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
	<!doctype html>
	<html class="no-js" <?php language_attributes(); ?> >

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<!-- Google Analytics Code Begins -->
		<script>
			(function(i, s, o, g, r, a, m) {
				i['GoogleAnalyticsObject'] = r;
				i[r] = i[r] || function() {
					(i[r].q = i[r].q || []).push(arguments)
				}, i[r].l = 1 * new Date();
				a = s.createElement(o), m = s.getElementsByTagName(o)[0];
				a.async = 1;
				a.src = g;
				m.parentNode.insertBefore(a, m)
			})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
			ga('create', 'UA-39767596-1', 'auto');
			ga('require', 'displayfeatures');
			ga('send', 'pageview');
		</script>
		<!-- Google Analytics Code Ends -->

		<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
		<?php endif; ?>


		<header class="site-header " role="banner">
			<div class="grid-container">
			<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle() ?>>
				<div class="title-bar-left">
					<!-- mobile only -->
					<?php
					// Display the Custom Logo, default logo, or the site's name
					if ( has_custom_logo() ) {
								the_custom_logo();
							} else { ?>
							<img width="130" height="130" src="www.google.com" />
					<?php } ?>
				</div>
				<div class="title-bar-right">
					<button class="mobile-menu-button border-button" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>">Menu</button>
				</div>
			</div>

			<nav class="site-navigation top-bar" role="navigation">
					<div class="site-desktop-title top-bar-title ">
						<?php
						// Display the Custom Logo, default logo, or the site's name
						if ( has_custom_logo() ) {
                  the_custom_logo();
              	} else { ?>
                <img width="130" height="130" src="www.google.com" />
            <?php } ?>
					</div>
				<div class="top-bar-right">
					<div class="call-button">
							<div class="call-title">
								877-425-5020
							</div>
							<div>
								Get Set UP For Life! Give us a call!
						</div>
					</div>


					<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
					<?php endif; ?>
				</div>
			</nav>
			<div class="top-bar-right-menu">
			<?php foundationpress_top_bar_r(); ?>
			</div>
		</div>

		</header>

		<div class="container">
