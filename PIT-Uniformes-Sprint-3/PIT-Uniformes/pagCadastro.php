<?php
    session_start();
    header("Content-Type: text/html; charset=utf8");

    $tipo = !isset($_GET["tipo"]) ? "listar" : $_GET["tipo"];

    switch ($tipo)
    {
        case 'aluno': include('pagsCadastro/cadastroAluno.html'); break;
        case 'escola': include('pagsCadastro/cadastroEscola.html'); break;
        case 'fornecedor': include('pagsCadastro/cadastroFornecedor.html'); break;
    }
?>