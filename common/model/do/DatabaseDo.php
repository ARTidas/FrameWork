<?php

namespace Common;

/**
 * Database data object.
 *
 * @package    Common
 * @subpackage Do
 */
class DatabaseDo
{
	/**
	 * Database connection name.
	 *
	 * @var string
	 */
	protected $name;

	/**
	 * Database type.
	 *
	 * @var string
	 */
	protected $type;

	/**
	 * Database host.
	 *
	 * @var string
	 */
	protected $host;

	/**
	 * Database.
	 *
	 * @var string
	 */
	protected $database;

	/**
	 * Database user.
	 *
	 * @var string
	 */
	protected $user;

	/**
	 * Database password.
	 *
	 * @var string
	 */
	protected $password;

	/**
	 * Get database name.
	 *
	 * @return string   Database name.
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Set database name.
	 *
	 * @param string $name   Database name.
	 *
	 * @return $this
	 */
	public function setName($name)
	{
		$this->name = (string)$name;

		return $this;
	}

	/**
	 * Get database type.
	 *
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * Set database type.
	 *
	 * @param string $type   Database type.
	 *
	 * @return $this
	 */
	public function setType($type)
	{
		$this->type = (string)$type;
	}

	/**
	 * Get database host.
	 *
	 * @return string   Database host.
	 */
	public function getHost()
	{
		return $this->host;
	}

	/**
	 * Set database host.
	 *
	 * @param string $host   Database host.
	 *
	 * @return $this
	 */
	public function setHost($host)
	{
		$this->host = (string)$host;

		return $this;
	}

	/**
	 * Get database.
	 *
	 * @return string   Database.
	 */
	public function getDatabase()
	{
		return $this->database;
	}

	/**
	 * Set database.
	 *
	 * @param string $database   Database.
	 *
	 * @return $this
	 */
	public function setDatabase($database)
	{
		$this->database = (string)$database;

		return $this;
	}

	/**
	 * Get database user.
	 *
	 * @return string   Database user.
	 */
	public function getUser()
	{
		return $this->user;
	}

	/**
	 * Set database user.
	 *
	 * @param string $user   Database user.
	 *
	 * @return $this
	 */
	public function setUser($user)
	{
		$this->user = $user;

		return $this;
	}

	/**
	 * Get database password.
	 *
	 * @return string   Database password.
	 */
	public function getPassword()
	{
		return $this->password;
	}

	/**
	 * Set database password.
	 *
	 * @param string $password   Database password.
	 *
	 * @return $this
	 */
	public function setPassword($password)
	{
		$this->password = $password;

		return $this;
	}
}