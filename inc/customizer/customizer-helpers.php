<?php

$GLOBALS['simpletheme_customizer_css'] = array();

function simpletheme_get_option( $setting, $default ) {
    $options = get_option( 'option_name', array() );
    $value = $default;
    if ( isset( $options[ $setting ] ) ) {
        $value = $options[ $setting ];
    }
    return $value;
}

function simpletheme_get_theme_mod($setting, $default='') {
	$value = get_theme_mod($setting, array());
	if(!$value) {
		$value = $default;
	}
    return $value;
}