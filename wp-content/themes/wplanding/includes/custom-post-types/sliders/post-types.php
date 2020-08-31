<?php
$labels_slider = [
	'name'               => 'Слайдеры',
	'singular_name'      => 'Слайдер',
	'add_new'            => 'Добавить слайдер',
	'add_new_item'       => 'Добавление слайдера',
	'edit_item'          => 'Редактирование слайдера',
	'new_item'           => 'Новый слайдер',
	'view_item'          => 'Смотреть слайдер',
	'search_items'       => 'Искать слайдер',
	'not_found'          => 'Не найдено',
	'not_found_in_trash' => 'Не найдено в корзине',
	'parent_item_colon'  => '',
	'menu_name'          => 'Слайдеры',
];
$args_slider   = [
	'label'         => null,
	'labels'        => $labels_slider,
	'public'        => false,
	'show_ui'       => true,
	'supports'      => [ 'title', 'editor', 'thumbnail' ],
	'menu_icon'     => 'dashicons-format-gallery',
	'menu_position' => 41,
];
register_post_type( 'sliders', $args_slider );