<?php

namespace Common;

/**
 * PDO database handler business object.
 *
 * @package    Common
 * @subpackage Bo
 */
class PdoDatabaseHandlerBo extends DatabaseHandlerBoAbstract
{
	/**
	 * Database connection handler.
	 *
	 * @var \PDO
	 */
	protected $connection;

	/**
	 * Construct.
	 *
	 * @param DatabaseDo $databaseDo   Database data object.
	 */
	public function __construct(DatabaseDo $databaseDo)
	{
		$this->connection = new \PDO(
			$databaseDo->getType() . ':host=' . $databaseDo->getHost() . ';dbname=' . $databaseDo->getDatabase(),
			$databaseDo->getUser(),
			$databaseDo->getPassword()
		);
	}

	/**
	 * Execute query.
	 *
	 * @param string $query        Query string.
	 * @param array  $parameters   Query parameters.
	 *
	 * @return mixed   Query result.
	 */
	public function query($query, $parameters)
	{
		$statement = $this->connection->prepare($query);

		return $statement->execute($parameters);
	}
}