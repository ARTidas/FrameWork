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
	 * User password salt;
	 *
	 * @var string
	 */
	protected $passwordSalt;

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

	/**
	 * Get user password salt.
	 *
	 * @return string   Password salt.
	 */
	public function getPasswordSalt()
	{
		return $this->passwordSalt;
	}

	/**
	 * Set user password salt.
	 *
	 * @param string $passwordSalt   Password salt.
	 *
	 * @return $this
	 */
	public function setPasswordSalt($passwordSalt)
	{
		$this->passwordSalt = (string)$passwordSalt;

		return $this;
	}
}