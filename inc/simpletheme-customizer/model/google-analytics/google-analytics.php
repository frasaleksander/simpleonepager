<?php
class GoogleAnalytics extends SimplethemeCustomizerModel {
	public static function getData() {
		return array(
			'google_analytics_code' => simpletheme_get_theme_mod('google_analytics_code')
		);
	}
}