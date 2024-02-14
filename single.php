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
							<button class="arrow-box__btn" onclick="history.back()">
								<a href="javascript:void(0)">
									<i class="fa-solid fa-arrow-left"></i>
								</a>
							</button>    
						</div>
					</div>

					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', get_post_type() );

						// the_post_navigation(
						// 	array(
						// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'portfolio' ) . '</span> <span class="nav-title">%title</span>',
						// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'portfolio' ) . '</span> <span class="nav-title">%title</span>',
						// 	)
						// );

						// If comments are open or we have at least one comment, load up the comment template.
						// if ( comments_open() || get_comments_number() ) :
						// 	comments_template();
						// endif;

					endwhile; // End of the loop.
					?>
				</div>
			</div>
		</section>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
