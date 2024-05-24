<?php
/**
 * Plugin Name:         GravityView - Dashboard Views
 * Plugin URI:          https://www.gravitykit.com/products/dashboard-views/
 * Description:         Display Views in the WordPress Dashboard.
 * Version:             2.0.0-beta.1
 * Author:              GravityKit
 * Author URI:          https://www.gravitykit.com
 * Text Domain:         gk-gravityview-dashboard-views
 * License:             GPLv2 or later
 * License URI:         https://www.gnu.org/licenses/gpl-2.0.en.html
 */

require_once __DIR__ . '/vendor/autoload.php';

define( 'GV_DASHBOARD_VIEWS_VERSION', '2.0.0-beta.1' );
define( 'GV_DASHBOARD_VIEWS_PLUGIN_FILE', __FILE__ );

add_action(
	'gravityview/loaded',
	function () {
		if ( ! class_exists( 'GravityKit\GravityView\Foundation\Core' ) ) {
			return;
		}

		GravityKit\GravityView\Foundation\Core::register( GV_DASHBOARD_VIEWS_PLUGIN_FILE );

		new GravityKit\GravityView\DashboardViews\Plugin();
	}
);
