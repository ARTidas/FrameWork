<?php

namespace Common;

/**
 * Log data structure.
 *
 * @package    Common
 * @subpackage Ds
 */
class LogDs
{
	/** Database name */
	const DATABASE_NAME = 'log';
	/** Table name */
	const TABLE_NAME    = 'log';
	/** File name. */
	const FILE_NAME     = 'log';

	/** Field: unique identifier. */
	const FIELD_ID         = 'id';
	/** Field: creation time. */
	const FIELD_CREATED_AT = 'created_at';
	/** Field: error level. */
	const FIELD_LEVEL      = 'level';
	/** Field: error message. */
	const FIELD_MESSAGE    = 'message';
	/** Field: file, where error occurred. */
	const FIELD_FILE       = 'file';
	/** Field: error line. */
	const FIELD_LINE       = 'line';
	/** Field: error context. */
	const FIELD_CONTEXT    = 'context';
}