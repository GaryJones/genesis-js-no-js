<?php
/**
 * Genesis JS / No JS WordPress plugin
 *
 * For child themes of the Genesis Framework.
 *
 * Adds a no-js body class to the front end, and a script on genesis_before
 * which immediately changes the class to js if JavaScript is enabled. This is
 * how WP does things on the back end, to allow different styles for the same
 * elements depending if JavaScript is active or not.
 *
 * This file should only use syntax available in PHP 5.2.4 or later.
 *
 * @package   Gamajo\GenesisJsNoJs
 * @author    Gary Jones
 * @copyright 2011 Gary Jones, Gamajo
 * @license   GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name:       Genesis JS / No JS
 * Plugin URI:        https://github.com/GaryJones/genesis-js-no-js
 * Description:       For child themes of the <a href="http://genesis-theme-framework.com/">Genesis Framework</a>. Adds a <code>no-js</code> body class to the front end, and a script on <code>genesis_before</code> which immediately changes the class to <code>js</code> if JavaScript is enabled. This is how WP does things on the back end, to allow differing styles for elements if JavaScript is active or not.
 * Version:           3.0.1
 * Author:            Gary Jones
 * Author URI:        https://gamajo.com
 * Text Domain:       genesis-js-no-js
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: https://github.com/GaryJones/genesis-js-no-js
 * GitHub Branch:     master
 * Requires PHP:      7.1
 * Requires WP:       4.6
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( version_compare( PHP_VERSION, '7.1', '<' ) ) {
	if ( current_user_can( 'activate_plugins' ) ) {
		add_action( 'admin_init', 'genesis_js_no_js_deactivate' );
		add_action( 'admin_notices', 'genesis_js_no_js_deactivation_notice' );

		/**
		 * Deactivate the plugin.
		 */
		function genesis_js_no_js_deactivate() {
			deactivate_plugins( plugin_basename( __FILE__ ) );
		}

		/**
		 * Show deactivation admin notice.
		 */
		function genesis_js_no_js_deactivation_notice() {
			$notice = sprintf(
				// Translators: 1: Required PHP version, 2: Current PHP version.
				'<strong>Plugin name</strong> requires PHP %1$s to run. This site uses %2$s, so the plugin has been <strong>deactivated</strong>.',
				'7.1',
				PHP_VERSION
			);
			?>
			<div class="updated"><p><?php echo wp_kses_post( $notice ); ?></p></div>
			<?php
			if ( isset( $_GET['activate'] ) ) { // WPCS: input var okay, CSRF okay.
				unset( $_GET['activate'] ); // WPCS: input var okay.
			}
		}
	}

	return false;
}

/**
 * Load plugin initialisation file.
 */
require plugin_dir_path( __FILE__ ) . '/init.php';
