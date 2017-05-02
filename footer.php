<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Srizon_Product
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer grey lighten-3" role="contentinfo">
		<div class="site-info container center-align">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'srizon-one' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'srizon-one' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'srizon-one' ), 'Srizon One', '<a href="https://srizon.com/" rel="designer">Afzal Hossain</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
