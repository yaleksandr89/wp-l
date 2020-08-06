<?php
/**
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

/*
|--------------------------------------------------------------------------
| Connect the necessary files
|--------------------------------------------------------------------------
*/
include_once __DIR__ . '/helpers/connect.php';
include_once __DIR__ . '/includes/system.php';
include_once __DIR__ . '/includes/constants.php';
include_once __DIR__ . '/includes/styles-scripts.php';

/*
|--------------------------------------------------------------------------
| Toggle Admin bar (on/off)
| url: https://wp-kama.ru/function/show_admin_bar (show_admin_bar())
|--------------------------------------------------------------------------
*/
//add_filter('show_admin_bar', '__return_false'); // turn off
//add_filter('show_admin_bar', '__return_true'); // turn on

/*
|--------------------------------------------------------------------------
| Registers support for new theme features in WP
| url: https://wp-kama.ru/function/add_theme_support
|--------------------------------------------------------------------------
*/
add_action('after_setup_theme', static function () {
    // Thumbnail support
    add_theme_support('post-thumbnails');
    // Allows change the <title> (wp_title())
    add_theme_support('title-tag');
    //  Switch default core markup [...] to output valid HTML5.
    add_theme_support(
        'html5',
        [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',
        ]
    );
    // Add support for full and wide align images.
    add_theme_support('align-wide');
    // Add support for responsive embeds.
    add_theme_support('responsive-embeds');
    register_nav_menu('header', 'Меню в шапке');
    register_nav_menu('footer', 'Меню в подвале');
});

/*
|--------------------------------------------------------------------------
| Customize CLASS and ID for the items menu (<li>,<a>)
| url1: https://wp-kama.ru/function/wp_nav_menu
| url2: https://wp-kama.ru/hook/nav_menu_item_id
| url3: https://wp-kama.ru/hook/nav_menu_css_class
| url4: https://wp-kama.ru/note/dobavlyaet-atribut-class-aktivnoj-ssylke
|--------------------------------------------------------------------------
*/
add_filter('nav_menu_css_class', static function ($menu_class, $item, $args, $depth) {
    return $args->theme_location === 'header' ? [] : $menu_class;
}, 10, 4);

add_filter('nav_menu_item_id', static function ($menu_id, $item, $args, $depth) {
    return $args->theme_location === 'header' ? '' : $menu_id;
}, 10, 4);

add_filter( 'nav_menu_link_attributes', static function($attributes, $item, $args, $depth){
    if ( $item->current ) {
        $class = 'active';
        $attributes['class'] = isset( $atts['class'] ) ? "{$atts['class']} $class" : $class;
    }
    return $attributes;
}, 10, 4 );
