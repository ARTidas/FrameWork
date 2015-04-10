<?php

namespace Common;

/**
 * Common actions.
 *
 * @package    Common
 * @subpackage Controller
 */
class IndexController extends ControllerAbstract
{
	/**
	 * Display framework documentation.
	 *
	 * @return string
	 */
	public function displayDocumentation()
	{
		$view = new DocumentationView();

		$layoutDo = (new HtmlLayoutDo)
			->setHeaders(array(self::HEADER_HTML))
			->setTitle('FrameWork documentation')
			->setCss('common.css')
		;
		$layout   = new HtmlLayout($layoutDo, $view);

		$layout->display();
	}
}