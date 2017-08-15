<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package One_Three_Two
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!--Bootstrap Core CSS -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- FontAwesome Icons -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<!-- Google Fonts font-family: 'Raleway', sans-serif; -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
	
	<!-- Google Icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


	<?php wp_head(); ?>
<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'onethreetwo' ); ?></a>

	<!-- Header
	=========================================================== -->
	<header class="site-header" role="banner">

		<!-- NAVBAR
	=========================================================== -->
		<div class="navbar-wrapper">
			<div class="navbar navbar-inverse navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle Navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

							<a href="/" class="navbar-brand"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="3 Natural Bionutrition Logo"></a>

					</div><!-- navbar-header -->

					<?php
						wp_nav_menu( array(
							'theme_location'  => 'primary',
							'container'	      => 'nav',
							'container_class' => 'navbar-collapse collapse',
							'menu_class'      => 'nav navbar-nav navbar-right',
							'walker'          => new wp_bootstrap_navwalker()
						) );
					?>

				</div><!-- container -->
			</div><!-- navbar -->
		</div><!-- navbar-wrapper -->
	</header>
