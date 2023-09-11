<?php
session_start();
    header("Content-Type: text/html; charset=utf8");

    $con = new mysqli("localhost", "root", "", "uniformes");

if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === 0) {
    $tamanho = $_POST['tamanho']; $sexo = $_POST['sexo']; $cor = $_POST['cor']; $token = $_SESSION['token'];

    $diretorio = 'assets/imgs/uploaded/';
    $tipoArquivo = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
    $nomeArquivo = uniqid() . '_' . $token . "." . $tipoArquivo;
    $caminhoImagem = $diretorio . $nomeArquivo;

    $infoImagem = getimagesize($_FILES['imagem']['tmp_name']);
    if ($infoImagem !== false) { //Verifica se é imagem
        if (move_uploaded_file($_FILES['imagem']['tmp_name'], $caminhoImagem)) { //Verifica se a imagem foi armazenada com sucesso
            $stmt = $con->prepare("insert into uniformes (tamanho, sexo, cor, token, caminho_imagem) values (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssis", $tamanho, $sexo, $cor, $token, $caminhoImagem);
            $stmt->execute();
            $stmt->close();
            $con->close();
            echo "Cadastro Concluído";
        }
        else {echo "Falha no upload";}
    }
    else {echo "O arquivo enviado não é uma imagem válida";}
}
else {echo "Falha no envio";}
?>