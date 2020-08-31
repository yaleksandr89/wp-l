<?php
/**
 * @param int $count_features - число выводимых записей
 */
add_filter( 'wplanding_get_blog_features', static function ( $count_features ) {
	$features = get_posts( [
		'numberposts' => $count_features ?: 3,
		'post_type'   => 'features',
		'order'       => 'ASC'
	] );

	return array_map( static function ( $feature ) {
		return [
			'id'        => $feature->ID,
			'title'     => get_the_title( $feature ),
			'link'      => get_permalink( $feature ),
			'thumbnail_url' => get_field( 'features_thumbnail', $feature ),
			'excerpt'   => get_the_excerpt( $feature ),
		];
	}, $features );
} );