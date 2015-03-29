<?php

namespace User;

/**
 * User validator business object.
 *
 * @package    User
 * @subpackage Bo
 */
class UserValidatorBo
{
	/**
	 * Validate user attributes.
	 *
	 * @param UserDo $userDo   User data object.
	 *
	 * @return boolean   True on success, false otherwise.
	 */
	public function isValid(UserDo $userDo)
	{
		$errors = $this->getErrors($userDo);

		return empty($errors);
	}

	/**
	 * Get validation errors.
	 *
	 * @param UserDo $userDo   User data object.
	 *
	 * @return array   Validation errors.
	 */
	public function getErrors(UserDo $userDo)
	{
		return array_merge(
			$this->getUserNickErrors($userDo->getNick()),
			$this->getUserEmailErrors($userDo->getEmail()),
			$this->getUserPasswordErrors($userDo->getPassword())
		);
	}

	/**
	 * Get user nick name errors.
	 *
	 * @param string $userNick   User nick.
	 *
	 * @return array   Errors on user nick name.
	 */
	public function getUserNickErrors($userNick)
	{
		$errors = array();

		if (empty($userNick))
		{
			$errors[] = 'User nick name can not be empty!';
		}

		if (preg_match('/[^A-Za-z0-9]/', $userNick) !== 1)
		{
			$errors[] = 'User nick can contain only alphanumerical characters!';
		}

		return $errors;
	}

	/**
	 * Get user e-mail address errors.
	 *
	 * @param string $userEmail   User e-mail address.
	 *
	 * @return array   Errors on user e-mail address.
	 */
	public function getUserEmailErrors($userEmail)
	{
		$errors = array();

		if (empty($userEmail))
		{
			$errors[] = 'User e-mail address can not be empty!';
		}
		if (filter_var($userEmail, FILTER_VALIDATE_EMAIL))
		{
			$errors[] = 'User e-mail address is not valid: "' . $userEmail . '"';
		}

		return $errors;
	}

	/**
	 * Get user password errors.
	 *
	 * @param string $userPassword   User password.
	 *
	 * @return array   Errors on user password.
	 */
	public function getUserPasswordErrors($userPassword)
	{
		$errors = array();

		if (empty($userPassword))
		{
			$errors[] = 'User password can not be empty!';
		}

		return $errors;
	}
}