<?php

if(!function_exists('simpletheme_kirki_customizer_typography_common')) {

	function simpletheme_kirki_customizer_typography_common() {

		/* CREATE SECTION */
		Simpletheme_Kirki::add_section( 'typography_common', array(
		    'priority'       => 10,
		    'capability'     => 'edit_theme_options',
		    'theme_supports' => 'custom-header',
		    'title'          => __('Common Typography', 'simpletheme'),
		    'description'    =>  __('Typography that is being used throughout the whole theme. Other typography settings rewrite common settings.', 'simpletheme'),
		    'panel'          => 'typography_panel',
		) );

		/* CREATE FIELDS */

		Simpletheme_Kirki::add_field( 'simpletheme', array(
			'type'        => 'typography',
			'settings'    => 'body_text_font',
			'label'       => esc_attr__( 'Text', 'simpletheme' ),
			'section'     => 'typography_common',
			'default'     => array(
				'font-family'    => 'Open Sans',
				'variant'        => 'regular',
				'font-size'      => '1.1rem',
				'line-height'    => '1.6',
				'letter-spacing' => '0',
				'subsets'        => array( 'latin-ext' ),
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


		Simpletheme_Kirki::add_field( 'simpletheme', array(
			'type'        => 'typography',
			'settings'    => 'body_h1_font',
			'label'       => esc_attr__( 'H1', 'simpletheme' ),
			'section'     => 'typography_common',
			'default'     => array(
				'font-family'    => 'Open Sans',
				'font-size'      => '3rem',
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
					'element' => 'h1',
				),
			),
		) );

		Simpletheme_Kirki::add_field( 'simpletheme', array(
			'type'        => 'typography',
			'settings'    => 'body_h2_font',
			'label'       => esc_attr__( 'H2', 'simpletheme' ),
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

		Simpletheme_Kirki::add_field( 'simpletheme', array(
			'type'        => 'typography',
			'settings'    => 'body_h3_font',
			'label'       => esc_attr__( 'H3', 'simpletheme' ),
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

		Simpletheme_Kirki::add_field( 'simpletheme', array(
			'type'        => 'typography',
			'settings'    => 'body_h4_font',
			'label'       => esc_attr__( 'H4', 'simpletheme' ),
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

		Simpletheme_Kirki::add_field( 'simpletheme', array(
			'type'        => 'typography',
			'settings'    => 'body_h5_font',
			'label'       => esc_attr__( 'H5', 'simpletheme' ),
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

		Simpletheme_Kirki::add_field( 'simpletheme', array(
			'type'        => 'typography',
			'settings'    => 'body_h6_font',
			'label'       => esc_attr__( 'H6', 'simpletheme' ),
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

		Simpletheme_Kirki::add_field( 'simpletheme', array(
			'type'        => 'typography',
			'settings'    => 'body_code_font',
			'label'       => esc_attr__( 'Code', 'simpletheme' ),
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
		Simpletheme_Kirki::add_field( 'simpletheme', array(
			'type'        => 'typography',
			'settings'    => 'body_blockquote_headings_font',
			'label'       => esc_attr__( 'Blockquote Headings (H1, H2, H3, H4, H5, H6)', 'simpletheme' ),
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
		Simpletheme_Kirki::add_field( 'simpletheme', array(
			'type'        => 'typography',
			'settings'    => 'body_blockquote_text_font',
			'label'       => esc_attr__( 'Blockquote Text', 'simpletheme' ),
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



	}

}