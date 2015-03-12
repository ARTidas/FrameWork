<?php

namespace Common;

/**
 * Common view abstract.
 *
 * @package    Common
 * @subpackage View
 */
abstract class ViewAbstract
{
	/**
	 * Display content.
	 *
	 * @return string   Content to display.
	 */
	abstract public function display();
}