<?php

// 設定ファイルの読み込み
$ini_file = 'profile.ini';
$parsed_ini = parse_ini_file($ini_file);

// 設定ファイルの内容を変数として定義
define('DBNAME', $parsed_ini['database_name']);
define('DBHOST', $parsed_ini['database_host']);
define('DBUSER', $parsed_ini['database_user']);
define('DBPASS', $parsed_ini['database_password']);
