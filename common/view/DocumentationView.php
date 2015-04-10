<?php

namespace Common;

/**
 * Layout view.
 *
 * @package    Common
 * @subpackage View
 */
class DocumentationView extends ViewAbstract
{
	/**
	 * Load content.
	 *
	 * @return void
	 */
	protected function loadContent()
	{
		$this->content = '<h1>FrameWork documentation</h1>
<ul>
	<li><a href="#admin-tools">Administration tools</a></li>
	<li><a href="#create-new-application">Create new application</a></li>
	<li><a href="#create-new-class-type">Create new class type</a></li>
</ul>
<hr/>

<h2 id="admin-tools">Administration tools</h2>
<p><a href="' . UrlHelper::getInstance()->getUrl('log', ConfigDo::APPLICATION_ADMIN) . '" target="_blank">Log viewer</a></p>

<h2 id="create-new-application">Create new application</h2>
<p>To create a new application, follow these steps:</p>
<ol>
	<li>
		<p>
			Create folder for the application in the:
			<span class="code">/' . ConfigDo::getInstance()->getApplicationFolder() . '</span> folder.
		</p>
	</i>
</ol>

<h2 id="create-new-class-type">Create new class type</h2>
<p>
	The FrameWork uses an AutoLoader for including class files.
	For evading class list generators,
	every class has its own separate file and every class type has its own folder path in the application structure.
	Class types at the end of the class names are mandatory,
	as this indicates the class type for the AutoLoader.
</p>
<p>To create a new class type follow these steps:</p>
<ol>
	<li>
		Create a protected attribute in the Config data object
		(<span class="code">' . ConfigDo::getInstance()->getClassFolderDo() . '</span>) for storing the folder path.
	</li>
	<li>
		Create getter and setter method for the protected attribute.
	</li>
	<li>
		Set the new class type path in the <span class="code">config.php</span>
		file with the previously created setter method.
	</li>
	<li>
		Create a constant with the value of the new class type in the
		<span class="code">Class business object.</span>
	</li>
	<li>
		List the created constant in the <span class="code">$classTypes</span> protected attribute.
	</li>
	<li>
		Create a <span class="code">case</span> branch in the <span class="code">getClassRoutePartByType</span>
		methods <span class="code">switch</span> for the class type.
	</li>
</ol>
<p>TODO:</p>
<ul>
	<li>Change class type source from class name to php doc block @subpackage attribute.</li>
</ul>


			<!-- <p>To create a new application, follow these steps:
				<ol>
					<li>
						<p>Create folder for the application in the:
						<span class="code">/' . ConfigDo::getInstance()->getApplicationFolder() . '</span> folder.</p>
					</li>
					<li>
						<p>
							Create the "/' . ConfigDo::getInstance()->getApplicationFolder() . '/ApplicationName/'
							. ConfigDo::getInstance()->getClassFolderBo() . '/ApplicationBo.php" file with the appropriate content:
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
							Implement the created file in the <span class="code">/' . ConfigDo::getInstance()->getCommonFolder() . '/' . ConfigDo::getInstance()->getClassFolderFactory() . '/ApplicationBoFactory</span>
							class, by adding <span class="code">use</span> entry:
							<div class="code">use \User\ApplicationBo as UserApplicationBo;</div>
						</p>
					</li>
					<li>
						<p>
							Create a constant for the application with the application name in the
							<span class="code">/' . ConfigDo::getInstance()->getCommonFolder() . '/' . ConfigDo::getInstance()->getClassFolderFactory() . '/ApplicationBoFactory class</span>
							class:
							<div class="code">/** Application: User. */
const APPLICATION_USER   = \'User\';</div>
						</p>
					</li>
					<li>
						<p>
							Create a <span class="code">case</span> part for the <span class="code">switch</span> in the
							<span class="code">/' . ConfigDo::getInstance()->getCommonFolder() . '/' . ConfigDo::getInstance()->getClassFolderFactory() . '/ApplicationBoFactory class</span>
							file:
						</p>
						<div class="code">case strtolower(self::APPLICATION_USER):
	return new UserApplicationBo(
		self::APPLICATION_ADMIN,
		\'/\' . ConfigDo::$applicationFolder . \'/\' . strtolower(self::APPLICATION_ADMIN)
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