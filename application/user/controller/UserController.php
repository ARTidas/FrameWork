<?php

namespace User;

use Common\ControllerAbstract;
use Common\JsonLayout;
use Common\JsonLayoutDo;
use Common\JsonView;

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
        $layoutDo = new JsonLayoutDo();
		$layoutDo->addHeader(self::HEADER_JSON);

		$userDo = (new UserDo())
			->setNick($nick)
			->setEmail($email)
			->setPassword($password)
		;
		$userBoBuilder = new UserBoBuilder($userDo);
		$userBo        = $userBoBuilder->build();

		if ($userBo->getUserValidatorBo()->isValid() && $userBo->create())
		{
			$layoutDo->setSuccess(true);
		}
		else
		{
			$layoutDo->setErrors($userBo->getUserValidatorBo()->getErrors());
		}

		$view   = new JsonView();
		$layout = new JsonLayout($layoutDo, $view);

		$layout->display();
	}
}