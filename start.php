<?php
session_start();
ob_start();
require "config.php";
require "vendor/autoload.php";
use Models\Database;
//Initialize Illuminate Database Connection
new Database();