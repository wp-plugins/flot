<?php
/*
Plugin Name: Flot
Plugin URI: http://www.ramoonus.nl/wordpress/flot/
Description: Flot is a pure Javascript plotting library for jQuery. It produces graphical plots of arbitrary datasets on-the-fly client-side.
Version: 1.0.0
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
License: GPL2
*/

// Install Excanvas
function rw_excanvas() {
	echo '<!--[if lte IE 8]>'; // if below IE8
	echo '<script type="text/javascript" src="'; 
	echo plugins_url();
	echo '/js/excanvas.min.js"></script>'; // load JS
	echo '<![endif]-->';  //endif
}
add_action('wp_head', 'rw_excanvas');


// Flot itself
function rw_flot() {
		wp_enqueue_script('jquery'); // load
		//wp_enqueue_script('jquery-ui'); // load
	
		wp_deregister_script('flot'); // deregister
		wp_register_script('flot', plugins_url('/js/jquery.flot.min.js', __FILE__), false, '0.7.0');
		wp_enqueue_script('flot'); // load
}
add_action('init', 'rw_flot');

// Flot plugins
function rw_flot_plugins() {
	// empty 
}
add_action('init', 'rw_flot_plugins');
?>