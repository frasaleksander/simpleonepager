<?php
class GoogleAnalytics extends SimplethemeCustomizerModel {
	public static function getData() {
		return array(
			'google_analytics_tracking_id' => simpletheme_get_theme_mod('google_analytics_tracking_id')
		);
	}
}