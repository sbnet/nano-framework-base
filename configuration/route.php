<?php
// You'll need to modify this file each time you make a new module

$_ROUTE = array(
    'Demo' => array(
        'routes' => array(
            'default' => array('route'=>'/:controller/:action'),
            'default_small' => array('route'=>'/:controller'),
        ),
        'default_controller'=> 'Accueil',
        'default_action' => 'index',
        'not_found' => 'Accueil/notfound'
    ),
);
