<?php

$SimplethemeCustomizer->buildWholeSection('typography_common', 'typography_panel', function($section_id, $panel_id){


		/* CREATE SECTION */
		Simpletheme_Kirki::add_section( $section_id, array(
		    'priority'       => 10,
		    'capability'     => CAPATIBILITY_EDIT_THEME_OPTIONS,
		    'theme_supports' => '',
		    'title'          => simpletheme_translate('Common Typography'),
		    'description'    =>  simpletheme_translate('Typography that is being used throughout the whole theme. Other typography settings rewrite common settings.'),
		    'panel'          => $panel_id,
		) );

		/* CREATE FIELDS */

		/*
		 * Blockquote Headings
		 */
		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'typography',
			'settings'    => 'body_blockquote_headings_font',
			'label'       => simpletheme_esc_attr( 'Blockquote Headings (H1, H2, H3, H4, H5, H6)' ),
			'section'     => $section_id,
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
			'section'     => $section_id,
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