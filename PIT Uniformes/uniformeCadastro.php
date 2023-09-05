<?php
session_start();
    header("Content-Type: text/html; charset=utf8");

    $con = new mysqli("localhost", "root", "", "uniformes");

if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === 0) {
    
}

$tamanho = $_POST['tamanho']; $sexo = $_POST['sexo']; $cor = $_POST['cor']; $token = $_SESSION['token'];

$stmt = $con->prepare("insert into uniformes (tamanho, sexo, cor, token) values (?, ?, ?, ?)");
                    $stmt->bind_param("sss", $tamanho, $sexo, $cor, );
                    $stmt->execute();
                    $stmt->close();
                    $con->close();
                    echo "Cadastro Concluído"
?>