<?php
/**
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

/*
|--------------------------------------------------------------------------
| Подключение необходимых файлов
|--------------------------------------------------------------------------
*/

include_once __DIR__ . '/includes/helpers/connect.php';
include_once __DIR__ . '/includes/functions-modules/constants.php';
include_once __DIR__ . '/includes/functions-modules/system.php';
include_once __DIR__ . '/includes/functions-modules/css-js.php';
include_once __DIR__ . '/includes/functions-modules/menu.php';
include_once __DIR__ . '/includes/functions-modules/get-articles.php';
include_once __DIR__ . '/includes/functions-modules/get-reviews.php';
include_once __DIR__ . '/includes/functions-modules/get-sliders.php';
include_once __DIR__ . '/includes/customizer/init.php';
include_once __DIR__ . '/includes/custom-post-types/init.php';

/*
|--------------------------------------------------------------------------
| Получение ID видеоролика (Youtube)
|--------------------------------------------------------------------------
*/
function wptest_get_id_video_youtube( string $name_acf_field ) {
	$youtube_acf = get_field( $name_acf_field );
	$id_video    = '';
	if ( filter_var( $youtube_acf, FILTER_VALIDATE_URL ) !== false ) {
		$get_url_query = parse_url( $youtube_acf );
		if ( strpos( $get_url_query['host'], 'youtube' ) ) {
			preg_match( "%^(?:https?://)?(?:www\.|m\.)?(?:youtu\.be/|youtube(?:-nocookie)?\.com(?:/watch\?v=|/watch/\?v=|/embed/|/v/|/\S+&v=))([\w-]{10}[048AEIMQUYcgkosw]{1})($|\S+).*$%x", $youtube_acf, $matches );
			$id_video = $matches[1];
		} else {
			$id_video = false;
		}

	} else {
		$id_video = trim( $youtube_acf );
	}

	return $id_video;
}