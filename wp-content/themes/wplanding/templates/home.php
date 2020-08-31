<?php
/*
 *	Template Name: Для главной страницы
 *  Template Post Type: page, post
 */

get_header();

get_template_part( 'templates/front-page-parts/section', 'top-slider' ); // Верхний слайдер
get_template_part( 'templates/front-page-parts/section', 'represent' ); // Блок "Представление"
get_template_part( 'templates/front-page-parts/section', 'features' ); // Блок "Особенности"
get_template_part( 'templates/front-page-parts/section', 'discover' ); // Блок "Открытие"
get_template_part( 'templates/front-page-parts/section', 'advantages' ); // Блок "Преимущества"
get_template_part( 'templates/front-page-parts/section', 'blog' ); // Блок "Блог>"
get_template_part( 'templates/front-page-parts/section', 'stats' ); // Блок "Статистика>"
get_template_part( 'templates/front-page-parts/section', 'packages' ); // Блок "Тарифы>"
get_template_part( 'templates/front-page-parts/section', 'reviews' ); // Блок "Отзывы>"

get_footer();