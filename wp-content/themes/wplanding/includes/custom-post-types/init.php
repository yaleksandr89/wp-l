<?php

/**
 * @url https://wp-kama.ru/function/register_post_type
 * @url https://wp-kama.ru/function/register_taxonomy
 */

// Пользовательский тип записи: "Портфолио"
function wptest_init_portfolio() {
	include 'reviews/post-types.php';
}

/**
 * Регистрация пользовательских типов записи
 * @url1: https://wp-kama.ru/function/register_post_type
 * @url2: https://wp-kama.ru/function/register_taxonomy
 * @url3: https://wp-kama.ru/id_7648/zanyatye-peremennyh-zaprosa.html
 */
add_action( 'init', 'wptest_init_portfolio' );