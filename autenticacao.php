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

    $username = $_POST['Username'];
    $password = $_POST['Password'];

    $sql = "SELECT id FROM Usuarios WHERE username = ? AND senha = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['usuario_id'] = $row['id'];
        header("Location: dashboard/dashboard.html");
        exit();
    } else {
        $_SESSION['mensagem'] = "Credenciais inválidas. Tente novamente.";
        header("Location: autenticacao.html");
        exit();
    }
    $stmt->close();
    $conn->close();
} else {

    header("Location: autenticacao.html");
    exit();
}

?>