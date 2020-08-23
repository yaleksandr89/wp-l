<?php
$labels_portfolio = [
	'name'               => 'Портфолио', // основное название для типа записи
	'singular_name'      => 'Выполненный проект', // название для одной записи этого типа
	'add_new'            => 'Добавить проект', // для добавления новой записи
	'add_new_item'       => 'Добавление проекта', // заголовка у вновь создаваемой записи в админ-панели.
	'edit_item'          => 'Редактирование проекта', // для редактирования типа записи
	'new_item'           => 'Новый проект', // текст новой записи
	'view_item'          => 'Смотреть проект', // для просмотра записи этого типа.
	'search_items'       => 'Искать проект', // для поиска по этим типам записи
	'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
	'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
	'parent_item_colon'  => '', // для родителей (у древовидных типов)
	'menu_name'          => 'Портфолио', // название меню
];
$args_portfolio   = [
	'label'         => null,
	'labels'        => $labels_portfolio,
	'public'        => true,
	'supports'      => [ 'title', 'editor', 'thumbnail' ],
	// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
	'has_archive'   => true,
	'menu_icon'     => 'dashicons-awards',
	'menu_position' => 40,
	'taxonomies' => [
		'type-work',
		'clients'
	]

];
register_post_type( 'portfolio', $args_portfolio );