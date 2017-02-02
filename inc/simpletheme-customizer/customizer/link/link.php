<?php
		$a_css_selector = 'a';
		$a_css_selector_hover = css_selector_hover($a_css_selector);
		$a_css_selector_link = css_selector_link($a_css_selector);
		$a_css_selector_active = css_selector_active($a_css_selector);
		$a_css_selector_visited = css_selector_visited($a_css_selector);
		
		/* CREATE SECTION */
		Simpletheme_Kirki::add_section( $section_id, array(
		    'priority'       => 10,
		    'capability'     => CAPATIBILITY_EDIT_THEME_OPTIONS,
		    'theme_supports' => '',
		    'title'          => simpletheme_translate('Link'),
		    'description'    => simpletheme_translate('Link colors'),
		    'panel'          => $panel_id,
		) );

		/* CREATE FIELDS */

		/*
		 * Link Color
		 */
		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
		    'type'        => 'multicolor',
		    'settings'    => 'link_colors',
		    'label'       => simpletheme_esc_attr( 'Link Colors'),
		    'section'     =>  $section_id,
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
		    		'element'  => $a_css_selector . ',' . $a_css_selector_link,
		    		'property' => 'color',
		    	),
		    	array(
		    		'choice'   => 'hover',
		    		'element'  => $a_css_selector_hover,
		    		'property' => 'color',
		    	),
		    	array(
		    		'choice'   => 'active',
		    		'element'  => $a_css_selector_active,
		    		'property' => 'color',
		    	),
		    	array(
		    		'choice'   => 'visited',
		    		'element'  => $a_css_selector_visited,
		    		'property' => 'color',
		    	),
		    ),
		) );