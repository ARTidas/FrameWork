<?php

namespace Common;

/**
 * Configuration data object.
 *
 * @package    Common
 * @subpackage Do
 */
class ConfigDo
{
	/** Application: Common. */
	const APPLICATION_COMMON = 'Common';
	/** Application: Site. */
	const APPLICATION_SITE   = 'Site';
	/** Application: User. */
	const APPLICATION_USER   = 'User';

	/** Database type: mysql. */
	const DATABASE_TYPE_MYSQL   = 'mysql';
	/** Database type: mongodb. */
	const DATABASE_TYPE_MONGODB = 'mongodb';

	/** @var string   Request url root. */
	public static $root;
	/** @var string   Root common folder. */
	public static $commonFolder;
	/** @var string   Application folder. */
	public static $applicationFolder;
	/** @var string   Controller class folder. */
	public static $classFolderController;
	/** @var string   Bo class folder. */
	public static $classFolderBo;
	/** @var string   Do class folder. */
	public static $classFolderDo;
	/** @var string   Model class folder. */
	public static $classFolderModel;
	/** @var string   Factory class folder. */
	public static $classFolderFactory;
	/** @var string   View class folder. */
	public static $classFolderView;
	/** @var string   Dao class folder. */
	public static $classFolderDao;
	/** @var string   Public CSS folder. */
	public static $publicCssFolder;
	/** @var array  Database connection attributes. */
	public static $databases = array();

	/**
	 * Get database data object.
	 *
	 * @throws \Exception   If could not find database configuration.
	 *
	 * @param string $databaseName
	 *
	 * @return DatabaseDo   Database data object.
	 */
	public static function getDatabaseDo($databaseName)
	{
		if (!isset(self::$databases[$databaseName]))
		{
			throw new \Exception('Could not find connection configuration for database: "' . $databaseName . '"');
		}

		return self::$databases[$databaseName];
	}
}