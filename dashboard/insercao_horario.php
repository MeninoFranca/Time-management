<?php
include 'autentica.php';


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['data'], $_POST['entrada'], $_POST['inicio_almoco'], $_POST['fim_almoco'], $_POST['saida'])) {
    $servername = "127.0.0.1";
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

    
    $sql = "INSERT INTO RegistroHorario (usuario_id, data, entrada, inicio_almoco, fim_almoco, saida) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    
    if ($stmt === false) {
        die("Erro na preparação da consulta: " . $conn->error);
    }

    
    $stmt->bind_param("isssss", $_SESSION['usuario_id'], $data, $entrada, $inicio_almoco, $fim_almoco, $saida);

    if ($stmt->execute()) {
        echo "Horários registrados com sucesso!";
        echo "<script>localStorage.clear();</script>";
    } else {
        echo "Erro ao registrar horários: " . $stmt->error;
    }
    
    $stmt->close();
    $conn->close();
} else {
    echo "Erro: Todos os campos do formulário devem ser preenchidos.";
}

?>
