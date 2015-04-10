<?php
/**
 * Log.
 */

include_once('model/ds/LogDs.php');
include_once('model/dao/LogDao.php');

set_error_handler('logHandler');

/**
 * Core error handler.
 *
 * @param int    $errorLevel     Error level.
 * @param string $errorMessage   Error message string.
 * @param string $errorFile      File where error occurred.
 * @param int    $errorLine      Error line number.
 * @param array  $errorContext   Error context.
 *
 * @return void
 */
function logHandler($errorLevel, $errorMessage, $errorFile, $errorLine, array $errorContext)
{
	$lodDo = (new \Common\LogDo())
		->setLevel($errorLevel)
		->setMessage($errorMessage)
		->setFile($errorFile)
		->setLine($errorLine)
		->setContext(var_export($errorContext, true))
	;

	\Common\LogBo::getInstance()->addlogDo($lodDo);
}