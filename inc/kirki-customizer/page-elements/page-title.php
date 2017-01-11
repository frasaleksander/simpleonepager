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
			'settings'    => 'page_title_typography_common',
			'label'       => simpletheme_esc_attr( 'Page Title Typography' ),
			'section'     => $section_id,
			'default'     => array(
				'font-family'    => 'Open Sans',
				'variant'        => '700',
				'subsets'        => array( 'latin-ext' ),
				'color'          => '#444444'
				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'element' => '.page-title, #page-title',
				),
			),
		) );

		/* LARGE DESKTOP */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'page_title_typography_large_desktop',
			'label'       => simpletheme_esc_attr( 'Page Title Typography - Large Desktop' ),
			'section'     => $section_id,
			'default'     => array(
                'font-size'      => '5rem',
				'line-height'    => '1.1',
				'letter-spacing' => '0',
				'text-transform' => 'uppercase',
				'text-align'     => 'left',
				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'element' => '.page-title, #page-title',
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'spacing',
			'settings'    => 'page_title_margins_large_desktop',
			'label'       => simpletheme_esc_attr( 'Page Title Margins - Large Desktop' ),
			'section'     => $section_id,
			'default'     => array(
                'top'     => '0rem',
                'bottom'  => '1.7rem',
                'left'    => '0rem',
                'right'   => '0rem',				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'element' => '.page-title, #page-title',
					'property' => 'margin',
				),
			),
		) );

		/* DESKTOP */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'page_title_typography_desktop',
			'label'       => simpletheme_esc_attr( 'Page Title Typography - Desktop' ),
			'section'     => $section_id,
			'default'     => array(
                'font-size'      => '4.5rem',
				'line-height'    => '1.1',
				'letter-spacing' => '0',
				'text-transform' => 'uppercase',
				'text-align'     => 'left',
				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . DESKTOP_WIDTH_MAX . 'px)',
					'element' => '.page-title, #page-title',
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'spacing',
			'settings'    => 'page_title_margins_desktop',
			'label'       => simpletheme_esc_attr( 'Page Title Margins - Desktop' ),
			'section'     => $section_id,
			'default'     => array(
                'top'     => '0rem',
                'bottom'  => '1.5rem',
                'left'    => '0rem',
                'right'   => '0rem',				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . DESKTOP_WIDTH_MAX . 'px)',
					'element' => '.page-title, #page-title',
					'property' => 'margin',
				),
			),
		) );

		/* TABLET */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'page_title_typography_tablet',
			'label'       => simpletheme_esc_attr( 'Page Title Typography - Tablet' ),
			'section'     => $section_id,
			'default'     => array(
                'font-size'      => '3.5rem',
				'line-height'    => '1.1',
				'letter-spacing' => '0',
				'text-transform' => 'uppercase',
				'text-align'     => 'left',
				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . TABLET_WIDTH_MAX . 'px)',
					'element' => '.page-title, #page-title',
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'spacing',
			'settings'    => 'page_title_margins_tablet',
			'label'       => simpletheme_esc_attr( 'Page Title Margins - Tablet' ),
			'section'     => $section_id,
			'default'     => array(
                'top'     => '0rem',
                'bottom'  => '1.25rem',
                'left'    => '0rem',
                'right'   => '0rem',				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . TABLET_WIDTH_MAX . 'px)',
					'element' => '.page-title, #page-title',
					'property' => 'margin',
				),
			),
		) );

		/* MOBILE */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'page_title_typography_mobile',
			'label'       => simpletheme_esc_attr( 'Page Title Typography - Mobile' ),
			'section'     => $section_id,
			'default'     => array(
                'font-size'      => '3.5rem',
				'line-height'    => '1.1',
				'letter-spacing' => '0',
				'text-transform' => 'uppercase',
				'text-align'     => 'left',
				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . MOBILE_WIDTH_MAX . 'px)',
					'element' => '.page-title, #page-title',
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'spacing',
			'settings'    => 'page_title_margins_mobile',
			'label'       => simpletheme_esc_attr( 'Page Title Margins - Mobile' ),
			'section'     => $section_id,
			'default'     => array(
                'top'     => '0rem',
                'bottom'  => '1.5rem',
                'left'    => '0rem',
                'right'   => '0rem',				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . MOBILE_WIDTH_MAX . 'px)',
					'element' => '.page-title, #page-title',
					'property' => 'margin',
				),
			),
		) );


});