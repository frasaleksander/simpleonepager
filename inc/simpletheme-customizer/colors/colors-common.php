<?php

$SimplethemeCustomizer->buildWholeSection( 'colors_common', 'colors_panel', function($section_id, $panel_id){

		/* CREATE SECTION */
		Simpletheme_Kirki::add_section( $section_id, array(
		    'priority'       => 10,
		    'capability'     => CAPATIBILITY_EDIT_THEME_OPTIONS,
		    'theme_supports' => '',
		    'title'          => simpletheme_translate('Common Colors'),
		    'description'    => simpletheme_translate('Colors that are being used throughout the whole theme.'),
		    'panel'          => $panel_id,
		) );

		/* CREATE FIELDS */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'color',
			'settings'    => 'body_background_color',
			'label'       => simpletheme_translate('Background Color'),
			'section'     =>  $section_id,
			'default'     => '#ffffff',
			'priority'    => 10,
			'choices'     => array( 'alpha' => true ),
			'output'      => array(
				array(
					'element'  => 'body',
					'property' => 'background-color'
					)
				)
		) );

		/*
		 * Input Background Color 
		 */
		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
		    'type'        => 'multicolor',
		    'settings'    => 'body_input_background_color',
		    'label'       => simpletheme_esc_attr( 'Input Background Color' ),
		    'section'     =>  $section_id,
		    'priority'    => 10,
		    'choices'     => array(
		        'color'   => simpletheme_esc_attr( 'Color' ),
		        'hover'   => simpletheme_esc_attr( 'Hover' ),
		        'invalid' => simpletheme_esc_attr( 'Invalid' ),
		        'focus'   => simpletheme_esc_attr( 'Focus' ),
		    ),
		    'default'     => array(
		        'color'   => '#ffffff',
		        'hover'   => '#ffffff',
		        'invalid'  => '#ffffff',
		        'focus'   => '#ffffff',
		    ),
		    'output'      => array(
		    	array(
		    		'choice'   => 'color',
		    		'element'  => 'input[type="text"],input[type="email"],input[type="url"],input[type="password"],input[type="search"],input[type="number"],input[type="tel"],input[type="range"],input[type="date"],input[type="month"],input[type="week"],input[type="time"],input[type="datetime"],input[type="datetime-local"],input[type="color"],select,textarea',
		    		'property' => 'background-color',
		    	),
		    	array(
		    		'choice'   => 'hover',
		    		'element'  => 'input[type="text"]:hover, input[type="email"]:hover, input[type="url"]:hover, input[type="password"]:hover, input[type="search"]:hover ,input[type="number"]:hover, input[type="tel"]:hover, input[type="range"]:hover, input[type="date"]:hover, input[type="month"]:hover, input[type="week"]:hover, input[type="time"]:hover, input[type="datetime"]:hover, input[type="datetime-local"]:hover, input[type="color"]:hover, select:hover, textarea:hover',
		    		'property' => 'background-color',
		    	),
		    	array(
		    		'choice'   => 'focus',
		    		'element'  => 'input[type="text"]:focus, input[type="email"]:focus, input[type="url"]:focus, input[type="password"]:focus, input[type="search"]:focus ,input[type="number"]:focus, input[type="tel"]:focus, input[type="range"]:focus, input[type="date"]:focus, input[type="month"]:focus, input[type="week"]:focus, input[type="time"]:focus, input[type="datetime"]:focus, input[type="datetime-local"]:focus, input[type="color"]:focus, select:focus, textarea:focus',
		    		'property' => 'background-color',
		    	),
		    	array(
		    		'choice'   => 'invalid',
		    		'element'  => 'nput[type="text"]:invalid, input[type="email"]:invalid, input[type="url"]:invalid, input[type="password"]:invalid, input[type="search"]:invalid ,input[type="number"]:invalid, input[type="tel"]:invalid, input[type="range"]:invalid, input[type="date"]:invalid, input[type="month"]:invalid, input[type="week"]:invalid, input[type="time"]:invalid, input[type="datetime"]:invalid, input[type="datetime-local"]:invalid, input[type="color"]:invalid, select:invalid, textarea:invalid',
		    		'property' => 'background-color',
		    	),
		    ),
		) );

		/*
		 * Input Text Color 
		 */
		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
		    'type'        => 'multicolor',
		    'settings'    => 'body_input_text_color',
		    'label'       => simpletheme_esc_attr( 'Input Text Color' ),
		    'section'     =>  $section_id,
		    'priority'    => 10,
		    'choices'     => array(
		        'color'   => simpletheme_esc_attr( 'Color' ),
		        'hover'   => simpletheme_esc_attr( 'Hover' ),
		        'invalid' => simpletheme_esc_attr( 'Invalid' ),
		        'focus'   => simpletheme_esc_attr( 'Focus' ),
		    ),
		    'default'     => array(
		        'color'   => '#444444',
		        'hover'   => '#444444',
		        'invalid'  => '#444444',
		        'focus'   => '#444444',
		    ),
		    'output'      => array(
		    	array(
		    		'choice'   => 'color',
		    		'element'  => 'input[type="text"],input[type="email"],input[type="url"],input[type="password"],input[type="search"],input[type="number"],input[type="tel"],input[type="range"],input[type="date"],input[type="month"],input[type="week"],input[type="time"],input[type="datetime"],input[type="datetime-local"],input[type="color"],select,textarea',
		    		'property' => 'color',
		    	),
		    	array(
		    		'choice'   => 'hover',
		    		'element'  => 'input[type="text"]:hover, input[type="email"]:hover, input[type="url"]:hover, input[type="password"]:hover, input[type="search"]:hover ,input[type="number"]:hover, input[type="tel"]:hover, input[type="range"]:hover, input[type="date"]:hover, input[type="month"]:hover, input[type="week"]:hover, input[type="time"]:hover, input[type="datetime"]:hover, input[type="datetime-local"]:hover, input[type="color"]:hover, select:hover, textarea:hover',
		    		'property' => 'color',
		    	),
		    	array(
		    		'choice'   => 'focus',
		    		'element'  => 'input[type="text"]:focus, input[type="email"]:focus, input[type="url"]:focus, input[type="password"]:focus, input[type="search"]:focus ,input[type="number"]:focus, input[type="tel"]:focus, input[type="range"]:focus, input[type="date"]:focus, input[type="month"]:focus, input[type="week"]:focus, input[type="time"]:focus, input[type="datetime"]:focus, input[type="datetime-local"]:focus, input[type="color"]:focus, select:focus, textarea:focus',
		    		'property' => 'color',
		    	),
		    	array(
		    		'choice'   => 'invalid',
		    		'element'  => 'nput[type="text"]:invalid, input[type="email"]:invalid, input[type="url"]:invalid, input[type="password"]:invalid, input[type="search"]:invalid ,input[type="number"]:invalid, input[type="tel"]:invalid, input[type="range"]:invalid, input[type="date"]:invalid, input[type="month"]:invalid, input[type="week"]:invalid, input[type="time"]:invalid, input[type="datetime"]:invalid, input[type="datetime-local"]:invalid, input[type="color"]:invalid, select:invalid, textarea:invalid',
		    		'property' => 'color',
		    	),
		    ),
		) );

		/*
		 * Input Border Color 
		 */
		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
		    'type'        => 'multicolor',
		    'settings'    => 'body_input_border_color',
		    'label'       => simpletheme_esc_attr( 'Input Border Color' ),
		    'section'     =>  $section_id,
		    'priority'    => 10,
		    'choices'     => array(
		        'color'   => simpletheme_esc_attr( 'Color' ),
		        'hover'   => simpletheme_esc_attr( 'Hover' ),
		        'invalid' => simpletheme_esc_attr( 'Invalid' ),
		        'focus'   => simpletheme_esc_attr( 'Focus' ),
		    ),
		    'default'     => array(
		        'color'   => '#e7e7e7',
		        'hover'   => '#e7e7e7',
		        'invalid'  => '#e7e7e7',
		        'focus'   => '#e7e7e7',
		    ),
		    'output'      => array(
		    	array(
		    		'choice'   => 'color',
		    		'element'  => 'input[type="text"],input[type="email"],input[type="url"],input[type="password"],input[type="search"],input[type="number"],input[type="tel"],input[type="range"],input[type="date"],input[type="month"],input[type="week"],input[type="time"],input[type="datetime"],input[type="datetime-local"],input[type="color"],select,textarea',
		    		'property' => 'border-color',
		    	),
		    	array(
		    		'choice'   => 'hover',
		    		'element'  => 'input[type="text"]:hover, input[type="email"]:hover, input[type="url"]:hover, input[type="password"]:hover, input[type="search"]:hover ,input[type="number"]:hover, input[type="tel"]:hover, input[type="range"]:hover, input[type="date"]:hover, input[type="month"]:hover, input[type="week"]:hover, input[type="time"]:hover, input[type="datetime"]:hover, input[type="datetime-local"]:hover, input[type="color"]:hover, select:hover, textarea:hover',
		    		'property' => 'border-color',
		    	),
		    	array(
		    		'choice'   => 'focus',
		    		'element'  => 'input[type="text"]:focus, input[type="email"]:focus, input[type="url"]:focus, input[type="password"]:focus, input[type="search"]:focus ,input[type="number"]:focus, input[type="tel"]:focus, input[type="range"]:focus, input[type="date"]:focus, input[type="month"]:focus, input[type="week"]:focus, input[type="time"]:focus, input[type="datetime"]:focus, input[type="datetime-local"]:focus, input[type="color"]:focus, select:focus, textarea:focus',
		    		'property' => 'border-color',
		    	),
		    	array(
		    		'choice'   => 'invalid',
		    		'element'  => 'nput[type="text"]:invalid, input[type="email"]:invalid, input[type="url"]:invalid, input[type="password"]:invalid, input[type="search"]:invalid ,input[type="number"]:invalid, input[type="tel"]:invalid, input[type="range"]:invalid, input[type="date"]:invalid, input[type="month"]:invalid, input[type="week"]:invalid, input[type="time"]:invalid, input[type="datetime"]:invalid, input[type="datetime-local"]:invalid, input[type="color"]:invalid, select:invalid, textarea:invalid',
		    		'property' => 'border-color',
		    	),
		    ),
		) );


		/*
		 * Blockquote Color
		 */
		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
		    'type'        => 'multicolor',
		    'settings'    => 'body_blockquote_color',
		    'label'       => simpletheme_esc_attr( 'Blockquote Color' ),
		    'section'     =>  $section_id,
		    'priority'    => 10,
		    'choices'     => array(
		        'bgcolor'       => simpletheme_esc_attr( 'Background' ),
		        'txtcolor'     => simpletheme_esc_attr( 'Text' ),
		        'headingcolor'  => simpletheme_esc_attr( 'Headings' ),
		        //'focus'   => simpletheme_esc_attr( 'Focus' ),
		    ),
		    'default'     => array(
		        'bgcolor'       => 'rgba(255,255,255,0)',
		        'txtcolor'     => '#444444',
		        'headingcolor'  => '#444444',
		        //'focus'   => '#e7e7e7',
		    ),
		    'output'      => array(
		    	array(
		    		'choice'   => 'bgcolor',
		    		'element'  => 'blockquote',
		    		'property' => 'background-color',
		    	),
		    	array(
		    		'choice'   => 'txtcolor',
		    		'element'  => 'blockquote',
		    		'property' => 'color',
		    	),
		    	array(
		    		'choice'   => 'headingcolor',
		    		'element'  => 'blockquote h1, blockquote h2, blockquote h3,blockquote h4, blockquote h5, blockquote h6',
		    		'property' => 'color',
		    	),
		
		    ),
		) );

		/*
		 * Code Color
		 */


});


//END
