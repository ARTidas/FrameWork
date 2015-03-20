<?php
/**
 * Config.
 */

include_once('model/do/ConfigDo.php');

Common\ConfigDo::$commonFolder          = 'common';
Common\ConfigDo::$applicationFolder     = 'application';
Common\ConfigDo::$classFolderBo         = 'model/bo';
Common\ConfigDo::$classFolderFactory    = 'model/factory';
Common\ConfigDo::$classFolderDo         = 'model/do';
Common\ConfigDo::$classFolderController = 'controller';
Common\ConfigDo::$classFolderView       = 'view';
Common\ConfigDo::$publicCssFolder       = 'public/css';