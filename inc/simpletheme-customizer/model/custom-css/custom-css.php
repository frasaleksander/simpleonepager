<?php
class CustomCss extends SimplethemeCustomizerModel {
	public static function getData() {
		return array(
			'custom_css_css' => simpletheme_get_theme_mod('custom_css', '')
		);
	}
}