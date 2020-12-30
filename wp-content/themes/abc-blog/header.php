<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package abc-blog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/4b2ee26aaa.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
	<!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->


	<!-- Additional CSS Files -->
	<!-- <link rel="stylesheet" href="css/fontawesome.css">
	<link rel="stylesheet" href="css/templatemo-stand-blog.css">
	<link rel="stylesheet" href="css/owl.css"> -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'abc-blog' ); ?></a>

	<header id="masthead" class="site-header">
	<nav class="navbar navbar-expand-lg" style="padding:40px;">
		<div class="container">
		
		
			<?php

			the_custom_logo();
			
			if ( is_front_page() && is_home() ) :
				?>
				
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ) ?></a>
				<?php
			else :
				?>
				
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a>
				<?php
			endif;
			$abc_blog_description = get_bloginfo( 'description', 'display' );
			if ( $abc_blog_description || is_customize_preview() ) :
				?>
				<p class="navbar-brand"><?php echo $abc_blog_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
			<!-- </div>.site-branding -->

		
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'abc-blog' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'navbar-nav',
					'container'      => 'ul',
					
					
					
				)
			);
			?>
		</div>
	</nav><!-- #site-navigation -->
	</header>#masthead



	<div id="preloader">
		<div class="jumper">
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>  
	<!-- ***** Preloader End ***** -->

	<!-- Header -->
	
<script>

$(".navbar-nav").attr("style","margin-left:480px;");
$(".navbar-nav li").attr("class","nav-item");
$(".navbar-nav li:first-child").attr("class","nav-item active");
$(".navbar-nav li:first-child").append("<span class='sr-only'>(current)</span>");
$(".navbar-nav li a").attr("class","nav-link");
$(".navbar-brand").append("<em>.</em>");
$(".navbar-brand").attr("style","color:black;");
$(".navbar-brand em").css("color","orange");
$(".navbar-brand em").css("border-radius","10px");

</script>