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


?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
<?php SimplethemeCustomizer::show('custom_css'); 
//print_r(SimplethemeCustomizer::$viewData); ?>
</head>

<body <?php body_class(); ?>>
<?php 
	SimplethemeCustomizer::show('site_loader');
	//print_r(SimplethemeCustomizer::$viewData);
?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'simpletheme' ); ?></a>

	<header id="navhead" class="nav-header" role="banner">
		<div class="site-branding skip">
			<?php
			
			if ( is_front_page() && is_home() ) : ?>

				<h1 class="site-title"><a href="<?php echo $bloghref; ?>" rel="home"><?php echo $blogname; ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo $bloghref; ?>" rel="home"><?php echo $blogname; ?></a></p>
			<?php
			endif;

			if ( $description ) : ?>
				<p class="site-description"><?php echo $description; ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation nav-style-1" role="main-navigation">
			<button class="menu-toggle main-menu-button" aria-controls="primary-menu" aria-expanded="false"><?php 
			//esc_html_e( 'Primary Menu', 'simpletheme' ); 
			echo '<i class="ti-menu"></i>';
			?></button>
			<?php SimplethemeCustomizer::show('site_logo'); ?>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
