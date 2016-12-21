<?php

if(!function_exists('simpletheme_kirki_customizer_typography_main')) {

	function simpletheme_kirki_customizer_typography_main() {

		/* CREATE SECTION */
		Simpletheme_Kirki::add_section( 'typography_main', array(
		    'priority'       => 10,
		    'capability'     => 'edit_theme_options',
		    'theme_supports' => 'custom-header',
		    'title'          => __('Main Typography', 'simpletheme'),
		    'description'    =>  __('Typography that is being used throughout the whole theme. Other typography settings rewrite main settings.', 'simpletheme'),
		    'panel'          => 'typography_panel',
		) );

		/* CREATE FIELDS */

		Simpletheme_Kirki::add_field( 'simpletheme', array(
			'type'        => 'typography',
			'settings'    => 'body-text-font',
			'label'       => esc_attr__( 'Text', 'simpletheme' ),
			'section'     => 'typography_main',
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
			'settings'    => 'body-h1-font',
			'label'       => esc_attr__( 'H1', 'simpletheme' ),
			'section'     => 'typography_main',
			'default'     => array(
				'font-family'    => 'Open Sans',
				'variant'        => '700',
				'font-size'      => '3rem',
				'line-height'    => '1.4',
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
			'settings'    => 'body-h2-font',
			'label'       => esc_attr__( 'H2', 'simpletheme' ),
			'section'     => 'typography_main',
			'default'     => array(
				'font-family'    => 'Open Sans',
				'variant'        => '700',
				'font-size'      => '2.5rem',
				'line-height'    => '1.4',
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
			'settings'    => 'body-h3-font',
			'label'       => esc_attr__( 'H3', 'simpletheme' ),
			'section'     => 'typography_main',
			'default'     => array(
				'font-family'    => 'Open Sans',
				'variant'        => '700',
				'font-size'      => '1.9375rem',
				'line-height'    => '1.4',
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
			'settings'    => 'body-h4-font',
			'label'       => esc_attr__( 'H4', 'simpletheme' ),
			'section'     => 'typography_main',
			'default'     => array(
				'font-family'    => 'Open Sans',
				'variant'        => '700',
				'font-size'      => '1.5625rem',
				'line-height'    => '1.4',
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
			'settings'    => 'body-h5-font',
			'label'       => esc_attr__( 'H5', 'simpletheme' ),
			'section'     => 'typography_main',
			'default'     => array(
				'font-family'    => 'Open Sans',
				'variant'        => '700',
				'font-size'      => '1.25rem',
				'line-height'    => '1.4',
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
			'settings'    => 'body-h6-font',
			'label'       => esc_attr__( 'H6', 'simpletheme' ),
			'section'     => 'typography_main',
			'default'     => array(
				'font-family'    => 'Open Sans',
				'variant'        => '700',
				'font-size'      => '1rem',
				'line-height'    => '1.4',
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
			'settings'    => 'body-code-font',
			'label'       => esc_attr__( 'Code', 'simpletheme' ),
			'section'     => 'typography_main',
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

		Simpletheme_Kirki::add_field( 'simpletheme', array(
			'type'        => 'typography',
			'settings'    => 'body-blockquote-headings-font',
			'label'       => esc_attr__( 'Blockquote Headings', 'simpletheme' ),
			'section'     => 'typography_main',
			'default'     => array(
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






	}

}