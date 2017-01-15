<?php

class SiteLoader {
	public static function getData() {
		return array(
			'site_loader_background_color' => simpletheme_get_theme_mod('site_loader_background_color', '#ffffff'),
			'site_loader_icon_color'       => simpletheme_get_theme_mod('site_loader_icon_color', '#444444'),
			'site_loader_icon'             => simpletheme_esc_attr(simpletheme_get_theme_mod('site_loader_icon', 'update')),
			'site_loader_icon_size'        => simpletheme_get_theme_mod('site_loader_icon_size', '2rem'),
			'site_loader_is_visible'       => simpletheme_get_theme_mod('site_loader_visibility', 1),
		);
	}
}

