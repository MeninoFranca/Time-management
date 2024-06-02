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

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id FROM usuarios WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Erro na preparação da consulta: " . $conn->error);
    }

    $stmt->bind_param("ss", $username, $password);

    if (!$stmt->execute()) {
        die("Erro na execução da consulta: " . $stmt->error);
    }

    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id);
        $stmt->fetch();
        $_SESSION['usuario_id'] = $id;
        header("Location: dashboard/consulta.html");
        exit;
    } else {
        $error = "Usuário ou senha inválidos";
    }

    $stmt->close();
    $conn->close();
}
?>