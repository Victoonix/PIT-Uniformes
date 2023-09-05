<?php
session_start();
    header("Content-Type: text/html; charset=utf8");

    $con = new mysqli("localhost", "root", "", "uniformes");

$tamanho = $_POST['tamanho']; $sexo = $_POST['sexo']; $cor = $_POST['cor'];

$stmt = $con->prepare("insert into uniformes (tamanho, sexo, cor) values (?, ?, ?)");
                    $stmt->bind_param("sss", $tamanho, $sexo, $cor);
                    $stmt->execute();
                    $stmt->close();
                    $con->close();
                    echo "Cadastro Concluído"
?>