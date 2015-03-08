<?php

namespace Core;

/**
 * Configuration data object.
 *
 * @package    Core
 * @subpackage Do
 */
class ConfigDo
{
	/** @var string   Request url root. */
	public static $root;
	/** @var string   Core include folder. */
	public static $coreIncludeFolder;
	/** @var string   Core application folder. */
	public static $coreApplicationFolder;
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
}