<?php

$SimplethemeCustomizer->buildWholeSection('typography_common', function(){



		/* CREATE SECTION */
		Simpletheme_Kirki::add_section( 'typography_common', array(
		    'priority'       => 10,
		    'capability'     => CAPATIBILITY_EDIT_THEME_OPTIONS,
		    'theme_supports' => '',
		    'title'          => simpletheme_translate('Common Typography'),
		    'description'    =>  simpletheme_translate('Typography that is being used throughout the whole theme. Other typography settings rewrite common settings.'),
		    'panel'          => 'typography_panel',
		) );

		/* CREATE FIELDS */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'body_text_font',
			'label'       => simpletheme_esc_attr( 'Text' ),
			'section'     => 'typography_common',
			'default'     => array(
				//'font-family'    => 'Open Sans',
				'variant'        => 'regular',
				//'subsets'        => array( 'latin-ext' ),
                'font-size'      => '1.1rem',
				'line-height'    => '1.6',
				//'letter-spacing' => '0',
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
			'type'        => 'typography',
			'settings'    => 'body_h1_font',
			'label'       => simpletheme_esc_attr( 'H1' ),
			'section'     => 'typography_common',
			'default'     => array(
				'font-family'    => 'Open Sans',
				'font-size'      => '3rem',
				'variant'        => '700',
				'line-height'    => '1',
				//'letter-spacing' => '0',
				'subsets'        => array( 'latin-ext' ),
				'text-transform' => 'uppercase',
				'text-align'     => 'left'
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'element' => 'h1',
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'body_h2_font',
			'label'       => simpletheme_esc_attr( 'H2' ),
			'section'     => 'typography_common',
			'default'     => array(
				'font-family'    => 'Open Sans',
				'font-size'      => '2.5rem',
				'variant'        => '700',
				'line-height'    => '1',
				'letter-spacing' => '0',
				'subsets'        => array( 'latin-ext' ),
				'text-transform' => 'uppercase',
				'text-align'     => 'left'
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'element' => 'h2',
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'body_h3_font',
			'label'       => simpletheme_esc_attr( 'H3' ),
			'section'     => 'typography_common',
			'default'     => array(
				'font-family'    => 'Open Sans',
				'font-size'      => '1.9375rem',
				'variant'        => '700',
				'line-height'    => '1',
				'letter-spacing' => '0',
				'subsets'        => array( 'latin-ext' ),
				'text-transform' => 'uppercase',
				'text-align'     => 'left'
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'element' => 'h3',
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'body_h4_font',
			'label'       => simpletheme_esc_attr( 'H4' ),
			'section'     => 'typography_common',
			'default'     => array(
				'font-family'    => 'inherit',
				'font-size'      => '1.5625rem',
				'variant'        => '700',
				'line-height'    => '1',
				'letter-spacing' => '0',
				'subsets'        => array( 'latin-ext' ),
				'text-transform' => 'uppercase',
				'text-align'     => 'left'
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'element' => 'h4',
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'body_h5_font',
			'label'       => simpletheme_esc_attr( 'H5' ),
			'section'     => 'typography_common',
			'default'     => array(
				'font-family'    => 'Open Sans',
				'variant'        => '700',
				'font-size'      => '1.25rem',
				'line-height'    => '1',
				'letter-spacing' => '0',
				'subsets'        => array( 'latin-ext' ),
				'text-transform' => 'uppercase',
				'text-align'     => 'left'
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'element' => 'h5',
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'body_h6_font',
			'label'       => simpletheme_esc_attr( 'H6' ),
			'section'     => 'typography_common',
			'default'     => array(
				'font-family'    => 'Open Sans',
				'font-size'      => '1rem',
				'variant'        => '700',
				'line-height'    => '1',
				'letter-spacing' => '0',
				'subsets'        => array( 'latin-ext' ),
				'text-transform' => 'uppercase',
				'text-align'     => 'left'
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'element' => 'h6',
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'body_code_font',
			'label'       => simpletheme_esc_attr( 'Code' ),
			'section'     => 'typography_common',
			'default'     => array(
				'font-family'    => 'Roboto Mono',
				'variant'        => 'regular',
				'font-size'      => '1em',
				'line-height'    => '1.5',
				'letter-spacing' => '0',
				'subsets'        => array( 'latin-ext' ),
				'text-transform' => 'none',
				'text-align'     => 'left'
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'element' => '.highlight, code, kbd',
				),
			),
		) );

		/*
		 * Blockquote Headings
		 */
		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'body_blockquote_headings_font',
			'label'       => simpletheme_esc_attr( 'Blockquote Headings (H1, H2, H3, H4, H5, H6)' ),
			'section'     => 'typography_common',
			'default'     => array(
				'font-family'    => 'Open Sans',
				'variant'        => '700',
				'line-height'    => '1',
				'letter-spacing' => '0',
				'subsets'        => array( 'latin-ext' ),
				'text-transform' => 'none',
				'text-align'     => 'left'
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'element' => 'blockquote h1, blockquote h2, blockquote h3, blockquote h4, blockquote h5, blockquote h6',
				),
			),
		) );

		/*
		 * Blockquote Headings
		 */
		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'body_blockquote_text_font',
			'label'       => simpletheme_esc_attr( 'Blockquote Text' ),
			'section'     => 'typography_common',
			'default'     => array(
				'font-family'    => 'Open Sans',
				'font-size'      => '1em',
				'variant'        => 'regular',
				'font-weight'    => '300',
				'line-height'    => '1.5',
				'letter-spacing' => '0',
				'subsets'        => array( 'latin-ext' ),
				'text-transform' => 'none',
				'text-align'     => 'left'
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'element' => 'blockquote',
				),
			),
		) );





});