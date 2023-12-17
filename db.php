<?php
$dbname = 'maths';
$dsn = "mysql:dbname=$dbname;host=db;port=3306;charset=utf8";
$user = 'maths';
$password = '1234';
$db = new PDO($dsn, $user, $password);
?>
