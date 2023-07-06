<?php
    session_start();
    header("Content-Type: text/html; charset=utf8");

    $tipo = !isset($_GET["tipo"]) ? "listar" : $_GET["tipo"];

    $con = new mysqli("localhost", "root", "", "uniformes");
    switch ($tipo)
    {
        //escola
        case 'escola':
            $email = $_POST['email']; $senha = $_POST['senha'];
            $stmt = $con -> prepare("select token from escola where email = ? and senha = ?");
                    $stmt->bind_param("ss", $email, $senha);
                    $stmt->execute();
                    $result = $stmt->get_result();
            if ($result->num_rows >= 1)
            {
                header('Location: pagsCadastro/pagCadUniforme.html');
            }
            else
            {
                echo 'Email ou senha incorretos';
            }
        break;
        
        //fornecedor
        case 'fornecedor':
            $email = $_POST['email']; $senha = $_POST['senha'];

            $stmt = $con->prepare("select id_fornecedor from fornecedor where email = ? and senha = ?");
                    $stmt->bind_param("ss", $email, $senha);
                    $stmt->execute();
                    $result = $stmt->get_result();
            if ($result->num_rows >= 1)
            {
                echo 'Login concluído';
            }
            else
            {
                echo 'Email ou senha incorretos';
            }
        break;

        //aluno
        case 'aluno':
        $token = $_POST['token'];

        $stmt = $con->prepare("select token from escola where token = ?");
                    $stmt->bind_param("i", $token);
                    $stmt->execute();
                    $result = $stmt->get_result();
            if ($result->num_rows >= 1)
            {
                echo 'Login concluído';
            }
            else
            {
                echo 'Token incorreto. Caso seja um engano, verifique com a sua instituição';
            }
        break;
    }
    $con->close();
?>