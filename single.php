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

                    <?php echo generate_post_title_box(postTitle: get_the_title(), postSubtitle: "")?>

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
