<?php

		/* CREATE SECTION */
		Simpletheme_Kirki::add_section( $section_id, array(
		    'priority'       => 50,
		    'capability'     => CAPATIBILITY_EDIT_THEME_OPTIONS,
		    'theme_supports' => '',
		    'title'          => simpletheme_translate('Site Loader'),
		    'description'    => simpletheme_translate('Site Loader settings'),
		    'panel'          => $panel_id,
		) );

		/* CREATE FIELDS */


		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'switch',
			'settings'    => 'site_loader_visibility',
			'description' => simpletheme_esc_attr( 'Do you want to use Site Loader?' ),
			'section'     => $section_id,
			'default'     => '1',
			'choices'     => array(
				'on'   => simpletheme_esc_attr ( 'Yes' ),
				'off'  => simpletheme_esc_attr ( 'No' ),
			),
			'priority'    => 10,
		) );

		
		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'color',
			'settings'    => 'site_loader_background_color',
			'label'       => simpletheme_esc_attr( 'Site Loader Background Color' ),
			'desctiption' => simpletheme_translate( 'Choose background color' ),
			'section'     => $section_id,
			'default'     => '#ffffff',
			'priority'    => 10,
		) );


		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'color',
			'settings'    => 'site_loader_icon_color',
			'label'       => simpletheme_esc_attr( 'Site Loader Icon Color' ),
			'desctiption' => simpletheme_translate( 'Choose icon color' ),
			'section'     => $section_id,
			'default'     => '#444444',
			'priority'    => 10,
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'dimension',
			'settings'    => 'site_loader_icon_size',
			'label'       => simpletheme_esc_attr( 'Site Loader Icon Size' ),
			'desctiption' => simpletheme_translate( 'Choose icon size' ),
			'section'     => $section_id,
			'default'     => '2rem',
			'priority'    => 10,
		) );


		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'dashicons',
			'settings'    => 'site_loader_icon',
			'label'       => simpletheme_esc_attr( 'Site Loader Icon' ),
			'desctiption' => simpletheme_translate( 'Choose icon' ),
			'section'     => $section_id,
			'default'     => 'update',
			'priority'    => 10,
		) );

