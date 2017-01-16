<?php

		/* CREATE SECTION */
		Simpletheme_Kirki::add_section( $section_id, array(
		    'priority'       => 10,
		    'capability'     => CAPATIBILITY_EDIT_THEME_OPTIONS,
		    'theme_supports' => '',
		    'title'          => simpletheme_translate('H3'),
		    'description'    => simpletheme_translate('Color, Typography, Margins ...'),
		    'panel'          => $panel_id,
		) );

		/* CREATE FIELDS */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'h3_typography_common',
			'label'       => simpletheme_esc_attr( 'H3 Typography' ),
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
					'element' => 'h3',
				),
			),
		) );

		/* LARGE DESKTOP */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'h3_typography_large_desktop',
			'label'       => simpletheme_esc_attr( 'H3 Typography - ' . LARGE_DESKTOP_INFO_TEXT ),
			'section'     => $section_id,
			'default'     => array(
                'font-size'      => '2.25rem',
				'line-height'    => '1.0',
				'letter-spacing' => '0',
				'text-transform' => 'none',
				'text-align'     => 'left',
				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'element' => 'h3',
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'spacing',
			'settings'    => 'h3_margins_large_desktop',
			'label'       => simpletheme_esc_attr( 'H3 Margins - ' . LARGE_DESKTOP_INFO_TEXT ),
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
					'element' => 'h3',
					'property' => 'margin',
				),
			),
		) );

		/* DESKTOP */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'h3_typography_desktop',
			'label'       => simpletheme_esc_attr( 'H3 Typography - ' . DESKTOP_INFO_TEXT),
			'section'     => $section_id,
			'default'     => array(
                'font-size'      => '2.25rem',
				'line-height'    => '1.0',
				'letter-spacing' => '0',
				'text-transform' => 'none',
				'text-align'     => 'left',
				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . DESKTOP_WIDTH_MAX . 'px)',
					'element' => 'h3',
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'spacing',
			'settings'    => 'h3_margins_desktop',
			'label'       => simpletheme_esc_attr( 'H3 Margins - ' . DESKTOP_INFO_TEXT ),
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
					'element' => 'h3',
					'property' => 'margin',
				),
			),
		) );

		/* TABLET */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'h3_typography_tablet',
			'label'       => simpletheme_esc_attr( 'H3 Typography - ' . TABLET_INFO_TEXT ),
			'section'     => $section_id,
			'default'     => array(
                'font-size'      => '2.25rem',
				'line-height'    => '1.0',
				'letter-spacing' => '0',
				'text-transform' => 'none',
				'text-align'     => 'left',
				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . TABLET_WIDTH_MAX . 'px)',
					'element' => 'h3',
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'spacing',
			'settings'    => 'h3_margins_tablet',
			'label'       => simpletheme_esc_attr( 'H3 Margins - ' . TABLET_INFO_TEXT ),
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
					'media_query' => '@media (max-width: ' . TABLET_WIDTH_MAX . 'px)',
					'element' => 'h3',
					'property' => 'margin',
				),
			),
		) );

		/* MOBILE */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'h3_typography_mobile',
			'label'       => simpletheme_esc_attr( 'H3 Typography - ' . MOBILE_INFO_TEXT),
			'section'     => $section_id,
			'default'     => array(
                'font-size'      => '2.25rem',
				'line-height'    => '1.0',
				'letter-spacing' => '0',
				'text-transform' => 'none',
				'text-align'     => 'left',
				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . MOBILE_WIDTH_MAX . 'px)',
					'element' => 'h3',
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'spacing',
			'settings'    => 'h3_margins_mobile',
			'label'       => simpletheme_esc_attr( 'H3 Margins - ' . MOBILE_INFO_TEXT),
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
					'element' => 'h3',
					'property' => 'margin',
				),
			),
		) );


