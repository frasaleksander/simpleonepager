<?php

$SimplethemeCustomizer->buildWholeSection('site_loader', '', 

	function($section_id, $panel_id){

		/* CREATE SECTION */
		Simpletheme_Kirki::add_section( $section_id, array(
		    'priority'       => 50,
		    'capability'     => CAPATIBILITY_EDIT_THEME_OPTIONS,
		    'theme_supports' => '',
		    'title'          => simpletheme_translate('Site Loader'),
		    'description'    => simpletheme_translate('Site Loader settings'),
		    'panel'          => $panel_id,
		) );

		/* CREATE FIELDS */


		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'switch',
			'settings'    => 'site_loader_visibility',
			'description' => simpletheme_esc_attr( 'Do you want to use Site Loader?' ),
			'section'     => $section_id,
			'default'     => '1',
			'choices'     => array(
				'on'   => simpletheme_esc_attr ( 'Yes' ),
				'off'  => simpletheme_esc_attr ( 'No' ),
			),
			'priority'    => 10,
		) );

		
		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'color',
			'settings'    => 'site_loader_background_color',
			'label'       => simpletheme_esc_attr( 'Site Loader Background Color' ),
			'desctiption' => simpletheme_translate( 'Choose background color' ),
			'section'     => $section_id,
			'default'     => '#ffffff',
			'priority'    => 10,
		) );


		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'color',
			'settings'    => 'site_loader_icon_color',
			'label'       => simpletheme_esc_attr( 'Site Loader Icon Color' ),
			'desctiption' => simpletheme_translate( 'Choose icon color' ),
			'section'     => $section_id,
			'default'     => '#444444',
			'priority'    => 10,
		) );

		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'dimension',
			'settings'    => 'site_loader_icon_size',
			'label'       => simpletheme_esc_attr( 'Site Loader Icon Size' ),
			'desctiption' => simpletheme_translate( 'Choose icon size' ),
			'section'     => $section_id,
			'default'     => '2rem',
			'priority'    => 10,
		) );


		Simpletheme_Kirki::add_field( THEME_TEXTDOMAIN, array(
			'type'        => 'dashicons',
			'settings'    => 'site_loader_icon',
			'label'       => simpletheme_esc_attr( 'Site Loader Icon' ),
			'desctiption' => simpletheme_translate( 'Choose icon' ),
			'section'     => $section_id,
			'default'     => 'update',
			'priority'    => 10,
		) );


});

/*
 * VIEW 
 */ 
$SimplethemeCustomizer->SiteLoader = new ExtClass();

$SimplethemeCustomizer->SiteLoader->isVisible = function() {
	return simpletheme_get_theme_mod('site_loader_visibility');
};

$SimplethemeCustomizer->SiteLoader->getBackgroundColor = function() {
	return simpletheme_get_theme_mod('site_loader_background_color', '#ffffff');
};

$SimplethemeCustomizer->SiteLoader->getIconColor = function() {
	return simpletheme_get_theme_mod('site_loader_icon_color', '#444444');
};

$SimplethemeCustomizer->SiteLoader->getIcon = function() {
	return '<i class="site-loader-icon site-loader-icon-spin dashicons dashicons-' . simpletheme_esc_attr(simpletheme_get_theme_mod('site_loader_icon', 'update')) . '"></i>';
};

$SimplethemeCustomizer->SiteLoader->getIconSize = function() {
	return simpletheme_get_theme_mod('site_loader_icon_size', '2rem');
};




$SimplethemeCustomizer->SiteLoader->view = function() {
	global $SimplethemeCustomizer;
	//echo $SimplethemeCustomizer->SiteLoader->isVisible();
	if(!$SimplethemeCustomizer->SiteLoader->isVisible()) {
		return;
	}
	?>
	<style id="site-loader-css">
		#site-loader {
			position:fixed;
			left:0;
			right:0;
			bottom:0;
			top:0;
			background-color:<?php echo $SimplethemeCustomizer->SiteLoader->getBackgroundColor(); ?>;
			color:<?php echo $SimplethemeCustomizer->SiteLoader->getIconColor(); ?>;
			opacity:1;
		}
		#site-loader.loaded {
			opacity:0;
		}
		#site-loader>.site-loader-inner {
			position:relative;
			width:100%;
			height:100%;
			z-index:1000000000000;
		}
		#page {
			opacity:0;
			-o-transition:opacity 0.8s ease 0s;
			-moz-transition:opacity 0.8s ease 0s;
			-webkit-transition:opacity 0.8s ease 0s;
			-ms-transition:opacity 0.8s ease 0s;
			transition:opacity 0.8s ease 0s;
		}
		#page.loaded {
			opacity:1;
		}
		.site-loader-icon-container {
			position:absolute;
			top:50%;
			left:50%;
			transform: translate(-50%,-50%);
		}
		.site-loader-icon {
			font-size: <?php echo $SimplethemeCustomizer->SiteLoader->getIconSize(); ?>;
			width:<?php echo $SimplethemeCustomizer->SiteLoader->getIconSize(); ?>;
			height:<?php echo $SimplethemeCustomizer->SiteLoader->getIconSize(); ?>;
		}
	</style>
	<div id="site-loader">
		<div class="site-loader-inner">
			<div class="site-loader-icon-container"><?php echo $SimplethemeCustomizer->SiteLoader->getIcon(); ?></div><!-- site loader inner container -->
		</div><!-- .site-loader-inner -->
	</div><!-- .site-loader -->
	<script id="site-loader-script">
		window.addEventListener('load', function(){
			window.setTimeout(function(){
				var siteLoader = document.getElementById('site-loader');
				var page = document.getElementById('page');
				//console.log(className);
				page.className = page.className + ' loaded';
				siteLoader.className = siteLoader + ' loaded';
			}, 100);

		}, false);
	</script>
	<?php
};

/*
 * Wrapper around SiteLoader->view function
 */
function simpletheme_siteloader_view() {
	global $SimplethemeCustomizer;
	$SimplethemeCustomizer->SiteLoader->view();
}
