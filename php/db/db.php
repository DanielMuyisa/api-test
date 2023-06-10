<?php

$servername = "localhost";
$database = "store";
$username = "apt";
$password = "root0";
$charset = "utf8mb4";

try {

    $dsn = "mysql:host=$servername;dbname=$database;charset=$charset";
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    return $pdo;

}

catch (PDOException $e)

{
    die($e->getMessage());
}

?>