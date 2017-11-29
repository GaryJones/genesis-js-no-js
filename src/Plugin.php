<?php
/**
 * Genesis JS No Js plugin class
 *
 * @package   Gamajo\GenesisJsNoJs
 * @author    Gary Jones
 * @copyright 2017 Gary Jones, Gamajo
 * @license   GPL-2.0+
 */

declare( strict_types = 1 );

namespace Gamajo\GenesisJsNoJs;

/**
 * Plugin class.
 *
 * @package Gamajo\GenesisJsNoJs
 * @author  Gary Jones
 */
class Plugin {

	/**
	 * Add action and filter.
	 *
	 * @since 1.0.0
	 */
	public function register() {
		\add_action( 'plugins_loaded', [ $this, 'load_textdomain' ] );
	}

	/**
	 * Load the plugin text domain.
	 *
	 * @since 3.2.0
	 */
	public function load_textdomain() {
		$text_domain   = 'genesis-js-no-js';
		$languages_dir = 'languages';

		\load_plugin_textdomain( $text_domain, false, $text_domain . '/' . $languages_dir );
	}
}
