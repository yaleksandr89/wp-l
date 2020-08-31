<?php
// Register taxonomy "Type work" for custom type
$labels_taxonomy_location = [
	'name'              => 'Расположения',
	'singular_name'     => 'Расположение',
	'menu_name'         => 'Расположение'
];
$args_taxonomy_location   = [
	'labels'  => $labels_taxonomy_location,
	'public'  => false,
	'show_ui' => true
];

register_taxonomy( 'location-sliders', [ 'sliders' ], $args_taxonomy_location );