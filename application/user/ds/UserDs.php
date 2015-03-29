<?php

namespace User;

/**
 * User data structure.
 *
 * @package    User
 * @subpackage Ds
 */
class UserDs
{
	/** Database name. */
	const DATABASE_NAME = 'user';

	/** Field: unique identifier. */
	const FIELD_ID       = 'id';
	/** Field: user nick. */
	const FIELD_NICK     = 'nick';
	/** Field: user e-mail address. */
	const FIELD_EMAIL    = 'email';
	/** Field: user password. */
	const FIELD_PASSWORD = 'password';
}