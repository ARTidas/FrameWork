<?php

namespace Common;

/**
 * Html layout.
 *
 * @package    Common
 * @subpackage Layout
 */
class HtmlLayout extends LayoutAbstract
{
	/**
	 * Load content.
	 *
	 * @return void.
	 */
	protected function loadContent()
	{
		$this->content = '<!DOCTYPE html>
<html>
	<head>
		<title>' . $this->layoutDo->getTitle() . '</title>
		<link rel="stylesheet" href="' . ConfigDo::getInstance()->getPublicCssFolder() . '/' . $this->layoutDo->getCss() . '" \>
		';

		if (is_array($this->layoutDo->getJss()))
		{
			foreach ($this->layoutDo->getJss() as $js)
			{
				$this->content .= '<script src="' . ConfigDo::getInstance()->getPublicJsFolder() . '/' . $js . '"></script>' . PHP_EOL;
			}
		}

		if (is_array($this->layoutDo->getMetaTags()))
		{
			foreach ($this->layoutDo->getMetaTags() as $metaTag)
			{
				$this->content .= $metaTag . PHP_EOL;
			}
		}

		$this->content .= '
	</head>
	<body>
		<div id="cMain">
			' . $this->view->getContent() . '
		</div>
	</body>
</html>';
	}
}