<?php
    session_start();
    header("Content-Type: text/html; charset=utf8");

    $tipo = !isset($_GET["tipo"]) ? "listar" : $_GET["tipo"];

    $con = new mysqli("localhost", "root", "", "uniformes");
    switch ($tipo)
    {
        //escola
        case 'escola':
            $nome = $_POST['nome']; $email = $_POST['email']; $senha = $_POST['senha']; $token = random_int(100000, 999999);

            $stmt = $con->prepare("select token from escola where token = ?");
                    $stmt->bind_param("i", $token);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while ($result->num_rows>=1)
                    {
                        $token = random_int(100000, 999999);
                        $stmt->execute();
                        $result = $stmt->get_result();
                    }
                    $result->close();
                    $stmt->close();

            $stmt = $con->prepare("select email from escola where email = ?");
                    $stmt->bind_param("s", $email);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows<1) {
                        $stmt = $con->prepare("insert into escola (token, nome, email, senha) values (?, ?, ?, ?)");
                        $stmt->bind_param("isss", $token, $nome, $email, $senha);
                        $stmt->execute();
                        $stmt->close();
                        echo 'Cadastro concluído';
                    }
                    else{
                        echo 'Endereço de Email já utilizado';
                    }
        break;
        
        //fornecedor
        case 'fornecedor':
            $email = $_POST['email']; $senha = $_POST['senha'];

            $stmt = $con->prepare("select email from escola where email = ?");
                    $stmt->bind_param("s", $email);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    
            if ($result->num_rows<1) {
            $stmt = $con->prepare("insert into fornecedor (email, senha) values (?, ?)");
                    $stmt->bind_param("ss", $email, $senha);
                    $stmt->execute();
                    $stmt->close();
            echo 'Cadastro concluído';
            }
            else{
                echo 'Endereço de Email já utilizado';
            }
        break;
    }
    $con->close();
?>