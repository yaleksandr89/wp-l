<?php
/**
 * @param int $count_slide - число выводимых записей
 */
add_filter( 'wplanding_get_sliders', static function ( $filer_taxonomies, $count_slide ) {
	$sliders = get_posts( [
		'order'       => 'ASC',
		'numberposts' => $count_slide ?: 3,
		'post_type'   => 'sliders'
	] );

	$filtering_sliders = array_filter( $sliders, static function ( $raw_sliders ) use ( $filer_taxonomies ) {

		$filter_sliders = wp_get_post_terms( $raw_sliders->ID, 'location-sliders' );

		foreach ( $filter_sliders as $item ) {
			if ( isset( $item ) && $filer_taxonomies === $item->name ) {
				return $raw_sliders;
			}

		}

		return null;
	} );

	$finish_sliders = array_map( static function ( $arr ) {
		return [
			'id'                          => $arr->ID,
			'title'                       => get_the_title( $arr ),
			'thumbnail'                   => get_the_post_thumbnail( $arr->ID, 'thumbnail', [
				'class' => '',
				'alt'   => get_the_title( $arr )
			] ),
			'filer_taxonomy'              => '',
			'slogan_1'                    => get_field( 'slogan_1', $arr ),
			'slogan_2'                    => get_field( 'slogan_2', $arr ),
			'opisanie_zelenoj_knopki'     => get_field( 'opisanie_zelenoj_knopki', $arr ),
			'ssylka_zelenoj_knopki'       => get_field( 'ssylka_zelenoj_knopki', $arr ),
			'opisanie_prozrachnoj_knopki' => get_field( 'opisanie_prozrachnoj_knopki', $arr ),
			'ssylka_prozrachnoj_knopki'   => get_field( 'ssylka_prozrachnoj_knopki', $arr )
		];
	}, $filtering_sliders );

	return array_values($finish_sliders);

}, 10, 2 );