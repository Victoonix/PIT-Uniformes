<?php
    session_start();
    header("Content-Type: text/html; charset=utf8");
    $_SESSION['admin'] = false;
    $_SESSION['fornecedor'] = false;
    $_SESSION['escola'] = false;
    $_SESSION['aluno'] = false;

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
                $row = $result->fetch_assoc();
                $_SESSION['token'] = $row['token'];
                $_SESSION['admin'] = true;
                $_SESSION['login'] = true;
                $_SESSION['escola'] = true;
                $token = $row['token'];
                header("Location: vendas.php");
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
                $row = $result->fetch_assoc();
                $_SESSION['id_fornecedor'] = $row['id_fornecedor'];
                $_SESSION['admin'] = true;
                $_SESSION['fornecedor'] = true;
                $_SESSION['login'] = true;
                header("Location: vendas.php");
            }
            else
            {
                echo 'Email ou senha incorretos';
            }
        break;

        //aluno
        case 'aluno':
        $token = $_POST['token']; $matricula = $_POST['matricula']; $senha = $_POST['senha'];

        $stmt = $con->prepare("select token from aluno where token = ? and matricula = ? and senha = ?");
                    $stmt->bind_param("iis", $token, $matricula, $senha);
                    $stmt->execute();
                    $result = $stmt->get_result();
            if ($result->num_rows >= 1)
            {   
                $_SESSION['token'] = $token;
                $_SESSION['matricula'] = $matricula;
                $_SESSION['aluno'] = true;
                $_SESSION['login'] = true;
                header("Location: vendas.php");
            }
            else
            {
                echo 'Credenciais incorretas. Se você acredita que isso seja um engano, confira com a sua instituição.';
            }
        break;
    }
    $con->close();
?>