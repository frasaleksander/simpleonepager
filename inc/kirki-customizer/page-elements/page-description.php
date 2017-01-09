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
			'settings'    => 'page_description_typography_common',
			'label'       => simpletheme_esc_attr( 'Page Description Typography' ),
			'section'     => $section_id,
			'default'     => array(
				'font-family'    => 'Open Sans',
				'variant'        => 'regular',
				'subsets'        => array( 'latin-ext' ),
				'color'          => '#444444'
				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'element' => '.page-description, #page-description',
				),
			),
		) );

		/* LARGE DESKTOP */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'page_description_typography_large_desktop',
			'label'       => simpletheme_esc_attr( 'Page Description Typography - Large Desktop' ),
			'section'     => $section_id,
			'default'     => array(
                'font-size'      => '1.625rem',
				'line-height'    => '1.6',
				'letter-spacing' => '0',
				'text-transform' => 'uppercase',
				'text-align'     => 'left',
				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'element' => '.page-description, #page-description',
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'spacing',
			'settings'    => 'page_description_margins_large_desktop',
			'label'       => simpletheme_esc_attr( 'Page Description Margins - Large Desktop' ),
			'section'     => $section_id,
			'default'     => array(
                'top'     => '0rem',
                'bottom'  => '1.9rem',
                'left'    => '0rem',
                'right'   => '0rem',				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'element' => '.page-description, #page-description',
					'property' => 'margin',
				),
			),
		) );

		/* DESKTOP */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'page_description_typography_desktop',
			'label'       => simpletheme_esc_attr( 'Page Description Typography - Desktop' ),
			'section'     => $section_id,
			'default'     => array(
                'font-size'      => '1.4rem',
				'line-height'    => '1.6',
				'letter-spacing' => '0',
				'text-transform' => 'uppercase',
				'text-align'     => 'left',
				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . DESKTOP_WIDTH_MAX . 'px)',
					'element' => '.page-description, #page-description',
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'spacing',
			'settings'    => 'page_description_margins_desktop',
			'label'       => simpletheme_esc_attr( 'Page Description Margins - Desktop' ),
			'section'     => $section_id,
			'default'     => array(
                'top'     => '0rem',
                'bottom'  => '1.9rem',
                'left'    => '0rem',
                'right'   => '0rem',				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . DESKTOP_WIDTH_MAX . 'px)',
					'element' => '.page-description, #page-description',
					'property' => 'margin',
				),
			),
		) );

		/* TABLET */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'page_description_typography_tablet',
			'label'       => simpletheme_esc_attr( 'Page Description Typography - Tablet' ),
			'section'     => $section_id,
			'default'     => array(
                'font-size'      => '1.25rem',
				'line-height'    => '1.5',
				'letter-spacing' => '0',
				'text-transform' => 'uppercase',
				'text-align'     => 'left',
				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . TABLET_WIDTH_MAX . 'px)',
					'element' => '.page-description, #page-description',
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'spacing',
			'settings'    => 'page_description_margins_tablet',
			'label'       => simpletheme_esc_attr( 'Page Description Margins - Tablet' ),
			'section'     => $section_id,
			'default'     => array(
                'top'     => '0rem',
                'bottom'  => '1.9rem',
                'left'    => '0rem',
                'right'   => '0rem',				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . TABLET_WIDTH_MAX . 'px)',
					'element' => '.page-description, #page-description',
					'property' => 'margin',
				),
			),
		) );

		/* MOBILE */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'page_description_typography_mobile',
			'label'       => simpletheme_esc_attr( 'Page Description Typography - Mobile' ),
			'section'     => $section_id,
			'default'     => array(
                'font-size'      => '1.25rem',
				'line-height'    => '1.5',
				'letter-spacing' => '0',
				'text-transform' => 'uppercase',
				'text-align'     => 'left',
				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . MOBILE_WIDTH_MAX . 'px)',
					'element' => '.page-description, #page-description',
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'spacing',
			'settings'    => 'page_description_margins_mobile',
			'label'       => simpletheme_esc_attr( 'Page Description Margins - Mobile' ),
			'section'     => $section_id,
			'default'     => array(
                'top'     => '0rem',
                'bottom'  => '1.9rem',
                'left'    => '0rem',
                'right'   => '0rem',				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . MOBILE_WIDTH_MAX . 'px)',
					'element' => '.page-description, #page-description',
					'property' => 'margin',
				),
			),
		) );

});