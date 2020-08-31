<?php
$labels_features = [
	'name'               => 'Особенности',
	'singular_name'      => 'Особенность',
	'add_new'            => 'Добавить особеность',
	'add_new_item'       => 'Добавление особености',
	'edit_item'          => 'Редактирование особености',
	'new_item'           => 'Новая особеность',
	'view_item'          => 'Смотреть особеность',
	'search_items'       => 'Искать особеность',
	'not_found'          => 'Не найдено',
	'not_found_in_trash' => 'Не найдено в корзине',
	'parent_item_colon'  => '',
	'menu_name'          => 'Особенности',
];
$args_features   = [
	'label'         => null,
	'labels'        => $labels_features,
	'public'        => true,
	'supports'      => [ 'title', 'editor', 'excerpt' ],
	'has_archive'   => true,
	'menu_icon'     => 'dashicons-dashboard',
	'menu_position' => 42,
	'rewrite'       => [
		'with_front' => false
	]
];
register_post_type( 'features', $args_features );