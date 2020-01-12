<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="dns-prefetch" href="//fonts.googleapis.com">

	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

	<div class="container-fluid fixed-top p-0" id="topheader">
		<?php get_template_part('/inc/top', 'bar') ?>
		
		<?php get_template_part('/inc/main', 'nav') ?>
    </div>
	

    