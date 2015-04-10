<?php

namespace Common;

/**
 * Layout data object.
 *
 * @package    Common
 * @subpackage Do
 */
class HtmlLayoutDo extends LayoutDoAbstract
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
	 * JavaScript files.
	 *
	 * @var array
	 */
	protected $jss;

	/**
	 * HTML document meta tag elements.
	 *
	 * @var array
	 */
	protected $metaTags;

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
	 * Get JavaScript files.
	 *
	 * @return array   JavaScript files.
	 */
	public function getJss()
	{
		return $this->jss;
	}

	/**
	 * Set JavaScript files.
	 *
	 * @param array $jss   JavaScript files.
	 *
	 * @return $this
	 */
	public function setJss(array $jss)
	{
		$this->jss = $jss;

		return $this;
	}

	/**
	 * Add JavaScrip file.
	 *
	 * @param $js string   JavaScript file.
	 *
	 * @return $this
	 */
	public function addJs($js)
	{
		$this->jss[] = (string)$js;

		return $this;
	}

	/**
	 * Get HTML meta tag elements.
	 *
	 * @return array   HTML meta tag elements.
	 */
	public function getMetaTags()
	{
		return $this->metaTags;
	}

	/**
	 * Set HTML meta tag elements.
	 *
	 * @param array $metaTags   HTML meta tag elements.
	 *
	 * @return $this
	 */
	public function setMetaTags(array $metaTags)
	{
		$this->metaTags = $metaTags;

		return $this;
	}

	/**
	 * Add HTML meta tag element.
	 *
	 * @param string $metaTag   HTML meta tag element.
	 *
	 * @return $this
	 */
	public function addMetaTag($metaTag)
	{
		$this->metaTags[] = (string)$metaTag;

		return $this;
	}
}