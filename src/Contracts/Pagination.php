<?php
/**
 * Pagination interface.
 *
 * Defines the interface that pagination classes must use.
 *
 * @package   HybridCore
 * @author    Justin Tadlock <justintadlock@gmail.com>
 * @copyright Copyright (c) 2008 - 2019, Justin Tadlock
 * @link      https://themehybrid.com/hybrid-core
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Hybrid\Pagination\Contracts;

use Hybrid\Support\Contracts\Renderable;
use Hybrid\Support\Contracts\Displayable;

/**
 * Pagination interface.
 *
 * @since  5.0.0
 * @access public
 */
interface Pagination extends Renderable, Displayable {

	/**
	 * Builds the pagination.
	 *
	 * @since  5.0.0
	 * @access public
	 * @return Pagination
	 */
	public function make();
}
