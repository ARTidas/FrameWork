<?php

namespace Common;

/**
 * Layout view.
 *
 * @package    Common
 * @subpackage View
 */
class LayoutView extends ViewAbstract
{
	/**
	 * Load content.
	 *
	 * @return void
	 */
	protected function loadContent()
	{
		$this->content = '<!DOCTYPE html>
<html>
	<head>
		<title>' . $this->viewDo->getTitle() . '</title>
		<link rel="stylesheet" href="' . ConfigDo::$publicCssFolder . '/' . $this->viewDo->getCss() . '" \>
	</head>
	<body>
		<div id="cMain">

			<h1>' . $this->viewDo->getHeader1() . '</h1>
			<ul>
				<li><a href="#create-new-application">Create new application</a></li>
			</ul>
			<hr/>

			<h2 id="create-new-application">Create new application</h2>

			<p>To create a new application, follow these steps:</p>
			<ol>
				<li>
					<p>
						Create folder for the application in the:
						<span class="code">/' . ConfigDo::$applicationFolder . '</span> folder.
					</p>
				</li>
			</ol>


			<!-- <p>To create a new application, follow these steps:
				<ol>
					<li>
						<p>Create folder for the application in the:
						<span class="code">/' . ConfigDo::$applicationFolder . '</span> folder.</p>
					</li>
					<li>
						<p>
							Create the "/' . ConfigDo::$applicationFolder . '/ApplicationName/'
							. ConfigDo::$classFolderBo . '/ApplicationBo.php" file with the appropriate content:
						</p>
						<div class="code">&lt;?php

namespace User;

use \Common\ApplicationBoAbstract;

/**
 * User application business object.
 *
 * @package    User
 * @subpackage Bo
 */
class ApplicationBo extends ApplicationBoAbstract
{
}						</div>
					</li>
					<li>
						<p>
							Implement the created file in the <span class="code">/' . ConfigDo::$commonFolder . '/' . ConfigDo::$classFolderFactory . '/ApplicationBoFactory</span>
							class, by adding <span class="code">use</span> entry:
							<div class="code">use \User\ApplicationBo as UserApplicationBo;</div>
						</p>
					</li>
					<li>
						<p>
							Create a constant for the application with the application name in the
							<span class="code">/' . ConfigDo::$commonFolder . '/' . ConfigDo::$classFolderFactory . '/ApplicationBoFactory class</span>
							class:
							<div class="code">/** Application: User. */
const APPLICATION_USER   = \'User\';</div>
						</p>
					</li>
					<li>
						<p>
							Create a <span class="code">case</span> part for the <span class="code">switch</span> in the
							<span class="code">/' . ConfigDo::$commonFolder . '/' . ConfigDo::$classFolderFactory . '/ApplicationBoFactory class</span>
							file:
						</p>
						<div class="code">case strtolower(self::APPLICATION_USER):
	return new UserApplicationBo(
		self::APPLICATION_SITE,
		\'/\' . ConfigDo::$applicationFolder . \'/\' . strtolower(self::APPLICATION_SITE)
	);
	break;  </div>
					</li>
					<li>
						<p>
							Create routing for the application.
						</p>
					</li>
				</ol>
			</p>-->


		</div>
	</body>
</html>'
		;
	}
}