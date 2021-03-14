<?php
$dbServername =  "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "teif";

try {
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
} catch(Exception $e) {
    die("Erro! Verifique a conexão com o banco de dados.");
}