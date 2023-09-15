<?php
// RECEBENDO A PAGINA DE CONEXAO
include("login.php");
$con = new mysqli("localhost", "root", "", "uniformes");

// RECEBENDO VARIAVEIS
$email = $_POST["email"];
$senha = $_POST["senha"];

// FAZENDO A EXLUCAO E VERIFICACAO DOS DADOS
$sqlcode = "SELECT * FROM escola WHERE email = '{$email}'";
$sqlquery = mysqli_query($con, $sqlcode);
$qntdade = mysqli_num_rows($sqlquery);

if ($qntdade == 1) {
    $sqlresetar = "UPDATE escola SET senha = '{$senha}' WHERE email = '{$email}'";
    if (mysqli_query($con, $sqlresetar)) {
        echo "Resetado com sucesso";
        mysqli_close($con);
    } else {
        echo "Falha ao mudar a senha";
    }
} else {
    echo "E-mail incorreto";
}


?>