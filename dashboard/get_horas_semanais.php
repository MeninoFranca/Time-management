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
            CONCAT(
                FLOOR(SUM(TIME_TO_SEC(TIMEDIFF(IFNULL(saida, CURRENT_TIME), entrada)) / 3600)),
                ' horas ',
                FLOOR(MOD(SUM(TIME_TO_SEC(TIMEDIFF(IFNULL(saida, CURRENT_TIME), entrada))), 3600) / 60),
                ' minutos'
            ) AS TotalHorasTrabalhadas
        FROM RegistroHorario
        WHERE usuario_id = ? 
            AND data BETWEEN DATE_SUB(CURDATE(), INTERVAL 6 DAY) AND CURDATE()";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $usuario_id);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();
$totalHorasSemana = $data['TotalHorasTrabalhadas'];

echo $totalHorasSemana;

?>