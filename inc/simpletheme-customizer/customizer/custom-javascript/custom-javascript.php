<?php


/* CREATE SECTION */
Simpletheme_Kirki::add_section( $section_id, array(
    'priority'       => 1000,
    'capability'     => CAPATIBILITY_EDIT_THEME_OPTIONS,
    'theme_supports' => '',
    'title'          => simpletheme_translate('Custom Javascript'),
    'description'    => simpletheme_translate('Custom Javascript for simpletheme'),
    'panel'          => $panel_id,
) );


/* CREATE FIELDS */
Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
	'type'        => 'code',
	'settings'    => 'custom_javascript',
	'label'       => simpletheme_esc_attr( 'Custom Javascript' ),
	'section'     => $section_id,
	'default'     => sprintf( "/*\n%s\n*/", simpletheme_translate( "You can add your own Javascript here." ) ),
	'priority'    => 10,
	'choices'     => array(
		'language' => 'javascript',
		'theme'    => 'monokai',
		'height'   => 250,
	),
) );