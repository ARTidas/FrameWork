<?php

namespace Common;

/**
 * Request business object.
 *
 * @package    Common
 * @subpackage Bo
 */
class RequestBo
{
	/**
	 * Request data object.
	 *
	 * @var RequestDo
	 */
	protected $requestDo;

	/**
	 * Construct.
	 */
	public function __construct()
	{
		$this->requestDo = new RequestDo();
		$this->requestDo->setRequest(empty($_REQUEST['request']) ? '/' : $_REQUEST['request']);

		$this->loadApplicationName();
		$this->loadRoute();
	}

	/**
	 * Load application name to call on request.
	 *
	 * @return void
	 */
	protected function loadApplicationName()
	{
		$requestFolders = explode('/', $this->requestDo->getRequest());

		$this->requestDo->setApplicationName(
			empty($requestFolders[0]) ? ConfigDo::APPLICATION_COMMON : $requestFolders[0]
		);
	}

	/**
	 * Load request route.
	 *
	 * @return void
	 */
	protected function loadRoute()
	{
		$requestFolders = explode('/', $this->requestDo->getRequest());
		array_shift($requestFolders);
		$route = implode('/', $requestFolders);

		$this->requestDo->setRoute($route === '' ? '/' : $route);
	}

	/**
	 * Get request data object.
	 *
	 * @return RequestDo   Request data object.
	 */
	public function getRequestDo()
	{
		return $this->requestDo;
	}
}