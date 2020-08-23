<?php
// Register taxonomy "Type work" for custom type
$labels_taxonomy_work_type   = [
	'name'              => 'Тип работ',
	'singular_name'     => 'Тип работы',
	'search_items'      => 'Искать тип работы',
	'all_items'         => 'Все типы работ',
	'view_item '        => 'Смотреть тип работы',
	'parent_item'       => 'Родительский тип работ',
	'parent_item_colon' => 'Родительский тип работ:',
	'edit_item'         => 'Редактировать тип работы',
	'update_item'       => 'Обновить тип работы',
	'add_new_item'      => 'Добавить тип работы',
	'new_item_name'     => 'Новое имя типа работ',
	'menu_name'         => 'Тип работы'
];
$args_taxonomy_work_type = [
	'labels'  => $labels_taxonomy_work_type,
	'public'  => true,
];

// Register taxonomy "Clients" for custom type
$labels_taxonomy_clients = [
	'name'              => 'Клиенты',
	'singular_name'     => 'Клиент',
	'search_items'      => 'Искать клиента',
	'all_items'         => 'Все клиенты',
	'view_item '        => 'Смотреть клиента',
	'parent_item'       => 'Родительский клиент',
	'parent_item_colon' => 'Родительский клиент:',
	'edit_item'         => 'Редактировать клиента',
	'update_item'       => 'Обновить клиента',
	'add_new_item'      => 'Добавить клиента',
	'new_item_name'     => 'Новое имя клиента',
	'menu_name'         => 'Клиенты'
];
$args_taxonomy_clients   = [
	'labels'  => $labels_taxonomy_clients,
	'public'  => true
];
register_taxonomy( 'type-work', [ 'portfolio' ], $args_taxonomy_work_type );
register_taxonomy( 'clients', [ 'portfolio' ], $args_taxonomy_clients );