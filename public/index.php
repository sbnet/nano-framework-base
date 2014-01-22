<?php
/**
*
* @author Stéphane BRUN
*/
use NanoFramework\Kernel;

$GLOBALS['env']['MODULE_NAME'] = 'Demo';

require_once('../configuration/configuration.php');

Kernel\Dispatcher::get_instance()->dispatch();
