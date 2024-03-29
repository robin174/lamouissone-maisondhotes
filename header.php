<!doctype html>
<html class="no-js"  <?php language_attributes(); ?>>
	<head>
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/images/apple-icon-touch.png" rel="apple-touch-icon" />
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<meta name="msapplication-TileColor" content="#56a1a8">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/win8-tile-icon.png">
	    	<meta name="theme-color" content="#121212">
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- Font Awesome -->
		<script src="https://kit.fontawesome.com/2c19fb9f34.js" crossorigin="anonymous"></script>

		<!-- 2023: GA4 | Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-922N37LG0J"></script> 
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-922N37LG0J');
		</script>
		<?php wp_head(); ?>
	</head>
	
	<!-- Uncomment this line if using the Off-Canvas Menu --> 
	<body <?php body_class(); ?>>
		<div class="off-canvas-wrapper">
			<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
				<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
				<div class="off-canvas-content" data-off-canvas-content>
					<header class="header" role="banner">
						<!-- This navs will be applied to the topbar, above all content 
						To see additional nav styles, visit the /parts directory -->
						 <?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
					</header><!-- end .header -->