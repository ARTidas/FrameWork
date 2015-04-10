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
	protected $userDao;

	/**
	 * User nick name errors.
	 *
	 * @var array
	 */
	protected $errorsNick = array();

	/**
	 * User e-mail address errors.
	 *
	 * @var array
	 */
	protected $errorsEmail = array();

	/**
	 * User password errors.
	 *
	 * @var array
	 */
	protected $errorsPassword = array();

	/**
	 * Construct.
	 *
	 * @param UserDo  $userDo    User data object.
	 * @param UserDao $userDao   User data access object.
	 */
	public function __construct(UserDo $userDo, UserDao $userDao)
	{
		$this->userDo  = $userDo;
		$this->userDao = $userDao;

		$this->loadErrors();
	}

	/**
	 * Determine if user attributes are valid.
	 *
	 * @return boolean   True on valid, false otherwise.
	 */
	public function isValid()
	{
		return empty($this->errorsNick) && empty($this->errorsEmail) && empty($this->errorsPassword);
	}

	/**
	 * Get user attribute errors.
	 *
	 * @return array
	 */
	public function getErrors()
	{
		return array_merge(
			$this->errorsNick,
			$this->errorsEmail,
			$this->errorsPassword
		);
	}

	/**
	 * Load validation errors.
	 *
	 * @return void
	 */
	protected function loadErrors()
	{
		$this->loadUserNickErrors();
		$this->loadUserEmailErrors();
		$this->loadUserPasswordErrors();
	}

	/**
	 * Load user nick name errors.
	 *
	 * @return void
	 */
	protected function loadUserNickErrors()
	{
		$userNick = $this->userDo->getNick();

		if (empty($userNick))
		{
			$this->errorsNick[] = 'User nick name can not be empty!';
		}
		if (preg_match('/[^A-Za-z0-9]/', $userNick) === 1)
		{
			$this->errorsNick[] = 'User nick name can contain only alphanumerical characters!';
		}
		if ($this->userDao->getByNick($userNick))
		{
			$this->errorsNick[] = 'User nick ("' . $userNick . '") already exists!';
		}

		// TODO: Check for unique nick name. [ARTidas]
	}

	/**
	 * Load user e-mail address errors.
	 *
	 * @return void
	 */
	protected function loadUserEmailErrors()
	{
		$userEmail = $this->userDo->getEmail();

		if (empty($userEmail))
		{
			$this->errorsEmail[] = 'User e-mail address can not be empty!';
		}
		if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL))
		{
			$this->errorsEmail[] = 'User e-mail address is not valid: "' . $userEmail . '"';
		}

		// TODO: Check for unique e-mail address. [ARTidas]
	}

	/**
	 * Load user password errors.
	 *
	 * @return void
	 */
	protected function loadUserPasswordErrors()
	{
		$userPassword = $this->userDo->getPassword();

		if (empty($userPassword))
		{
			$errors[] = 'User password can not be empty!';
		}
	}
}