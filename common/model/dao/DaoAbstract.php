<?php

namespace Common;

/**
 * Data access object abstract.
 *
 * @package    Common
 * @subpackage Dao
 */
class DaoAbstract
{
	/**
	 * Database connection business object.
	 *
	 * @var DatabaseConnectionBo
	 */
	protected $databaseConnectionBo;

	/**
	 * Construct.
	 */
	public function __construct()
	{
		$databaseHandlerBoFactory = new DatabaseHandlerBoFactory();
		$databaseConnectionBo     = new DatabaseConnectionBo($databaseHandlerBoFactory);

		$this->databaseConnectionBo = $databaseConnectionBo;
	}
}