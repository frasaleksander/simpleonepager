<?php
class Head extends SimplethemeCustomizerModel {
	
	public static function getData() {
		return array(
			'blogname' => get_bloginfo( 'name' ),
			'bloghref' => esc_url( home_url( '/' ) ),
			'description' => get_bloginfo( 'description', 'display' ),
			'charset'     => get_bloginfo( 'charset' ),
		);
	}
}