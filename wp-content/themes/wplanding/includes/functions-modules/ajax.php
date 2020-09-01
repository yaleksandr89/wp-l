<?php

// Форма на главной страницы (Блок: "Тарифы")
if ( wp_doing_ajax() ) {
	add_action( 'wp_ajax_nopriv_request_form', 'wplanding_request_form' );
	add_action( 'wp_ajax_request_form', 'wplanding_request_form' );
}

function wplanding_request_form() {
	$response = [ 'result' => false, 'error' => '' ];

	$name  = trim( $_POST['name'] );
	$phone = trim( $_POST['phone'] );

	if ( $name === '' || $phone === '' ) {
		$response['error'] = 'Заполните все поля!';
	} else if ( mb_strlen( $name, 'UTF8' ) < 2 ) {
		$response['error'] = 'Имя не короче 2 символов!';
	} else if ( mb_strlen( $phone, 'UTF8' ) < 7 ) {
		$response['error'] = 'Телефон не короче 7 символов!';
	} else {
		$post_data = array(
			'post_title' => wp_strip_all_tags( "$name - $phone" ),
			'post_type'  => 'form-request'
		);

		$post_id = wp_insert_post( $post_data, true );

		if ( is_wp_error( $post_id ) ) {
			$response['error'] = $post_id->get_error_message();
		} else {
			$response['result'] = true;
		}
	}

	echo json_encode( $response );
	wp_die();
}