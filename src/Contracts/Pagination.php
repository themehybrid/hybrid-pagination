<?php
/**
 * Pagination interface.
 *
 * Defines the interface that pagination classes must use.
 *
 * @package   HybridPagination
 * @link      https://github.com/themehybrid/hybrid-pagination
 *
 * @author    Theme Hybrid
 * @copyright Copyright (c) 2008 - 2023, Theme Hybrid
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Hybrid\Pagination\Contracts;

use Hybrid\Contracts\Renderable;
use Hybrid\Contracts\Displayable;

/**
 * Pagination interface.
 *
 * @since  1.0.0
 * @access public
 */
interface Pagination extends Renderable, Displayable {

	/**
	 * Builds the pagination.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return Pagination
	 */
	public function make();
}
