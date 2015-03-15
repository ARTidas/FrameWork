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
	 * H1 html tag content.
	 *
	 * @var string
	 */
	protected $header1;

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
		$this->title = (string)$title;

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
		$this->css = (string)$css;

		return $this;
	}

	/**
	 * Get H1 html tag content.
	 *
	 * @return string   H1 html content.
	 */
	public function getHeader1()
	{
		return $this->header1;
	}

	/**
	 * Set H1 html tag content.
	 *
	 * @param string $header1   H1 html content.
	 *
	 * @return $this
	 */
	public function setHeader1($header1)
	{
		$this->header1 = (string)$header1;

		return $this;
	}
}