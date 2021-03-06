<?php
/**
* General Configuration
*
* @package Configuration
* @author Stéphane BRUN <stephane@sbnet.fr>
*/
include "global_config.php";
include "environment.php";

$container = NanoFramework\Kernel\Seringue::get_instance();
$container->configuration = array(
    'view' => array(
        'engine' => 'NanoFrameworkPlugins\ViewEngine\Php\Engine'
    )
);

include DIR_CONFIG."environments/{$GLOBALS['env']['environment']}.php";

date_default_timezone_set('Europe/Paris');
if(isset($GLOBALS['env']['MODULE_NAME']))
{
    $GLOBALS['env']['locale']['charset'] = 'utf8';
    $GLOBALS['env']['locale']['path'] = DIR_APP.$GLOBALS['env']['MODULE_NAME'].'/locales/';
    $GLOBALS['env']['locale']['default_culture']='fr_FR';
}

// Load modules config here
include DIR_APP."Demo/configuration/demo.php";
