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


$sql = "SELECT 
            DATE_FORMAT(data, '%d/%m/%Y') AS dia,
            SEC_TO_TIME(SUM(
                TIME_TO_SEC(TIMEDIFF(IFNULL(saida, CURRENT_TIME), entrada)) - 
                IFNULL(TIME_TO_SEC(TIMEDIFF(IFNULL(fim_almoco, CURRENT_TIME), inicio_almoco)), 0)
            )) AS horas_trabalhadas
        FROM RegistroHorario
        WHERE MONTH(data) = MONTH(CURRENT_DATE()) 
        AND YEAR(data) = YEAR(CURRENT_DATE()) 
        AND DAYOFWEEK(data) != 1
        AND usuario_id = ?
        GROUP BY dia
        ORDER BY data";
        
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $usuario_id);
$stmt->execute();
$result = $stmt->get_result();

$data = [];

while ($row = $result->fetch_assoc()) {
    $data[$row['dia']] = $row['horas_trabalhadas'];
}

echo json_encode($data);

$stmt->close();
$conn->close();

?>