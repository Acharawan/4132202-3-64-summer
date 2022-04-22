<!-- conDB.php -->
<?php

$host = "mysql";
$user = "root";
$pass = "1234";
$db = "db_test";
$port = 3306;

try {
    $mysqli = new mysqli($host, $user, $pass, $db);
    $mysqli->query("SET NAMES utf8");
    // $mysqli->set_charset("utf8")
} catch (Exception $e) {
    echo $e->getMessage();
}