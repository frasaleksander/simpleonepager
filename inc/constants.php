<?php

define('SIMPLETHEME_CUSTOMIZER_PATH', get_template_directory() . '/inc/simpletheme-customizer');

define('CAPATIBILITY_EDIT_THEME_OPTIONS' , 'edit_theme_options');
define('THEME_TEXTDOMAIN', 'simpletheme');
define('THEME_MOD', 'theme_mod');

define('CUSTOM_JAVASCRIPT_PRIORITY', 1000000);
define('CUSTOM_CSS_PRIORITY', 1000000);

define('MOBILE_WIDTH_MIN', 0);
define('MOBILE_WIDTH_MAX', 767);
define('TABLET_WIDTH_MIN', 768);
define('TABLET_WIDTH_MAX', 1024);
define('DESKTOP_WIDTH_MIN', 1025);
define('DESKTOP_WIDTH_MAX', 1440);
define('LARGE_DESKTOP_WIDTH_MIN', 1441);

define('MOBILE_INFO_TEXT', 'Mobile - under ' . TABLET_WIDTH_MIN . 'px');
define('TABLET_INFO_TEXT', 'Tablet - from ' . TABLET_WIDTH_MIN . 'px to ' . TABLET_WIDTH_MAX . 'px');
define('DESKTOP_INFO_TEXT', 'Desktop - from ' . DESKTOP_WIDTH_MIN . 'px to ' . DESKTOP_WIDTH_MAX . 'px');
define('LARGE_DESKTOP_INFO_TEXT', 'Large Desktop - over ' . DESKTOP_WIDTH_MAX . 'px');