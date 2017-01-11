<?php
require_once get_template_directory() . '/inc/kirki-customizer/kirki-include.php';
require_once get_template_directory() . '/inc/kirki-customizer/simpletheme-kirki.php';
require_once get_template_directory() . '/inc/kirki-customizer/class.SimplethemeCustomizer.php';
require_once get_template_directory() . '/inc/kirki-customizer/constants.php';
require_once get_template_directory() . '/inc/kirki-customizer/variables.php';
require_once get_template_directory() . '/inc/kirki-customizer/config.php';

require_once get_template_directory() . '/inc/kirki-customizer/colors/colors-common.php';
require_once get_template_directory() . '/inc/kirki-customizer/style/style-common.php';
require_once get_template_directory() . '/inc/kirki-customizer/typography/typography-common.php';
require_once get_template_directory() . '/inc/kirki-customizer/page-elements/page-elements.php';
require_once get_template_directory() . '/inc/kirki-customizer/site-loader/site-loader.php';
require_once get_template_directory() . '/inc/kirki-customizer/custom-css/custom-css.php';
require_once get_template_directory() . '/inc/kirki-customizer/custom-javascript/custom-javascript.php';








if(class_exists('Simpletheme_Kirki')) {

//function located in /inc/kirki-customizer/kirki-config.php
$SimplethemeCustomizer->config();

/* PANELS */

Simpletheme_Kirki::add_panel( 'page_elements_panel', array(
	'priority'       => 40,
	'capability'     => CAPATIBILITY_EDIT_THEME_OPTIONS,
	'theme_supports' => '',
	'title'          => simpletheme_translate('Page Elements'),
	'description'    => simpletheme_translate('Page title, description, logo, etc'),
) );

Simpletheme_Kirki::add_panel( 'colors_panel', array(
	'priority'       => 41,
	'capability'     => CAPATIBILITY_EDIT_THEME_OPTIONS,
	'theme_supports' => '',
	'title'          => simpletheme_translate('Colors'),
	'description'    => simpletheme_translate('Color settings for simpletheme'),
) ); 

Simpletheme_Kirki::add_panel( 'typography_panel', array(
	'priority'       => 42,
	'capability'     => CAPATIBILITY_EDIT_THEME_OPTIONS,
	'theme_supports' => '',
	'title'          => simpletheme_translate('Typography'),
	'description'    => simpletheme_translate('Typography settings for simpletheme'),
) );

Simpletheme_Kirki::add_panel( 'style_panel', array(
	'priority'       => 43,
	'capability'     => CAPATIBILITY_EDIT_THEME_OPTIONS,
	'theme_supports' => '',
	'title'          => simpletheme_translate('Style'),
	'description'    => simpletheme_translate('Style settings for simpletheme'),
) );

//located in /inc/kirki-customizer/style/style-common.php
$SimplethemeCustomizer->addWholeSection('style_common');
//located in /inc/kirki-customizer/colors/colors-common.php
$SimplethemeCustomizer->addWholeSection('colors_common');
//located in /inc/kirki-customizer/typography/typography-common.php
$SimplethemeCustomizer->addWholeSection('typography_common');
//
$SimplethemeCustomizer->addWholeSection('page_title');
//
$SimplethemeCustomizer->addWholeSection('page_description');
//
$SimplethemeCustomizer->addWholeSection('custom_javascript');
//
$SimplethemeCustomizer->addWholeSection('custom_css');
//
$SimplethemeCustomizer->addWholeSection('site_logo');
//
$SimplethemeCustomizer->addWholeSection('site_loader');


$SimplethemeCustomizer->outputCustomJavascript();
$SimplethemeCustomizer->outputCustomCSS();







} //if(class_exists('Simpletheme_Kirki')) {