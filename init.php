<?php
/**
 * Initialise the plugin
 *
 * This file can use syntax from the required level of PHP or later.
 *
 * @package   Gamajo\GenesisJsNoJs
 * @author    Gary Jones
 * @copyright 2011 Gary Jones, Gamajo
 * @license   GPL-2.0+
 */

declare( strict_types = 1 );

namespace Gamajo\GenesisJsNoJs;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Load src files.
 */
require __DIR__ . '/src/Plugin.php';
require __DIR__ . '/src/GenesisJsNoJs.php';

$GLOBALS['genesis_js_no_js'] = new Plugin();
$GLOBALS['genesis_js_no_js']->register();

$GLOBALS['genesis_js_no_js_front_end'] = new FrontEnd();
$GLOBALS['genesis_js_no_js_front_end']->register();

