<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='//fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/js/bxslider/jquery.bxslider.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="stage">
		<div class="header clearfix">
			<div class="rig">		
				<a href="<?php bloginfo('url'); ?>" class="logo top hidetext"><h1>Geo Intelligence</h1></a>			
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav', 'menu_id' => 'primary-menu' ) ); ?>
			</div>
		</div>

