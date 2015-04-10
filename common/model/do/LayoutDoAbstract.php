<?php

namespace Common;

/**
 * Layout data object abstract.
 *
 * @package    Common
 * @subpackage Do
 */
abstract class LayoutDoAbstract
{
	/**
	 * Headers.
	 *
	 * @var array
	 */
	protected $headers = array();

	/**
	 * Get headers.
	 *
	 * @return array   Headers.
	 */
	public function getHeaders()
	{
		return $this->headers;
	}

	/**
	 * Set headers.
	 *
	 * @param array $headers   Headers.
	 *
	 * @return $this
	 */
	public function setHeaders(array $headers)
	{
		$this->headers = $headers;

		return $this;
	}

	/**
	 * Add header.
	 *
	 * @param string $header   Header.
	 *
	 * @return $this
	 */
	public function addHeader($header)
	{
		$this->headers[] = $header;

		return $this;
	}
}