<?php  
// header.php
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset') ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>
			<?php wp_title('|', true, 'right') ?>
		</title>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
		<link rel="stylesheet" href="https://use.typekit.net/ses5ubg.css">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> >

	<?php wp_body_open() ?>

	<header>
		<h1>
			<a href="<?php echo site_url(); ?>">
				<?php echo home_url() ?>
				<?php bloginfo('name') ?>
			</a>
		</h1>
		<nav>
			<?php wp_nav_menu(array('theme_location'=> 'primary', 'menu_class' => 'nav-menu' )) ?>
		</nav>
	</header>
