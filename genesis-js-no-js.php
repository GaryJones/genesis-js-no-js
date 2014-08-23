<?php
/**
 * Genesis js / no-js WordPress plugin.
 *
 * For child themes of the Genesis Theme.
 * Adds a no-js body class to the front-end, and a script on genesis_before
 * which immediately changes the class to js if JavaScript is enabled. This is
 * how WP does things on the back-end, to allow different styles for the same
 * elements depending if JavaScript is active or not.
 *
 * @package GenesisJsNoJs
 * @author Gary Jones
 * @license GPL3
 *
 * Plugin Name: Genesis js / no-js
 * Plugin URI: http://code.garyjones.co.uk/plugins/genesis-js-no-js/
 * Description: For child themes of the <a href="http://genesis-theme-framework.com/">Genesis Theme</a>. Adds a <code>no-js</code> body class to the front-end, and a script on <code>genesis_before</code> which immediately changes the class to <code>js</code> if JavaScript is enabled. This is how WP does things on the back-end, to allow differing styles for elements if JavaScript is active or not.
 * Version: 1.0.1
 * Author: Gary Jones
 * Author URI: http://garyjones.co.uk/
 * License: GPL3
 */


/**
 * Plugin class for Genesis js / no-js
 *
 * @package GenesisJsNoJs
 */
class Genesis_Js_No_Js {

	/**
	 * Holds copy of instance, so other plugins can remove our hooks.
	 *
	 * @since 1.0.0
	 * @link http://core.trac.wordpress.org/attachment/ticket/16149/query-standard-format-posts.php
	 * @link http://twitter.com/#!/markjaquith/status/66862769030438912
	 *
	 * @var Genesis_Js_No_Js
	 */
	static $instance;

	/**
	 * Constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		self::$instance = $this;
		add_action( 'init', array( &$this, 'init' ) );
	}

	/**
	 * Add action and filter.
	 *
	 * @since 1.0.0
	 */
	public function init() {
		add_filter( 'body_class', array( $this, 'body_class' ) );
		add_action( 'genesis_before', array( $this, 'script' ), 1 );
	}

	/**
	 * Add 'no-js' class to the body class values.
	 *
	 * @since 1.0.0
	 *
	 * @param array $classes Existing classes
	 * @return array
	 */
	public function body_class( $classes ) {
		$classes[] = 'no-js';
		return $classes;
	}

	/**
	 * Echo out the script that changes 'no-js' class to 'js'.
	 *
	 * @since 1.0.0
	 */
	public function script() {
		?>
<script type="text/javascript">
//<![CDATA[
(function(){
var c = document.body.className;
c = c.replace(/no-js/, 'js');
document.body.className = c;
})();
//]]>
</script>
		<?php
	}

}

new Genesis_Js_No_Js;