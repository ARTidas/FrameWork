<?php

namespace Admin;

use Common\ControllerAbstract;
use Common\JsonLayout;
use Common\JsonLayoutDo;
use Common\JsonView;
use Common\JsonViewDo;
use Common\LogBo;
use Common\HtmlLayoutDo;
use Common\HtmlLayout;

/**
 * Admin actions.
 *
 * @package    Admin
 * @subpackage Controller
 */
class LogController extends ControllerAbstract
{
	/**
	 * Display log.
	 *
	 * @return string   HTML output.
	 */
	public function displayLog()
	{
		$logDos = LogBo::getInstance()->getLogDos();

		$viewDo = (new LogViewDo())
			->setLogDos($logDos)
		;
		$view   = new LogView($viewDo);

		$layoutDo = (new HtmlLayoutDo)
			->setHeaders(array(self::HEADER_HTML))
			->setTitle('Log')
			->setCss('log.css')
			->addJs('jquery.min.js')
			->addJs('log.js')
			->addMetaTag('<meta http-equiv="refresh" content="120">')
		;
		$layout   = new HtmlLayout($layoutDo, $view);

		$layout->display();
	}

	/**
	 * Get new log records.
	 *
	 * @param int $lastLogRecordId   Last log record identifier.
	 *
	 * @return string   JSON output.
	 */
	public function getNewLogs($lastLogRecordId = 0)
	{
		$newLogRecords = LogBo::getInstance()->getNewLogRecords($lastLogRecordId);

		$viewDo = (new JsonViewDo())
			->setContent(json_encode($newLogRecords));
		;
		$view   = new JsonView($viewDo);

		$layoutDo = (new JsonLayoutDo())
			->addHeader(self::HEADER_JSON)
			->setSuccess(true)
		;
		$layout   = new JsonLayout($layoutDo, $view);

		$layout->display();
	}
}