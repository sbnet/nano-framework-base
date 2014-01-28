<?php
/**
*   DON'T MAKE CHANGE TO THIS FILE
*/

if(!isset($GLOBALS['env']['environment']))
{
    $GLOBALS['env']['environment']='development';
}

define('ROOT_PATH', str_replace("\\", "/", __DIR__.'/..'));
define('NANO_VERSION', '1.0.0.alpha');
define('DIR_APP', ROOT_PATH.'/app/');
define('DIR_VENDOR', ROOT_PATH.'/vendor/');
define('DIR_PUBLIC', ROOT_PATH.'/public/');
define('DIR_TEMP', ROOT_PATH.'/temp/');
define('DIR_CACHE', DIR_TEMP.'cache/');
define('DIR_LOGS', ROOT_PATH.'/logs/');
define('DIR_CONFIG', ROOT_PATH.'/configuration/');

if(isset($GLOBALS['env']['MODULE_NAME']))
{
    $GLOBALS['env']['DIR_VIEWS'] = DIR_APP.$GLOBALS['env']['MODULE_NAME'].'/views/';
    $GLOBALS['env']['DIR_CONTROLLERS'] = DIR_APP.$GLOBALS['env']['MODULE_NAME'].'/Controllers/';
}

include DIR_VENDOR.'Autoload.php';

set_exception_handler(array('NanoFramework\Kernel\Exception', 'exception_handler'));
