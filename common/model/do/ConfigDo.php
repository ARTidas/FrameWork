<?php

namespace Common;

/**
 * Configuration data object.
 *
 * @package    Common
 * @subpackage Do
 */
class ConfigDo extends SingletonAbstract
{
	/** Application: Common. */
	const APPLICATION_COMMON = 'Common';
	/** Application: Admin. */
	const APPLICATION_ADMIN  = 'Admin';
	/** Application: User. */
	const APPLICATION_USER   = 'User';

	/**
	 * Server root path.
	 *
	 * @var string
	 */
	protected $rootPath;

	/**
	 * Server root url.
	 *
	 * @var string
	 */
	protected $rootUrl;

	/**
	 * Root common folder.
	 *
	 * @var string
	 */
	protected $commonFolder;

	/**
	 * Application folder.
	 *
	 * @var string
	 */
	protected $applicationFolder;

	/**
	 * Controller class folder.
	 *
	 * @var string
	 */
	protected $classFolderController;

	/**
	 * Bo class folder.
	 *
	 * @var string
	 */
	protected $classFolderBo;

	/**
	 * Do class folder.
	 *
	 * @var string
	 */
	protected $classFolderDo;

	/**
	 * Model class folder.
	 *
	 * @var string
	 */
	protected $classFolderModel;

	/**
	 * Factory class folder.
	 *
	 * @var string
	 */
	protected $classFolderFactory;

	/**
	 * Singleton class folder.
	 *
	 * @var string
	 */
	protected $classFolderSingleton;

	/**
	 * Builder class folder.
	 *
	 * @var string
	 */
	protected $classFolderBuilder;

	/**
	 * View class folder.
	 *
	 * @var string
	 */
	protected $classFolderView;

	/**
	 * Helper class folder.
	 *
	 * @var string
	 */
	protected $classFolderHelper;

	/**
	 * Layout class folder.
	 *
	 * @var string
	 */
	protected $classFolderLayout;

	/**
	 * Dao class folder.
	 *
	 * @var string
	 */
	protected $classFolderDao;

	/**
	 * Data structure (DS) folder.
	 *
	 * @var string
	 */
	protected $classFolderDs;

	/**
	 * Public CSS folder.
	 *
	 * @var string
	 */
	protected $publicCssFolder;

	/**
	 * Public JavaScript folder.
	 *
	 * @var string
	 */
	protected $publicJsFolder;

	/**
	 * Database connection attributes.
	 *
	 * @var array
	 */
	protected $databaseDos = array();

	/**
	 * Get path root.
	 *
	 * @return string   Path Root.
	 */
	public function getRootPath()
	{
		return $this->rootPath;
	}

	/**
	 * Set path root.
	 *
	 * @param string $rootPath   Path root.
	 *
	 * @return $this
	 */
	public function setRootPath($rootPath)
	{
		$this->rootPath = (string)$rootPath;

		return $this;
	}

	/**
	 * Get url root.
	 *
	 * @return string   Url root.
	 */
	public function getRootUrl()
	{
		return $this->rootUrl;
	}

	/**
	 * Set url root.
	 *
	 * @param string $rootUrl   Url root.
	 *
	 * @return $this
	 */
	public function setRootUrl($rootUrl)
	{
		$this->rootUrl = (string)$rootUrl;

		return $this;
	}

	/**
	 * Get common folder path.
	 *
	 * @return string   Common folder path.
	 */
	public function getCommonFolder()
	{
		return $this->commonFolder;
	}

	/**
	 * Set common folder path.
	 *
	 * @param string $commonFolder   Common folder path.
	 *
	 * @return $this
	 */
	public function setCommonFolder($commonFolder)
	{
		$this->commonFolder = (string)$commonFolder;

		return $this;
	}

	/**
	 * Get application folder path.
	 *
	 * @return string   Application folder path.
	 */
	public function getApplicationFolder()
	{
		return $this->applicationFolder;
	}

