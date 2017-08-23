<?php
/**
 * Genesis JS No Js
 *
 * @package   Gamajo\GenesisJsNoJs
 * @author    Gary Jones
 * @copyright 2011 Gary Jones, Gamajo
 * @license   GPL-2.0+
 */

declare( strict_types = 1 );

namespace Gamajo\GenesisJsNoJs;

/**
 * Plugin class.
 *
 * @package GenesisJsNoJs
 * @author  Gary Jones
 */
class GenesisJsNoJs {

	/**
	 * Add action and filter.
	 *
	 * @since 1.0.0
	 */
	public function run(): void {
		\add_filter( 'body_class', [ $this, 'body_class' ] );
		\add_action( 'genesis_before', [ $this, 'script' ], 1 );
	}

	/**
	 * Add 'no-js' class to the body class values.
	 *
	 * @since 1.0.0
	 *
	 * @param array $classes Existing classes.
	 * @return array
	 */
	public function body_class( array $classes ) : array {
		$classes[] = 'no-js';

		return $classes;
	}

	/**
	 * Echo out the script that changes 'no-js' class to 'js'.
	 *
	 * @since 1.0.0
	 */
	public function script(): void {
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
