<?php
use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

$db = new DB;

$db->addConnection([
   'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'saweb_bd',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);

$db->setEventDispatcher(new Dispatcher(new Container()));
$db->setAsGlobal();
$db->bootEloquent();