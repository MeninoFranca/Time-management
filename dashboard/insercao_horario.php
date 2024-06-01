<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "127.0.0.1:3306";
    $username = "u721539099_rooot";
    $password = "kSKZLaB2>";
    $dbname = "u721539099_Gestaohora";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }

    $data = $_POST['data'];
    $entrada = $_POST['entrada'];
    $inicio_almoco = $_POST['inicio_almoco'];
    $fim_almoco = $_POST['fim_almoco'];
    $saida = $_POST['saida'];

    $sql = "INSERT INTO horarios (data, entrada, inicio_almoco, fim_almoco, saida) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $data, $entrada, $inicio_almoco, $fim_almoco, $saida);
}
?>