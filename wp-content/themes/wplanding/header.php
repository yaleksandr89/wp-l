<?php
/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up until <div class="wrapper">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header">
    <div class="wrapper">
        <div class="headerBox">
            <div class="headerLeft">
                <img src=<?= WPLANDING_DIR_iMAGES ?>logo.png" alt="logo" class="headerLeft__logo">
                <div class="headerLeft__logoName1">wegy</div>
                <div class="headerLeft__logoName2">joomla theme</div>
            </div>
            <div class="headerRight">
				<?php
				wp_nav_menu( [
					'theme_location'  => 'landing-nav',
					'menu'            => 'Навигационное меню',
					'container'       => 'nav',
					'container_class' => 'navMenu',
					'items_wrap'      => '<div class="navMenu__hide">Menu</div><ul class="navMenu__block">%3$s
                                            <li class="navMenu__list navMenu__list--search">
                                                <form action="#" method="get" class="navMenu__form">
                    								<input class="navMenu__formInput" type="text" placeholder="what are we looking for?" name="s" value="">
					                    		</form><i class="fa fa-search" aria-hidden="true"></i>
						                    </li></ul>',
				] );
				?>
            </div>
        </div>
    </div>
</header>