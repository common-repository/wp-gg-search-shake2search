<?php
/*
Plugin Name: WP GG Search Shake2Search
Plugin URI: http://wordpress.org/plugins/wp-gg-search-shake2search/
Description: This Plugin extends your GG Search Engine. It allows to open the search box by shaking your tablet.
Author: Matthias Günter
Version: 1.0
Author URI: http://matthias-web.de
Licence: GPLv2
*/

add_action( 'gg_search_enqueue', 'gg_search_enqueue_shake2search' );
function gg_search_enqueue_shake2search($hook) {
    wp_enqueue_script('jquery');
	wp_enqueue_script('deviceshake', plugins_url( 'deviceshake.js', __FILE__ ), array("jquery"));
}
?>