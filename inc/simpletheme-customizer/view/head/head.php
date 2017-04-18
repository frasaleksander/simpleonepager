<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php echo $charset; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
<?php SimplethemeCustomizer::show('custom_css'); ?>
</head>

<body <?php body_class(); ?>>
<?php 
    SimplethemeCustomizer::show('google_analytics');
	SimplethemeCustomizer::show('site_loader');
?>
