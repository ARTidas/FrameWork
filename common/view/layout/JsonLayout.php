<?php

namespace Common;

/**
 * JSON layout.
 *
 * @package    Common
 * @subpackage Layout
 */
class JsonLayout extends LayoutAbstract
{
	/** Key: success. */
	const KEY_SUCCESS  = 'success';
	/** Key: content. */
	const KEY_CONTENT  = 'content';
	/** Key: errors. */
	const KEY_ERRORS   = 'errors';
	/** Key: warnings. */
	const KEY_WARNINGS = 'warnings';
	/** Key: messages. */
	const KEY_MESSAGES = 'messages';

	/**
	 * Load content.
	 *
	 * @return void.
	 */
	protected function loadContent()
	{
		$this->content = json_encode(
			array(
				self::KEY_SUCCESS  => $this->layoutDo->getSuccess(),
				self::KEY_CONTENT  => $this->view->getContent(),
				self::KEY_ERRORS   => $this->layoutDo->getErrors(),
				self::KEY_WARNINGS => $this->layoutDo->getWarnings(),
				self::KEY_MESSAGES => $this->layoutDo->getMessages(),
			)
		);
	}
}