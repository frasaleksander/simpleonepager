<?php

		/* CREATE SECTION */
		Simpletheme_Kirki::add_section( $section_id, array(
		    'priority'       => 10,
		    'capability'     => CAPATIBILITY_EDIT_THEME_OPTIONS,
		    'theme_supports' => '',
		    'title'          => simpletheme_translate('Code'),
		    'description'    => simpletheme_translate('Color, Typography, Margin ...'),
		    'panel'          => $panel_id,
		) );

		/* CREATE FIELDS */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'code_typography_common',
			'label'       => simpletheme_esc_attr( 'Code Typography' ),
			'section'     => $section_id,
			'default'     => array(
				'font-family'    => 'Roboto Mono',
				'variant'        => 'regular',
				'subsets'        => array( 'latin-ext' ),
				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'element' => '.highlight,code,kbd',
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
		    'type'        => 'multicolor',
		    'settings'    => 'code_colors',
		    'label'       =>  simpletheme_esc_attr( 'Code Color' ),
		    'section'     =>  $section_id,
		    'priority'    => 10,
		    'choices'     => array(
		        'bgcolor'      => simpletheme_esc_attr( 'Background' ),
		        'txtcolor'     => simpletheme_esc_attr( 'Text' ),
		    ),
		    'default'     => array(
		        'bgcolor'      => '#f7f7f7',
		        'txtcolor'     => 'rgba(68,6,6,0.6)',
		    ),
		    'output'      => array(
		    	array(
		    		'choice'   => 'bgcolor',
		    		'element'  => '.highlight, code, kbd',
		    		'property' => 'background-color',
		    	),
		    	array(
		    		'choice'   => 'txtcolor',
		    		'element'  => '.highlight, code, kbd, code span, kbd span, pre span',
		    		'property' => 'color',
		    	),
		
		    ),
		) );

		/* LARGE DESKTOP */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'code_typography_large_desktop',
			'label'       => simpletheme_esc_attr( 'Code Typography - ' . LARGE_DESKTOP_INFO_TEXT ),
			'section'     => $section_id,
			'default'     => array(
                'font-size'      => '1rem',
				'line-height'    => '1.5',
				'letter-spacing' => '0',
				'text-transform' => 'none',
				'text-align'     => 'left',
				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'element' => '.highlight,code,kbd',
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'spacing',
			'settings'    => 'code_margin_large_desktop',
			'label'       => simpletheme_esc_attr( 'Code Margin - ' . LARGE_DESKTOP_INFO_TEXT ),
			'section'     => $section_id,
			'default'     => array(
                'top'     => '1rem',
                'bottom'  => '1rem',
                'left'    => '0rem',
                'right'   => '0rem',				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'element' => '.highlight,code,kbd',
					'property' => 'margin',
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'spacing',
			'settings'    => 'pre_padding_large_desktop',
			'label'       => simpletheme_esc_attr( 'Pre Padding - ' . LARGE_DESKTOP_INFO_TEXT ),
			'section'     => $section_id,
			'default'     => array(
                'top'     => '1rem',
                'bottom'  => '1rem',
                'left'    => '1rem',
                'right'   => '1rem',				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'element' => '.highlight, pre',
					'property' => 'padding',
				),
			),
		) );

		/* DESKTOP */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'code_typography_desktop',
			'label'       => simpletheme_esc_attr( 'Code Typography - ' . DESKTOP_INFO_TEXT),
			'section'     => $section_id,
			'default'     => array(
                'font-size'      => '1rem',
				'line-height'    => '1.5',
				'letter-spacing' => '0',
				'text-transform' => 'none',
				'text-align'     => 'left',
				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . DESKTOP_WIDTH_MAX . 'px)',
					'element' => '.highlight,code,kbd',
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'spacing',
			'settings'    => 'code_margin_desktop',
			'label'       => simpletheme_esc_attr( 'Code Margin - ' . DESKTOP_INFO_TEXT ),
			'section'     => $section_id,
			'default'     => array(
                'top'     => '1rem',
                'bottom'  => '1rem',
                'left'    => '0rem',
                'right'   => '0rem',				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . DESKTOP_WIDTH_MAX . 'px)',
					'element' => '.highlight,code,kbd',
					'property' => 'margin',
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'spacing',
			'settings'    => 'pre_padding_desktop',
			'label'       => simpletheme_esc_attr( 'Pre Padding - ' . DESKTOP_INFO_TEXT ),
			'section'     => $section_id,
			'default'     => array(
                'top'     => '1rem',
                'bottom'  => '1rem',
                'left'    => '1rem',
                'right'   => '1rem',				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . DESKTOP_WIDTH_MAX . 'px)',
					'element' => '.highlight, pre',
					'property' => 'padding',
				),
			),
		) );


		/* TABLET */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'code_typography_tablet',
			'label'       => simpletheme_esc_attr( 'Code Typography - ' . TABLET_INFO_TEXT ),
			'section'     => $section_id,
			'default'     => array(
                'font-size'      => '1rem',
				'line-height'    => '1.5',
				'letter-spacing' => '0',
				'text-transform' => 'none',
				'text-align'     => 'left',
				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . TABLET_WIDTH_MAX . 'px)',
					'element' => '.highlight,code,kbd',
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'spacing',
			'settings'    => 'code_margin_tablet',
			'label'       => simpletheme_esc_attr( 'Code Margin - ' . TABLET_INFO_TEXT ),
			'section'     => $section_id,
			'default'     => array(
                'top'     => '1rem',
                'bottom'  => '1rem',
                'left'    => '0rem',
                'right'   => '0rem',				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . TABLET_WIDTH_MAX . 'px)',
					'element' => '.highlight,code,kbd',
					'property' => 'margin',
				),
			),
		) );


		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'spacing',
			'settings'    => 'pre_padding_tablet',
			'label'       => simpletheme_esc_attr( 'Pre Padding - ' . TABLET_INFO_TEXT ),
			'section'     => $section_id,
			'default'     => array(
                'top'     => '1rem',
                'bottom'  => '1rem',
                'left'    => '1rem',
                'right'   => '1rem',				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . TABLET_WIDTH_MAX . 'px)',
					'element' => '.highlight, pre',
					'property' => 'padding',
				),
			),
		) );

		/* MOBILE */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'code_typography_mobile',
			'label'       => simpletheme_esc_attr( 'Code Typography - ' . MOBILE_INFO_TEXT),
			'section'     => $section_id,
			'default'     => array(
                'font-size'      => '1rem',
				'line-height'    => '1.5',
				'letter-spacing' => '0',
				'text-transform' => 'none',
				'text-align'     => 'left',
				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . MOBILE_WIDTH_MAX . 'px)',
					'element' => '.highlight,code,kbd',
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'spacing',
			'settings'    => 'code_margin_mobile',
			'label'       => simpletheme_esc_attr( 'Code Margin - ' . MOBILE_INFO_TEXT),
			'section'     => $section_id,
			'default'     => array(
                'top'     => '1rem',
                'bottom'  => '1rem',
                'left'    => '0rem',
                'right'   => '0rem',				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . MOBILE_WIDTH_MAX . 'px)',
					'element' => '.highlight,code,kbd',
					'property' => 'margin',
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'spacing',
			'settings'    => 'pre_padding_mobile',
			'label'       => simpletheme_esc_attr( 'Pre Padding - ' . MOBILE_INFO_TEXT ),
			'section'     => $section_id,
			'default'     => array(
                'top'     => '1rem',
                'bottom'  => '1rem',
                'left'    => '1rem',
                'right'   => '1rem',				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . MOBILE_WIDTH_MAX . 'px)',
					'element' => '.highlight, pre',
					'property' => 'padding',
				),
			),
		) );


