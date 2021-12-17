<?php
    $dbname = 'maths';
    $dsn = "mysql:dbname=$dbname;host=localhost;charset=utf8";
    $user = 'maths';
    $password = '1234';
    $db = new PDO($dsn, $user, $password);
?>