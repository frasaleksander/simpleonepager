<?php

		/* CREATE SECTION */
		Simpletheme_Kirki::add_section( $section_id, array(
		    'priority'       => 50,
		    'capability'     => CAPATIBILITY_EDIT_THEME_OPTIONS,
		    'theme_supports' => '',
		    'title'          => simpletheme_translate('404'),
		    'description'    => simpletheme_translate('404 Settings'),
		    'panel'          => $panel_id,
		) );

		/* CREATE FIELDS */


		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'dropdown-pages',
			'settings'    => 'the_404_selected_page',
			'description' => simpletheme_esc_attr( 'Which page do you want to use as your 404 page?' ),
			'section'     => $section_id,
		) );


		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'switch',
			'settings'    => 'the_404_navigation_menu_is_visible',
			'description' => simpletheme_esc_attr( 'Show navigation menu?' ),
			'section'     => $section_id,
			'default'     => '0',
			'choices'     => array(
				'on'   => simpletheme_esc_attr ( 'Yes' ),
				'off'  => simpletheme_esc_attr ( 'No' ),
			),
			'priority'    => 10,
		) );
