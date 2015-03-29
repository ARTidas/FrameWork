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
	 * User data access object.
	 *
	 * @var UserDao
	 */

	/**
	 * Construct.
	 *
	 * @param UserDo  $userDo    User data object.
	 * @param UserDao $userDao   User data object.
	 */
	public function __construct(UserDo $userDo, UserDao $userDao)
	{
		$this->userDo  = $userDo;
		$this->userDao = $userDao;
	}

	/**
	 * Create user record.
	 *
	 * @return boolean   True on success, false otherwise.
	 */
	public function create()
	{
		return $this->userDao->create($this->userDo);
	}
}