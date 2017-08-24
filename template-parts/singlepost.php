<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Srizon_Product
 */
?>
<div class="row">
	<div class="col s12">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php
				if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<?php srizon_product_posted_on(); ?>
					</div><!-- .entry-meta -->
					<?php
				endif;
				the_title( '<h1 class="entry-title thin">', '</h1>' );
				?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php
				the_content( sprintf(
				/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s ...', 'srizon-one' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'srizon-one' ),
					'after'  => '</div>',
				) );
				?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php srizon_product_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</article><!-- #post-## -->
	</div>
</div>

