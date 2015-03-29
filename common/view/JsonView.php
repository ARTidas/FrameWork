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
	 * Json view data object.
	 *
	 * @var JsonViewDo
	 */
	protected $viewDo;

	/**
	 * Load content.
	 *
	 * @return void
	 */
	public function loadContent()
	{
		$this->content = json_encode(
			array(
				self::KEY_SUCCESS  => $this->viewDo->getSuccess(),
				self::KEY_CONTENT  => $this->viewDo->getContent(),
				self::KEY_ERRORS   => $this->viewDo->getErrors(),
				self::KEY_WARNINGS => $this->viewDo->getErrors(),
				self::KEY_MESSAGES => $this->viewDo->getMessages(),
			)
		);
	}
}