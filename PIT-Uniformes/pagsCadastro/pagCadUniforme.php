<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Formulario</title>
  <link rel="stylesheet" type="text/css" href="..\css\styleCadUni.css">
</head>
<body class="uniforme">
  <div id="titulo">
    <h2>Formulario de Cadastro</h2>
  </div>
  <form method="post" action="..\uniformeCadastro.php" enctype="multipart/form-data">
    <label for="tamanho">Tamanho</label>
    <input type="text" name="tamanho" id="tamanho" placeholder="Ex: P, M, G" required>

    <label for="sexo">Sexo</label>
    <input type="text" name="sexo" id="sexo" placeholder="Ex: M, F" required>

    <label for="cor">Cor</label>
    <input type="text" name="cor" id="cor" placeholder="Ex: Azul" required>

    <label for="preco">Preço</label>
    <input type="text" name="preco" id="preco" placeholder="Ex: 60,00" required>

    <label for="estoque">Estoque</label>
    <input type="estoque" name="estoque" id="estoque" placeholder="Ex: 15" required>
    <?php
      session_start();
      if ($_SESSION['fornecedor'] === true) {
        echo '<label for="token">Token da escola</label>
        <input type="text" name="token" id="token" placeholder="Ex: 123456 (Consulte a escola)" required>';
      }     
    ?>
    <br> <br>
    <label for="imagem">Imagem</label>
    <input type="file" name="imagem" id="imagem" required>
    <br> <br>
    <input type="submit" value="Cadastrar">
  </form>
</body>
</html>
