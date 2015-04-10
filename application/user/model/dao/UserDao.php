<?php

namespace User;

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
		$databaseHandlerBo = $this->databaseConnectionBo->getHandler(UserDs::DATABASE_NAME);

		$queryString = '/* ' . __METHOD__ . ' */
			INSERT INTO
				`' . UserDs::TABLE_NAME . '`
			SET
				`' . UserDs::FIELD_NICK . '`          = :' . UserDs::FIELD_NICK . ',
				`' . UserDs::FIELD_EMAIL . '`         = :' . UserDs::FIELD_EMAIL . ',
				`' . UserDs::FIELD_PASSWORD_HASH . '` = :' . UserDs::FIELD_PASSWORD_HASH . ',
				`' . UserDs::FIELD_PASSWORD_SALT . '` = :' . UserDs::FIELD_PASSWORD_SALT . '
		';

		$queryParameters = array(
			':' . UserDs::FIELD_NICK          => $userDo->getNick(),
			':' . UserDs::FIELD_EMAIL         => $userDo->getEmail(),
			':' . UserDs::FIELD_PASSWORD_HASH => $userDo->getPassword(),
			':' . UserDs::FIELD_PASSWORD_SALT => $userDo->getPasswordSalt(),
		);

		return $databaseHandlerBo->create($queryString, $queryParameters);
	}

	/**
	 * Get user record by user nick.
	 *
	 * @param string $userNick   User nick.
	 *
	 * @return array   User record
	 */
	public function getByNick($userNick)
	{
		$databaseHandlerBo = $this->databaseConnectionBo->getHandler(UserDs::DATABASE_NAME);

		$queryString = '/* ' . __METHOD__ . ' */
			SELECT
				`' . UserDs::FIELD_ID . '`,
				`' . UserDs::FIELD_NICK . '`,
				`' . UserDs::FIELD_EMAIL . '`,
				`' . UserDs::FIELD_PASSWORD_HASH . '`,
				`' . UserDs::FIELD_PASSWORD_SALT . '`
			FROM
				`' . UserDs::TABLE_NAME . '`
			WHERE
				`' . UserDs::FIELD_NICK . '` = :' . UserDs::FIELD_NICK . '
		';

		$queryParameters = array(
			':' . UserDs::FIELD_NICK => $userNick,
		);

		return $databaseHandlerBo->read($queryString, $queryParameters);
	}
}