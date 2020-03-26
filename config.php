<?php

$db['db_host']       = "localhost";
$db['db_driver']     = "mysql";
$db['db_name']       = "my_blog";
$db['db_username']   = "root";
$db['db_pass']       = "";
$db['db_charset']    = "utf8";
$db['db_collation']  = "utf8_unicode_ci";
$db['db_prefix']     = "";

foreach($db as $key => $value){
    
    define(strtoupper($key), $value);
    
}
