<?php

try {
  $ID_escola = $_POST['IDescola'];
  $matricula = $_POST['matricula'];
  $senha = $_POST['senha']; //Victor: post, pegando os valores dos inputs no HTML

  $connect = mysqli_connect('localhost', 'root', '', 'uniformes'); //Victor: método que inicia a conexão com o MySQL

  $comando = $connect->prepare("SELECT 'count(id_escola)' FROM escola where id_escola = '$ID_escola';"); //Victor: Definindo o comando e verificando a sintaxe
  $comando->execute(); //Victor: executando o comando
  $result = $comando->get_result(); //Victor: armazenando o resultado em uma variável
  
  if ($result = 0)
  {echo "Escola não existe. Verifique o número correto com a sua instituição";} //Verificando se a escola existe
  else {

    $comando = $connect->prepare("SELECT 'matricula' FROM aluno where matricula = '$matricula';"); //Victor: Definindo o comando e verificando a sintaxe
    $comando->execute(); //Victor: executando o comando
    $result = $comando->get_result(); //Victor: armazenando o resultado em uma variável
    
    if ($result->num_rows > 0) //Victor: Verificando se existe um cadastro igual no banco
    {echo "Aluno ja existente. Por favor retorne a tela anterior.";}
    
    else {
      $comando = $connect->prepare("INSERT INTO aluno(id_escola,matricula,senha) values('$ID_escola','$matricula','$senha')"); //Victor: Definindo o comando e verificando a sintaxe
      $comando->execute(); //Victor: executando o comando

      echo "Login Cadastro concluido com sucesso!";
      header("Location: index.html"); //Victor: página pra onde o usuário é mandado
    }
  }
} catch (Exception $ex) {
  echo $ex->getMessage();
}

$comando->close(); //Victor: fechando o comando
$connect->close(); //Victor: fechando a conexão
?>