<?php
session_start();
$matricula = $_POST['matricula']; $token = $_SESSION['token']; $senha = strval($matricula);

$con = new mysqli("localhost", "root", "", "uniformes"); 
$stmt = $con->prepare("select matricula from aluno where token = ? and matricula = ?");
        $stmt->bind_param("ii", $token, $matricula);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows<1) {
            $stmt = $con->prepare("insert into aluno (matricula, senha, token) values (?, ?, ?)");
            $stmt->bind_param("isi", $matricula, $senha, $token);
            $stmt->execute();
            $stmt->close();
            echo 'Aluno registrado';
        }
        else{
            echo 'Aluno já existe';
            $result->close();
            $stmt->close();
        }
?>