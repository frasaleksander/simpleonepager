<?php
/*
 * SiteOrigin Page Builder doesn't work with this
 * :'(
 */
SimplethemeCustomizer::show('header_404'); 
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">

				<div class="page-content"><?php
				simpletheme_the_content($the_404_selected_page);
				?></div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();