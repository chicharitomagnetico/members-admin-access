<?php
/**
 * Some basic configuration for the plugin.
 *
 * @package   MembersAdminAccess
 * @author    Justin Tadlock <justin@justintadlock.com>
 * @copyright Copyright (c) 2018, Justin Tadlock
 * @link      http://themehybrid.com/plugins/members-admin-access
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

return [

	/*
	|--------------------------------------------------------------------------
	| App Directory
	|--------------------------------------------------------------------------
	|
	| This is the location of the plugin's directory path.  Use it for loading
	| files and other needs.
	|
	*/

	'dir' => trailingslashit( plugin_dir_path( __FILE__ ) ) . '../',

	/*
	|--------------------------------------------------------------------------
	| App Namespace
	|--------------------------------------------------------------------------
	|
	| This is a namespace for things like filter hooks used in WordPress.  Not
	| to be confused with the PHP namespace.
	|
	*/

	'namespace' => 'members/addons/admin_access'
];
