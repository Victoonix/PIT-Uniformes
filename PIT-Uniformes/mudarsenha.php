<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Formulario</title>
  <link rel="stylesheet" type="text/css" href="css\styleCadUni.css">
</head>
<body class="uniforme">
  <div id="titulo">
    <h2>Alterar senha</h2>
  </div>
  <form method="post" action="alterarsenha.php" enctype="multipart/form-data">
    <label for="senha">Senha atual</label>
    <input type="text" name="senha" id="senha" required>
    <br>
    <label for="nova">Nova senha</label>
    <input type="text" name="nova" id="nova" required>
    <br>
    <input type="submit" value="Cadastrar">
  </form>
</body>
</html>