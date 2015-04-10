<?php

namespace Common;

/**
 * JSON view data object.
 *
 * @package    Common
 * @subpackage Do
 */
class JsonViewDo extends ViewDoAbstract
{
	/**
	 * Content.
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
	 * @param string $content   Content.
	 *
	 * @return $this
	 */
	public function setContent($content)
	{
		$this->content = (string)$content;

		return $this;
	}
}