<?php

namespace Common;

/**
 * Common controller abstract.
 *
 * @package    Common
 * @subpackage Controller
 */
abstract class ControllerAbstract
{
	/** Header: JSON content type. */
	const HEADER_JSON = 'Content-Type: application/json';
	/** Header: HTML content type. */
	const HEADER_HTML = 'Content-Type: text/html; charset=utf-8';

	/**
	 * Invoke.
	 *
	 * @param string $methodName         Method name to call.
	 * @param array  $methodParameters   Method parameters for calling.
	 *
	 * @return void
	 */
	public function __invoke($methodName, array $methodParameters = array())
	{
		call_user_func_array([$this, $methodName], $methodParameters);
	}
}