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
 * @copyright Copyright (c) 2008 - 2024, Theme Hybrid
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Hybrid\Pagination\Contracts;

use Hybrid\Contracts\Displayable;
use Hybrid\Contracts\Renderable;

/**
 * Pagination interface.
 *
 * @since  1.0.0
 *
 * @access public
 */
interface Pagination extends Renderable, Displayable {

    /**
     * Builds the pagination.
     *
     * @since  1.0.0
     * @return \Hybrid\Pagination\Contracts\Pagination
     *
     * @access public
     */
    public function make();

}
