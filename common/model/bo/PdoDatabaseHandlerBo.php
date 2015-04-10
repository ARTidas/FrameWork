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
	 * Database data object.
	 *
	 * @var DatabaseDo
	 */
	protected $databaseDo;

	/**
	 * Construct.
	 *
	 * @param DatabaseDo $databaseDo   Database data object.
	 */
	public function __construct(DatabaseDo $databaseDo)
	{
		$this->databaseDo = $databaseDo;
		$this->loadConnection();
	}

	/**
	 * Create (insert) operation.
	 *
	 * @param string $query        Query string.
	 * @param array  $parameters   Query parameters.
	 *
	 * @return int   Number of affected rows.
	 */
	public function create($query, array $parameters = array())
	{
		$statement = $this->connection->prepare($query);
		$statement->execute($parameters);

		return $statement->rowCount();
	}

	/**
	 * Read operation.
	 *
	 * @param string $query        Query string.
	 * @param array  $parameters   Query parameters.
	 *
	 * @return array   Found records.
	 */
	public function read($query, array $parameters = array())
	{
		$statement = $this->connection->prepare($query);
		$statement->execute($parameters);

		return $statement->fetchAll(\PDO::FETCH_ASSOC);
	}

	/**
	 * Update operation.
	 *
	 * @param string $query        Query string.
	 * @param array  $parameters   Query parameters.
	 *
	 * @return int   Number of affected rows.
	 */
	public function update($query, array $parameters = array())
	{
		$statement = $this->connection->prepare($query);
		$statement->execute($parameters);

		return $statement->rowCount();
	}

	/**
	 * Delete operation.
	 *
	 * @param string $query        Query string.
	 * @param array  $parameters   Query parameters.
	 *
	 * @return int   Number of affected rows.
	 */
	public function delete($query, array $parameters = array())
	{
		$statement = $this->connection->prepare($query);
		$statement->execute($parameters);

		return $statement->rowCount();
	}

	/**
	 * Execute query.
	 *
	 * @param string $query        Query string.
	 * @param array  $parameters   Query parameters.
	 *
	 * @return void
	 */
	public function query($query, array $parameters = array())
	{
		$statement = $this->connection->prepare($query);
		$statement->execute($parameters);
	}

	/**
	 * Load database connection.
	 *
	 * @throws \Exception   If invalid database type encountered.
	 *
	 * @return void
	 */
	protected function loadConnection()
	{
		switch($this->databaseDo->getType())
		{
			case DatabaseHandlerBoFactory::DATABASE_TYPE_MYSQL:
				$this->connection = new \PDO(
					$this->databaseDo->getType() . ':host=' . $this->databaseDo->getHost() . ';dbname='
						. $this->databaseDo->getDatabase(),
					$this->databaseDo->getUser(),
					$this->databaseDo->getPassword()
				);
				break;

			case DatabaseHandlerBoFactory::DATABASE_TYPE_SQLITE:
				$this->connection = new \PDO(
					$this->databaseDo->getType() . ':' . ConfigDo::getInstance()->getRootPath() . DIRECTORY_SEPARATOR
						. $this->databaseDo->getFile()
				);
				$this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
				break;

			default:
				throw new \Exception('Invalid database type encountered: "' . $this->databaseDo->getType() . '"');
		}
	}
}