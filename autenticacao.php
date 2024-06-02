<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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

    $username_post = $_POST['username']; 
    $password_post = $_POST['password'];

    $sql = "SELECT id FROM Usuarios WHERE username = ? AND senha = ?"; // Correção do nome da coluna
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Erro na preparação da consulta: " . $conn->error);
    }

    $stmt->bind_param("ss", $username_post, $password_post);

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
