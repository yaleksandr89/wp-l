<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div class="wrapper">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="wrapper">
    <header>
        <div class="header-top">
            <div class="header-logo">
                <div class="title"><?php bloginfo( 'name' ); ?></div>
            </div>
			<?php
			wp_nav_menu( [
				'theme_location'  => 'header',
				'menu'            => 'Меню в Header',
				'container'       => 'nav',
				'container_class' => 'header-menu',
				'items_wrap'      => '<div class="header-menu-button">Menu</div><ul class="header-menu-list">%3$s</ul>',
			] );
			?>
        </div>
		<?php if ( is_front_page() || is_category() || is_tag() ): ?>
            <div class="header-bottom">
	            <?= get_theme_mod( 'header_txt_bottom' ) ?>
            </div>
		<?php endif; ?>
    </header>