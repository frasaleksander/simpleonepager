<?php

$SimplethemeCustomizer->buildWholeSection('page_description', 'page_elements_panel', 

	function($section_id, $panel_id){

		/* CREATE SECTION */
		Simpletheme_Kirki::add_section( $section_id, array(
		    'priority'       => 10,
		    'capability'     => CAPATIBILITY_EDIT_THEME_OPTIONS,
		    'theme_supports' => '',
		    'title'          => simpletheme_translate('Page Description'),
		    'description'    => simpletheme_translate('Color, Typography, Margins ...'),
		    'panel'          => $panel_id,
		) );

		/* CREATE FIELDS */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'page_description_typography',
			'label'       => simpletheme_esc_attr( 'Page Description' ),
			'section'     => $section_id,
			'default'     => array(
				'font-family'    => 'Open Sans',
				'variant'        => 'regular',
				'subsets'        => array( 'latin-ext' ),
                'font-size'      => '1.625rem',
				'line-height'    => '1.6',
				'letter-spacing' => '0',
				'text-transform' => 'uppercase',
				'text-align'     => 'left',
				'color'          => '#444444'
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'element' => '.page-description, #page-description',
				),
			),
		) );

});