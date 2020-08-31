<?php
/**
 * @param int $count_reviews - число выводимых записей
 */
add_filter( 'wplanding_get_reviews', static function ( $count_reviews ) {
	$articles = get_posts( [
		'numberposts' => $count_reviews ?: 3,
		'post_type'   => 'reviews'
	] );

	return array_map( static function ( $review ) {
		return [
			'id'        => $review->ID,
			'title'     => get_the_title( $review ),
			'content'   => get_the_content( '', '', $review ),
			'thumbnail' => get_the_post_thumbnail( $review->ID, 'thumbnail', [
				'class' => 'sliderBot__photo',
				'alt'   => get_the_title($review)
			] ),
			'client'    => get_field( 'review_name_client', $review ),
			'type_work' => get_field( 'review_name_type_work', $review ),
		];
	}, $articles );
} );