<?php
/**
 * simpletheme Theme Customizer.
 *
 * @package simpletheme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function simpletheme_customizer_add_color_option($wp_customize, $option_name, $title, $section, $default_color) {
	$wp_customize->add_setting( $option_name, array(
		'default'        => $default_color,
		'theme_supports' => 'custom-header',
		'sanitize_callback'    => 'sanitize_hex_color_no_hash',
		'sanitize_js_callback' => 'maybe_hash_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $option_name, array(
		'label'   => __( $title, 'simpletheme' ),
		'section' => $section,
	) ) );
}

function simpletheme_customizer_general_colors($wp_customize) {

	$wp_customize->add_section( 'general_colors', array(
	    'priority'       => 10,
	    'capability'     => 'edit_theme_options',
	    'theme_supports' => 'custom-header',
	    'title'          => __('General', 'simpletheme'),
	    'description'    =>  __('Default theme colors', 'simpletheme'),
	    'panel'          => 'colors_panel',
	) );

	simpletheme_customizer_add_color_option($wp_customize, 'text_color', 'Text Color', 'general_colors', '#444444');
	simpletheme_customizer_add_color_option($wp_customize, 'background_color', 'Background Color', 'general_colors', '#ffffff');
	//LINK
	simpletheme_customizer_add_color_option($wp_customize, 'link_color', 'Link Color', 'general_colors', '#f06d06');
	simpletheme_customizer_add_color_option($wp_customize, 'link_color_hover', 'Link Color: Hover', 'general_colors', '#f06d06');
	simpletheme_customizer_add_color_option($wp_customize, 'link_color_hover', 'Link Color: Hover', 'general_colors', '#f06d06');
	simpletheme_customizer_add_color_option($wp_customize, 'link_color_focus', 'Link Color: Focus', 'general_colors', '#f06d06');
	simpletheme_customizer_add_color_option($wp_customize, 'link_color_visited', 'Link Color: Visited', 'general_colors', '#f06d06');
	//BUTTON
	simpletheme_customizer_add_color_option($wp_customize, 'button_color_background', 'Button Background Color', 'general_colors', '#e6e6e6');
	simpletheme_customizer_add_color_option($wp_customize, 'button_color_background_hover', 'Button Background Color: Hover', 'general_colors', '#444444');
	simpletheme_customizer_add_color_option($wp_customize, 'button_color_background_focus', 'Button Background Color: Focus', 'general_colors', '#444444');
	simpletheme_customizer_add_color_option($wp_customize, 'button_color_text', 'Button Text Color', 'general_colors', '#444444');
	simpletheme_customizer_add_color_option($wp_customize, 'button_color_text_hover', 'Button Text Color: Hover', 'general_colors', '#ffffff');
	simpletheme_customizer_add_color_option($wp_customize, 'button_color_text_focus', 'Button Text Color: Focus', 'general_colors', '#ffffff');
	simpletheme_customizer_add_color_option($wp_customize, 'button_color_border', 'Button Border Color', 'general_colors', '#e6e6e6');
	simpletheme_customizer_add_color_option($wp_customize, 'button_color_border_hover', 'Button Border Color: Hover', 'general_colors', '#444444');
	simpletheme_customizer_add_color_option($wp_customize, 'button_color_border_focus', 'Button Border Color: Focus', 'general_colors', '#444444');
	//INPUT
	

}
function simpletheme_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->remove_section('colors');

	$wp_customize->add_panel( 'colors_panel', array(
	  'priority'       => 40,
	  'capability'     => 'edit_theme_options',
	  'theme_supports' => 'custom-header',
	  'title'          => __('Colors', 'simpletheme'),
	  'description'    => __('Color settings for simpletheme', 'simpletheme'),
	) );

	simpletheme_customizer_general_colors($wp_customize);

}
add_action( 'customize_register', 'simpletheme_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function simpletheme_customize_preview_js() {
	wp_enqueue_script( 'simpletheme_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'simpletheme_customize_preview_js' );
