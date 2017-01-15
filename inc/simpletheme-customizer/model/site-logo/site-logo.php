<?php
class SiteLogo extends SimplethemeCustomizerModel {
	public static function getData() {
		return array(
			'site_logo_src'        => simpletheme_get_theme_mod('site_logo_normal', ''),
			'site_logo_is_visible' => simpletheme_get_theme_mod('site_logo_normal_visibility'),
			'site_logo_href'       => esc_url( home_url( '/' ) ),
			'site_logo_alt'        => get_bloginfo( 'name' ) . ' - ' . get_bloginfo( 'description', 'display' ),
		);
	}	
}