<?php

namespace Common;

/**
 * Layout data object.
 *
 * @package    Common
 * @subpackage Do
 */
class LayoutDo
{
	/**
	 * Title to display.
	 *
	 * @var string
	 */
	protected $title;

	/**
	 * Cascade style sheet.
	 *
	 * @var string
	 */
	protected $css;

	/**
	 * Get title.
	 *
	 * @return string   Title for display.
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * Set title.
	 *
	 * @param string $title   Title to set.
	 *
	 * @return $this
	 */
	public function setTitle($title)
	{
		$this->title = $title;

		return $this;
	}

	/**
	 * Get CSS.
	 *
	 * @return string   CSS for display.
	 */
	public function getCss()
	{
		return $this->css;
	}

	/**
	 * Set CSS.
	 *
	 * @param string $css   CSS to set.
	 *
	 * @return $this
	 */
	public function setCss($css)
	{
		$this->css = $css;

		return $this;
	}
}