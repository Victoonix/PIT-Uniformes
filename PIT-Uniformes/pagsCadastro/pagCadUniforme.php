<head>
  <title>Formulario</title>
  <link rel="stylesheet" type="text/css" href="..\css\style.css">
</head>
<body>
  <h2>Formulario de Cadastro</h2>
  <form method="post" action="..\uniformeCadastro.php" enctype="multipart/form-data">
    <label for="tamanho">Tamanho</label>
    <input type="text" name="tamanho" id="tamanho" placeholder="Ex: P, M, G" required>

    <label for="sexo">Sexo</label>
    <input type="text" name="sexo" id="sexo" placeholder="Ex: Masculino, Feminino" required>

    <label for="cor">Cor</label>
    <input type="text" name="cor" id="cor" placeholder="Ex: Azul" required>

    <?php
    session_start();
    if ($_SESSION['fornecedor'] === true) {
      echo '<label for="imagem">Token da escola</label>
      <input type="text" name="token" id="token" placeholder="Ex: 123456 (Consulte a escola)" required>';
    }
    ?>

    <label for="imagem">Imagem</label>
    <input type="file" name="imagem" id="imagem" required>

    <input type="submit" value="Cadastrar">
  </form>
</body>
</html>
