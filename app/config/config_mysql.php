<?php

// Database setup

return [
    'dsn'             => "dsn?",
    'username'        => "username?",
    'password'        => "password?",
    'driver_options'  => [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"],
    'table_prefix'    => 'audiobox_',
    'verbose' 		  => false,
    //'debug_connect' => 'true',
];
