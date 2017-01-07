<?php

$SimplethemeCustomizer->buildWholeSection(
	'style_common', 
	'style_panel', 
	function($section_id, $panel_id) {

		/* CREATE SECTION */
		Simpletheme_Kirki::add_section($section_id, array(
		    'priority'       => 10,
		    'capability'     => CAPATIBILITY_EDIT_THEME_OPTIONS,
		    'theme_supports' => '',
		    'title'          => simpletheme_translate('Common Style'),
		    'description'    =>  simpletheme_translate('Style that is being used throughout the whole theme.'),
		    'panel'          => 'style_panel',
		) );

		/* CREATE FIELDS */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'dimension',
			'settings'    => 'site_width',
			'label'       => simpletheme_translate( 'Site Width'),
			'section'     => $section_id,
			'default'     => '1000px',
			'priority'    => 10,
			'output'      => array(
				array(
					'element'  => '.st-container',
					'property' => 'max-width'
					)
				)
		) );


});