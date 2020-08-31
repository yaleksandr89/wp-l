<?php
$labels_reviews = [
	'name'               => 'Отзывы',
	'singular_name'      => 'Отзыв',
	'add_new'            => 'Добавить отзыв',
	'add_new_item'       => 'Добавление отзыв',
	'edit_item'          => 'Редактирование отзыва',
	'new_item'           => 'Новый отзыв',
	'view_item'          => 'Смотреть отзыв',
	'search_items'       => 'Искать отзыв',
	'not_found'          => 'Не найдено',
	'not_found_in_trash' => 'Не найдено в корзине',
	'parent_item_colon'  => '',
	'menu_name'          => 'Отзывы',
];
$args_reviews   = [
	'label'         => null,
	'labels'        => $labels_reviews,
	'public'        => false,
	'show_ui'       => true,
	'supports'      => [ 'title', 'editor', 'thumbnail' ],
	'menu_icon'     => 'dashicons-testimonial',
	'menu_position' => 40,
];
register_post_type( 'reviews', $args_reviews );