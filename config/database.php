<?php

use Illuminate\Database\Capsule\Manager as DB;

global $wpdb;
global $table_prefix;
$capsule = new DB;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => DB_HOST,
    'database'  => DB_NAME,
    'username'  => DB_USER,
    'password'  => DB_PASSWORD,
    'charset'   => DB_CHARSET,
    'collation' => $wpdb->collate,
    'prefix'    => $table_prefix,
]);

$capsule->setAsGlobal();

$capsule->bootEloquent();