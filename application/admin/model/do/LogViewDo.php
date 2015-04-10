<?php

namespace Admin;

use Common\ViewDoAbstract;

/**
 * Log view data object.
 *
 * @package    Admin
 * @subpackage Do
 */
class LogViewDo extends ViewDoAbstract
{
	/**
	 * Log data objects.
	 *
	 * LogViewDo[]
	 */
	protected $logDos = array();

	/**
	 * Get log data objects.
	 *
	 * @return \Common\LogDo[]
	 */
	public function getLogDos()
	{
		return $this->logDos;
	}

	/**
	 * Set log data objects.
	 *
	 * @param \Common\LogDo[] $logDos   Log data objects.
	 *
	 * @return $this
	 */
	public function setLogDos(array $logDos)
	{
		$this->logDos = $logDos;

		return $this;
	}
}