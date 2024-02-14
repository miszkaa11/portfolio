<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">

			<!-- Footer -->

			<section id="footer" class="footer">
				<div class="container-m">
					<div class="icons__content">
							<div class="icons__inner">
								<a href="mailto:michal.lukaszewicz.dev@gmail.com" class="logo"><i class="fab fa-google"></i></a>
							</div>
							<div class="icons__inner">
								<a href="https://www.linkedin.com/in/micha%C5%82-%C5%82ukaszewicz-970634160/" class="logo"><i class="fab fa-linkedin-in"></i></a>
							</div>
							<div class="icons__inner">
								<a href="tel:731540795" class="logo"><i class="fas fa-mobile-alt"></i></a>
							</div>
					</div>
					<div id="footer__content" class="footer__content content-box">
						<div class="privacy-policy-cta">
							<a href="/portfolio/privacy-policy/" class="privacy-policy__link text">.privacyPolicy</a>
						</div>
						<div class="copyrights">
							<p class="copyrights__text f-style-primary text">Copyrights &copy; 2021 Michał Łukaszewicz</p>
						</div>
					</div>
				</div>
			</section>

			<!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'portfolio' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'portfolio' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'portfolio' ), 'portfolio', '<a href="http://underscores.me/">Underscores.me</a>' );
				?> -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
