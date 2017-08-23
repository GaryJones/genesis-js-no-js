<?php
/**
 * Genesis JS No Js
 *
 * @package   Gamajo\GenesisJsNoJs
 * @author    Gary Jones
 * @copyright 2011 Gary Jones, Gamajo Tech
 * @license   GPL-2.0+
 */

/**
 * Plugin class.
 *
 * @package GenesisJsNoJs
 * @author  Gary Jones
 */
class Genesis_Js_No_Js {

	/**
	 * Add action and filter.
	 *
	 * @since 1.0.0
	 */
	public function run() {
		add_action( 'plugins_loaded', array( $this, 'load_textdomain' ) );
		add_filter( 'body_class', array( $this, 'body_class' ) );
		add_action( 'genesis_before', array( $this, 'script' ), 1 );
	}

	/**
	 * Load plugin text domain.
	 *
	 * @since 2.1.0
	 */
	public function load_textdomain() {
		load_plugin_textdomain( 'genesis-js-no-js' );
	}

	/**
	 * Add 'no-js' class to the body class values.
	 *
	 * @since 1.0.0
	 *
	 * @param array $classes Existing classes.
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
var c = document.body.classList;
c.remove( 'no-js' );
c.add( 'js' );
})();
//]]>
</script>
		<?php
	}
}
