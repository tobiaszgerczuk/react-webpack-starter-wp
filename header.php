<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?></title>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
	<div class="container">
		<div class="site-header__logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php if ( has_custom_logo() ) {
					the_custom_logo();
				} else { ?>
					<h1><?php bloginfo( 'name' ); ?></h1>
				<?php } ?>
			</a>
		</div>

		<nav class="site-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'container' => false,
				'menu_class' => 'menu'
			) );
			?>
		</nav>
	</div>
</header>
