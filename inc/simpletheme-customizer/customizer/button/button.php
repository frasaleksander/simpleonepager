<?php

		$button_css_selector = 'button, input[type="button"], input[type="reset"], input[type="submit"], .btn';
		$button_css_selector_hover = css_selector_hover($button_css_selector);
		$button_css_selector_active = css_selector_active($button_css_selector);
		$button_css_selector_focus = css_selector_focus($button_css_selector);
		//echo $button_css_selector_hover;

		/* CREATE SECTION */
		Simpletheme_Kirki::add_section($section_id, array(
		    'priority'       => 10,
		    'capability'     => CAPATIBILITY_EDIT_THEME_OPTIONS,
		    'theme_supports' => '',
		    'title'          => simpletheme_translate('Button'),
		    'description'    => simpletheme_translate('Color, Typography, Margin, Padding ...'),
		    'panel'          => $panel_id,
		) );

		/* CREATE FIELDS */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'button_typography_common',
			'label'       => simpletheme_esc_attr( 'Button Typography' ),
			'section'     => $section_id,
			'default'     => array(
				'font-family'    => 'Open Sans',
				'variant'        => 'regular',
				'subsets'        => array( 'latin-ext' ),
				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'element' => $button_css_selector,
				),
			),
		) );

		/* 
		 * Button Colors
		 */
		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
		    'type'        => 'multicolor',
		    'settings'    => 'button_colors',
		    'label'       =>  simpletheme_esc_attr( 'Button Colors' ),
		    'section'     =>  $section_id,
		    'priority'    => 10,
		    'choices'     => array(
		        'bgcolor'      => simpletheme_esc_attr( 'Background' ),
		        'txtcolor'     => simpletheme_esc_attr( 'Text' ),
		        'bordercolor'  => simpletheme_esc_attr( 'Border' ),
		    ),
		    'default'     => array(
		        'bgcolor'      => '#dddddd',
		        'txtcolor'     => '#444444',
		        'bordercolor'  => '#dddddd',
		    ),
		    'output'      => array(
		    	array(
		    		'choice'   => 'bgcolor',
		    		'element'  => $button_css_selector,
		    		'property' => 'background-color',
		    	),
		    	array(
		    		'choice'   => 'txtcolor',
		    		'element'  => $button_css_selector,
		    		'property' => 'color',
		    	),
		    	array(
		    		'choice'   => 'bordercolor',
		    		'element'  => $button_css_selector,
		    		'property' => 'border-color',
		    	),
		
		    ),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
		    'type'        => 'multicolor',
		    'settings'    => 'button_colors_hover',
		    'label'       =>  simpletheme_esc_attr( 'Button Colors: Hover' ),
		    'section'     =>  $section_id,
		    'priority'    => 10,
		    'choices'     => array(
		        'bgcolor'      => simpletheme_esc_attr( 'Background' ),
		        'txtcolor'     => simpletheme_esc_attr( 'Text' ),
		        'bordercolor'  => simpletheme_esc_attr( 'Border' ),
		    ),
		    'default'     => array(
		        'bgcolor'      => '#444444',
		        'txtcolor'     => '#ffffff',
		        'bordercolor'  => '#444444',
		    ),
		    'output'      => array(
		    	array(
		    		'choice'   => 'bgcolor',
		    		'element'  => $button_css_selector_hover,
		    		'property' => 'background-color',
		    	),
		    	array(
		    		'choice'   => 'txtcolor',
		    		'element'  => $button_css_selector_hover,
		    		'property' => 'color',
		    	),
		    	array(
		    		'choice'   => 'bordercolor',
		    		'element'  => $button_css_selector_hover,
		    		'property' => 'border-color',
		    	),
		
		    ),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
		    'type'        => 'multicolor',
		    'settings'    => 'button_colors_active',
		    'label'       =>  simpletheme_esc_attr( 'Button Colors: Active' ),
		    'section'     =>  $section_id,
		    'priority'    => 10,
		    'choices'     => array(
		        'bgcolor'      => simpletheme_esc_attr( 'Background' ),
		        'txtcolor'     => simpletheme_esc_attr( 'Text' ),
		        'bordercolor'  => simpletheme_esc_attr( 'Border' ),
		    ),
		    'default'     => array(
		        'bgcolor'      => '#444444',
		        'txtcolor'     => '#ffffff',
		        'bordercolor'  => '#444444',
		    ),
		    'output'      => array(
		    	array(
		    		'choice'   => 'bgcolor',
		    		'element'  => $button_css_selector_active,
		    		'property' => 'background-color',
		    	),
		    	array(
		    		'choice'   => 'txtcolor',
		    		'element'  => $button_css_selector_active,
		    		'property' => 'color',
		    	),
		    	array(
		    		'choice'   => 'bordercolor',
		    		'element'  => $button_css_selector_active,
		    		'property' => 'border-color',
		    	),
		
		    ),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
		    'type'        => 'multicolor',
		    'settings'    => 'button_colors_focus',
		    'label'       =>  simpletheme_esc_attr( 'Button Colors: Focus' ),
		    'section'     =>  $section_id,
		    'priority'    => 10,
		    'choices'     => array(
		        'bgcolor'      => simpletheme_esc_attr( 'Background' ),
		        'txtcolor'     => simpletheme_esc_attr( 'Text' ),
		        'bordercolor'  => simpletheme_esc_attr( 'Border' ),
		    ),
		    'default'     => array(
		        'bgcolor'      => '#444444',
		        'txtcolor'     => '#ffffff',
		        'bordercolor'  => '#444444',
		    ),
		    'output'      => array(
		    	array(
		    		'choice'   => 'bgcolor',
		    		'element'  => $button_css_selector_focus,
		    		'property' => 'background-color',
		    	),
		    	array(
		    		'choice'   => 'txtcolor',
		    		'element'  => $button_css_selector_focus,
		    		'property' => 'color',
		    	),
		    	array(
		    		'choice'   => 'bordercolor',
		    		'element'  => $button_css_selector_focus,
		    		'property' => 'border-color',
		    	),
		
		    ),
		) );

		/*
		 * Border Radius 
		 */
		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'dimension',
			'settings'    => 'button_border_radius',
			'label'       => simpletheme_esc_attr( 'Button Border Radius'),
			'section'     => $section_id,
			'default'     => '0px',
			'priority'    => 10,
			'output'      => array(
				array(
					'element' => $button_css_selector,
					'property' => 'border-radius',
				),
			),
		) );

		/*
		 * Border Width 
		 */
		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'dimension',
			'settings'    => 'button_border_width',
			'label'       => simpletheme_esc_attr( 'Button Border Width'),
			'section'     => $section_id,
			'default'     => '1px',
			'priority'    => 10,
			'output'      => array(
				array(
					'element' => $button_css_selector,
					'property' => 'border-width',
				),
			),
		) );

		/* LARGE DESKTOP */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'button_typography_large_desktop',
			'label'       => simpletheme_esc_attr( 'Button Typography - ' . LARGE_DESKTOP_INFO_TEXT ),
			'section'     => $section_id,
			'default'     => array(
                'font-size'      => '1rem',
				'line-height'    => '1',
				'letter-spacing' => '0',
				'text-transform' => 'none',
				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'element' => $button_css_selector,
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'spacing',
			'settings'    => 'button_margin_large_desktop',
			'label'       => simpletheme_esc_attr( 'Button Margin - ' . LARGE_DESKTOP_INFO_TEXT ),
			'section'     => $section_id,
			'default'     => array(
                'top'     => '0rem',
                'bottom'  => '1rem',
                'left'    => '0rem',
                'right'   => '0rem',				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'element' => $button_css_selector,
					'property' => 'margin',
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'spacing',
			'settings'    => 'button_padding_large_desktop',
			'label'       => simpletheme_esc_attr( 'Button Padding - ' . LARGE_DESKTOP_INFO_TEXT ),
			'section'     => $section_id,
			'default'     => array(
                'top'     => '0.80rem',
                'bottom'  => '0.80rem',
                'left'    => '1.50rem',
                'right'   => '1.50rem',				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'element' => $button_css_selector,
					'property' => 'padding',
				),
			),
		) );

		/* DESKTOP */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'button_typography_desktop',
			'label'       => simpletheme_esc_attr( 'Button Typography - ' . DESKTOP_INFO_TEXT),
			'section'     => $section_id,
			'default'     => array(
                'font-size'      => '1rem',
				'line-height'    => '1',
				'letter-spacing' => '0',
				'text-transform' => 'none',
				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . DESKTOP_WIDTH_MAX . 'px)',
					'element' => $button_css_selector,
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'spacing',
			'settings'    => 'button_margin_desktop',
			'label'       => simpletheme_esc_attr( 'Button Margin - ' . DESKTOP_INFO_TEXT ),
			'section'     => $section_id,
			'default'     => array(
                'top'     => '0rem',
                'bottom'  => '1rem',
                'left'    => '0rem',
                'right'   => '0rem',				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . DESKTOP_WIDTH_MAX . 'px)',
					'element' => $button_css_selector,
					'property' => 'margin',
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'spacing',
			'settings'    => 'button_padding_desktop',
			'label'       => simpletheme_esc_attr( 'Button Padding - ' . DESKTOP_INFO_TEXT ),
			'section'     => $section_id,
			'default'     => array(
                'top'     => '0.7rem', 
                'bottom'  => '0.7rem',
                'left'    => '1.50rem',
                'right'   => '1.50rem',				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . DESKTOP_WIDTH_MAX . 'px)',
					'element' => $button_css_selector,
					'property' => 'padding',
				),
			),
		) );


		/* TABLET */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'button_typography_tablet',
			'label'       => simpletheme_esc_attr( 'Button Typography - ' . TABLET_INFO_TEXT ),
			'section'     => $section_id,
			'default'     => array(
                'font-size'      => '1rem',
				'line-height'    => '1',
				'letter-spacing' => '0',
				'text-transform' => 'none',
				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . TABLET_WIDTH_MAX . 'px)',
					'element' => $button_css_selector,
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'spacing',
			'settings'    => 'button_margin_tablet',
			'label'       => simpletheme_esc_attr( 'Button Margin - ' . TABLET_INFO_TEXT ),
			'section'     => $section_id,
			'default'     => array(
                'top'     => '0rem',
                'bottom'  => '1rem',
                'left'    => '0rem',
                'right'   => '0rem',				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . TABLET_WIDTH_MAX . 'px)',
					'element' => $button_css_selector,
					'property' => 'margin',
				),
			),
		) );


		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'spacing',
			'settings'    => 'button_padding_tablet',
			'label'       => simpletheme_esc_attr( 'Button Padding - ' . TABLET_INFO_TEXT ),
			'section'     => $section_id,
			'default'     => array(
                'top'     => '0.80rem', 
                'bottom'  => '0.80rem',
                'left'    => '1.50rem',
                'right'   => '1.50rem',	
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . TABLET_WIDTH_MAX . 'px)',
					'element' => $button_css_selector,
					'property' => 'padding',
				),
			),
		) );

		/* MOBILE */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'button_typography_mobile',
			'label'       => simpletheme_esc_attr( 'Button Typography - ' . MOBILE_INFO_TEXT),
			'section'     => $section_id,
			'default'     => array(
                'font-size'      => '1rem',
				'line-height'    => '1',
				'letter-spacing' => '0',
				'text-transform' => 'none',
				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . MOBILE_WIDTH_MAX . 'px)',
					'element' => $button_css_selector,
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'spacing',
			'settings'    => 'button_margin_mobile',
			'label'       => simpletheme_esc_attr( 'Button Margin - ' . MOBILE_INFO_TEXT),
			'section'     => $section_id,
			'default'     => array(
                'top'     => '0rem',
                'bottom'  => '1rem',
                'left'    => '0rem',
                'right'   => '0rem',				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . MOBILE_WIDTH_MAX . 'px)',
					'element' => $button_css_selector,
					'property' => 'margin',
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'spacing',
			'settings'    => 'button_padding_mobile',
			'label'       => simpletheme_esc_attr( 'Button Padding - ' . MOBILE_INFO_TEXT ),
			'section'     => $section_id,
			'default'     => array(
                'top'     => '0.80rem', 
                'bottom'  => '0.80rem',
                'left'    => '1.50rem',
                'right'   => '1.50rem',				
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . MOBILE_WIDTH_MAX . 'px)',
					'element' => $button_css_selector,
					'property' => 'padding',
				),
			),
		) );


