<?php

namespace Common;

/**
 * Log data object.
 *
 * @package    Common
 * @subpackage Do
 */
class LogDo
{
	/**
	 * Error level in integer by php error level.
	 *
	 * @var int
	 */
	protected $level;

	/**
	 * Error message.
	 *
	 * @var string
	 */
	protected $message;

	/**
	 * File, where error occurred.
	 *
	 * @var string
	 */
	protected $file;

	/**
	 * Line number, where error occurred.
	 *
	 * @var int
	 */
	protected $line;

	/**
	 * Core context, where error occurred.
	 *
	 * @var array
	 */
	protected $context = array();

	/**
	 * Log record unique identifier.
	 *
	 * @var int
	 */
	protected $id;

	/**
	 * Log record creation time.
	 *
	 * @var string
	 */
	protected $createdAt;

	/**
	 * Get error level.
	 *
	 * @return int
	 */
	public function getLevel()
	{
		return $this->level;
	}

	/**
	 * Set error level.
	 *
	 * @param int $level   Error level.
	 *
	 * @return $this
	 */
	public function setLevel($level)
	{
		$this->level = (int)$level;

		return $this;
	}

	/**
	 * Get error message.
	 *
	 * @return string   Error message.
	 */
	public function getMessage()
	{
		return $this->message;
	}

	/**
	 * Set error message.
	 *
	 * @param string $message   Error message.
	 *
	 * @return $this
	 */
	public function setMessage($message)
	{
		$this->message = (string)$message;

		return $this;
	}

	/**
	 * Get file, where error occurred.
	 *
	 * @return string   File.
	 */
	public function getFile()
	{
		return $this->file;
	}

	/**
	 * Set file, where error occurred.
	 *
	 * @param string $file   File.
	 *
	 * @return $this
	 */
	public function setFile($file)
	{
		$this->file = (string)$file;

		return $this;
	}

	/**
	 * Get line number, where error occurred.
	 *
	 * @return int   Line number.
	 */
	public function getLine()
	{
		return $this->line;
	}

	/**
	 * Set line number, where error occurred.
	 *
	 * @param int $line   Error line number.
	 *
	 * @return $this
	 */
	public function setLine($line)
	{
		$this->line = (int)$line;

		return $this;
	}

	/**
	 * Get context, where error occurred.
	 *
	 * @return string   Error context.
	 */
	public function getContext()
	{
		return $this->context;
	}

	/**
	 * Set context, where error occurred.
	 *
	 * @param string $context   Error context.
	 *
	 * @return $this
	 */
	public function setContext($context)
	{
		$this->context = (string)$context;

		return $this;
	}

	/**
	 * Get unique identifier.
	 *
	 * @return int   unique identifier.
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Set unique identifier.
	 *
	 * @param int $id   unique identifier.
	 *
	 * @return $this
	 */
	public function setId($id)
	{
		$this->id = (int)$id;

		return $this;
	}

	/**
	 * Get log record creation time.
	 *
	 * @return string   Log record creation time.
	 */
	public function getCreatedAt()
	{
		return $this->createdAt;
	}

	/**
	 * Set log record creation time.
	 *
	 * @param string $createdAt   Log record creation time.
	 *
	 * @return $this
	 */
	public function setCreatedAt($createdAt)
	{
		$this->createdAt = (string)$createdAt;

		return $this;
	}

	/**
	 * ToString.
	 *
	 * @return string   Log data object string representation.
	 */
	public function __toString()
	{
		return json_encode(
			array(
				LogDs::FIELD_LEVEL   => $this->level,
				LogDs::FIELD_MESSAGE => $this->message,
				LogDs::FIELD_FILE    => $this->file,
				LogDs::FIELD_LINE    => $this->line,
				LogDs::FIELD_CONTEXT => $this->context,
			)
		);
	}

	/**
	 * Get parameters as array.
	 *
	 * @return array   Object parameters as array.
	 */
	public function getAsArray()
	{
		return get_object_vars($this);
	}
}