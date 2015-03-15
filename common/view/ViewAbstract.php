<?php

namespace Common;

/**
 * Common view abstract.
 *
 * @package    Common
 * @subpackage View
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
	 * Construct.
	 *
	 * @param LayoutDo $layoutDo   Layout data object.
	 */
	abstract public function __construct(LayoutDo $layoutDo);

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
		echo $this->content;
	}
}