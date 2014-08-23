<?php
/**
 * Genesis Header Nav
 *
 * @package   GenesisJsNoJs
 * @author    Gary Jones
 * @link      https://github.com/GaryJones/genesis-header-nav
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
