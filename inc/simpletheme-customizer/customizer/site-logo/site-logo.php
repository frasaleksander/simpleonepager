<?php


		/* CREATE SECTION */
		Simpletheme_Kirki::add_section( $section_id, array(
		    'priority'       => 10,
		    'capability'     => CAPATIBILITY_EDIT_THEME_OPTIONS,
		    'theme_supports' => '',
		    'title'          => simpletheme_translate('Site Logo'),
		    'description'    => simpletheme_translate('Site logo settings'),
		    'panel'          => $panel_id,
		) );

		/* CREATE FIELDS */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'image',
			'settings'    => 'site_logo_normal',
			'label'       => simpletheme_esc_attr( 'Site Logo' ),
			'description' => simpletheme_esc_attr( 'Choose normal logo image' ),
			'section'     => $section_id,
			'default'     => '',
			'priority'    => 10,
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'switch',
			'settings'    => 'site_logo_normal_visibility',
			'description' => simpletheme_esc_attr( 'Do you want to show Site Logo?' ),
			'section'     => $section_id,
			'default'     => '1',
			'choices'     => array(
				'on'   => simpletheme_esc_attr ( 'Show' ),
				'off'  => simpletheme_esc_attr ( 'Hide' ),
			),
			'priority'    => 10,
		) );

		/* LARGE DESKTOP */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'dimension',
			'settings'    => 'site_logo_normal_max_width_large_desktop',
			'label'       => simpletheme_esc_attr( 'Max logo width (' . LARGE_DESKTOP_INFO_TEXT . ')' ),
			'section'     => $section_id,
			'default'     => '10rem',
			'priority'    => 10,
			'output'      => array(
				array(
					'element'  => '.logo-container img',
					'property' => 'max-width'
				)
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'dimension',
			'settings'    => 'site_logo_normal_max_height_large_desktop',
			'label'       => simpletheme_esc_attr( 'Max logo height (' . LARGE_DESKTOP_INFO_TEXT . ')' ),
			'section'     => $section_id,
			'default'     => '5rem',
			'priority'    => 10,
			'output'      => array(
				array(
					'element'  => '.logo-container img',
					'property' => 'max-height'
				), 	
				array(
					'element'  => '.main-navigation.nav-style-1',
					'property' => 'min-height'
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'radio-buttonset',
			'settings'    => 'site_logo_alignment_large_desktop',
			'label'       => simpletheme_esc_attr( 'Logo alignment (' . LARGE_DESKTOP_INFO_TEXT . ')' ),
			'section'     => $section_id,
			'default'     => 'left',
			'priority'    => 10,
			'choices'     => array(
				'left'    => simpletheme_esc_attr( 'Left' ),
				'center'  => simpletheme_esc_attr( 'Center' ),
				'right'   => simpletheme_esc_attr( 'Right' ),
			),
			'output'      => array(
				array(
					'choice'   => 'left',
					'element'  => '.main-navigation.nav-style-1',
					'property' => 'text-align',
				), 	
				array(
					'choice'   => 'center',
					'element'  => '.main-navigation.nav-style-1',
					'property' => 'text-align',
				),
				array(
					'element'  => 'right',
					'element'  => '.main-navigation.nav-style-1',
					'property' => 'text-align',
				),
			),
		) );

		/* DESKTOP */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'dimension',
			'settings'    => 'site_logo_normal_max_width_desktop',
			'label'       => simpletheme_esc_attr( 'Max logo width (' . DESKTOP_INFO_TEXT . ')' ),
			'section'     => $section_id,
			'default'     => '8.5rem',
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . DESKTOP_WIDTH_MAX . 'px)',
					'element'  => '.logo-container img',
					'property' => 'max-width'
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'dimension',
			'settings'    => 'site_logo_normal_max_height_desktop',
			'label'       => simpletheme_esc_attr( 'Max logo height (' . DESKTOP_INFO_TEXT . ')' ),
			'section'     => $section_id,
			'default'     => '4.25rem',
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . DESKTOP_WIDTH_MAX . 'px)',
					'element'  => '.logo-container img',
					'property' => 'max-height'
				),
				array(
					'media_query' => '@media (max-width: ' . DESKTOP_WIDTH_MAX . 'px)',
					'element'  => '.main-navigation.nav-style-1',
					'property' => 'min-height'
				)
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'radio-buttonset',
			'settings'    => 'site_logo_alignment_desktop',
			'label'       => simpletheme_esc_attr( 'Logo alignment (' . DESKTOP_INFO_TEXT . ')' ),
			'section'     => $section_id,
			'default'     => 'left',
			'priority'    => 10,
			'choices'     => array(
				'left'    => simpletheme_esc_attr( 'Left' ),
				'center'  => simpletheme_esc_attr( 'Center' ),
				'right'   => simpletheme_esc_attr( 'Right' ),
			),
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . DESKTOP_WIDTH_MAX . 'px)',
					'choice'   => 'left',
					'element'  => '.main-navigation.nav-style-1',
					'property' => 'text-align',
				), 	
				array(
					'media_query' => '@media (max-width: ' . DESKTOP_WIDTH_MAX . 'px)',
					'choice'   => 'center',
					'element'  => '.main-navigation.nav-style-1',
					'property' => 'text-align',
				),
				array(
					'media_query' => '@media (max-width: ' . DESKTOP_WIDTH_MAX . 'px)',
					'element'  => 'right',
					'element'  => '.main-navigation.nav-style-1',
					'property' => 'text-align',
				),
			),
		) );

		/* TABLET */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'dimension',
			'settings'    => 'site_logo_normal_max_width_tablet',
			'label'       => simpletheme_esc_attr( 'Max logo width (' . TABLET_INFO_TEXT . ')' ),
			'section'     => $section_id,
			'default'     => '8.5rem',
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . TABLET_WIDTH_MAX . 'px)',
					'element'  => '.logo-container img',
					'property' => 'max-width'
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'dimension',
			'settings'    => 'site_logo_normal_max_height_tablet',
			'label'       => simpletheme_esc_attr( 'Max logo height (' . TABLET_INFO_TEXT . ')' ),
			'section'     => $section_id,
			'default'     => '4.25rem',
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . TABLET_WIDTH_MAX . 'px)',
					'element'  => '.logo-container img',
					'property' => 'max-height'
				),
				array(
					'media_query' => '@media (max-width: ' . TABLET_WIDTH_MAX . 'px)',
					'element'  => '.main-navigation.nav-style-1',
					'property' => 'min-height'
				)
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'radio-buttonset',
			'settings'    => 'site_logo_alignment_tablet',
			'label'       => simpletheme_esc_attr( 'Logo alignment (' . TABLET_INFO_TEXT . ')' ),
			'section'     => $section_id,
			'default'     => 'left',
			'priority'    => 10,
			'choices'     => array(
				'left'    => simpletheme_esc_attr( 'Left' ),
				'center'  => simpletheme_esc_attr( 'Center' ),
				'right'   => simpletheme_esc_attr( 'Right' ),
			),
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . TABLET_WIDTH_MAX . 'px)',
					'choice'   => 'left',
					'element'  => '.main-navigation.nav-style-1',
					'property' => 'text-align',
				), 	
				array(
					'media_query' => '@media (max-width: ' . TABLET_WIDTH_MAX . 'px)',
					'choice'   => 'center',
					'element'  => '.main-navigation.nav-style-1',
					'property' => 'text-align',
				),
				array(
					'media_query' => '@media (max-width: ' . TABLET_WIDTH_MAX . 'px)',
					'element'  => 'right',
					'element'  => '.main-navigation.nav-style-1',
					'property' => 'text-align',
				),
			),
		) );

		/* MOBILE */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'dimension',
			'settings'    => 'site_logo_normal_max_width_mobile',
			'label'       => simpletheme_esc_attr( 'Max logo width (' . MOBILE_INFO_TEXT . ')' ),
			'section'     => $section_id,
			'default'     => '8.5rem',
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . MOBILE_WIDTH_MAX . 'px)',
					'element'  => '.logo-container img',
					'property' => 'max-width'
				),
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'dimension',
			'settings'    => 'site_logo_normal_max_height_mobile',
			'label'       => simpletheme_esc_attr( 'Max logo height (' . MOBILE_INFO_TEXT . ')' ),
			'section'     => $section_id,
			'default'     => '4.25rem',
			'priority'    => 10,
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . MOBILE_WIDTH_MAX . 'px)',
					'element'  => '.logo-container img',
					'property' => 'max-height'
				),
				array(
					'media_query' => '@media (max-width: ' . MOBILE_WIDTH_MAX . 'px)',
					'element'  => '.main-navigation.nav-style-1',
					'property' => 'min-height',
					'value_pattern' => 'calc(1rem + $)',
				)
			),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'radio-buttonset',
			'settings'    => 'site_logo_alignment_mobile',
			'label'       => simpletheme_esc_attr( 'Logo alignment (' . MOBILE_INFO_TEXT . ')' ),
			'section'     => $section_id,
			'default'     => 'left',
			'priority'    => 10,
			'choices'     => array(
				'left'    => simpletheme_esc_attr( 'Left' ),
				'center'  => simpletheme_esc_attr( 'Center' ),
				'right'   => simpletheme_esc_attr( 'Right' ),
			),
			'output'      => array(
				array(
					'media_query' => '@media (max-width: ' . MOBILE_WIDTH_MAX . 'px)',
					'choice'   => 'left',
					'element'  => '.main-navigation.nav-style-1',
					'property' => 'text-align',
				), 	
				array(
					'media_query' => '@media (max-width: ' . MOBILE_WIDTH_MAX . 'px)',
					'choice'   => 'center',
					'element'  => '.main-navigation.nav-style-1',
					'property' => 'text-align',
				),
				array(
					'media_query' => '@media (max-width: ' . MOBILE_WIDTH_MAX . 'px)',
					'element'  => 'right',
					'element'  => '.main-navigation.nav-style-1',
					'property' => 'text-align',
				),
			),
		) );

