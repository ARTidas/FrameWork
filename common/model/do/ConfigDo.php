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
}