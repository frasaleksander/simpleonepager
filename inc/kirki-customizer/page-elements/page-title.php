<?php

$SimplethemeCustomizer->buildWholeSection('page_title', 'page_elements_panel', 

	function($section_id, $panel_id){

		/* CREATE SECTION */
		Simpletheme_Kirki::add_section( $section_id, array(
		    'priority'       => 10,
		    'capability'     => CAPATIBILITY_EDIT_THEME_OPTIONS,
		    'theme_supports' => '',
		    'title'          => simpletheme_translate('Page Title'),
		    'description'    => simpletheme_translate('Color, Typography, Margins ...'),
		    'panel'          => $panel_id,
		) );

		/* CREATE FIELDS */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'page_title_typography',
			'label'       => simpletheme_esc_attr( 'Page Title' ),
			'section'     => $section_id,
			'default'     => array(
				'font-family'    => 'Open Sans',
				'variant'        => '700',
				'subsets'        => array( 'latin-ext' ),
                'font-size'      => '5rem',
				'line-height'    => '1.6',
				'letter-spacing' => '0',
				'text-transform' => 'uppercase',
				'text-align'     => 'left',
				'color'          => '#444444'
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'element' => '.page-title, #page-title',
				),
			),
		) );

});