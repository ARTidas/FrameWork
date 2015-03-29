<?php

namespace Common;

/**
 * JSON view data object.
 *
 * @package    Common
 * @subpackage Do
 */
class JsonViewDo extends ViewDoAbstract
{
	/**
	 * Response status.
	 * 
	 * @var bool
	 */
	protected $success;

	/**
	 * Errors.
	 *
	 * @var array
	 */
	protected $errors;

	/**
	 * Warnings.
	 *
	 * @var array
	 */
	protected $warnings;

	/**
	 * Messages.
	 *
	 * @var array
	 */
	protected $messages;

	/**
	 * Get response status.
	 *
	 * @return boolean   True if response status is successful, false otherwise.
	 */
	public function getSuccess()
	{
		return $this->success;
	}

	/**
	 * Set response status.
	 *
	 * @param boolean $success   Response status to set.
	 *
	 * @return $this
	 */
	public function setSuccess($success)
	{
		$this->success = (boolean)$success;

		return $this;
	}

	/**
	 * Get errors.
	 *
	 * @return array   Errors.
	 */
	public function getErrors()
	{
		return $this->errors;
	}

	/**
	 * Set errors.
	 *
	 * @param array $errors   Errors to set.
	 *
	 * @return $this
	 */
	public function setErrors(array $errors)
	{
		$this->errors = $errors;

		return $this;
	}

	/**
	 * Add error.
	 *
	 * @param string $error   Error to add to existing errors.
	 *
	 * @return $this
	 */
	public function addError($error)
	{
		$this->errors[] = $error;

		return $this;
	}

	/**
	 * Get warnings.
	 *
	 * @return array   Warnings.
	 */
	public function getWarnings()
	{
		return $this->warnings;
	}

	/**
	 * Set warnings.
	 *
	 * @param array $warnings   Warnings to set.
	 *
	 * @return $this
	 */
	public function setWarnings(array $warnings)
	{
		$this->warnings = $warnings;

		return $this;
	}

	/**
	 * Add warnings.
	 *
	 * @param string $warning   Warnings to add to existing warnings.
	 *
	 * @return $this
	 */
	public function addWarning($warning)
	{
		$this->warnings[] = $warning;

		return $this;
	}

	/**
	 * Set messages.
	 *
	 * @return array   Messages to set.
	 */
	public function getMessages()
	{
		return $this->errors;
	}

	/**
	 * Set messages.
	 *
	 * @param array $messages   Messages to set.
	 *
	 * @return $this
	 */
	public function setMessages(array $messages)
	{
		$this->messages = $messages;

		return $this;
	}

	/**
	 * Add message.
	 *
	 * @param string $message   Message to add to existing messages.
	 *
	 * @return $this
	 */
	public function addMessage($message)
	{
		$this->messages[] = $message;

		return $this;
	}
}