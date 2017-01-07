<?php

$SimplethemeCustomizer->buildWholeSection('colors_common', function(){

		/* CREATE SECTION */
		Simpletheme_Kirki::add_section( 'colors_common', array(
		    'priority'       => 10,
		    'capability'     => CAPATIBILITY_EDIT_THEME_OPTIONS,
		    'theme_supports' => '',
		    'title'          => simpletheme_translate('Common Colors'),
		    'description'    => simpletheme_translate('Colors that are being used throughout the whole theme.'),
		    'panel'          => 'colors_panel',
		) );

		/* CREATE FIELDS */

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'color',
			'settings'    => 'body_background_color',
			'label'       => simpletheme_translate('Background Color'),
			'section'     => 'colors_common',
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

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'color',
			'settings'    => 'body_text_color',
			'label'       => simpletheme_translate('Text Color'),
			'section'     => 'colors_common',
			'default'     => '#000000',
			'priority'    => 10,
			'choices'     => array( 'alpha' => true ),
			'output'         => array(
		    	array(
		    		'element' => 'body',
		    		'property' => 'color',
		    	),
		    ),
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'color',
			'settings'    => 'body_title_color',
			'label'       => simpletheme_translate('Title Color'),
			'section'     => 'colors_common',
			'default'     => '#444444',
			'priority'    => 10,
			'choices'     => array( 'alpha' => true ),
			'output'      => array(
				array(
		    		'element' => 'h1,h2,h3,h4,h5,h6',
		    		'property' => 'color'
		    	),
		    ),
		) );

		/*
		 * Link Color
		 */
		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
		    'type'        => 'multicolor',
		    'settings'    => 'body_link_colors',
		    'label'       => simpletheme_esc_attr( 'Link Color'),
		    'section'     => 'colors_common',
		    'priority'    => 10,
		    'choices'     => array(
		        'color'   => simpletheme_esc_attr('Color'),
		        'hover'   => simpletheme_esc_attr('Hover'),
		        'active'  => simpletheme_esc_attr('Active'),
		        'visited' => simpletheme_esc_attr('Visited'),
		    ),
		    'default'     => array(
		        'color'   => '#2199e8',
		        'hover'   => '#2199e8',
		        'active'  => '#2199e8',
		        'visited'   => '#2199e8',
		    ),
		    'output'      => array(
		    	array(
		    		'choice'   => 'color',
		    		'element'  => 'a,a:link',
		    		'property' => 'color',
		    	),
		    	array(
		    		'choice'   => 'hover',
		    		'element'  => 'a:hover',
		    		'property' => 'color',
		    	),
		    	array(
		    		'choice'   => 'active',
		    		'element'  => 'a:active',
		    		'property' => 'color',
		    	),
		    	array(
		    		'choice'   => 'visited',
		    		'element'  => 'a:visited',
		    		'property' => 'color',
		    	),
		    ),
		) );
		/*
		 * Input Background Color 
		 */
		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
		    'type'        => 'multicolor',
		    'settings'    => 'body_input_background_color',
		    'label'       => simpletheme_esc_attr( 'Input Background Color' ),
		    'section'     => 'colors_common',
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
		    'section'     => 'colors_common',
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
		    'section'     => 'colors_common',
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
		 * Button Background Color 
		 */
		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
		    'type'        => 'multicolor',
		    'settings'    => 'body_button_background_color',
		    'label'       => simpletheme_esc_attr( 'Button Background Color' ),
		    'section'     => 'colors_common',
		    'priority'    => 10,
		    'choices'     => array(
		        'color'   => simpletheme_esc_attr( 'Color' ),
		        'hover'   => simpletheme_esc_attr( 'Hover' ),
		        'active'  => simpletheme_esc_attr( 'Active' ),
		        'focus'   => simpletheme_esc_attr( 'Focus' ),
		    ),
		    'default'     => array(
		        'color'   => '#e6e6e6',
		        'hover'   => '#444444',
		        'active'  => '#444444',
		        'focus'   => '#444444',
		    ),
		    'output'      => array(
		    	array(
		    		'choice'   => 'color',
		    		'element'  => 'button, input[type="button"], input[type="reset"], input[type="submit"], .btn',
		    		'property' => 'background-color',
		    	),
		    	array(
		    		'choice'   => 'hover',
		    		'element'  => 'button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover, .btn:hover',
		    		'property' => 'background-color',
		    	),
		    	array(
		    		'choice'   => 'focus',
		    		'element'  => 'button:focus, input[type="button"]:focus, input[type="reset"]:focus, input[type="submit"]:focus, .btn:focus',
		    		'property' => 'background-color',
		    	),
		    	array(
		    		'choice'   => 'active',
		    		'element'  => 'button:active, input[type="button"]:active, input[type="reset"]:active, input[type="submit"]:active, .btn:active',
		    		'property' => 'background-color',
		    	),
		    ),
		) );


		/*
		 * Button Text Color 
		 */
		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
		    'type'        => 'multicolor',
		    'settings'    => 'body_button_text_color',
		    'label'       => simpletheme_esc_attr( 'Button Text Color' ),
		    'section'     => 'colors_common',
		    'priority'    => 10,
		    'choices'     => array(
		        'color'   => simpletheme_esc_attr( 'Color' ),
		        'hover'   => simpletheme_esc_attr( 'Hover' ),
		        'active'  => simpletheme_esc_attr( 'Active' ),
		        'focus'   => simpletheme_esc_attr( 'Focus' ),
		    ),
		    'default'     => array(
		        'color'   => '#444444',
		        'hover'   => '#e6e6e6',
		        'active'  => '#e6e6e6',
		        'focus'   => '#e6e6e6',
		    ),
		    'output'      => array(
		    	array(
		    		'choice'   => 'color',
		    		'element'  => 'button, input[type="button"], input[type="reset"], input[type="submit"], .btn',
		    		'property' => 'color',
		    	),
		    	array(
		    		'choice'   => 'hover',
		    		'element'  => 'button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover, .btn:hover',
		    		'property' => 'color',
		    	),
		    	array(
		    		'choice'   => 'focus',
		    		'element'  => 'button:focus, input[type="button"]:focus, input[type="reset"]:focus, input[type="submit"]:focus, .btn:focus',
		    		'property' => 'color',
		    	),
		    	array(
		    		'choice'   => 'active',
		    		'element'  => 'button:active, input[type="button"]:active, input[type="reset"]:active, input[type="submit"]:active, .btn:active',
		    		'property' => 'color',
		    	),
		    ),
		) );

		/*
		 * Button Border Color 
		 */
		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
		    'type'        => 'multicolor',
		    'settings'    => 'body_button_border_color',
		    'label'       => simpletheme_esc_attr( 'Button Border Color' ),
		    'section'     => 'colors_common',
		    'priority'    => 10,
		    'choices'     => array(
		        'color'   => simpletheme_esc_attr( 'Color' ),
		        'hover'   => simpletheme_esc_attr( 'Hover' ),
		        'active'  => simpletheme_esc_attr( 'Active' ),
		        'focus'   => simpletheme_esc_attr( 'Focus' ),
		    ),
		    'default'     => array(
		        'color'   => '#e7e7e7',
		        'hover'   => '#e7e7e7',
		        'active'  => '#e7e7e7',
		        'focus'   => '#e7e7e7',
		    ),
		    'output'      => array(
		    	array(
		    		'choice'   => 'color',
		    		'element'  => 'button, input[type="button"], input[type="reset"], input[type="submit"], .btn',
		    		'property' => 'border-color',
		    	),
		    	array(
		    		'choice'   => 'hover',
		    		'element'  => 'button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover, .btn:hover',
		    		'property' => 'border-color',
		    	),
		    	array(
		    		'choice'   => 'focus',
		    		'element'  => 'button:focus, input[type="button"]:focus, input[type="reset"]:focus, input[type="submit"]:focus, .btn:focus',
		    		'property' => 'border-color',
		    	),
		    	array(
		    		'choice'   => 'active',
		    		'element'  => 'button:active, input[type="button"]:active, input[type="reset"]:active, input[type="submit"]:active, .btn:active',
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
		    'section'     => 'colors_common',
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
		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
		    'type'        => 'multicolor',
		    'settings'    => 'body_code_color',
		    'label'       => simpletheme_esc_attr( 'Code Color' ),
		    'section'     => 'colors_common',
		    'priority'    => 10,
		    'choices'     => array(
		        'bgcolor'      => simpletheme_esc_attr( 'Background' ),
		        'txtcolor'     => simpletheme_esc_attr( 'Text' ),
		    ),
		    'default'     => array(
		        'bgcolor'      => '#f7f7f7',
		        'txtcolor'     => 'rgba(68,6,6,0.6)',
		    ),
		    'output'      => array(
		    	array(
		    		'choice'   => 'bgcolor',
		    		'element'  => '.highlight, code, kbd',
		    		'property' => 'background-color',
		    	),
		    	array(
		    		'choice'   => 'txtcolor',
		    		'element'  => '.highlight, code, kbd',
		    		'property' => 'color',
		    	),
		
		    ),
		) );

});


//END
