<?php

namespace Common;

/**
 * Database handler business object abstract.
 *
 * @package    Common
 * @subpackage Bo
 */
abstract class DatabaseHandlerBoAbstract
{
	/**
	 * Construct.
	 *
	 * @param DatabaseDo $databaseDo   Database data object.
	 */
	abstract public function __construct(DatabaseDo $databaseDo);

	/**
	 * Execute query.
	 *
	 * @param string $query        Query string.
	 * @param array  $parameters   Query parameters.
	 *
	 * @return mixed   Query result.
	 */
	abstract public function query($query, $parameters);
}