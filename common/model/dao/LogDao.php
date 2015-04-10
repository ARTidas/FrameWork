<?php

namespace Common;

/**
 * Log data access object.
 *
 * @package    Common
 * @subpackage Dao
 */
class LogDao extends DaoAbstract
{
	/**
	 * Create log records.
	 *
	 * @param LogDo $logDo   Log data object.
	 *
	 * @return boolean   True on success, false otherwise.
	 */
	public function create(LogDo $logDo)
	{
		$databaseHandlerBo = $this->databaseConnectionBo->getHandler(LogDs::DATABASE_NAME);

		$queryString = '/* ' . __METHOD__ .' */
			INSERT INTO
				`' . LogDs::TABLE_NAME . '`
			(
				`' . LogDs::FIELD_CREATED_AT . '`,
				`' . LogDs::FIELD_LEVEL . '`,
				`' . LogDs::FIELD_MESSAGE . '`,
				`' . LogDs::FIELD_FILE . '`,
				`' . LogDs::FIELD_LINE . '`,
				`' . LogDs::FIELD_CONTEXT . '`
			)
			VALUES
			(
				datetime(\'now\'),
				:' . LogDs::FIELD_LEVEL . ',
				:' . LogDs::FIELD_MESSAGE . ',
				:' . LogDs::FIELD_FILE . ',
				:' . LogDs::FIELD_LINE . ',
				:' . LogDs::FIELD_CONTEXT . '
			)
		';
		$queryParams = array(
			':' . LogDs::FIELD_LEVEL   => $logDo->getLevel(),
			':' . LogDs::FIELD_MESSAGE => $logDo->getMessage(),
			':' . LogDs::FIELD_FILE    => $logDo->getFile(),
			':' . LogDs::FIELD_LINE    => $logDo->getLine(),
			':' . LogDs::FIELD_CONTEXT => var_export($logDo->getContext(), true),
		);

		$databaseHandlerBo->query($queryString, $queryParams);
	}

	/**
	 * Get log records.
	 *
	 * @return array   Log records.
	 */
	public function getLogRecords()
	{
		$databaseHandlerBo = $this->databaseConnectionBo->getHandler(LogDs::DATABASE_NAME);

		$queryString = '/* ' . __METHOD__ .' */
			SELECT
				`' . LogDs::FIELD_ID . '`,
				`' . LogDs::FIELD_CREATED_AT . '`,
				`' . LogDs::FIELD_LEVEL . '`,
				`' . LogDs::FIELD_MESSAGE . '`,
				`' . LogDs::FIELD_FILE . '`,
				`' . LogDs::FIELD_LINE . '`,
				`' . LogDs::FIELD_CONTEXT . '`
			FROM
				`' . LogDs::TABLE_NAME . '`
			ORDER BY
				`' . LogDs::FIELD_ID . '`
				DESC
			LIMIT
				20
		';

		return $databaseHandlerBo->read($queryString);
	}

	/**
	 * Get new log records.
	 *
	 * @param int $lastLogRecordId   Last log record identifier.
	 *
	 * @return array   Log records.
	 */
	public function getNewLogRecords($lastLogRecordId)
	{
		$databaseHandlerBo = $this->databaseConnectionBo->getHandler(LogDs::DATABASE_NAME);

		$queryString = '/* ' . __METHOD__ .' */
			SELECT
				`' . LogDs::FIELD_ID . '`,
				`' . LogDs::FIELD_CREATED_AT . '`,
				`' . LogDs::FIELD_LEVEL . '`,
				`' . LogDs::FIELD_MESSAGE . '`,
				`' . LogDs::FIELD_FILE . '`,
				`' . LogDs::FIELD_LINE . '`,
				`' . LogDs::FIELD_CONTEXT . '`
			FROM
				`' . LogDs::TABLE_NAME . '`
			WHERE
				`' . LogDs::FIELD_ID . '` > :' . LogDs::FIELD_ID . '
			ORDER BY
				`' . LogDs::FIELD_ID . '`
				DESC
			LIMIT
				100
		';

		$queryParameters = array(
			':' . LogDs::FIELD_ID => $lastLogRecordId,
		);

		return $databaseHandlerBo->read($queryString, $queryParameters);
	}
}