	/**
	 * Set application folder path.
	 *
	 * @param string $applicationFolder   Application folder path.
	 *
	 * @return $this
	 */
	public function setApplicationFolder($applicationFolder)
	{
		$this->applicationFolder = (string)$applicationFolder;

		return $this;
	}

	/**
	 * Get controller class folder path.
	 *
	 * @return string   Controller class folder path.
	 */
	public function getClassFolderController()
	{
		return $this->classFolderController;
	}

	/**
	 * Set controller class folder path.
	 *
	 * @param string $classFolderController   Controller class folder path.
	 *
	 * @return $this
	 */
	public function setClassFolderController($classFolderController)
	{
		$this->classFolderController = (string)$classFolderController;

		return $this;
	}

	/**
	 * Get business object class folder path.
	 *
	 * @return string   Business object class folder path.
	 */
	public function getClassFolderBo()
	{
		return $this->classFolderBo;
	}

	/**
	 * Set business object class folder path.
	 *
	 * @param string $classFolderBo   Business object class folder path.
	 *
	 * @return $this
	 */
	public function setClassFolderBo($classFolderBo)
	{
		$this->classFolderBo = (string)$classFolderBo;

		return $this;
	}

	/**
	 * Get data object class folder path.
	 *
	 * @return string   Data object class folder path.
	 */
	public function getClassFolderDo()
	{
		return $this->classFolderDo;
	}

	/**
	 * Set data object class folder path.
	 *
	 * @param string $classFolderDo   Data object class folder path.
	 *
	 * @return $this
	 */
	public function setClassFolderDo($classFolderDo)
	{
		$this->classFolderDo = (string)$classFolderDo;

		return $this;
	}

	/**
	 * Get model folder path.
	 *
	 * @return string
	 */
	public function getClassFolderModel()
	{
		return $this->classFolderModel;
	}

	/**
	 * Set model folder path.
	 *
	 * @param string $classFolderModel   Model folder path.
	 *
	 * @return $this
	 */
	public function setClassFolderModel($classFolderModel)
	{
		$this->classFolderModel = (string)$classFolderModel;

		return $this;
	}

	/**
	 * Get factory class folder path.
	 *
	 * @return string   Factory class folder path.
	 */
	public function getClassFolderFactory()
	{
		return $this->classFolderFactory;
	}

	/**
	 * Set factory class folder path.
	 *
	 * @param string $classFolderFactory   Factory class folder path.
	 *
	 * @return $this
	 */
	public function setClassFolderFactory($classFolderFactory)
	{
		$this->classFolderFactory = (string)$classFolderFactory;

		return $this;
	}

	/**
	 * Get singleton class folder path.
	 *
	 * @return string   Singleton class folder path.
	 */
	public function getClassFolderSingleton()
	{
		return $this->classFolderSingleton;
	}

	/**
	 * Set singleton class folder path.
	 *
	 * @param string $classFolderSingleton   Singleton class folder path.
	 *
	 * @return $this
	 */
	public function setClassFolderSingleton($classFolderSingleton)
	{
		$this->classFolderSingleton = (string)$classFolderSingleton;

		return $this;
	}

	/**
	 * Get builder class folder path.
	 *
	 * @return string   Builder class folder path.
	 */
	public function getClassFolderBuilder()
	{
		return $this->classFolderBuilder;
	}

	/**
	 * Set builder class folder path.
	 *
	 * @param string $classFolderBuilder   Builder class folder path.
	 *
	 * @return $this
	 */
	public function setClassFolderBuilder($classFolderBuilder)
	{
		$this->classFolderBuilder = (string)$classFolderBuilder;

		return $this;
	}

	/**
	 * Get view class folder path.
	 *
	 * @return string   View class folder path.
	 */
	public function getClassFolderView()
	{
		return $this->classFolderView;
	}

	/**
	 * Set view class folder path.
	 *
	 * @param string $classFolderView   View class folder path.
	 *
	 * @return $this
	 */
	public function setClassFolderView($classFolderView)
	{
		$this->classFolderView = (string)$classFolderView;

		return $this;
	}

	/**
	 * Get helper class folder path.
	 *
	 * @return string   Helper class folder path.
	 */
	public function getClassFolderHelper()
	{
		return $this->classFolderHelper;
	}

