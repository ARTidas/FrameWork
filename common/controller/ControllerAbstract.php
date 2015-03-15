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
		$layoutDo = new LayoutDo();
		$layoutDo
			->setCss('common.css')
			->setTitle('FrameWork')
			->setHeader1('FrameWork Documentation');
		;
		$view     = new LayoutView($layoutDo);

		$view->display();
	}
}