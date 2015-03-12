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
	 * Display content.
	 *
	 * @param LayoutDo $LayoutDo   Layout data object.
	 *
	 * @return string   Content to display.
	 */
	public function display(LayoutDo $LayoutDo)
	{
		return '
<html>
	<head>
		<title></title>
	</head>
	<body>
	</body>
</html>
		';
	}
}