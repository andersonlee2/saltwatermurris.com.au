<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/asset/favicon.ico">
	<meta name="theme-color" content="#ddd" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?ver=<?php echo rand(111,999)?>">
	<title><?php bloginfo('title'); ?></title>
	<?php wp_head(); ?>
</head>
<body>
<!--Header-->
<header>
    <div class="banner">
        <img src="<?php bloginfo('template_url'); ?>/asset/img/vickys_fave.jpg">
        <a href="<?php echo home_url(); ?>">
            <img src="<?php bloginfo('template_url'); ?>/asset/logo/logo-color.png" alt="logo.jpg">
			<div class="title">
				<h1>Salt Water Murris<br>
				Quandamooka<br>
				Aboriginal Art Gallery</h1>
			</div>
        </a>
    </div>
	<a class='mobile-header' href="<?php echo home_url(); ?>">
		<img src="<?php bloginfo('template_url'); ?>/asset/logo/logo-mobile.png" alt="logo.jpg">
	</a>
    <nav class='site-nav'>
		<div class='hamburger'>
			<i class='fa fa-bars'></i>
		</div>
		<?php wp_nav_menu(); ?>
    </nav>
</header>
