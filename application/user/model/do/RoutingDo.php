<?php

namespace User;

use Common\RoutingDoAbstract;

/**
 * Routing data object.
 *
 * @package    User
 * @subpackage Do
 */
class RoutingDo extends RoutingDoAbstract
{
	/**
	 * The application routing.
	 *
	 * @var array
	 */
	protected $routing = array(
		'create' => 'UserController/create'
	);
}