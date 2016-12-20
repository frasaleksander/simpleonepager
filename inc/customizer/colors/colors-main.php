<?php

	//simpletheme_customizer_add_color_option($wp_customize, 'text_color', 'Text Color', 'colors_main', '#444444');
	//simpletheme_customizer_add_color_option($wp_customize, 'background_color', 'Background Color', 'colors_main', '#ffffff');
	//LINK
	//simpletheme_customizer_add_color_option($wp_customize, 'link_color', 'Link Color', 'colors_main', '#f06d06');
	//simpletheme_customizer_add_color_option($wp_customize, 'link_color_active', 'Link Color: Active', 'colors_main', '#f06d06');
	//simpletheme_customizer_add_color_option($wp_customize, 'link_color_hover', 'Link Color: Hover', 'colors_main', '#f06d06');
	//simpletheme_customizer_add_color_option($wp_customize, 'link_color_focus', 'Link Color: Focus', 'colors_main', '#f06d06');
	//simpletheme_customizer_add_color_option($wp_customize, 'link_color_visited', 'Link Color: Visited', 'colors_main', '#f06d06');
	//BUTTON
//	simpletheme_customizer_add_color_option($wp_customize, 'button_color_background', 'Button Background Color', 'colors_main', '#e6e6e6');
//	simpletheme_customizer_add_color_option($wp_customize, 'button_color_background_hover', 'Button Background Color: Hover', 'colors_main', '#444444');
//	simpletheme_customizer_add_color_option($wp_customize, 'button_color_background_focus', 'Button Background Color: Focus', 'colors_main', '#444444');
//	simpletheme_customizer_add_color_option($wp_customize, 'button_color_text', 'Button Text Color', 'colors_main', '#444444');
//	simpletheme_customizer_add_color_option($wp_customize, 'button_color_text_hover', 'Button Text Color: Hover', 'colors_main', '#ffffff');
//	simpletheme_customizer_add_color_option($wp_customize, 'button_color_text_focus', 'Button Text Color: Focus', 'colors_main', '#ffffff');
//	simpletheme_customizer_add_color_option($wp_customize, 'button_color_border', 'Button Border Color', 'colors_main', '#e6e6e6');
//	simpletheme_customizer_add_color_option($wp_customize, 'button_color_border_hover', 'Button Border Color: Hover', 'colors_main', '#444444');
//	simpletheme_customizer_add_color_option($wp_customize, 'button_color_border_focus', 'Button Border Color: Focus', 'colors_main', '#444444');
	//INPUT

if(!function_exists('simpletheme_kirki_customizer_colors_main')) {
	
	function simpletheme_kirki_customizer_colors_main() {

		/* CREATE SECTION */
		Simpletheme_Kirki::add_section( 'colors_main', array(
		    'priority'       => 10,
		    'capability'     => 'edit_theme_options',
		    'theme_supports' => 'custom-header',
		    'title'          => __('Main Colors', 'simpletheme'),
		    'description'    =>  __('Colors that are being used throughout the whole theme.', 'simpletheme'),
		    'panel'          => 'colors_panel',
		) );

		/* CREATE FIELDS */

		Simpletheme_Kirki::add_field( 'simpletheme', array(
			'type'        => 'color',
			'settings'    => 'background_color',
			'label'       => __( 'Background Color', 'simpletheme' ),
			'section'     => 'colors_main',
			'default'     => '#ffffff',
			'priority'    => 10,
			'alpha'       => false,
			'output'      => array(
				array(
					'element' => 'body',
					'property' => 'background-color'
					)
				)
		) );

		Simpletheme_Kirki::add_field( 'simpletheme', array(
			'type'        => 'color',
			'settings'    => 'text_color',
			'label'       => __( 'Text Color', 'simpletheme' ),
			'section'     => 'colors_main',
			'default'     => '#444444',
			'priority'    => 10,
			'alpha'       => false,
			'output'         => array(
		    	array(
		    		'element' => 'body',
		    		'property' => 'color'
		    	),
		    ),
		) );

		Simpletheme_Kirki::add_field( 'simpletheme', array(
			'type'        => 'color',
			'settings'    => 'title_color',
			'label'       => __( 'Title Color', 'simpletheme' ),
			'section'     => 'colors_main',
			'default'     => '#444444',
			'priority'    => 10,
			'alpha'       => false,
			'output'      => array(
				array(
		    		'element' => 'h1,h2,h3,h4,h5,h6',
		    		'property' => 'color'
		    	),
		    ),
		) );

		Simpletheme_Kirki::add_field( 'simpletheme', array(
		    'type'        => 'multicolor',
		    'settings'    => 'link_colors',
		    'label'       => esc_attr__( 'Link Colors', 'simpletheme' ),
		    'section'     => 'colors_main',
		    'priority'    => 10,
		    'choices'     => array(
		        'link'    => esc_attr__( 'Color', 'simpletheme' ),
		        'hover'   => esc_attr__( 'Hover', 'simpletheme' ),
		        'active'  => esc_attr__( 'Active', 'simpletheme' ),
		        'visited' => esc_attr__( 'Visited', 'simpletheme' ),
		    ),
		    'default'     => array(
		        'link'    => '#f06d06',
		        'hover'   => '#f06d06',
		        'active'  => '#f06d06',
		        'visited' => '#f06d06',
		    ),
		    'output'      => array(
		    	array(
		    		'choice'   => 'link',
		    		'element'  => 'a, a:link',
		    		'property' => 'color',
		    	),
		    	array(
		    		'choice'   => 'hover',
		    		'element'  => 'a:hover',
		    		'property' => 'color',
		    	),
		    	array(
		    		'choice'   => 'visited',
		    		'element'  => 'a:visited',
		    		'property' => 'color',
		    	),
		    	array(
		    		'choice'   => 'active',
		    		'element'  => 'a:active',
		    		'property' => 'color',
		    	),
		    ),
		) );

		Simpletheme_Kirki::add_field( 'simpletheme', array(
		    'type'        => 'multicolor',
		    'settings'    => 'button_background_colors',
		    'label'       => esc_attr__( 'Button Background Colors', 'simpletheme' ),
		    'section'     => 'colors_main',
		    'priority'    => 10,
		    'choices'     => array(
		        'link'    => esc_attr__( 'Color', 'simpletheme' ),
		        'hover'   => esc_attr__( 'Hover', 'simpletheme' ),
		        'active'  => esc_attr__( 'Active', 'simpletheme' ),
		        'focus'   => esc_attr__( 'Focus', 'simpletheme' ),
		    ),
		    'default'     => array(
		        'link'    => '#f06d06',
		        'hover'   => '#f06d06',
		        'active'  => '#f06d06',
		        'focus'   => '#f06d06',
		    ),
		) );
	}
}
