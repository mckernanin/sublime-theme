<?php
if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">
				<div id="footer-top">
					<div class="et_pb_row">
					<h4>Sublime Digital is hiring.</h4>
					<a href="#">Learn More</a>
					</div>
				</div>
				<div id="footer-bottom">
					<div class="container clearfix">
				<?php
					if ( false !== et_get_option( 'show_footer_social_icons', true ) ) {
						get_template_part( 'includes/social_icons', 'footer' );
					}
				?>

						<p id="footer-info">
							&copy; <?php echo date('Y'); ?> | Site by <a href="http://digsublime.com">Sublime Digital</a>
						</p>
					</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->
<div id="contact-overlay">
	<a href="#" id="closeContact" class="btn-close">X</a>
	<div class="contain">
		<h3>Contact Sublime Digital</h3>
		<p>form</p>
		<p>map</p>
	</div>
</div>
	<?php wp_footer(); ?>
</body>
</html>