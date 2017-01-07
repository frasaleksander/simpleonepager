<?php

$SimplethemeCustomizer->buildWholeSection('style_common', function(){

		/* CREATE SECTION */
		Simpletheme_Kirki::add_section( 'style_common', array(
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
			'section'     => 'style_common',
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