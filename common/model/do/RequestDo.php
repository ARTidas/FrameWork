<?php

namespace Common;

/**
 * Request data object.
 *
 * @package    Common
 * @subpackage Do
 */
class RequestDo
{
	/**
	 * Request string.
	 *
	 * @var string
	 */
	protected $request;

	/**
	 * Application name.
	 *
	 * @var string
	 */
	protected $applicationName;

	/**
	 * Route part of the request.
	 *
	 * @var string
	 */
	protected $route;

	/**
	 * Get request.
	 *
	 * @return string   Request.
	 */
	public function getRequest()
	{
		return $this->request;
	}

	/**
	 * Set request.
	 *
	 * @param string $request   Request.
	 *
	 * @return $this
	 */
	public function setRequest($request)
	{
		$this->request = (string)$request;

		return $this;
	}

	/**
	 * Get application name.
	 *
	 * @return string   Application name.
	 */
	public function getApplicationName()
	{
		return $this->applicationName;
	}

	/**
	 * Set application name.
	 *
	 * @param string $applicationName   Application name.
	 *
	 * @return $this
	 */
	public function setApplicationName($applicationName)
	{
		$this->applicationName = (string)$applicationName;

		return $this;
	}

	/**
	 * Get route.
	 *
	 * @return string   Route.
	 */
	public function getRoute()
	{
		return $this->route;
	}

	/**
	 * Set route.
	 *
	 * @param string $route   Route.
	 *
	 * @return $this
	 */
	public function setRoute($route)
	{
		$this->route = (string)$route;

		return $this;
	}
}