	/**
	 * Set helper class folder path.
	 *
	 * @param string $classFolderHelper   Helper class folder path.
	 *
	 * @return $this
	 */
	public function setClassFolderHelper($classFolderHelper)
	{
		$this->classFolderHelper = (string)$classFolderHelper;

		return $this;
	}

	/**
	 * Get layout class folder path.
	 *
	 * @return string   Layout class folder path.
	 */
	public function getClassFolderLayout()
	{
		return $this->classFolderLayout;
	}

	/**
	 * Set layout class folder path.
	 *
	 * @param string $classFolderLayout   Layout class folder path.
	 *
	 * @return $this
	 */
	public function setClassFolderLayout($classFolderLayout)
	{
		$this->classFolderLayout = (string)$classFolderLayout;

		return $this;
	}

	/**
	 * Get data access object class folder path.
	 *
	 * @return string   Data access object class folder path.
	 */
	public function getClassFolderDao()
	{
		return $this->classFolderDao;
	}

	/**
	 * Set data access object class folder path.
	 *
	 * @param string $classFolderDao   Data access object class folder path.
	 *
	 * @return $this
	 */
	public function setClassFolderDao($classFolderDao)
	{
		$this->classFolderDao = (string)$classFolderDao;

		return $this;
	}

	/**
	 * Get data structure class folder path.
	 *
	 * @return string   Data structure class folder path.
	 */
	public function getClassFolderDs()
	{
		return $this->classFolderDs;
	}

	/**
	 * Set data structure class folder path.
	 *
	 * @param string $classFolderDs   Data structure class folder path.
	 *
	 * @return $this
	 */
	public function setClassFolderDs($classFolderDs)
	{
		$this->classFolderDs = (string)$classFolderDs;

		return $this;
	}

	/**
	 * Get CSS folder path.
	 *
	 * @return string   CSS folder path.
	 */
	public function getPublicCssFolder()
	{
		return $this->publicCssFolder;
	}

	/**
	 * Set CSS folder path.
	 *
	 * @param string $publicCssFolder   CSS folder path.
	 *
	 * @return $this
	 */
	public function setPublicCssFolder($publicCssFolder)
	{
		$this->publicCssFolder = (string)$publicCssFolder;

		return $this;
	}

	/**
	 * Get JavaScript folder path.
	 *
	 * @return string   JavaScript folder path.
	 */
	public function getPublicJsFolder()
	{
		return $this->publicJsFolder;
	}

	/**
	 * Set JavaScript folder path.
	 *
	 * @param string $publicJsFolder   JavaScript folder path.
	 *
	 * @return $this
	 */
	public function setPublicJsFolder($publicJsFolder)
	{
		$this->publicJsFolder = (string)$publicJsFolder;

		return $this;
	}

	/**
	 * Get database data objects.
	 *
	 * @return databaseDo[]   Database data objects.
	 */
	public function getDatabaseDos()
	{
		return $this->databaseDos;
	}

	/**
	 * Set database data objects.
	 *
	 * @param databaseDo[] $databaseDos   Database data objects.
	 */
	public function setDatabaseDos(array $databaseDos)
	{
		$this->databaseDos = $databaseDos;
	}

	/**
	 * Get database data object.
	 *
	 * @throws \Exception   If could not find database configuration.
	 *
	 * @param string $databaseName   Database name.
	 *
	 * @return DatabaseDo   Database data object.
	 */
	public function getDatabaseDo($databaseName)
	{
		if (!isset($this->databaseDos[$databaseName]))
		{
			throw new \Exception('Could not find connection configuration for database: "' . $databaseName . '"');
		}

		return $this->databaseDos[$databaseName];
	}

	/**
	 * Add database data object.
	 *
	 * @param DatabaseDo $databaseDo   Database data object.
	 *
	 * @return $this
	 */
	public function addDatabaseDo(DatabaseDo $databaseDo)
	{
		$this->databaseDos[$databaseDo->getName()] = $databaseDo;

		return $this;
	}
}