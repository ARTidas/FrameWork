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
	 * Create (insert) operation.
	 *
	 * @param string $query        Query string.
	 * @param array  $parameters   Query parameters.
	 *
	 * @return int   Number of affected rows.
	 */
	abstract public function create($query, array $parameters = array());

	/**
	 * Read operation.
	 *
	 * @param string $query        Query string.
	 * @param array  $parameters   Query parameters.
	 *
	 * @return array   Found records.
	 */
	abstract public function read($query, array $parameters = array());

	/**
	 * Update operation.
	 *
	 * @param string $query        Query string.
	 * @param array  $parameters   Query parameters.
	 *
	 * @return int   Number of affected rows.
	 */
	abstract public function update($query, array $parameters = array());

	/**
	 * Delete operation.
	 *
	 * @param string $query        Query string.
	 * @param array  $parameters   Query parameters.
	 *
	 * @return int   Number of affected rows.
	 */
	abstract public function delete($query, array $parameters = array());

	/**
	 * Execute query.
	 *
	 * @param string $query        Query string.
	 * @param array  $parameters   Query parameters.
	 *
	 * @return void
	 */
	abstract public function query($query, array $parameters = array());
}