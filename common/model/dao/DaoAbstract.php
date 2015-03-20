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
	 * @var DataBaseConnectionBo
	 */
	protected $dataBaseConnectionBo;

	/**
	 * Get database connection.
	 *
	 * @param DataBaseConnectionBo $dataBaseConnectionBo   Database connection business object.
	 */
	protected function __construct($dataBaseConnectionBo)
	{
		$this->dataBaseConnectionBo = $dataBaseConnectionBo;
	}
}