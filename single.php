<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package portfolio
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section id="single-news-page" class="single-news-page">
			<div class="container-m">
				<div class="single-news-page__content">

					<div class="title content-box">
						<div class="title__content">
							<h2 class="title__header header-l" data-aos="zoom-in"><?php echo get_the_title(); ?></h2>
						</div>
						<div class="arrow-box" data-aos="zoom-in">
							<a href="javascript:void(0)" class="arrow-box__btn btn" onclick="history.back()">
								<i class="fa-solid fa-arrow-left"></i>
							</a>
						</div>
					</div>

					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', get_post_type() );

					endwhile; // End of the loop.
					?>
				</div>
			</div>
		</section>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
