<?php
	if(!$site_loader_is_visible) {
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
			background-color:<?php echo $site_loader_background_color; ?>;
			color:<?php echo $site_loader_icon_color; ?>;
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
			font-size: <?php echo $site_loader_icon_size; ?>;
			width:<?php echo $site_loader_icon_size; ?>;
			height:<?php echo $site_loader_icon_size; ?>;
		}
	</style>
	<div id="site-loader">
		<div class="site-loader-inner">
			<div class="site-loader-icon-container"><?php echo '<i class="site-loader-icon site-loader-icon spin-left dashicons dashicons-' . $site_loader_icon . '"></i>'; ?></div><!-- site loader inner container -->
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