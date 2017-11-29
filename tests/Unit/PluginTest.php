<?php
/**
 * Unit tests for Plugin
 *
 * @package      Gamajo\GenesisJsNoJs\Tests\Unit
 * @author       Gary Jones
 * @copyright    2017 Gamajo
 * @license      GPL-2.0+
 */

declare( strict_types = 1 );

namespace Gamajo\GenesisJsNoJs\Tests\Unit;

use Brain\Monkey\Functions;
use Gamajo\GenesisJsNoJs\Plugin as Testee;
use Gamajo\GenesisJsNoJs\Tests\TestCase;

/**
 * Foo test case.
 */
class PluginTest extends TestCase {
	/**
	 * The method inside the Plugin class which calls `load_plugin_textdomain()`.
	 *
	 * @var string
	 */
	private $load_textdomain_callback;

	/**
	 * Prepares the test environment before each test.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	protected function setUp(): void {
		$this->load_textdomain_callback = 'load_textdomain';

		parent::setUp();
	}

	/**
	 * Test that method that calls load_plugin_textdomain is hooked in to to the correct hook.
	 */
	public function test_load_plugin_textdomain_method_is_hooked_in_correctly() {
		// Create an instance of the class under test.
		$plugin = new Testee();
		$plugin->register();

		// Check the plugin method that loads the text domain is hooked into the right filter.
		static::assertNotFalse( has_action( 'plugins_loaded', [ $plugin, $this->load_textdomain_callback ] ), 'Loading textdomain is not hooked in correctly.' );
	}

	/**
	 * Test that load_plugin_textdomain() is called with the correct configurable arguments.
	 */
	public function test_load_plugin_textdomain_called_with_correct_args() {
		Functions\expect( 'load_plugin_textdomain' )
			->once()
			->with( 'genesis-js-no-js', false, 'genesis-js-no-js/languages' );

		// Create an instance of the class under test.
		$plugin = new Testee();
		$plugin->{$this->load_textdomain_callback}();
	}
}
