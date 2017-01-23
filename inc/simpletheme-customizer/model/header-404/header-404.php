<?php
class Header404 extends SimplethemeCustomizerModel {
	
	public static function getData() {
		return array(
			'blogname' => get_bloginfo( 'name' ),
			'bloghref' => esc_url( home_url( '/' ) ),
			'description' => get_bloginfo( 'description', 'display' ),
			'charset'     => get_bloginfo( 'charset' ),
			'the_404_navigation_menu_is_visible' => simpletheme_get_theme_mod('the_404_navigation_menu_is_visible', 0),
		);
	}
}