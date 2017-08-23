<?php
/**
 * Genesis js / no-js WordPress plugin
 *
 * For child themes of the Genesis Framework.
 *
 * Adds a no-js body class to the front-end, and a script on genesis_before
 * which immediately changes the class to js if JavaScript is enabled. This is
 * how WP does things on the back-end, to allow different styles for the same
 * elements depending if JavaScript is active or not.
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
 * Version:           2.1.0
 * Author:            Gary Jones
 * Author URI:        https://gamajo.com
 * Text Domain:       genesis-js-no-js
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: https://github.com/GaryJones/genesis-js-no-js
 * GitHub Branch:     master
 */

if ( version_compare( PHP_VERSION, '7.1', '<' ) ) {
	return false;
}

/**
 * Load include files.
 */
require __DIR__ . '/src/GenesisJsNoJs.php';

$genesis_js_no_js = new Gamajo\GenesisJsNoJs\GenesisJsNoJs();
$genesis_js_no_js->run();
