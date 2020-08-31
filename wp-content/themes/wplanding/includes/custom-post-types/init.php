<?php

/**
 * @url https://wp-kama.ru/function/register_post_type
 * @url https://wp-kama.ru/function/register_taxonomy
 */

// Пользовательский тип записи: "Портфолио"
function wptest_init_reviews() {
	include 'reviews/post-types.php';
}

function wptest_init_sliders() {
	include 'sliders/post-types.php';
	include 'sliders/taxonomies.php';
}

/**
 * Регистрация пользовательских типов записи
 * @url1: https://wp-kama.ru/function/register_post_type
 * @url2: https://wp-kama.ru/function/register_taxonomy
 * @url3: https://wp-kama.ru/id_7648/zanyatye-peremennyh-zaprosa.html
 */
add_action( 'init', 'wptest_init_reviews' );
add_action( 'init', 'wptest_init_sliders' );

/**
 * Добавление колонок к пользовательским типам данным
 * @url https://wp-kama.ru/id_995/dopolnitelnyie-sortiruemyie-kolonki-u-postov-v-adminke.html
 */

// Для слайдеров
add_filter( 'manage_' . 'sliders' . '_posts_columns', static function ( $columns ) {
	$num = 2;

	$new_columns = array(
		'views' => 'Расположение сладера',
	);

	return array_slice( $columns, 0, $num ) + $new_columns + array_slice( $columns, $num );
}, 4 );

add_action( 'manage_' . 'sliders' . '_posts_custom_column', static function ( $colname, $post_id ) {
	if ( $colname === 'views' ) {
		$terms = get_the_terms( $post_id, 'location-sliders' );
		if ( $terms ) {
			foreach ( $terms as $term ) {
				echo '<strong>' . $term->name . '</strong>';
			}
		} else {
			echo '<strong style="color: red">Расположение не указано</strong>';
		}
	}
}, 5, 2 );