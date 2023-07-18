<?php

$host = "localhost";
$user = "root";
$password = "";
$dbName = "cadastro";

try {
    $conn = new PDO("mysql:dbname=$dbName;host=$host;port=3306" , $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>