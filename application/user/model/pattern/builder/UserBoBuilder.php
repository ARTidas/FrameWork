<?php

namespace User;

/**
 * User business object builder.
 *
 * @package    Common
 * @subpackage Builder
 */
class UserBoBuilder
{
	/**
	 * UserData object.
	 *
	 * @var UserDo
	 */
	protected $userDo;

	/**
	 * Construct.
	 *
	 * @param UserDo $userDo
	 */
	public function __construct(UserDo $userDo)
	{
		$this->userDo = $userDo;
	}

	/**
	 * Build.
	 *
	 * @return UserBo   User business object.
	 */
	public function build()
	{
		$userDao         = new UserDao();
		$userValidatorBo = new UserValidatorBo($this->userDo, $userDao);

		return new UserBo($this->userDo, $userValidatorBo, $userDao);
	}
}