<?php
if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">
				<div id="footer-top">
					<div class="et_pb_row">
					<h4>Join us at WordCamp Denver.</h4>
					<a href="/team">Meet the Team</a>
					</div>
				</div>
				<div id="footer-bottom">
					<div class="container clearfix">
						<div class="foot-left">
							<a href="#" id="foot-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" /></a>
							<ul>
								<li class="head">Get in Touch</li>
								<li><a href="tel:303.222.7149">303.222.7149</a></li>
								<li><a href="mailto:team@digsublime.com">team@digsublime.com</a></li>
							</ul>
							<ul>
								<li class="head">Address</li>
								<li>80 Garden Center, Ste 370</li>
								<li>Broomfield, CO 80020</li>
							</ul>
							<ul class="social">
								<li><a href="https://www.linkedin.com/company/sublime-digital-inc"><span class="fa fa-linkedin-square"></span></a></li>
								<li><a href="https://twitter.com/digsublime"><span class="fa fa-twitter-square"></span></a></li>
								<li><a href="https://www.facebook.com/digsublime?fref=ts"><span class="fa fa-facebook-square"></span></a></li>
							</ul>
						</div>
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
		<div class="column_1_2">
			<?php echo do_shortcode('[gravityform id="1" title="false" description="false" name="Contact"]'); ?>
		</div>
		<div class="column_1_2">
			<div class="embed-container"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3059.802986560032!2d-105.08944659999997!3d39.92342489999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876b8ba88a9d3a5f%3A0x70066bd4013e7ba6!2s80+Garden+Center%2C+Greenway+Shopping+Center%2C+80+Garden+Center%2C+Broomfield%2C+CO+80020!5e0!3m2!1sen!2sus!4v1431120356598" width="600" height="450" frameborder="0" style="border:0"></iframe></div>
		</div>
	</div>
</div>
	<?php wp_footer(); ?>
</body>
</html>