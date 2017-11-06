<?php
// App configuration
$dbParams = [
    'driver' => 'pdo_sqlite',
    'path' => __DIR__.'/../data/tp2.db'
];

//Un exemple de connexion mysql
/*
$dbParams = [
    'driver' => 'pdo_mysql',
    'host' => '127.0.0.1',
    'dbname' => 'PHP_TP2',
    'user' => 'root',
    'password' => 'root'
];
*/
// Dev mode?
$dev = true;