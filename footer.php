<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

</div><!-- Close container -->
	<div class="footer-container" data-sticky-footer>
		<div class="footer-phone-bar">
			<div class="grid-x footer grid-container">
			<h3 class="large-6 cell">
				<div class="phone-bar-text">
				Get Set UP For Life.
			</div>
			<div class="phone-bar-text">
				Call our admission specialists today.
			</div>
			</h3>
			<div class="large-6 cell">
				<div class="call-button">
						<h1 class="call-title">
							877-425-5020
						</h1>
				</div>
			</div>
		</div>
		</div>
		<footer class="footer">
			<div class="top-footer grid-x grid-container">
				<div class="top-footer-left large-8 cell">
					<?php dynamic_sidebar( 'footer-widgets-top-left' ); ?>
				</div>
				<div class="top-footer-right large-4 cell">
						<?php dynamic_sidebar( 'footer-widgets-top-right' ); ?>
			</div>
			</div>
			<div class="lower-footer grid-x grid-container">
			<?php dynamic_sidebar( 'footer-widgets' ); ?>
			</div>
		</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.13'><\/script>".replace("HOST", location.hostname));
//]]></script>
</body>
</html>
