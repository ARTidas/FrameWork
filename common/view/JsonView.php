<?php

namespace Common;

/**
 * JSON response format view.
 *
 * @package    JsonResponseView
 * @subpackage View
 */
class JsonView extends ViewAbstract
{
	/**
	 * Load content.
	 *
	 * @return void
	 */
	public function loadContent()
	{
		if ($this->viewDo instanceof ViewDoAbstract)
		{
			$this->content = $this->viewDo->getContent();
		}
	}
}