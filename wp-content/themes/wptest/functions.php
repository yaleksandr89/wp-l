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

/*
|--------------------------------------------------------------------------
| Registers support for new theme features in WP
| url: https://wp-kama.ru/function/add_theme_support
|--------------------------------------------------------------------------
*/
add_action( 'after_setup_theme', static function () {
    // Thumbnail support
    add_theme_support( 'post-thumbnails' );
    // Allows change the <title> (wp_title())
    add_theme_support( 'title-tag' );
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
    add_theme_support( 'align-wide' );
    // Add support for responsive embeds.
    add_theme_support( 'responsive-embeds' );
} );