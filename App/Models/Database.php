<?php
 
namespace Models; 
use Illuminate\Database\Capsule\Manager as Capsule;
 
class Database {
 //data base connection
    function __construct() {
    $capsule = new Capsule;
    $capsule->addConnection([
    'driver'   => DB_DRIVER,
    'host'     => DB_HOST,
    'database' => DB_NAME,
    'username' => DB_USERNAME,
    'password' => DB_PASS,
    'charset'  => DB_CHARSET,
    'collation'=> DB_COLLATION,
    'prefix'   => DB_PREFIX
    ]);
    // Setup the Eloquent ORM… 
    $capsule->bootEloquent();
}
 
}