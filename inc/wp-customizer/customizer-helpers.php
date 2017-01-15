<?php

function simpletheme_get_option( $setting, $default ) {
    $options = get_option( 'option_name', array() );
    $value = $default;
    if ( isset( $options[ $setting ] ) ) {
        $value = $options[ $setting ];
    }
    return $value;
}

function simpletheme_get_theme_mod($name, $default='') {
    $mods = get_theme_mods();
    if(!isset($mods[$name])) {
        //echo $default . ";";
        return $default;
    }
    return get_theme_mod($name, $default);
}