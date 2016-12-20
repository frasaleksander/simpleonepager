<?php

if(class_exists('Simpletheme_Kirki')) {

/*
 * KIRKI Customizer Stuff
 */

/* CONFIG */
Simpletheme_Kirki::add_config( 'simpletheme', array(
	'capability'     => 'edit_theme_options',
	'option_type'    => 'theme_mod',
	'disable_output' => false,
) );

/* PANELS */
Simpletheme_Kirki::add_panel( 'colors_panel', array(
	'priority'       => 40,
	'capability'     => 'edit_theme_options',
	'theme_supports' => 'custom-header',
	'title'          => __('Colors', 'simpletheme'),
	'description'    => __('Color settings for simpletheme', 'simpletheme'),
) );

//function located in /inc/customizer/colors/colors-main.php
simpletheme_kirki_customizer_colors_main();




} //if(class_exists('Simpletheme_Kirki')) {