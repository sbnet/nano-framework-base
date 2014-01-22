<?php
$_SECURITY = array(
    "Demo" => array(
        "Accueil" => array(
            "secret" => "(admin || god) && !newbee",
        ),

        "deny_page" => "/denied",
        "login_page" => "/login",
    ),
);
