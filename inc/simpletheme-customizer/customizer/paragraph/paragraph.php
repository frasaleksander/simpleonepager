<?php

		/* CREATE SECTION */
		Simpletheme_Kirki::add_section( $section_id, array(
		    'priority'       => 10,
		    'capability'     => CAPATIBILITY_EDIT_THEME_OPTIONS,
		    'theme_supports' => '',
		    'title'          => simpletheme_translate('Paragraph'),
		    'description'    => simpletheme_translate('Color, Typography, Margins ...'),
		    'panel'          => $panel_id,
		) );

		/* CREATE FIELDS */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'paragraph_typography_common',
			'label'       => simpletheme_esc_attr( 'Paragraph Typography' ),
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
					'element' => 'body',
				),
			),
		) );

		/* LARGE DESKTOP */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'paragraph_typography_large_desktop',
			'label'       => simpletheme_esc_attr( 'Paragraph Typography - ' . LARGE_DESKTOP_INFO_TEXT ),
			'section'     => $section_id,
			'default'     => array(
                'font-size'      => '0.9rem',
				'line-height'    => '1.6',
				'letter-spacing' => '0',
				'text-transform' => 'none',
				'text-align'     => 'left',
				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'element' => 'body',
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'spacing',
			'settings'    => 'paragraph_margins_large_desktop',
			'label'       => simpletheme_esc_attr( 'Paragraph Margins - ' . LARGE_DESKTOP_INFO_TEXT ),
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
					'element' => 'p',
					'property' => 'margin',
				),
			),
		) );

		/* DESKTOP */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'paragraph_typography_desktop',
			'label'       => simpletheme_esc_attr( 'Paragraph Typography - ' . DESKTOP_INFO_TEXT ),
			'section'     => $section_id,
			'default'     => array(
                'font-size'      => '0.875rem',
				'line-height'    => '1.6',
				'letter-spacing' => '0',
				'text-transform' => 'none',
				'text-align'     => 'left',
				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . DESKTOP_WIDTH_MAX . 'px)',
					'element' => 'body',
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'spacing',
			'settings'    => 'paragraph_margins_desktop',
			'label'       => simpletheme_esc_attr( 'Paragraph Margins - ' . DESKTOP_INFO_TEXT ),
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
					'element' => 'p',
					'property' => 'margin',
				),
			),
		) );

		/* TABLET */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'paragraph_typography_tablet',
			'label'       => simpletheme_esc_attr( 'Paragraph Typography - ' . TABLET_INFO_TEXT ),
			'section'     => $section_id,
			'default'     => array(
                'font-size'      => '0.875rem',
				'line-height'    => '1.6',
				'letter-spacing' => '0',
				'text-transform' => 'none',
				'text-align'     => 'left',
				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . TABLET_WIDTH_MAX . 'px)',
					'element' => 'body',
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'spacing',
			'settings'    => 'paragraph_margins_tablet',
			'label'       => simpletheme_esc_attr( 'Paragraph Margins - ' . TABLET_INFO_TEXT ),
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
					'element' => 'p',
					'property' => 'margin',
				),
			),
		) );

		/* MOBILE */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'paragraph_typography_mobile',
			'label'       => simpletheme_esc_attr( 'Paragraph Typography - ' . MOBILE_INFO_TEXT ),
			'section'     => $section_id,
			'default'     => array(
                'font-size'      => '0.750rem',
				'line-height'    => '1.6',
				'letter-spacing' => '0',
				'text-transform' => 'none',
				'text-align'     => 'left',
				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . MOBILE_WIDTH_MAX . 'px)',
					'element' => 'body',
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'spacing',
			'settings'    => 'paragraph_margins_mobile',
			'label'       => simpletheme_esc_attr( 'Paragraph Margins - ' . MOBILE_INFO_TEXT  ),
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
					'element' => 'p',
					'property' => 'margin',
				),
			),
		) );


