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
    // Add support navigation menu
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

add_filter('nav_menu_link_attributes', static function ($attributes, $item, $args, $depth) {
    if ($item->current) {
        $class = 'active';
        $attributes['class'] = isset($atts['class']) ? "{$atts['class']} $class" : $class;
    }
    return $attributes;
}, 10, 4);

/*
|--------------------------------------------------------------------------
| Add support widgets
| url: https://wp-kama.ru/function/register_sidebar
|--------------------------------------------------------------------------
*/
add_action('widgets_init', static function () {
    // Home page widgets
    register_sidebar([
        'name' => 'Боковая колонка для главной',
        'id' => 'sidebar_main_page',
        'description' => 'Выводится только на главной странице',
        'class' => '',
        'before_widget' => '<div class="aside-box">',
        'after_widget' => '</div>',
        'before_title' => '<div class="h2">',
        'after_title' => '</div>'
    ]);
    // Footer widgets
    register_sidebar([
        'name' => 'Подвал: левая колонка',
        'id' => 'sidebar_footer_left',
        'description' => 'Выводится в левой части Footer',
        'class' => '',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="widget_title">',
        'after_title' => '</div>'
    ]);
    register_sidebar([
        'name' => 'Подвал: правая колонка',
        'id' => 'sidebar_footer_right',
        'description' => 'Выводится в правой части Footer',
        'class' => '',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="widget_title">',
        'after_title' => '</div>'
    ]);
});

/*
|--------------------------------------------------------------------------
| Customize widgets (use PHP code)
| url: https://misha.blog/wordpress/php-in-widgets.html
|--------------------------------------------------------------------------
*/
add_filter('widget_text', static function ($widget_content) {
    if (strpos($widget_content, '<' . '?') !== false) {
        ob_start();
        eval('?' . '>' . $widget_content);
        $widget_content = ob_get_clean();
    }
    return $widget_content;
}, 99);


/*
|--------------------------------------------------------------------------
| Delete button: "Read more"
| url: https://pr-cy.ru/qa/question/26300
|--------------------------------------------------------------------------
*/
add_filter('the_content_more_link', '__return_empty_string');

/*
|--------------------------------------------------------------------------
| Customize pagination
| url: https://wp-kama.ru/function/the_posts_pagination
|--------------------------------------------------------------------------
*/
add_filter('navigation_markup_template', static function ($template, $class) {
    return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
}, 10, 2);