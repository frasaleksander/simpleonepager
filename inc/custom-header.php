<?php
/**
 * Sample implementation of the Custom Header feature.
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
	</a>
	<?php endif; // End header image check. ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package simpletheme
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses simpletheme_header_style()
 */
function backup_value($value, $backup_value) {
	if(!$value) {
		return $backup_value;
	}
	return $value;
}

function fallback_color($value, $backup_value='transparent') {
	$value = sanitize_hex_color('#' . ltrim($value, '#'));
	$backup_value = ( $backup_value == 'transparent' || $backup_value == '' ? 'transparent' : sanitize_hex_color('#' . ltrim($backup_value, '#')) );
	return $value ? $value : $backup_value;
}


function simpletheme_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'simpletheme_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '000000',
		'width'                  => 1000,
		'height'                 => 250,
		'flex-height'            => true,
		'wp-head-callback'       => 'simpletheme_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'simpletheme_custom_header_setup' );

if ( ! function_exists( 'simpletheme_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog.
 *
 * @see simpletheme_custom_header_setup().
 */
function simpletheme_header_style() {
	$text_color                    = fallback_color(get_theme_mod('text_color'), '444444');
	$background_color              = fallback_color(get_theme_mod('background_color'), 'ffffff');
	$link_color                    = fallback_color(get_theme_mod('link_color'), 'f06d06');
	$link_color_hover              = fallback_color(get_theme_mod('link_color_hover'), 'f06d06');
	$link_color_visited            = fallback_color(get_theme_mod('link_color_visited'), 'f06d06');
	$link_color_focus              = fallback_color(get_theme_mod('link_color_focus'), 'f06d06');
	$button_color_background       = fallback_color(get_theme_mod('button_color_background'));
	$button_color_background_hover = fallback_color(get_theme_mod('button_color_background_hover'));
	$button_color_background_focus = fallback_color(get_theme_mod('button_color_background_focus'));
	$button_color_text             = fallback_color(get_theme_mod('button_color_text'), '444444');
	$button_color_text_hover       = fallback_color(get_theme_mod('button_color_text_hover'), 'ffffff');
	$button_color_text_focus       = fallback_color(get_theme_mod('button_color_text_focus'), 'ffffff');
	$button_color_border           = fallback_color(get_theme_mod('button_color_border'));
	$button_color_border_hover     = fallback_color(get_theme_mod('button_color_border_hover'));
	$button_color_border_focus     = fallback_color(get_theme_mod('button_color_border_focus'));
	print_r(simpletheme_get_theme_mod('text_color'));
	?>

	<style type="text/css">
	<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that.
		else :
	?>
		.site-title a,
		.site-description {
			color: <?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>
	body {
		color: <?php echo esc_attr( $text_color ); ?>;
		background-color: <?php echo esc_attr( $background_color ); ?>;
	}
	a, a:link {
		color: <?php echo esc_attr( $link_color ); ?>;
	}
	a:visited {
		color: <?php echo esc_attr( $link_color_visited ); ?>;
	}
	a:focus {
		color: <?php echo esc_attr( $link_color_focus ); ?>;
	}
	a:hover {
		color: <?php echo esc_attr( $link_color_hover ); ?>;
	}

	button,
	input[type="button"],
	input[type="reset"],
	input[type="submit"],
	.btn {
		background-color: <?php echo esc_attr( $button_color_background ); ?>;
		color:<?php echo esc_attr( $button_color_text ); ?>;
		border-width:2px;
		border-color:<?php echo esc_attr( $button_color_border); ?>;
		border-radius:0;
		cursor:pointer;
		outline:0;
	}

	button:hover,
	input[type="button"]:hover,
	input[type="reset"]:hover,
	input[type="submit"]:hover,
	.btn:hover {
		background-color: <?php echo esc_attr( $button_color_background_hover ); ?>;
		color:<?php echo esc_attr( $button_color_text_hover ); ?>;
		border-color:<?php echo esc_attr( $button_color_border_hover); ?>;

	}
	button:focus,
	input[type="button"]:focus,
	input[type="reset"]:focus,
	input[type="submit"]:focus,
	.btn:focus,
	button:active,
	input[type="button"]:active,
	input[type="reset"]:active,
	input[type="submit"]:active,
	.btn:active  {
		background-color: <?php echo esc_attr( $button_color_background_focus ); ?>;
		color:<?php echo esc_attr( $button_color_text_focus ); ?>;
		border-color:<?php echo esc_attr( $button_color_border_focus); ?>;
	}
	</style>
	<?php
}
endif;
