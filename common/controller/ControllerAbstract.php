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
	 * Invoke.
	 *
	 * @param string $methodName         Method name to call.
	 * @param array  $methodParameters   Method parameters for calling.
	 *
	 * @return void
	 */
	public function __invoke($methodName, array $methodParameters = array())
	{
		call_user_func_array([$this, $methodName], $methodParameters);
	}

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