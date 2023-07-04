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

            $stmt = $con->prepare("select count(token) from escola where token = ?");
                    $stmt->bind_param("i", $token);
                    $stmt->execute();

                    $result_usuario = "SELECT * FROM usuarios WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
                    $resultado_usuario = mysqli_query($conn, $result_usuario);
                    $resultado = mysqli_fetch_assoc($resultado_usuario);
                    while ($result->num_rows!=null)
                    {
                        $token = random_int(100000, 999999);
                        $stmt->execute();
                        $result = $stmt->get_result();
                    }         
                    $result->close();
                    $stmt->close();

            $stmt = $con->prepare("insert into escola (nome, email, senha, token) values (?, ?, ?, ?)");
                    $stmt->bind_param("sssi", $nome, $email, $senha, $token);
                    $stmt->execute();
                    $stmt->close();
            echo 'Cadastro concluído';
        break;
        
        //fornecedor
        case 'fornecedor':
            $email = $_POST['email']; $senha = $_POST['senha'];

            $stmt = $con->prepare("insert into fornecedor (email, senha) values (?, ?)");
                    $stmt->bind_param("ss", $email, $senha);
                    $stmt->execute();
                    $stmt->close();
            echo 'Cadastro concluído'; 
        break;
    }
    $con->close();
?>