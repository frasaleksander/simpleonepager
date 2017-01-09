<?php

$SimplethemeCustomizer->buildWholeSection('custom_css', '', 
	function($section_id, $panel_id){

		Simpletheme_Kirki::add_section( $section_id, array(
		    'priority'       => 1001,
		    'capability'     => CAPATIBILITY_EDIT_THEME_OPTIONS,
		    'theme_supports' => '',
		    'title'          => simpletheme_translate('Custom CSS'),
		    'description'    => simpletheme_translate('Custom CSS for simpletheme'),
		    'panel'          => $panel_id,
		) );


		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'code',
			'settings'    => 'custom_css',
			'label'       => simpletheme_esc_attr( 'Custom CSS' ),
			'section'     => $section_id,
			'default'     => sprintf( "/*\n%s\n*/", simpletheme_translate( "You can add your own CSS here." ) ),
			'priority'    => 10,
			'choices'     => array(
				'language' => 'css',
				'theme'    => 'monokai',
				'height'   => 250,
			),
		) );

});

$SimplethemeCustomizer->outputCustomCSS = function() {
	add_action('wp_head', function(){
		echo '<style id="simpletheme-custom-css">';
		echo simpletheme_get_theme_mod('custom_css', '');
		echo '</style>';
	}, CUSTOM_CSS_PRIORITY);
};