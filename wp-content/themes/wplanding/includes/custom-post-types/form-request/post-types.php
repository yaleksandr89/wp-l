<?php
$labels_form_request = [
	'name'               => 'Заявки',
	'singular_name'      => 'Заявка',
	'add_new'            => 'Добавить заявку',
	'add_new_item'       => 'Добавление заявки',
	'edit_item'          => 'Редактирование заявки',
	'new_item'           => 'Новая заявка',
	'view_item'          => 'Смотреть заявку',
	'search_items'       => 'Искать заявку',
	'not_found'          => 'Не найдено',
	'not_found_in_trash' => 'Не найдено в корзине',
	'parent_item_colon'  => '',
	'menu_name'          => 'Заявки',
];
$args_form_request   = [
	'label'         => null,
	'labels'        => $labels_form_request,
	'public'        => false,
	'show_ui'       => true,
	'supports'      => [ 'title'],
	'menu_icon'     => 'dashicons-format-status	',
	'menu_position' => 44,
];
register_post_type( 'form-request', $args_form_request );