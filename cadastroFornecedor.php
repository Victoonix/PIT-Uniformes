<?php

try {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $dbname = 'uniformes';

  $connect = mysqli_connect($host, $user, $pass, $dbname);


  $query_select = "SELECT 'email' FROM fornecedor where email = '$email' ;";
  $result = $connect->query($query_select);
  if ($result->num_rows > 0) {
    echo "<script type='text/javascript'>alert('Email jã existente')javascript;window.location='feito.html';</script>";

  } else {
    $sql  = "INSERT INTO fornecedor(`email`,nome,senha) values('$email','$nome','$senha')";
    $query_run = mysqli_query($connect, $sql);
    echo "<script> type='text/javascript'>alert('Login Cadastro concluido com sucesso!')";
    echo "<javascript;window.location='index.html';</script>";

    header("Location: index.html");
  }
} catch (Exception $ex) {
  echo $ex->getMessage();
}
echo"Cadastro já existente";
echo"Por favor retorne a tela anterior";