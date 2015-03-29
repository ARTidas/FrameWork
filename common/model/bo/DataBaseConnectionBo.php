<?php

namespace Common;

/**
 * Database connection business object.
 *
 * @package    Common
 * @subpackage Bo
 */
class DatabaseConnectionBo
{
	/**
	 * Database handler business object factory.
	 *
	 * @var DatabaseHandlerBoFactory
	 */
	protected $databaseHandlerBoFactory;

	/**
	 * Construct.
	 *
	 * @param DatabaseHandlerBoFactory $databaseHandlerBoFactory   Database handler business object factory.
	 */
	public function __construct(DatabaseHandlerBoFactory $databaseHandlerBoFactory)
	{
		$this->databaseHandlerBoFactory = $databaseHandlerBoFactory;
	}

	/**
	 * Get database handler by database name.
	 *
	 * @param string $databaseName   Database name.
	 *
	 * @return DatabaseHandlerBoAbstract
	 */
	public function getHandler($databaseName)
	{
		$databaseDo = ConfigDo::getDatabaseDo($databaseName);

		return $this->databaseHandlerBoFactory->get($databaseDo);
	}
}