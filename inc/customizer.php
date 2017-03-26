<?php
/**
 * Srizon Product Theme Customizer
 *
 * @package Srizon_Product
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function srizon_product_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->add_setting(
		'srizon_product_logo',
		array(
			'sanitize_callback' => 'esc_url_raw'
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'srizon_product_logo', array(
		'label'    => __( 'Logo', 'srizon_product' ),
		'section'  => 'title_tagline',
		'settings' => 'srizon_product_logo'
	) ) );
	$wp_customize->selective_refresh->add_partial( 'srizon_product_logo', array(
		'selector' => '#site-logo-span'
	) );
}


add_action( 'customize_register', 'srizon_product_customize_register' );

function srizon_product_customize_preview_js() {
	wp_enqueue_script( 'srizon_blog-customize-preview', get_template_directory_uri() . '/customizer.js', array( 'customize-preview' ), '1.0', true );
}

add_action( 'customize_preview_init', 'srizon_product_customize_preview_js' );