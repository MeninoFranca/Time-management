<?php
session_start();
header('Content-Type: application/json');

// Verificar se o usuário está logado
if (!isset($_SESSION['usuario_id'])) {
    echo json_encode(["error" => "Usuário não autenticado"]);
    exit;
}

$servername = "127.0.0.1:3306";
$username = "u721539099_rooot";
$password = "kSKZLaB2>";
$dbname = "u721539099_Gestaohora";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

?>
