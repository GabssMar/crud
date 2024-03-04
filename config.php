<?php

// host
$host = "http://localhost/crud";

// db
$dbName = 'crud_usuario';
$dbHost = 'localhost';
$dbUser = 'gabi';
$dbPass = 'senha';

try {
    $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
} catch (\Throwable $th) {
    throw $th;
}
