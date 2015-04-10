<?php

namespace Admin;

use Common\RoutingDoAbstract;

/**
 * Routing data object.
 *
 * @package    Admin
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
		'log'        => 'LogController/displayLog',
		'getNewLogs' => 'LogController/getNewLogs',
	);
}