<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Srizon_Product
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
		<nav id="site-navigation" class="grey lighten-3 main-navigationgrey-text text-darken-2" role="navigation">
			<div class="nav-wrapper container">
				<?php
				$site_logo_src = get_theme_mod( 'srizon_product_logo', '' );
				$site_logo     = '<span class="no-logo">Upload Logo from customizer</span>';
				if ( trim( $site_logo_src ) ) {
					$site_logo = '<span id="site-logo-span"><img class="site-logo" src="' . $site_logo_src . '" alt="Logo" /></span>';
				}
				?>
				<a href="/" id="logo-container" class="brand-logo"><?php echo $site_logo?></a>
				<?php wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'right hide-on-med-and-down'
				) ); ?>

				<?php wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'mobile-menu',
					'menu_class'     => 'side-nav'
				) ); ?>
				<a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
			</div>

		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content container">
