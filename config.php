<?php

// host
$host = "http://localhost/crud";

// db
$dbName = 'crud_usuario';
$dbHost = 'localhost';
$dbUser = 'gabi';
$dbPass = 'senha';

try {
    $conn = mysqli_connect($dbHOst, $dbUser, $dbPass, $dbName);   
} catch (\Throwable $th) {
    throw $th;
}