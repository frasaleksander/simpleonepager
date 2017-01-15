<?php
class CustomJavascript extends SimplethemeCustomizerModel {
	public static function getData() {
		return array(
			'custom_javascript_javascript' => simpletheme_get_theme_mod('custom_javascript', ''),
		);
	}
}