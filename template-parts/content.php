<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Srizon_Product
 */
if ( ! isset( $GLOBALS['lorem'] ) ) {
	$GLOBALS['lorem'] = 1;
} else {
	$GLOBALS['lorem'] ++;
}
$featured_image = get_the_post_thumbnail( null, 'medium', array(
	'data-clickable' => 'yes',
	'data-url'       => esc_url( get_permalink() )
) );
if ( ! $featured_image ) {
	$featured_image = '<img src="http://lorempixel.com/800/600/nature/' . $GLOBALS['lorem'] . '" data-clickable="yes" data-url="' . esc_url( get_permalink() ) . '">';
}
else {
	$featured_image = str_replace( 'sizes="(max-width: 300px) 100vw, 300px"', 'sizes="auto"', $featured_image );
}
?>
<div class="col l12">
	<div class="card postcard">
		<div class="card-content">
			<div class="row">
				<div class="col m4">
					<div class="featured-image">
						<?php echo $featured_image; ?>
					</div>
				</div>
				<div class="col m8">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<?php
							if ( 'post' === get_post_type() ) : ?>
								<div class="entry-meta">
									<?php srizon_product_posted_on(); ?>
								</div><!-- .entry-meta -->
								<?php
							endif;
							if ( is_single() ) :
								the_title( '<h1 class="entry-title">', '</h1>' );
							else :
								the_title( '<h2 class="entry-title thin"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
							endif;

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
		</div>
	</div>
</div><!-- div.col -->
