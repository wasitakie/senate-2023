<?php

$host = 'localhost';
$username = 'root';
$password = 'root';
$db = 'db_senate';


date_default_timezone_set('Asia/Bangkok');
$coon  = new PDO("mysql:host=$host;dbname=$db", $username, $password);
$coon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$coon->exec("set names utf8");
