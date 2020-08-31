<?php
/**
 * @param int $count_article - число выводимых записей
 */
add_filter( 'wplanding_get_blog_articles', static function ( $count_article ) {
	$articles = get_posts( [
		'numberposts' => $count_article ?: 3
	] );

	return array_map( static function ( $article ) {
		return [
			'id'        => $article->ID,
			'title'     => get_the_title( $article ),
			'content'   => get_the_content( '', '', $article ),
			'link'      => get_permalink( $article ),
			'thumbnail' => get_the_post_thumbnail( $article->ID, 'thumbnail', [
				'class' => 'blogItem__img',
				'alt'   => get_the_title()
			] ),
			'excerpt'   => get_field( 'preview_article', $article ),
			'author'    => get_the_author_meta( 'display_name', $article->post_author ),
			'date'      => get_date_from_gmt( get_the_time( 'Y-m-d H:i:s', $article ), 'j F Y' )
		];
	}, $articles );
} );