<?php
$dbname = $_ENV['MYSQL_DATABASE'];
$dsn = "mysql:dbname=$dbname;host=db;port=3306;charset=utf8";
$user = $_ENV['MYSQL_USER'];
$password = $_ENV['MYSQL_PASSWORD'];
$db = new PDO($dsn, $user, $password);
