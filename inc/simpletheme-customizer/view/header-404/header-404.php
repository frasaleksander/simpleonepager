<?php

SimplethemeCustomizer::show('head');

?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'simpletheme' ); ?></a>

	<header id="navhead" class="nav-header" role="banner">

		<?php if($the_404_navigation_menu_is_visible): ?>
		<nav id="site-navigation" class="main-navigation nav-style-1" role="main-navigation">
			<button class="menu-toggle main-menu-button" aria-controls="primary-menu" aria-expanded="false"><?php 
			//esc_html_e( 'Primary Menu', 'simpletheme' ); 
			echo '<i class="ti-menu"></i>';
			?></button>
			<?php SimplethemeCustomizer::show('site_logo'); ?>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		<?php endif; //the_404_navigation_menu_is_visible ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content site-content-404">
