<?php


/* CREATE SECTION */
Simpletheme_Kirki::add_section( $section_id, array(
    'priority'       => 900,
    'capability'     => CAPATIBILITY_EDIT_THEME_OPTIONS,
    'theme_supports' => '',
    'title'          => simpletheme_translate('Google Analytics'),
    'description'    => simpletheme_translate('Google Analytics'),
    'panel'          => $panel_id,
) );


/* CREATE FIELDS */
/*Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
	'type'        => 'code',
	'settings'    => 'google_analytics_code',
	'label'       => simpletheme_esc_attr( 'Google Analytics Code' ),
	'section'     => $section_id,
	'default'     => '',
	'priority'    => 10,
	'choices'     => array(
		'language' => 'htmlmixed',
		'theme'    => 'monokai',
		'height'   => 250,
	),
) );*/

Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
	'type'        => 'text',
	'settings'    => 'google_analytics_tracking_id',
	'label'       => simpletheme_esc_attr( 'Google Analytics Tracking ID' ),
	'section'     => $section_id,
	'default'     => '',
	'priority'    => 10,
) );