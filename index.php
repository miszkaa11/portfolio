<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section id="news-page" class="news-page">
			<div class="container-s">
				<div class="news-page__content">

                <?php echo generate_post_title_box(postTitle: ".news", postSubtitle: "Stay updated")?>

				<?php
					// WP_Query arguments
					$args = array(
						'category_name' => 'news', // specify the category slug here
						'posts_per_page' => -1, // -1 to display all posts, you can change this number if needed
					);

					// The Query
					$query = new WP_Query( $args );

					// The Loop
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							
							// Include the Post-Type-specific template for the content
							// If you want to override this in a child theme, then include a file
							// called content-___.php (where ___ is the Post Type name) and that will be used instead
							get_template_part( 'template-parts/content', 'news' );
						}
					} else {
						// If no posts are found
						echo 'No posts found.';
					}

					// Restore original Post Data
					wp_reset_postdata();
				?>

				</div>
			</div>
		</section>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
