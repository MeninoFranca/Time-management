<?php

include 'autentica.php';
header('Content-Type: application/json');

$servername = "127.0.0.1:3306";
$username = "u721539099_rooot";
$password = "kSKZLaB2>";
$dbname = "u721539099_Gestaohora";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$usuario_id = $_SESSION['usuario_id'];

?>