<?php

namespace Common;

/**
 * Layout view.
 *
 * @package    Common
 * @subpackage View
 */
class LayoutView extends ViewAbstract
{
	/**
	 * Construct.
	 *
	 * @param LayoutDo $layoutDo   Layout data object.
	 */
	public function __construct(LayoutDo $layoutDo)
	{
		$this->content = '<!DOCTYPE html>
<html>
	<head>
		<title>' . $layoutDo->getTitle() . '</title>
		<link rel="stylesheet" href="' . ConfigDo::$publicCssFolder . '/' . $layoutDo->getCss() . '" \>
	</head>
	<body>
		<div id="cMain">
			<h1>' . $layoutDo->getHeader1() . '</h1>
		</div>
	</body>
</html>'
		;
	}
}