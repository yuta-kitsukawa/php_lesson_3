<?php

define('DATABASE_NAME', 'creators_hive_login');
define('DATABASE_USER', 'root');
define('DATABASE_PASSWORD', 'root');
define('DATABASE_HOST', 'localhost');

define('PDO_DNS', 'mysql:dbname=' . DATABASE_NAME . ';host=' . DATABASE_HOST . '; charset=utf-8');

require_once('../lib/functions.php');
require_once('autoload.php');

session_start();
