<?php
/**
 * Pagination functions.
 *
 * Helper functions and template tags related to pagination.
 *
 * @package   HybridPagination
 * @link      https://github.com/themehybrid/hybrid-pagination
 *
 * @author    Theme Hybrid
 * @copyright Copyright (c) 2008 - 2024, Theme Hybrid
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Hybrid\Pagination;

use Hybrid\App;
use Hybrid\Pagination\Contracts\Pagination;

if ( ! function_exists( __NAMESPACE__ . '\\pagination' ) ) {
    /**
     * Outputs the pagination output.
     *
     * @since  1.0.0
     * @param  string $context
     * @param  array  $args
     * @return \Hybrid\Pagination\Contracts\Pagination
     *
     * @access public
     */
    function pagination( $context = 'posts', array $args = [] ) {
        return App::resolve(
            Pagination::class,
            compact( 'context', 'args' )
        );
    }
}

if ( ! function_exists( __NAMESPACE__ . '\\display' ) ) {
    /**
     * Outputs the pagination output.
     *
     * @since  1.0.0
     * @param  string $context
     * @param  array  $args
     * @return void
     *
     * @access public
     */
    function display( $context = 'posts', array $args = [] ) {
        pagination( $context, $args )->make()->display();
    }
}

if ( ! function_exists( __NAMESPACE__ . '\\render' ) ) {
    /**
     * Returns the pagination output.
     *
     * @since  1.0.0
     * @param  string $context
     * @param  array  $args
     * @return string
     *
     * @access public
     */
    function render( $context = 'posts', array $args = [] ) {
        return pagination( $context, $args )->make()->render();
    }
}
