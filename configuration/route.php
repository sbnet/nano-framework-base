<?php
// You'll need to modify this file each time you make a new module

$_ROUTE = array(
    'Demo' => array(
        'routes' => array(
            'default' => array('route'=>'/:controller/:action'),
            'default_small' => array('route'=>'/:controller'),
        ),
        'default_controller'=> '\Demo\Controllers\Home',
        'default_action' => 'index',
        'not_found' => 'Home/notfound'
    ),
);
