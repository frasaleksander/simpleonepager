<?php
require_once get_template_directory() . '/inc/simpletheme-customizer/kirki-include.php';
require_once get_template_directory() . '/inc/simpletheme-customizer/simpletheme-kirki.php';
require_once get_template_directory() . '/inc/simpletheme-customizer/class.SimplethemeCustomizer.php';
require_once get_template_directory() . '/inc/simpletheme-customizer/class.SimplethemeCustomizerModel.php';
require_once get_template_directory() . '/inc/simpletheme-customizer/constants.php';
require_once get_template_directory() . '/inc/simpletheme-customizer/variables.php';
require_once get_template_directory() . '/inc/simpletheme-customizer/config.php';

require_once get_template_directory() . '/inc/simpletheme-customizer/colors/colors-common.php';
require_once get_template_directory() . '/inc/simpletheme-customizer/style/style-common.php';
require_once get_template_directory() . '/inc/simpletheme-customizer/typography/typography-common.php';








if(class_exists('Simpletheme_Kirki')) {


SimplethemeCustomizer::config();

/*
 * PANELS 
 */
SimplethemeCustomizer::requirePanel('page_elements_panel');

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


$SimplethemeCustomizer->addWholeSection('style_common');
$SimplethemeCustomizer->addWholeSection('colors_common');
$SimplethemeCustomizer->addWholeSection('typography_common');

/*
 * SECTIONS 
 */
SimplethemeCustomizer::requireSection('page_title', 'page_elements_panel');
SimplethemeCustomizer::requireSection('page_description', 'page_elements_panel');
SimplethemeCustomizer::requireSection('site_logo', 'page_elements_panel');
SimplethemeCustomizer::requireSection('site_loader');
SimplethemeCustomizer::requireSection('custom_css');
SimplethemeCustomizer::requireSection('custom_javascript');

} //if(class_exists('Simpletheme_Kirki')) {