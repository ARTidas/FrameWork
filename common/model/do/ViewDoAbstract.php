<?php

namespace Common;

/**
 * View data object abstract.
 *
 * @package    Common
 * @subpackage Do
 */
class ViewDoAbstract
{
	/**
	 * Response content.
	 *
	 * @var string
	 */
	protected $content;

	/**
	 * Get content.
	 *
	 * @return string   Content.
	 */
	public function getContent()
	{
		return $this->content;
	}

	/**
	 * Set content.
	 *
	 * @param string $content   Content of the response.
	 *
	 * @return $this
	 */
	public function setContent($content)
	{
		$this->content = (string)$content;

		return $this;
	}
}