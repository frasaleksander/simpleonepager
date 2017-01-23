<?php

class The404 {
	public static function getData() {
		return array(
			'the_404_selected_page' => simpletheme_get_theme_mod('the_404_selected_page', ''),
		);
	}
}

