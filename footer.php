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

// Variables
$linkedin = 'https://www.linkedin.com/in/micha%C5%82-%C5%82ukaszewicz-970634160/';
$github = 'https://github.com/miszkaa11/';

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">

			<!-- Footer -->

            <section id="footer" class="footer">
                <div class="container-m">
                    <div class="icons__content">
                        <div class="icons__inner">
                            <a href="mailto:<?php echo get_personal_info(fieldName: 'email')?>" class="logo"><?php echo get_icon( iconName: 'google')?></a>
                        </div>
                        <div class="icons__inner">
                            <a href="<?= $linkedin ?>" class="logo"><?php echo get_icon( iconName: 'linkedin-in')?></a>
                        </div>
                        <div class="icons__inner">
                            <a href="<?= $github ?>" class="logo"><?php echo get_icon( iconName: 'github' )?></a>
                        </div>
                    </div>
                    <div id="footer__content" class="footer__content content-box">
                        <div class="privacy-policy-cta">
                            <a href="/portfolio/privacy-policy/" class="privacy-policy__link text">.privacyPolicy</a>
                        </div>
                        <div class="copyrights">
                            <p class="copyrights__text f-style-primary text">Copyright &copy; <?= date( 'Y' ) ?> <?php echo get_personal_info(fieldName: 'name')?></p>
                        </div>
                    </div>
                </div>
            </section>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
