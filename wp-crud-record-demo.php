<?php

/*
Plugin Name: wp-crud-record-demo
Plugin URI: http://github.com/limikael/wp-crud-record-demo
GitHub Plugin URI: hhttps://github.com/limikael/wp-crud-record-demo
Description: A demo that shows how to use WpCrud and WpRecord together to create a database app in WordPress
Version: 0.0.1
*/

require_once __DIR__."/model/Apartment.php";
require_once __DIR__."/controller/ApartmentController.php";

/**
 * Activation hook.
 */
function cr_activate() {
	Apartment::install();
}

/**
 * Uninstall.
 */
function cr_uninstall() {
	Apartment::uninstall();
}

register_activation_hook(__FILE__,'cr_activate');
register_uninstall_hook(__FILE__,'cr_uninstall');

ApartmentController::setup();