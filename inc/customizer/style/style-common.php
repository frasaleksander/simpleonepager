<?php

if(!function_exists('simpletheme_kirki_customizer_style_common')) {
	
	function simpletheme_kirki_customizer_style_common() {
		/* CREATE SECTION */
		Simpletheme_Kirki::add_section( 'style_common', array(
		    'priority'       => 10,
		    'capability'     => 'edit_theme_options',
		    'theme_supports' => 'custom-header',
		    'title'          => __('Common Style', 'simpletheme'),
		    'description'    =>  __('Style that is being used throughout the whole theme.', 'simpletheme'),
		    'panel'          => 'style_panel',
		) );

		/* CREATE FIELDS */

		Simpletheme_Kirki::add_field( 'simpletheme', array(
			'type'        => 'dimension',
			'settings'    => 'site_width',
			'label'       => __( 'Site Width', 'simpletheme' ),
			'section'     => 'style_common',
			'default'     => '1000px',
			'priority'    => 10,
			'output'      => array(
				array(
					'element'  => '.st-container',
					'property' => 'max-width'
					)
				)
		) );








	}

}