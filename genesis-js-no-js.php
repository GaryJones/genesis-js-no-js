<?php
/**
 * Genesis js / no-js WordPress plugin.
 *
 * For child themes of the Genesis Framework.
 * 
 * Adds a no-js body class to the front-end, and a script on genesis_before
 * which immediately changes the class to js if JavaScript is enabled. This is
 * how WP does things on the back-end, to allow different styles for the same
 * elements depending if JavaScript is active or not.
 *
 * @package   GenesisJsNoJs
 * @author    Gary Jones
 * @link      https://github.com/GaryJones/genesis-js-no-js
 * @copyright 2011 Gary Jones, Gamajo Tech
 * @license   GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name:       Genesis js / no-js
 * Plugin URI:        https://github.com/GaryJones/genesis-js-no-js
 * Description:       For child themes of the <a href="http://genesis-theme-framework.com/">Genesis Framework</a>. Adds a <code>no-js</code> body class to the front-end, and a script on <code>genesis_before</code> which immediately changes the class to <code>js</code> if JavaScript is enabled. This is how WP does things on the back-end, to allow differing styles for elements if JavaScript is active or not.
 * Version:           2.0.0
 * Author:            Gary Jones
 * Author URI:        http://gamajo.com/
 * Text Domain:       genesis-js-no-js
 * Domain Path:       /languages
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: https://github.com/GaryJones/genesis-js-no-js
 * GitHub Branch:     master
 */

require plugin_dir_path( __FILE__ ) . 'includes/class-genesis-js-no-js.php';

$genesis_js_no_js = new Genesis_Js_No_Js;
$genesis_js_no_js->run();
