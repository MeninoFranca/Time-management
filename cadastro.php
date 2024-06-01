<?php
header('Content-Type: application/json');

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

    $sql = "INSERT INTO Usuarios (username, senha) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        $response = array('Cadastrado com sucesso!');
        echo json_encode($response);
    } else {
        $response = array('error' => 'Erro ao cadastrar: ' . $conn->error);
        echo json_encode($response);
    }

    $conn->close();
} else {
    $response = array('error' => 'Método inválido');
    echo json_encode($response);
}
?>