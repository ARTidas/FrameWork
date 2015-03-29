<?php

namespace Common;

/**
 * Database handler business object factory.
 *
 * @package    Common
 * @subpackage Factory
 */
class DatabaseHandlerBoFactory
{
	/**
	 * Instantiated handlers.
	 *
	 * @var DatabaseHandlerBoAbstract[]
	 */
	protected $handlers = array();

	/**
	 * Get database handler business object by database data object.
	 *
	 * @param DatabaseDo $databaseDo   Database data object.
	 *
	 * @throws \Exception   If invalid database type encountered.
	 *
	 * @return DatabaseHandlerBoAbstract
	 */
	public function get(DatabaseDo $databaseDo)
	{
		if (isset($this->handlers[$databaseDo->getName()]))
		{
			return $this->handlers[$databaseDo->getName()];
		}

		switch ($databaseDo->getType())
		{
			case ConfigDo::DATABASE_TYPE_MYSQL:
				$this->handlers[$databaseDo->getName()] = new PdoDatabaseHandlerBo($databaseDo);
				return $this->handlers[$databaseDo->getName()];
				break;

			default:
				throw new \Exception('Invalid database type encountered: "' . $databaseDo->getType() . '"');
		}
	}
}