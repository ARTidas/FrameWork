<?php

namespace Common;

/**
 * Layout abstract.
 *
 * @package    Common
 * @subpackage Layout
 */
abstract class LayoutAbstract
{
	/**
	 * Layout data object.
	 *
	 * @var LayoutDoAbstract
	 */
	protected $layoutDo;

	/**
	 * View.
	 *
	 * @var ViewAbstract
	 */
	protected $view;

	/**
	 * Layout content.
	 *
	 * @var string
	 */
	protected $content;

	/**
	 * Construct.
	 *
	 * @param LayoutDoAbstract $layoutDo   Layout object.
	 * @param ViewAbstract     $view       Content view.
	 */
	public function __construct(LayoutDoAbstract $layoutDo, ViewAbstract $view)
	{
		$this->layoutDo = $layoutDo;
		$this->view     = $view;

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
	 * Display template.
	 *
	 * @return void
	 */
	public function display()
	{
		foreach ($this->layoutDo->getHeaders() as $header)
		{
			header($header);
		}

		echo $this->content;
	}

	/**
	 * Load content.
	 *
	 * @return void.
	 */
	abstract protected function loadContent();
}