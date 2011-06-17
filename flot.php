<?php
/*
Plugin Name: Flot
Plugin URI: http://www.ramoonus.nl/wordpress/flot/
Description: Flot is a pure Javascript plotting library for jQuery. It produces graphical plots of arbitrary datasets on-the-fly client-side.
Version: 1.0.1
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
License: GPL2
*/
function rw_flot() {
		wp_deregister_script('flot'); // deregister
		wp_register_script('flot', plugins_url('/flot/jquery.flot.min.js', __FILE__), array("jquery", "jquery-ui-core", "excanvas" ), '0.7.0');
		wp_enqueue_script('flot'); // load
}
add_action('init', 'rw_flot');
?>