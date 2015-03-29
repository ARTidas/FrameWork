<?php

namespace User;

use Common\ControllerAbstract;
use Common\JsonView;
use Common\JsonViewDo;

/**
 * User actions.
 *
 * @package    User
 * @subpackage Controller
 */
class UserController extends ControllerAbstract
{
	/**
	 * Create user.
	 *
	 * @param string $nick       User nick.
	 * @param string $email      User e-mail address.
	 * @param string $password   User password.
	 *
	 * @return \Common\ViewAbstract   Action response.
	 */
	public function create($nick, $email, $password)
	{
		$viewDo = new JsonViewDo();

		try
		{
			$userDo          = (new UserDo())
				->setNick($nick)
				->setEmail($email)
				->setPassword($password)
			;
			$userDao         = new UserDao();
			$userBo          = new UserBo($userDo, $userDao);
			$userValidatorBo = new UserValidatorBo();

			$userCreationErrors = $userValidatorBo->getErrors($userDo);

			if (empty($userCreationErrors))
			{
				$userBo->create();
				$viewDo->setSuccess(true);
			}
			else
			{
				$viewDo->setSuccess(false);
				$viewDo->setErrors($userCreationErrors);
			}
		}
		catch (\Exception $exception)
		{
			$viewDo->setSuccess(false);
			$viewDo->addError($exception->getMessage());
		}

		$view = new JsonView($viewDo);
		$view->display();
	}
}