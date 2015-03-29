<?php

namespace User;

use Common\ConfigDo;
use Common\DaoAbstract;

/**
 * User data access object.
 *
 * @package    User
 * @subpackage Dao
 */
class UserDao extends DaoAbstract
{
	/**
	 * Create.
	 *
	 * @param UserDo $userDo   User data object.
	 *
	 * @return boolean   True on success, false otherwise.
	 */
	public function create(UserDo $userDo)
	{
		$userDatabaseHandler = $this->databaseConnectionBo->getHandler(UserDs::DATABASE_NAME);



		$userDatabaseHandler->query();
	}
}