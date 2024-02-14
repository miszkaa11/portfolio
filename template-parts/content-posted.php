<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="news-posts__content">
		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="news-posts__inner">	
                
                <div class="entry-meta">
					<?php portfolio_posted_on(); ?>
				</div>    
            
				<header class="entry-header">
					<?php endif;
						if ( is_singular() ) :
							the_title( '<h1 class="entry-title">', '</h1>' );
						else :
							the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
						endif;
					?>
				</header><!-- .entry-header -->
					
				<div class="entry-content">
					<?php
					

					the_excerpt();

					?>
					<a href="<?php the_permalink(); ?>">Read more</a>
				</div><!-- .entry-content -->
			</div>
			<div class="news-posts__inner">
				<div class="entry-photo">
					<?php portfolio_post_thumbnail(); ?>
				</div>
			</div>
	</div>


	<!-- <footer class="entry-footer">
		<?php portfolio_entry_footer(); ?>
	</footer> -->
</article><!-- #post-<?php the_ID(); ?> -->
