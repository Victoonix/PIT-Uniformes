<?php
session_start();
header("Content-Type: text/html; charset=utf8");



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo = $_POST["tipo"];

    $con = new mysqli("localhost", "root", "", "uniformes");

    switch ($tipo) {
        case 'escola':
            //lógica de recuperação de senha para escolas aqui
            $email = $_POST['email'];

            // Verifique se o e-mail pertence a uma escola no banco de dados
            $stmt = $con->prepare("SELECT token FROM escola WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows >= 1) {
                // Gere uma nova senha aleatória e atualize-a no banco de dados
                $novaSenha = gerarSenhaAleatoria();
                $hashedSenha = password_hash($novaSenha, PASSWORD_DEFAULT);
                $stmt = $con->prepare("UPDATE escola SET senha = ? WHERE email = ?");
                $stmt->bind_param("ss", $hashedSenha, $email);
                $stmt->execute();

                // Envie a nova senha para o e-mail da escola
                enviarEmailRecuperacaoSenha($email, $novaSenha);

                echo 'Um e-mail com as instruções de recuperação de senha foi enviado para o seu endereço de e-mail.';
            } else {
                echo 'O e-mail fornecido não está registrado no sistema.';
            }
            break;

        case 'fornecedor':
            // lógica de recuperação de senha para fornecedores aqui
            $email = $_POST['email'];

            // Verifique se o e-mail pertence a um fornecedor no banco de dados
            $stmt = $con->prepare("SELECT id_fornecedor FROM fornecedor WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows >= 1) {
                // Gerar uma nova senha aleatória e atualize-a no banco de dados
                $novaSenha = gerarSenhaAleatoria();
                $hashedSenha = password_hash($novaSenha, PASSWORD_DEFAULT);
                $stmt = $con->prepare("UPDATE fornecedor SET senha = ? WHERE email = ?");
                $stmt->bind_param("ss", $hashedSenha, $email);
                $stmt->execute();

                // Envie a nova senha para o e-mail do fornecedor
                enviarEmailRecuperacaoSenha($email, $novaSenha);

                echo 'Um e-mail com as instruções de recuperação de senha foi enviado para o seu endereço de e-mail.';
            } else {
                echo 'O e-mail fornecido não está registrado no sistema.';
            }
            break;

        default:
            echo 'Tipo de usuário desconhecido.';
    }

    $con->close();
    }

    function gerarSenhaAleatoria($tamanho = 10) {
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $senha = '';
    for ($i = 0; $i < $tamanho; $i++) {
        $senha .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }
    return $senha;
    }

    function enviarEmailRecuperacaoSenha($email, $token) {
    // Configurações do servidor de email
    $servidorSmtp = 'localhost';
    $portaSmtp = 25;
    $usuarioSmtp = 'bigjoao.elias@gmail.com';
    $senhaSmtp = 'cotemig';

    // Cabeçalhos do email
    $headers = 'From: bigjoao.elias@gmail.com' . "\r\n" .
             'Reply-To: bigjoao.elias@gmail.com' . "\r\n" .
             'X-Mailer: PHP/' . phpversion();

    // Conteúdo do email
    $assunto = 'Recuperação de Senha';
    $mensagem = 'Olá! Aqui está o seu link de recuperação de senha: http://example.com/recuperar_senha.php?token=' . $token;

    // Envia o email
    if (mail($email, $assunto, $mensagem, $headers)) {
        echo 'Email enviado com sucesso!';
    } else {
        echo 'Falha ao enviar o email.';
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Recuperação de Senha</title>
</head>
<body>
    <h1>Recuperação de Senha</h1>
    <form method="POST" action="recuperar_senha.php">
        <label for="tipo">Tipo de Usuário:</label>
        <select name="tipo" id="tipo">
            <option value="escola">Escola</option>
            <option value="fornecedor">Fornecedor</option>
        </select><br><br>
        
        <label for="email">E-mail:</label>
        <input type="email" name="email" required><br><br>
        
        <input type="submit" value="Recuperar Senha">
    </form>
</body>
</html>