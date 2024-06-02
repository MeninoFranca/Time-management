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

$sql = "SELECT data, entrada, inicio_almoco, fim_almoco, saida 
        FROM horarios 
        WHERE MONTH(data) = MONTH(CURRENT_DATE()) 
        AND YEAR(data) = YEAR(CURRENT_DATE()) 
        AND usuario_id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $usuario_id);
$stmt->execute();
$result = $stmt->get_result();

$horarios = [];
while ($row = $result->fetch_assoc()) {
    $horarios[] = $row;
}

$stmt->close();
$conn->close();

echo json_encode($horarios);
?>
