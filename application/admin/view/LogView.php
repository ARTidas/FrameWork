<?php

namespace Admin;

use Common\ViewAbstract;

/**
 * Layout view.
 *
 * @package    Admin
 * @subpackage View
 */
class LogView extends ViewAbstract
{
	/**
	 * Load content.
	 *
	 * @return void.
	 */
	public function loadContent()
	{
		$this->content = '<div id="logs">';

		/** @var \Common\LogDo $logDo */
		foreach ($this->viewDo->getLogDos() as $logDo)
		{
			$this->content .= '
<div id="log' . $logDo->getId() . '" class="log">
	<span class="logField">' . $logDo->getLevel() . '</span>
	<span class="logField">' . $logDo->getCreatedAt() . '</span>
	<span class="logField"><strong>' . $logDo->getFile() . '</strong></span>
	<span class="logField"><strong>' . $logDo->getLine() . '</strong></span>
	<br/>
	<span class="logField">' . $logDo->getMessage() . '</span>
	<br/>
	<span class="logField">' . $logDo->getContext() . '</span>
</div>
			';
		}

		$this->content .= '</div>';
	}
}