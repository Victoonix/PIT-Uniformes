<!DOCTYPE html>

  <head>
    <meta charset="utf-8" />
    <title>RVK STORE - Home</title>
    <link rel="stylesheet" type="text/css" href="css\styleVendas.css" />
    <?php
      header('Content-Type: text/html; charset=utf-8');

      $con = new mysqli("localhost", "root", "", "uniformes");     
      $stmt = $con->prepare("select caminho_imagem from uniformes where sexo = 'M'");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while ($row = $result->fetch_assoc()) {
                      $camisas_M[] = $row['caminho_imagem'];
                  }
      $stmt = $con->prepare("select cor from uniformes where sexo = 'M'");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while ($row = $result->fetch_assoc()) {
                      $cor_M[] = $row['cor'];
                  }
      $stmt = $con->prepare("select tamanho from uniformes where sexo = 'M'");
                  $stmt->execute();
                  $result = $stmt->get_result();
                  while ($row = $result->fetch_assoc()) {
                    $tamanho_M[] = $row['tamanho'];
                }
      $stmt = $con->prepare("select preco from uniformes where sexo = 'M'");
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = $result->fetch_assoc()) {
                  $preco_M[] = $row['preco'];
              }
      $stmt = $con->prepare("select estoque from uniformes where sexo = 'M'");
              $stmt->execute();
              $result = $stmt->get_result();
              while ($row = $result->fetch_assoc()) {
                $estoque_M[] = $row['estoque'];
            }
    ?>
  </head>

  <body>

    <div class="landing-page">
      <header>
        <div class="container">
          <a href="#" class="logo">RVK <b>Uniformes</b></a>
          <div class="botões">
            <?php
            session_start();
            if($_SESSION['admin'] === true) {
            echo '<a href="pagsCadastro/pagCadUniforme.php"><button class="botao-cadastro">Cadastrar uniforme</button></a>';
            }
            ?>
            <a href="sair.php"><button class="botao-cadastro">Sair</button></a>
          </div>
        </div>
      </header>
    </div>

    <div class="GradeS">
    <h1>CATÁLOGO COTEMIG</h1>
    </div>

    <br><br>

    <div class="GradeI">
      <h2>Produtos Masculinos</h2>
    </div>

  <div class="catalogo">
    <div class="produto">
      <?php if (!empty($camisas_M[0])) { ?>
      <a href="">
        <img src="<?php echo $camisas_M[0]; ?>" style="max-width: 200px;">
        <h3>Camiseta <?php echo $cor_M[0]?> tamanho <?php echo $tamanho_M[0]; ?></h3>
        <p>---------------------------</p>
        <p class="preco">R$ <?php echo $preco_M[0]?></p>
        <p class="preco">Em estoque: <?php echo $estoque_M[0]?> unidades</p>
      </a>
      <?php } ?>
    </div>

    <div class="produto">
      <?php if (!empty($camisas_M[1])) { ?>
      <a href="">
        <img src="<?php echo $camisas_M[1]; ?>" style="max-width: 200px;">
        <h3>Camiseta <?php echo $cor_M[1]?> tamanho <?php echo $tamanho_M[1]; ?></h3>
        <p>---------------------------</p>
        <p class="preco">R$ <?php echo $preco_M[1]?></p>
        <p class="preco">Em estoque: <?php echo $estoque_M[1]?> unidades</p>
      </a>
      <?php } ?>
    </div>

    <div class="produto">
      <?php if (!empty($camisas_M[2])) { ?>
      <a href="">
        <img src="<?php echo $camisas_M[2]; ?>" style="max-width: 200px;">
        <h3>Camiseta <?php echo $cor_M[2]?> tamanho <?php echo $tamanho_M[2]; ?></h3>
        <p>---------------------------</p>
        <p class="preco">R$ <?php echo $preco_M[2]?></p>
        <p class="preco">Em estoque: <?php echo $estoque_M[2]?> unidades</p>
      </a>
      <?php } ?>
    </div>

    <div class="produto">
      <?php if (!empty($camisas_M[3])) { ?>
      <a href="">
        <img src="<?php echo $camisas_M[3]; ?>" style="max-width: 200px;">
        <h3>Camiseta <?php echo $cor_M[3]?> tamanho <?php echo $tamanho_M[3]; ?></h3>
        <p>---------------------------</p>
        <p class="preco">R$ <?php echo $preco_M[3]?></p>
        <p class="preco">Em estoque: <?php echo $estoque_M[3]?> unidades</p>
      </a>
      <?php } ?>
    </div>

    <div class="produto">
      <?php if (!empty($camisas_M[4])) { ?>
      <a href="">
        <img src="<?php echo $camisas_M[4]; ?>" style="max-width: 200px;">
        <h3>Camiseta <?php echo $cor_M[4]?> tamanho <?php echo $tamanho_M[4]; ?></h3>
        <p>---------------------------</p>
        <p class="preco">R$ <?php echo $preco_M[4]?></p>
        <p class="preco">Em estoque: <?php echo $estoque_M[4]?> unidades</p>
      </a>
      <?php } ?>
    </div>
      </div>
  <div class="GradeI">
    <h2>Produtos Femininos</h2>
  </div>
  <?php
      $con = new mysqli("localhost", "root", "", "uniformes");     
      $stmt = $con->prepare("select caminho_imagem from uniformes where sexo = 'F'");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while ($row = $result->fetch_assoc()) {
                      $camisas_F[] = $row['caminho_imagem'];
                  }
      $stmt = $con->prepare("select cor from uniformes where sexo = 'F'");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while ($row = $result->fetch_assoc()) {
                      $cor_F[] = $row['cor'];
                  }
      $stmt = $con->prepare("select tamanho from uniformes where sexo = 'F'");
                  $stmt->execute();
                  $result = $stmt->get_result();
                  while ($row = $result->fetch_assoc()) {
                    $tamanho_F[] = $row['tamanho'];
                }
    ?>
    <div class="catalogo"> 
    <div class="produto">
      <?php if (!empty($camisas_F[0])) { ?>
      <a href="">
        <img src="<?php echo $camisas_F[0]; ?>" style="max-width: 200px;">
        <h3>Camiseta <?php echo $cor_F[0]?> tamanho <?php echo $tamanho_F[0]; ?></h3>
        <p>---------------------------</p>
        <p class="preco">R$ <?php echo $preco_F[0]?></p>
        <p class="preco">Em estoque: <?php echo $estoque_F[0]?> unidades</p>
      </a>
      <?php } ?>
    </div>

    <div class="produto">
      <?php if (!empty($camisas_F[1])) { ?>
      <a href="">
        <img src="<?php echo $camisas_F[1]; ?>" style="max-width: 200px;">
        <h3>Camiseta <?php echo $cor_F[1]?> tamanho <?php echo $tamanho_F[1]; ?></h3>
        <p>---------------------------</p>
        <p class="preco">R$ <?php echo $preco_F[1]?></p>
        <p class="preco">Em estoque: <?php echo $estoque_F[1]?> unidades</p>
      </a>
      <?php } ?>
    </div>

    <div class="produto">
      <?php if (!empty($camisas_F[2])) { ?>
      <a href="">
        <img src="<?php echo $camisas_F[2]; ?>" style="max-width: 200px;">
        <h3>Camiseta <?php echo $cor_F[2]?> tamanho <?php echo $tamanho_F[2]; ?></h3>
        <p>---------------------------</p>
        <p class="preco">R$ <?php echo $preco_F[2]?></p>
        <p class="preco">Em estoque: <?php echo $estoque_F[2]?> unidades</p>
      </a>
      <?php } ?>
    </div>

    <div class="produto">
      <?php if (!empty($camisas_F[3])) { ?>
      <a href="">
        <img src="<?php echo $camisas_F[3]; ?>" style="max-width: 200px;">
        <h3>Camiseta <?php echo $cor_F[3]?> tamanho <?php echo $tamanho_F[3]; ?></h3>
        <p>---------------------------</p>
        <p class="preco">R$ <?php echo $preco_F[3]?></p>
        <p class="preco">Em estoque: <?php echo $estoque_F[3]?> unidades</p>
      </a>';
      <?php } ?>
    </div>

    <div class="produto">
      <?php if (!empty($camisas_F[4])) { ?>
      <a href="">
        <img src="<?php echo $camisas_F[4]; ?>" style="max-width: 200px;">
        <h3>Camiseta <?php echo $cor_F[4]?> tamanho <?php echo $tamanho_F[4]; ?></h3>
        <p>---------------------------</p>
        <p class="preco">R$ <?php echo $preco_F[4]?></p>
        <p class="preco">Em estoque: <?php echo $estoque_F[4]?> unidades</p>
      </a>';
      <?php } ?>
    </div>
      </div>

  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>SOBRE</h6>
          <p class="text-justify">Bem-vindo à RVK STORE, onde a excelência encontra a uniformidade! Somos uma empresa de uniformes iniciantes dedicada a fornecer soluções de vestuário profissional que combinem estilo, qualidade e funcionalidade. Com um compromisso com a inovação e o atendimento excepcional, estamos determinados a nos tornar uma referência no setor de uniformes. Na RVK STORE, entendemos a importância dos uniformes como uma ferramenta para a identidade visual e a representação de uma marca. Sabemos que um uniforme bem projetado e de alta qualidade pode não apenas unificar a equipe, mas também transmitir profissionalismo e confiança aos clientes. É por isso que nos esforçamos para criar uniformes que atendam às necessidades específicas de cada setor, mantendo a elegância e o conforto.</p>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
       <a href="#">Scanfcode</a>.
          </p>
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i>F</a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i>T</a></li>
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i>I</a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i>L</a></li>   
          </ul>
        </div>
      </div>
    </div>
</footer>

  </body>
</html>
