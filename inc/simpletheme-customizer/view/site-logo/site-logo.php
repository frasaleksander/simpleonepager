<?php
	 if(!($site_logo_src && $site_logo_is_visible)) {
	 	return;
	 }
?>
<div class="logo-container">
	<a href="<?php echo $site_logo_href; ?>" title="<?php echo $site_logo_alt; ?>">
		<img src="<?php echo $site_logo_src; ?>" alt="<?php echo $site_logo_alt; ?>" >
	</a>
</div><!-- logo-container -->