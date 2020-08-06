<?php
/**
 * Helper d(), dd(), dump() functions
 *
 * @package WordPress
 * @subpackage [YA] Personal WP theme
 * @since 1.0
 * @version 1.0
 */

require_once __DIR__ . '/vendor/autoload.php';
/**
 * Dump variables.
 */
if ( ! function_exists('d') ) {

    function d() {
        dump( ...func_get_args() );
    }

}

/**
 * Dump variables and die.
 */
if ( ! function_exists('dd') ) {

    function dd() {
        dump( ...func_get_args() );
        die();
    }

}