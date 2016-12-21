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
	//echo 'la' . get_theme_mod('body_text_color');
}
endif;
