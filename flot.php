<?php
/*
Plugin Name: Flot
Plugin URI: http://www.ramoonus.nl/wordpress/flot/
Description: Flot is a pure Javascript plotting library for jQuery. It produces graphical plots of arbitrary datasets on-the-fly client-side.
Version: 1.0.2
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
License: GPL2
*/
function rw_flot() {
	wp_enqueue_script('jquery-colorhelpers', plugins_url('/js/jquery.colorhelpers.js', __FILE__), array(), '1.0');

	wp_deregister_script('flot'); // deregister
	wp_enqueue_script('flot', plugins_url('/js/jquery.flot.min.js', __FILE__), array("jquery", "jquery-ui-core", "excanvas", "jquery-colorhelpers" ), '0.8.3');

	wp_enqueue_script('flot-canvas', plugins_url('/js/jquery.flot.canvas.js', __FILE__), array("flot"), '0.8.3');
	wp_enqueue_script('flot-categories', plugins_url('/js/jquery.flot.categories.js', __FILE__), array("flot"), '0.8.3');
	wp_enqueue_script('flot-crosshair', plugins_url('/js/jquery.flot.crosshair.js', __FILE__), array("flot"), '0.8.3');
	wp_enqueue_script('flot-errorbars', plugins_url('/js/jquery.flot.errorbars.js', __FILE__), array("flot"), '0.8.3');
	wp_enqueue_script('flot-fillbetween', plugins_url('/js/jquery.flot.fillbetween.js', __FILE__), array("flot"), '0.8.3');
	wp_enqueue_script('flot-image', plugins_url('/js/jquery.flot.image.js', __FILE__), array("flot"), '0.8.3');
	wp_enqueue_script('flot-navigate', plugins_url('/js/jquery.flot.navigate.js', __FILE__), array("flot"), '0.8.3');
	wp_enqueue_script('flot-pie', plugins_url('/js/jquery.flot.pie.js', __FILE__), array("flot"), '0.8.3');
	wp_enqueue_script('flot-resize', plugins_url('/js/jquery.flot.resize.js', __FILE__), array("flot"), '0.8.3');
	wp_enqueue_script('flot-selection', plugins_url('/js/jquery.flot.selection.js', __FILE__), array("flot"), '0.8.3');
	wp_enqueue_script('flot-stack', plugins_url('/js/jquery.flot.stack.js', __FILE__), array("flot"), '0.8.3');
	wp_enqueue_script('flot-symbol', plugins_url('/js/jquery.flot.symbol.js', __FILE__), array("flot"), '0.8.3');
	wp_enqueue_script('flot-threshold', plugins_url('/js/jquery.flot.threshold.js', __FILE__), array("flot"), '0.8.3');
	wp_enqueue_script('flot-time', plugins_url('/js/jquery.flot.time.js', __FILE__), array("flot"), '0.8.3');
}
add_action('init', 'rw_flot');
?>