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


}
?>
