<?php

namespace User;

/**
 * User data object.
 *
 * @package    User
 * @subpackage Do
 */
class UserDo
{
	/**
	 * User nick name;
	 *
	 * @var string
	 */
	protected $nick;

	/**
	 * User e-mail address;
	 *
	 * @var string
	 */
	protected $email;

	/**
	 * User password;
	 *
	 * @var string
	 */
	protected $password;

	/**
	 * Get nick.
	 *
	 * @return string   Nick.
	 */
	public function getNick()
	{
		return $this->nick;
	}

	/**
	 * Set nick.
	 *
	 * @param string $nick   Nick.
	 *
	 * @return $this
	 */
	public function setNick($nick)
	{
		$this->nick = (string)$nick;

		return $this;
	}

	/**
	 * Get e-mail.
	 *
	 * @return string   E-mail.
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * Set e-mail.
	 *
	 * @param string $email   E-mail.
	 *
	 * @return $this;
	 */
	public function setEmail($email)
	{
		$this->email = (string)$email;

		return $this;
	}

	/**
	 * Get password.
	 *
	 * @return string   Password.
	 */
	public function getPassword()
	{
		return $this->password;
	}

	/**
	 * Set password.
	 *
	 * @param string $password   Password.
	 *
	 * @return $this
	 */
	public function setPassword($password)
	{
		$this->password = (string)$password;

		return $this;
	}
}