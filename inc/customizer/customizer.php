<?php
/**
 * simpletheme Theme Customizer.
 *
 * @package simpletheme
 */


/*
 * Normal Wordpress Customizer 
 */
function simpletheme_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	/* remove default colors section */
	$wp_customize->remove_section('colors');

}

add_action( 'customize_register', 'simpletheme_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function simpletheme_customize_preview_js() {
	wp_enqueue_script( 'simpletheme_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}

add_action( 'customize_preview_init', 'simpletheme_customize_preview_js' );