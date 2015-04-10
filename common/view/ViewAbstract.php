<?php

namespace Common;

/**
 * Common view abstract.
 *
 * @package    Common
 * @subpackage Layout
 */
abstract class ViewAbstract
{
	/**
	 * Template content.
	 *
	 * @var string
	 */
	protected $content;

	/**
	 * View data object.
	 *
	 * @var ViewDoAbstract
	 */
	protected $viewDo;

	/**
	 * Construct.
	 *
	 * @param ViewDoAbstract $viewDo   View data object.
	 */
	public function __construct(ViewDoAbstract $viewDo = null)
	{
		$this->viewDo = $viewDo;
		$this->loadContent();
	}

	/**
	 * Get template content.
	 *
	 * @return string   Template content.
	 */
	public function getContent()
	{
		return $this->content;
	}

	/**
	 * Load content.
	 *
	 * @return void.
	 */
	abstract protected function loadContent();
}