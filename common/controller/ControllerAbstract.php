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
	/**
	 * Display documentation.
	 *
	 * @return string
	 */
	public function displayDocumentation()
	{
		$view     = new LayoutView();
		$layoutDo = new LayoutDo();
		$layoutDo
			->setCss()
			->setTitle()
		;

		echo $view->display($layoutDo);
	}
}