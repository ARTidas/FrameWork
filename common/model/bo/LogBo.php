<?php

namespace Common;

/**
 * Log business object for errors, notices and messages.
 *
 * @package    Common
 * @subpackage Bo
 */

class LogBo extends SingletonAbstract
{
	/**
	 * Log data object.
	 *
	 * @var LogDo[]
	 */
	protected $logDos = array();

	/**
	 * Add log data object.
	 *
	 * @param LogDo $lodDo   Log data object.
	 */
	public function addLogDo(LogDo $lodDo)
	{
		$this->logDos[] = $lodDo;
	}

	/**
	 * Destruct.
	 */
	public function __destruct()
	{
		$log = $this->getLog();

		if (empty($log))
		{
			return;
		}

		$logDao = new LogDao();

		foreach ($this->logDos as $logDo)
		{
			$logDao->create($logDo);
		}
	}

	/**
	 * Get log.
	 *
	 * @return string   Log.
	 */
	protected function getLog()
	{
		$log = '';

		foreach($this->logDos as $logDo)
		{
			$log .= (string)$logDo . PHP_EOL;
		}

		return $log;
	}

	/**
	 * Get log data objects.
	 *
	 * @return LogDo[]
	 */
	public function getLogDos()
	{
		$logDao       = new LogDao();
		$logDoRecords = $logDao->getLogRecords();
		$logDos       = array();

		foreach ($logDoRecords as $logRecord)
		{
			$logDos[] = (new LogDo())
				->setId($logRecord[LogDs::FIELD_ID])
				->setCreatedAt($logRecord[LogDs::FIELD_CREATED_AT])
				->setLevel($logRecord[LogDs::FIELD_LEVEL])
				->setMessage($logRecord[LogDs::FIELD_MESSAGE])
				->setFile($logRecord[LogDs::FIELD_FILE])
				->setLine($logRecord[LogDs::FIELD_LINE])
				->setContext($logRecord[LogDs::FIELD_CONTEXT])
			;
		}

		return $logDos;
	}

	/**
	 * Get new log data records.
	 *
	 * @param int $lastLogRecordId   Last log record identifier.
	 *
	 * @return array   Log records
	 */
	public function getNewLogRecords($lastLogRecordId)
	{
		$logDao = new LogDao();

		return $logDao->getNewLogRecords($lastLogRecordId);
	}
}