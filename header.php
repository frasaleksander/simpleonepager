<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package simpletheme
 */

$blogname =  get_bloginfo( 'name' );
$bloghref = esc_url( home_url( '/' ) );
$description = get_bloginfo( 'description', 'display' );
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo_src = wp_get_attachment_image_src( $custom_logo_id , 'full' );

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'simpletheme' ); ?></a>

	<header id="navhead" role="banner">
		<div class="site-branding skip">
			<?php
			
			if ( is_front_page() && is_home() ) : ?>

				<h1 class="site-title"><a href="<?php echo $bloghref; ?>" rel="home"><?php echo $blogname; ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo $bloghref; ?>" rel="home"><?php echo $blogname; ?></a></p>
			<?php
			endif;

			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation nav-style-1" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'simpletheme' ); ?></button>
			<?php if($logo_src): ?>
		    <div class="logo-container">
		        <a href="<?php echo $bloghref; ?>" title="<?php echo $blogname . ' - ' . $description; ?>">
		    	<img src="<?php echo $logo_src[0]; ?>" alt="<?php echo $blogname  . ' - ' . $description; ?>" >
		        </a>
		    </div><!-- logo-container -->
		    <?php endif; //if($logo_src): ?>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
