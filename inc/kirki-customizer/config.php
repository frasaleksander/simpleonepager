<?php

$SimplethemeCustomizer->config = function() {

	Simpletheme_Kirki::add_config( THEME_TEXTDOMAIN, array(
			'capability'     => CAPATIBILITY_EDIT_THEME_OPTIONS,
			'option_type'    => THEME_MOD,
			'disable_output' => false,
	) );

};