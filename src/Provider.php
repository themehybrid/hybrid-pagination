<?php
/**
 * Pagination service provider.
 *
 * This is the service provider for the pagination system. The primary purpose
 * of this is to use the container as a factory for creating pagination. By
 * adding this to the container, it also allows the implementation to be
 * overwritten. That way, any custom functions will utilize the new class.
 *
 * @package   HybridCore
 * @author    Justin Tadlock <justintadlock@gmail.com>
 * @copyright Copyright (c) 2008 - 2021, Justin Tadlock
 * @link      https://themehybrid.com/hybrid-core
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Hybrid\Pagination;

use Hybrid\Tools\ServiceProvider;
use Hybrid\Pagination\Contracts\Pagination as PaginationContract;

/**
 * Attr provider class.
 *
 * @since  1.0.0
 * @access public
 */
class Provider extends ServiceProvider {

	/**
	 * Binds the implementation of the attributes contract to the container.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function register() {
		$this->app->bind( PaginationContract::class, Pagination::class );
	}
}
