<?php

namespace User;

/**
 * User business object.
 *
 * @package    User
 * @subpackage Bo
 */
class UserBo
{
	/**
	 * User data object.
	 *
	 * @var UserDo
	 */
	protected $userDo;

	/**
	 * User validator business object.
	 *
	 * @var UserValidatorBo
	 */
	protected $userValidatorBo;

	/**
	 * User data access object.
	 *
	 * @var UserDao
	 */
	protected $userDao;

	/**
	 * Construct.
	 *
	 * @param UserDo          $userDo            User data object.
	 * @param UserValidatorBo $userValidatorBo   User validator business object.
	 * @param UserDao         $userDao           User data object.
	 */
	public function __construct(UserDo $userDo, UserValidatorBo $userValidatorBo, UserDao $userDao)
	{
		$this->userDo          = $userDo;
		$this->userValidatorBo = $userValidatorBo;
		$this->userDao         = $userDao;
	}

	/**
	 * Create user record.
	 *
	 * @return boolean   True on success, false otherwise.
	 */
	public function create()
	{
		$this->userValidatorBo->isValid($this->userDo);
		$this->replaceUserPasswordWithHash();

		return $this->userDao->create($this->userDo);
	}

	/**
	 * Get user validator business object.
	 *
	 * @return UserValidatorBo
	 */
	public function getUserValidatorBo()
	{
		return $this->userValidatorBo;
	}

	/**
	 * Replace user password with hash in data object.
	 *
	 * @return void
	 */
	protected function replaceUserPasswordWithHash()
	{
		$this->userDo->setPasswordSalt(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM));

		$this->userDo->setPassword(
			crypt($this->userDo->getPassword(), $this->userDo->getPasswordSalt())
		);
	}
}